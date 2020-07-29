<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


use App\Post;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

// SIPAS GJITHA GJASAVE KY CONTROLLER NUK NA DUHET HIQ POR PE LE KETU PER CDO RAST NESE NA DUHET DICKA
// NE WEB.PHP KAM NDRRU LOKACIONIN E HOME PREJ HOMECONTROLLER NE POSTCONTROLLER



    // public function index()
    // {

    //     $hotposts = Post::withCount('replies')->orderBy('replies_count', 'desc')->paginate(3);
    //     // ->orderBy('comments_count', 'desc')
    //     // ->get();

    //     return view('home', [
    //         'posts' => auth()->user()->timeline(),
    //         'hotposts'=>$hotposts
    //     ]);   
    // }    
}
