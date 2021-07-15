<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\books_db;

class PagesController extends Controller
{
    public function index()
    {
    	$allBooks=books_db::all();
    	return view('frontend.pages.index',compact('allBooks'));
    }
}
