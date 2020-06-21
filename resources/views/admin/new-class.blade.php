@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">New Class</h4>
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
                        <a href="{{route('education_classes')}}">All Classes</a>
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
                            <h4>Add a Class</h4>
                            <span>Class Belong to the education level</span>
                            @include('errors')
                            @include('success')
                        </div>
                        <form method="POST" action="{{route('education_classes.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>What is the class name?</label>
                                        <input type="text" name="name" class="form-control" placeholder="Class Name" required="" value="{{old('name')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Education Level</label>                                        
                                        <select name="education_level_id" class="form-control">
                                            <option value="">Select Education Level</option>
                                            @foreach($levels as $level)
                                            <option value="{{$level->id}}">{{$level->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success m-b-10 m-l-5">Submit</button>
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
                            <a href="{{route('education_classes')}}" class="btn btn-primary btn-block"><b>All Classes</b></a>
                        </div>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @endsection