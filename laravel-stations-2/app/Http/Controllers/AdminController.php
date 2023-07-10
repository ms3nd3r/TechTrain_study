<?php

namespace App\Http\Controllers;

use App\Models\Movie;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminIndex()
    {
        $movies = Movie::all();
        return view('adminMovie', ['movies' => $movies]);
    }

    public function create()
    {
        return view('createMovie');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:movies',
            'image_url' => 'required|url',
            'published_year' => 'required|numeric|between:1900,2023',
            'description' => 'required',
            'is_showing' => 'required|boolean',
        ]);
        
        $movie = new Movie();
        $movie->title = request('title');
        $movie->image_url = request('image_url');
        $movie->published_year = request('published_year');
        $movie->is_showing = $request->boolean('is_showing');
        $movie->description = request('description');

        $movie->save();
        // あとバリデーションつくったらくりあ

        return redirect('/admin/movies')->with('flash_message', '投稿が完了しました');
    }
}