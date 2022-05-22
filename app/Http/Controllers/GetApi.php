<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\About;
use Illuminate\Support\Facades\DB;

class GetApi extends Controller
{
    function index(){
        $abouts = DB::table('posts')->where('id',2)->first();
//		DB::table('abouts')->where('slug',$page)->first();
        return $abouts;
        // return About::all();
        // return view('front/contact'); 
    }
}
