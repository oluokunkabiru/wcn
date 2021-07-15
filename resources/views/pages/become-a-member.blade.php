@extends('layouts.app')
@section('title', 'Become a member')
@section('style')

@endsection

@section('content')

<section>
    <div class="wow slideInDown" data-wow-duration='2s' data-wow-delay='0.5s'>
       <div class="site-section-cover overlay" style="background-image:url({{ asset('assets/images/wallpaper-1.jpg') }});width:100%;height: 500px; background-repeat: no-repeat;" >
           <div class="container ">
               <div class="row ">
                 <div class="col-md-9 bottomleft ">
                  <p class="breadcrumbs mt-2"><span class="mr-2"><a href="{{ route('index') }}" class="text-white">Home <i class="fa fa-chevron-right"></i></a></span> <span>Gallery <i class="fa fa-chevron-right"></i></span></p>
                  <h1 class="mb-4 bread">Become member</h1>
                </div>
              </div>
            </div>
       </div>
    </section>

<section>
    <div class="row bg-dark">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
            <h2 class="text-center"></h2>
            <p class="text-center">Input all required information</p>



          <div class="row text-dark bg-white" style=" border-radius: 1em; margin:3em; padding:5em">
              <div class="container">

              <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
                <div class="row">
                    <div class="col-md-6">
                <form onsubmit= "validate()"  name="myForm"  action="add_admin.php" method="post"  class="was-validated">
                  <div class="form-group">
                    <label for="fname">First name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter admin fullname" name="fname" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="form-group">
                    <label for="fname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter admin fullname" name="lname" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="pnumber" placeholder="Enter your email" name="email" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>


                  <div class="form-group">
                    <label for="pnumber">Phone Number:</label>
                    <input type="number" class="form-control" id="pnumber" placeholder="Enter Phone number" name="pnumber" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                    <div class="col-md-6 was-validated">

                    <div class="form-check">
                    <label for="Born again">Are you born Again?:</label>

                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio">Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio">No
                        </label>
                      </div>

                    <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input  onchange= "validate()" type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" require>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback" >Please fill out this field.</div>
                    <span id = "pmessage1" style="color:red"> </span>
                  </div>
                  <div class="form-group">
                    <label for="cpwd">confirm Password:</label>
                    <input onchange= "validate()" type="password" class="form-control" id="cpswd" placeholder="Confirm password" name="cpswd" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    <span id = "cpmessage2" style="color:red"> </span>
                  </div>
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                  </div>
                  <button  class="btn btn-primary">Register</button>
                  </form>
            </div>
                </div>
                  <!-- <div class="form-group">
                    <label for="email">Last name:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div> -->


          </div>
      </div>

      <div class="col-sm 2"></div>

    </div>

    </section>
@endsection
