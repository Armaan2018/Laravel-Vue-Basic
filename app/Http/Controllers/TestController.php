<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testmodel;

class TestController extends Controller
{
    public function basic(){
    	return view('test-page');
    }


    public function store(Request $request)
    {
    	$test =      testmodel::create([

        'name'          => $request -> name,

]);


    	return response() -> json('data added successfull');
    }
}
