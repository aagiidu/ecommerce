<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){
    	return view('welcome');
    }

    public function about(){
    	return view('about');
    }

    public function products(){
    	return view('products');
    }

    public function product(int $id){
    	return view('product', compact('id'));
    }

    public function gallery(){
    	return view('gallery');
    }
}
