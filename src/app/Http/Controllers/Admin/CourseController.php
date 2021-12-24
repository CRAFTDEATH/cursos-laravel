<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Course::latest()->paginate(10);
        //dd($data);
        return view('admin.courses.index-courses')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.add-courses');

    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course)
    {
        $data = $request->all();
        $published = isset($data['published']) && !empty($data['published']) ? 'yes':'not';
        
        $data['published'] = $published;
        $data['image'] = 'storage/'.$request->image->store('courses','public');
        $course->create($data);
        return redirect()->route('admin.courses.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Course::find($id);
        return view('admin.courses.show-courses')->with(compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Course $course)
    {
        $data = $course->find($id);
        return view('admin.courses.edit-courses')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $data = $request->all();
        $course->title = $request->title;
        $course->description = $request->description;
        if(isset($data['image']) && !empty($data['image'])){
            File::delete(public_path($course->image));
            $course->image = 'storage/'.$request->image->store('courses','public');
        }
        $course->image = $course->image;
        $course->value = $request->value;
        $published = isset($data->published) && !empty($data->published) ? 'yes':'not';
        $course->published = $published;
        $course->save();
        return redirect()->route('admin.courses.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $course = Course::find($id);
        File::delete(public_path($course->image));
        $course->delete();
        return redirect()->route('admin.courses.index');
    }
}
