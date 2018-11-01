<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::where('status', 'published')->where('album_id', NULL)->get();
        return view('gallery.index', ['albums' => $albums]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $album = Album::whereSlug($slug)->firstOrFail();

        $images = $album->image()->where('status', 'published')->get();

        $subs = $album->child()->with('user')->get();
        
        return view('gallery.show', ['album' => $album, 'subs' => $subs, 'images' => $images ]);
    }

}
