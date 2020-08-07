<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //method for index
    public function index(){
       /*  $title = 'Welcome to my blog tutorial';
        //return view('pages.index',compact('title'));
        //  OR
        return view('pages.index')->with('title',$title); */
        return view('pages.index');
    }
    //method for about
    public function about(){
        return view('pages.about');
    }
    //method for services
    public function services(){
       /*  $data = array( 
            'title' => 'Services',
            'services'=>['Web design','Backend development','Programming','SEO']
        );
        return view('pages.services')->with($data); */
        return view('pages.service');
    }
    //method for contact
    public function contact(){
        return view('pages.contact');
    }

}
