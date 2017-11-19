<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Articlea;

class Articles extends Controller
{
    public function index(){
    	
        return view('Articles.index');
    }

    public function Store(Request $request){
	   $article = new Articlea;
	   $article->title = $request->title;
	   $article->body = $request->body;

	   Auth::user()->article()->save($article);
	   return back();
    }
    public function show(){
    	// $articles = Articlea::all();
    	//$articles = Articlea::find(Auth::user()->id)->get();
    	$articles = Auth::user()->article()->get();
    	

    	return view('Articles.show',compact('articles'));
    }
}
