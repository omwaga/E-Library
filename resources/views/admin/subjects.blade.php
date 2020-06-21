@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">All Subjects</h4>
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
                        <a href="{{route('subjects.create')}}">Add Subject</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card-header" align="center">
                        <h4>ALL SUBJECTS</h4>
                        <span>Post a project for FREE - start receiving proposals in minutes</span>
                    </div>
                    @forelse($subjects as $subject)
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5><b>{{$subject->name}}</b></h5>
                                    <p class="text-muted">{{$subject->level->name ?? ''}}</p>
                                </div>
                                <h3 class="text-info fw-bold"><label>Resources:</label> 6789170</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="text-muted mb-0">Class:</p>
                                <a href="#" class="text-muted mb-0">View</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>No subjects added yet!</p>
                    @endforelse
                </div>
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-header">
                            <h4 class="card-title">Total Subjects</h4>
                            <div class="card-price">
                                <span class="price">{{$subjects->count()}}</span>
                            </div>
                        </div>
                        <div class="card-body">
                        </div>
                        <div class="card-footer">
                            <a href="{{route('subjects.create')}}" class="btn btn-primary btn-block"><b>Add New</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection