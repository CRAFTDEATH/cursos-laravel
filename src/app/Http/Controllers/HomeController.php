<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $data = Course::latest()->paginate(10);
        return view('home')->with(compact('data'));
    }
    public function show($id){
        $data = Course::find($id);
        return view('show-course-home')->with(compact('data'));
    }
}
