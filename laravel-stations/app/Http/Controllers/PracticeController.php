<?php

namespace App\Http\Controllers;
use App\Practice;
use App\Models\Movie; //models(先頭は大文字)


class PracticeController extends Controller
{
    public function adMovieStore()
    {
        $movies = Movie::all(); 
        return view('admin/movie/store',['movie' => $movies]);//bladeと接続
    }

    //モデル名movies(命名規則)→単数形に

    public function adMovieCreate()
    {
        //データは使わないのでMovies::all()消す
        return view('admin/movie/create');//bladeと接続
    }

    public function adMovie()
    {
        $movie = Movie::where('id', '>', 5)->get();//idが5よりも大きいものを出す
        // $movies = Movies::all();
        return view('admin/movie',['movie' => $movies]);//bladeと接続
    }

    public function movie()
    {
        $movie = Movie::all();
        return view('movie',['movie' => $movies]);
    }

    public function sample()
    {
        return view('practice');
    }

    public function getPractice()
    {
        $practices = Practice::all();
        // return response()->json($practice);
        return view('getPractice', ['practices' => $practices]);
    }


    // public function sample2()
    // {
    //     $test = 'practice2';
	//     return view('practice2', ['testParam' => $test]);
    // }

    // public function sample3()
    // {
    //     $testParam = 'test';
    //     return view('practice3', ['testParam' => $testParam]);
    // }

    // public function getPractice()
    // {
    //     $practices= Practice::all();
    //     return response()->json($practices);
    // }

    // public function sample()
    // {
    //     return response('practice');
    // }

	//   public function sample2()
    // {
    //     $test = 'practice2';
	// 	    return response($test);
    // }

    // public function sample3()
    // {
    //     $txt = 'test';
    //         return response($txt);
    // }
}