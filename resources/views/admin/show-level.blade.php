@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">{{$education_level->name}}</h4>
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
                        <a href="{{route('education_levels')}}">All Levels</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card-header" align="center">
                        <h4>{{$education_level->name}}</h4>
                        <span>Available Subjects</span>
                    </div>
                    @forelse($subjects as $subject)
                    <div class="card card-profile">
                        <div class="view-profile">
                            <a href="{{route('education_levels.show', $subject->id)}}" class="btn btn-secondary btn-block">{{$subject->name}}</a>
                        </div>
                        <div class="card-footer">
                            <div class="row user-stats text-center">
                                <div class="col">
                                    <div class="number">125</div>
                                    <div class="title">Resources</div>
                                </div>
                                <div class="col">
                                    <div class="number">25K</div>
                                    <div class="title">Learners</div>
                                </div>
                                <div class="col">
                                    <div class="number">
                                        <a class="btn btn-success btn-twitter btn-sm btn-link" href="#"> 
                                            <span class="btn-label just-icon"><i class="fas fa-edit"></i> </span>
                                        </a>
                                    </div>
                                    <div class="title">
                                        <a class="btn btn-danger btn-twitter btn-sm btn-link" href="#"> 
                                            <span class="btn-label just-icon"><i class="fas fa-trash-alt"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>No level added.</p>
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
                            <a href="{{route('education_levels.create')}}" class="btn btn-primary btn-block"><b>Add New</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection