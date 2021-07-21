@extends('users.admin.layouts.app')
@section('title', 'Update profile')
@section('content')
<h1>Update profile</h1>

<div class="card mb-4">
    <div class="card-header pb-0 p-3">
        <h6 class="mb-1">Profile details</h6>
    </div>
    <div class="card-body p-3">
        <form action="" method="post">
        <div class="row">
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Full name:</label>
                <input type="text" class="form-control" id="usr">
              </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Email:</label>
                <input type="email" class="form-control" id="usr">
              </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Phone:</label>
                <input type="text" class="form-control" id="usr">
              </div>
           </div>

           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Profile picture:</label>
                <input type="file" class="form-control" id="usr">
              </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">About:</label>
                <textarea name="" id="" class="form-control" cols="20" rows="10"></textarea>
              </div>
           </div>
           <div class="col-md-6">
               <div class="row">
                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="usr">Current passord:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>
                   </div>
                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="usr">New password:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>
                   </div>
                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="usr">Confirm password:</label>
                        <input type="text" class="form-control" id="usr">
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
