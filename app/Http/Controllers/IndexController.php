<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{	
	 /**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	
    public function index()
    {
    	return view('index');
    }

    /**
     * Show categories
     * @return \Illuminate\Http\Response
     */
    
    public function categories()
    {
    	return view('categories');
    }

    /**
     * Show tags
     * @return \Illuminate\Http\Response
     */
    
    public function tags()
    {
    	return view('tags');
    }

    /**
     * Show search
     * @return \Illuminate\Http\Response
     */
    
    public function search()
    {
    	return view('index');
    }

    /**
     * Show search
     * @return \Illuminate\Http\Response
     */
    
    public function about()
    {
    	return view('about');
    }
}