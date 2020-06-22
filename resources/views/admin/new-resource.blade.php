@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">New Resource</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="{{route('admin')}}">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('education_resources')}}">All Resouces</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" align="center">
                            <h4>New Resource</h4>
                            <span>Resource for a particular class</span>
                            @include('errors')
                            @include('success')
                        </div>
                        <form method="POST" action="{{route('education_resources.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>What is the name of the resource?</label>
                                        <input type="text" name="name" class="form-control" placeholder="Resource Name" required="" value="{{old('name')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Class:</label>                                        
                                        <select name="education_class_id" class="form-control">
                                            <option value="">Select Class</option>
                                            @foreach($classes as $class)
                                            <option value="{{$class->id}}">{{$class->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Subject:</label>
                                        <select name="subject_id" class="form-control">
                                            <option value="">Select Subject</option>
                                            @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Description:</label>
                                        <textarea id="desc" name="description" class="form-control" rows="3" placeholder="Project Description" required="">{{old('description')}}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Upload samples and other useful materials</label>
                                        <input type="file" name="resource_file" class="form-control-file" id="exampleFormControlFile1" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success m-b-10 m-l-5 pull-right">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <ol class="activity-feed">
                        <li class="feed-item feed-item-secondary">
                            <time class="date" datetime="9-25">Tip 1</time>
                            <span class="text">Describe your project in as much detail as you can comfortably reveal - it will increase the quality of proposals you receive and shorten the selection process.
                            </span>
                        </li>
                        <div class="card-footer">
                            <a href="{{route('education_resources')}}" class="btn btn-primary btn-block"><b>Upload Multiple Resources</b></a>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('education_resources')}}" class="btn btn-primary btn-block"><b>All Resources</b></a>
                        </div>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @endsection