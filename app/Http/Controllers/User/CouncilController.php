<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Story, Category, Society, SocietyNews};
use App\Http\Requests\StoreStory;
use App\Events\StoryPublished;

class CouncilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::where('status', 'pending')->get();

        return view('users.council.index', ['stories' => $stories]);
    }

    public function publishedIndex()
    {
        $stories = Story::where('status', 'published')->latest()->paginate(20);

        return view('users.council.published', ['stories' => $stories]);
    }

    public function publishedDestroy($uuid)
    {
        $story = Story::where('uuid', $uuid)->firstOrFail();

        $story->delete();

        return redirect()->route('council.stories.published');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStory $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $story = Story::whereUuid($uuid)->with(['user', 'category'])->firstOrFail();

        return view('users.council.show', ['story' => $story]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $story = Story::whereUuid($uuid)->with(['user', 'category'])->firstOrFail();
        $categories = Category::all();
        return view('users.council.edit', ['story' => $story, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStory $request, $uuid)
    {
        $story = Story::whereUuid($uuid)->firstOrFail();

        $story->update($request->all());

        event(new StoryPublished($story));
        return redirect()->route('council.stories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /*-----------------------------------------
    |
    |
    |   Story Setction
    |
    |------------------------------------------
    */
    public function draft(Request $request, $uuid)
    { 
        $story = Story::where('Uuid', $uuid)->firstOrFail()->update([
            'status' => 'draft'
        ]);
        return redirect()->route('council.stories.index');
    }

    public function publish($uuid)
    {
      $story = Story::whereUuid($uuid)->with('user')->firstOrFail();

      $story->update([
        'status' => 'published'
      ]);      

      event(new StoryPublished($story));

      return redirect()->route('blog.show', $story->slug);
    }

    public function societyIndex()
    {
        $societies = Society::all();
        return view('users.council.societies.index', ['societies' => $societies]);
    }

    public function societyShow($slug)
    {
        $society = Society::whereSlug($slug)->firstOrFail();

        return view('users.society_head.show', [
            'society' => $society,
        ]);
    }

    public function updateStatusToDraft(Request $request, $slug)
    {
        $society = Society::whereSlug($slug)->firstOrFail();

        $society->update(['status' => 'draft']);

        $request->session()->flash('success', 'Saved in Drafts');

        return redirect()->route('council.societies.show', $society->slug);
    }

    /*-----------------------------------------
    |
    |
    |   News Section
    |
    |------------------------------------------
    */
    public function societyNewsIndex()
    {
        $news = SocietyNews::latest()->with('society')->get();

        return view('users.council.news.index', [
            'title' => 'News',
            'news' => $news
        ]);
    }

    public function societyNewsInPending()
    {
        $news = SocietyNews::whereStatus('pending')->latest()->with('society')->get();

        return view('users.council.news.index', [
            'title' => 'All Pending News',
            'news' => $news
        ]);
    }

    public function societyNewsPublished()
    {
        $news = SocietyNews::whereStatus('published')->latest()->with('society')->get();

        return view('users.council.news.index', [
            'title' => 'Published News',
            'news' => $news
        ]);
    }
}
