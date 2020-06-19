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
                    <div class="card">
                        <div class="card-header" align="center">
                            <h4>GET YOUR PROJECT DONE</h4>
                            <span>Post a project for FREE - start receiving proposals in minutes</span>
                        </div>
                        <form method="POST" action="/jobs">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>What do you need to get done?</label>
                                        <input type="text" name="title" class="form-control" placeholder="Project Title" required="" value="{{old('title')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Categories</label>                                        
                                        <select name="category_id" class="form-control">
                                            <option>All Categories</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Sub Categories</label>
                                        <select name="sub_category_id" class="form-control">
                                            <option>Not Specified</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Expert</option>
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
                                        <textarea id="desc" name="uploads" class="form-control" rows="3" placeholder="Project Description" required="">{{old('description')}}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Work Type:</label>                                        
                                        <select name="work_type" class="form-control">
                                            <option>All Categories</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Budget:</label>                                        
                                        <select name="budget" class="form-control">
                                            <option>All Categories</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <h4>Additional Options</h4>
                                        <span class="help-block">
                                            <small>Select one payment term</small>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label>Where does the freelancer need to work from?</label>
                                        <select name="work_from" class="form-control">
                                            <option>Select City/Region</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Country:</label>
                                                <select name="country_id" class="form-control">
                                                    <option>Select City/Region</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>City:</label>
                                                <select name="state_id" class="form-control">
                                                    <option>Select Country</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Get quotes until:</label>
                                                <input type="text" name="quotes_until" class="form-control calendar bg-ash" placeholder="dd/mm/yyyy" id="text-calendar">
                                                <span class="ti-calendar form-control-feedback booking-system-feedback m-t-30"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Estimated Project Duration</label>
                                                <select name="project_duration" class="form-control">
                                                    <option>Select Country</option>
                                                    <option value="">! day or less</option>
                                                </select>
                                            </div>
                                        </div>

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
                                <li class="feed-item feed-item-success">
                                    <time class="date" datetime="9-24">Tip 2</time>
                                    <span class="text">Upload as much relevant information (pictures, documents, specifications, links, etc) as possible to get a realistic quote.
                                    </span>
                                </li>
                                <li class="feed-item feed-item-info">
                                    <time class="date" datetime="9-23">Tip 3</time>
                                    <span class="text">Match the experience level to your requirements – remember, you’re looking for the best you can afford, not the cheapest you can get.
                                    </span>
                                </li>
                                <li class="feed-item feed-item-warning">
                                    <time class="date" datetime="9-21">Tip 4</time>
                                    <span class="text">For more helpful tips, see our guide “Post a project”.

                                    </span>
                                </li>
                            </ol>
                </div>
            </div>
        </div>
    </div>
    @endsection