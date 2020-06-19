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
                    <div class="card card-profile">
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="view-profile">
                                    <a href="#" class="btn btn-secondary btn-block">View Full Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row user-stats text-center">
                                <div class="col">
                                    <div class="number">125</div>
                                    <div class="title">Post</div>
                                </div>
                                <div class="col">
                                    <div class="number">25K</div>
                                    <div class="title">Followers</div>
                                </div>
                                <div class="col">
                                    <div class="number">134</div>
                                    <div class="title">Following</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-header">
                            <h4 class="card-title">Total Resources</h4>
                            <div class="card-price">
                                <span class="price">12</span>
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