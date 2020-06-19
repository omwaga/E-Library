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
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                                <div class="profile-picture">
                                    <div class="avatar avatar-xl">
                                        <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-profile text-center">
                                    <div class="name">Hizrian, 19</div>
                                    <div class="job">Frontend Developer</div>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection