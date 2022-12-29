<?php

namespace App\Http\Controllers;
use App\Practice;
use App\Models\Movies; //models(先頭は大文字)


class PracticeController extends Controller
{
    public function adMoviesStore()
    {
        $movies = Movies::all(); 
        return view('admin/movies/store',['movies' => $movies]);//bladeと接続
    }

    //モデル名movies(命名規則)→単数形に

    public function adMoviesCreate()
    {
        //データは使わないのでMovies::all()消す
        return view('admin/movies/create');//bladeと接続
    }

    public function adMovies()
    {
        $movies = Movies::where('id', '>', 5)->get();//idが5よりも大きいものを出す
        // $movies = Movies::all();
        return view('admin/movies',['movies' => $movies]);//bladeと接続
    }

    public function movies()
    {
        $movies = Movies::all();
        return view('movies',['movies' => $movies]);
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