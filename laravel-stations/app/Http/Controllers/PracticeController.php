<?php

namespace App\Http\Controllers;
use App\Practice;

class PracticeController extends Controller
{
    public function movies()
    {
        return view('movies');
    }

    public function sample()
    {
        return view('practice');
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