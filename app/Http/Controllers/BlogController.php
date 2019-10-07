<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category, Tags, Story};

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::where('status', 'published')->with('user')->latest()->get();
        
        return view('blog.index', ['stories' => $stories]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $story = Story::where(['slug'=> $slug, 'status' => 'published'])->with('user')->firstOrFail();

        $stories = Story::where('status', 'published')->latest()->paginate(3);

        return view('blog.show', ['story' => $story, 'stories' => $stories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCategory()
    {
        $categories = Category::all();

        return view('blog.categories.index', ['categories' => $categories ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCategory($slug)
    {
        
        $category = Category::whereSlug($slug)->first();

        $stories = $category->story()->whereStatus('published')->latest()->get();

        return view('blog.categories.show', ['category' => $category, 'stories' => $stories ]);
    }

    
}
