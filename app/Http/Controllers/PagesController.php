<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $name = 'Kian Barba';
        $first = 'Kian';
        $last = 'Barba';
        $people = [ 'Juan Perez', 'John Doe', 'Jane Doe'];
        //$people = [];
        //return view('pages.about')->with('name',$name);
        //return view('pages.about',compact('name'));
        //return view('pages.about',compact('name','first','last'));
        return view('pages.about',compact('name','first','last','people'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
?>