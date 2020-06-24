@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Forms</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Forms</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card-header" align="center">
                        <h4>GET YOUR PROJECT DONE</h4>
                        <span>Post a project for FREE - start receiving proposals in minutes</span>
                    </div>
                    @forelse($resources as $resource)
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5><b>{{$resource->name}}</b></h5>
                                    <p class="text-muted mb-0"><label class="b">Class:</label>{{$resource->class->name ?? ''}}</p>
                                    <p class="text-muted mb-0"><label class="b">Subject:</label>{{$resource->subject->name ?? ''}}</p>
                                </div>
                            </div>
                            <iframe style="width: 600px" src="{{asset('storage/'.$resource->resource_file)}}"></iframe>
                        </div>
                    </div>
                    @empty
                    <p>Nothing to show!</p>
                    @endforelse
                </div>
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-header">
                            <h4 class="card-title">Total Resources</h4>
                            <div class="card-price">
                                <span class="price">{{$resources->count()}}</span>
                            </div>
                        </div>
                        <div class="card-body">
                        </div>
                        <div class="card-footer">
                            <a href="{{route('education_resources.create')}}" class="btn btn-primary btn-block"><b>Add New</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection