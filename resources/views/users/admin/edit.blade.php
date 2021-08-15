@extends('users.admin.layouts.app')
@section('title', 'Update profile')
@section('content')
<h1>Update profile</h1>

<div class="card mb-4">
    <div class="card-header pb-0 p-3">
        <h6 class="mb-1">Profile details</h6>
    </div>
    @if(session('danger'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error ! </strong> {{ session('danger') }}
    </div>
@endif
    <div class="card-body p-3">
        <form action="{{ route('admin.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
        <div class="row">
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Full name:</label>
                <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ Auth::user()->name, old('name') }}" name="name">
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Email:</label>
                <input type="email" value="{{ Auth::user()->email, old('email') }}" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email">
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Phone:</label>
                <input type="text" value="{{ Auth::user()->phone, old('phone') }}" name="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" id="usr">
                @if ($errors->has('phone'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('phone') }}</strong>
               </span>
               @endif
            </div>
           </div>

           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Profile picture:</label>
                <input type="file" name="avatar" class="form-control {{ $errors->has('avatar') ? ' is-invalid' : '' }}" id="usr">
                @if ($errors->has('avatar'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('avatar') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">About:</label>
                <textarea name="about" id="" class="form-control {{ $errors->has('about') ? ' is-invalid' : '' }}" cols="20" rows="10">
                    {{ Auth::user()->about, old('about') }}
                </textarea>
                @if ($errors->has('about'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('about') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
               <div class="row">
                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="usr">Current passord:</label>
                        <input type="password" name="currentp" class="form-control {{ $errors->has('currentp') ? ' is-invalid' : '' }}" id="usr">
                        @if ($errors->has('currentp'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('currentp') }}</strong>
                       </span>
                       @endif
                    </div>
                   </div>
                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="usr">New password:</label>
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="usr">
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                       </span>
                       @endif
                    </div>
                   </div>
                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="usr">Confirm password:</label>
                        <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="usr">
                        @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                       </span>
                       @endif
                    </div>
                   </div>
               </div>
           </div>
       </div>
       <button class="btn btn-primary float-right mr-4">Update profile</button>
    </form>
    </div>
</div>


@endsection
