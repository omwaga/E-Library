@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">New Level</h4>
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
                        <a href="{{route('education_levels')}}">Education Levels</a>
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
                            <h4>LEVEL NAME</h4>
                            <span>The education levels will have the various subjects</span>
                            @include('errors')
                            @include('success')
                        </div>
                        <form method="POST" action="{{route('education_levels.new')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" name="name" class="form-control" placeholder="Level Name" required="" value="{{old('name')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description:</label>
                                        <textarea class="form-control" name="description">{{old('description')}}</textarea>
                                    </div>
                                </div>  
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success m-b-10 m-l-5 pull-right">Submit</button>
                                </div><br>
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
                            <a href="{{route('education_levels')}}" class="btn btn-primary btn-block"><b>All Levels</b></a>
                        </div>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @endsection