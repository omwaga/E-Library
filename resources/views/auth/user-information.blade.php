@extends('layouts.master')
@section('content')
<section class="contact-us section-bg section-space">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Contact Form -->
            <div class="contact-form-area m-top-30">
                <h4>Finish Registration</h4>
                <form  method="POST" action="#">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">                                
                            <div class="form-group">
                                <select name="class_id" class="form-control @error('class_id') is-invalid @enderror">
                                    <option value="">-- {{ __('Choose Your Education Level') }} --</option>
                                    @foreach ($levels as $level)
                                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                                    @endforeach
                                </select>

                                @error('class_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">                                
                            <div class="form-group">
                                <select name="class_id" class="form-control @error('class_id') is-invalid @enderror">
                                    <option value="">-- {{ __('Choose Your Class') }} --</option>
                                    @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>

                                @error('class_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">                                
                            <div class="form-group">
                                <select name="class_id" class="form-control @error('class_id') is-invalid @enderror">
                                    <option value="">-- {{ __('Choose Your County') }} --</option>
                                    @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>

                                @error('class_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">                                
                            <div class="form-group">
                                <select name="class_id" class="form-control @error('class_id') is-invalid @enderror">
                                    <option value="">-- {{ __('Choose Your Sub-County') }} --</option>
                                    @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>

                                @error('class_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="School Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group button">
                                <button type="submit" class="bizwheel-btn theme-2">Finish Registration</button>

                                <a href="{{ route('home') }}">Skip for now</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--/ End contact Form -->
        </div>
    </div>
</div>
</section>
@endsection