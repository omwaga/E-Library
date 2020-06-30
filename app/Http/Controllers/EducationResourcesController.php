<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use App\EducationalResource;
use App\EducationClass;
use App\Subject;

class EducationResourcesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = EducationalResource::orderby('created_at', 'DESC')->get();

        return view('admin.education-resources', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = EducationClass::all();
        $subjects =  Subject::all();

        return view('admin.new-resource', compact('classes', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3',
            'education_class_id' => 'required',
            'subject_id' => 'required',
            'description' => 'required',
            'resource_file' => 'required'
        ]);


        $attributes['uuid'] = (string)Uuid::generate();

        if ($request->hasFile('resource_file')) {
            $attributes['resource_file'] = $request->resource_file->getClientOriginalName();
            $request->resource_file->storeAs('public', $attributes['uuid'].$attributes['resource_file'] );
        }
        EducationalResource::create($attributes);

        return redirect()->back()->with('message', 'The Resource has been uploaded successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
