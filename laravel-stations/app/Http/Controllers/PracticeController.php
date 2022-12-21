<?php

namespace App\Http\Controllers;
use App\Practice;
use App\models\Movies;

class PracticeController extends Controller
{
    public function adMovies()
    {
        $movies = Movies::all();
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