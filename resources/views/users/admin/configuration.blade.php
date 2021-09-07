@extends('users.admin.layouts.app')
@section('title', 'Update site configuration')
@section('content')
<h1>Update site configuration</h1>

<div class="card mb-4">
    <div class="card-header pb-0 p-3">
        <h6 class="mb-1">Site configuration details</h6>
    </div>
    @if(session('danger'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error ! </strong> {{ session('danger') }}
    </div>
@endif
    <div class="card-body p-3">
        <form action="{{ route('configurations.update', $config->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
        <div class="row">
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Site name:</label>
                <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $config->name, old('name') }}" name="name">
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
                <input type="email" value="{{ $config->email, old('email') }}" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email">
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
                <input type="text" value="{{ $config->phone, old('phone') }}" name="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" id="usr">
                @if ($errors->has('phone'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('phone') }}</strong>
               </span>
               @endif
            </div>
           </div>

           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Logo picture:</label>
                <input type="file" name="logo" class="form-control {{ $errors->has('logo') ? ' is-invalid' : '' }}" id="usr">
                @if ($errors->has('logo'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('logo') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Twitter Link:</label>
                <input type="text" value="{{ $config->twitter, old('twitter') }}" class="form-control {{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter">
                @if ($errors->has('twitter'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('twitter') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Linkedin link:</label>
                <input type="text" value="{{ $config->linkedin, old('linkedin') }}" name="linkedin" class="form-control {{ $errors->has('linkedin') ? ' is-invalid' : '' }}" id="usr">
                @if ($errors->has('linkedin'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('linkedin') }}</strong>
               </span>
               @endif
            </div>
           </div>

           <div class="col-md-6">
               <div class="row">
                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="usr">Facebook link:</label>
                        <input type="text" name="facebook" value="{{ $config->facebook, old('facebook') }}" class="form-control {{ $errors->has('facebook') ? ' is-invalid' : '' }}" id="usr">
                        @if ($errors->has('facebook'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('facebook') }}</strong>
                       </span>
                       @endif
                    </div>
                   </div>
                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="usr">Whatsapp link:</label>
                        <input type="text" name="whatsapp" value="{{ $config->whatsapp, old('whatsapp') }}" class="form-control {{ $errors->has('whatsapp') ? ' is-invalid' : '' }}" id="usr">
                        @if ($errors->has('whatsapp'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('whatsapp') }}</strong>
                       </span>
                       @endif
                    </div>
                   </div>
                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="usr">Youtube link:</label>
                        <input type="text" name="youtube" value="{{ $config->youtube, old('youtube') }}" class="form-control {{ $errors->has('youtube') ? ' is-invalid' : '' }}" id="usr">
                        @if ($errors->has('youtube'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('youtube') }}</strong>
                       </span>
                       @endif
                    </div>
                   </div>
                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="usr">Instagram link:</label>
                        <input type="text" name="instagram" value="{{ $config->instagram, old('instagram') }}" class="form-control {{ $errors->has('instagram') ? ' is-invalid' : '' }}" id="usr">
                        @if ($errors->has('instagram'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('instagram') }}</strong>
                       </span>
                       @endif
                    </div>
                   </div>
               </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Address:</label>
                <textarea name="address" id="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" cols="20" rows="10">
                    {{ $config->address, old('address') }}
                </textarea>
                @if ($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Youth Quote:</label>
                <textarea name="youth" id="youth" class="form-control {{ $errors->has('youth') ? ' is-invalid' : '' }}" cols="20" rows="10">
                    {{ $config->youth_qoute, old('youth') }}
                </textarea>
                @if ($errors->has('youth'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('youth') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Youth Quote 2:</label>
                <textarea name="youth1" id="youth1" class="form-control {{ $errors->has('youth1') ? ' is-invalid' : '' }}" cols="20" rows="10">
                    {{ $config->youth_qoute1, old('youth1') }}
                </textarea>
                @if ($errors->has('youth1'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('youth1') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">About us:</label>
                <textarea name="about" id="about" class="form-control {{ $errors->has('about') ? ' is-invalid' : '' }}" cols="20" rows="10">
                    {{ $config->about_us, old('about') }}
                </textarea>
                @if ($errors->has('about'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('about') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Conception:</label>
                <textarea name="conception" id="conception" class="form-control {{ $errors->has('conception') ? ' is-invalid' : '' }}" cols="20" rows="10">
                    {{ $config->conception, old('conception') }}
                </textarea>
                @if ($errors->has('conception'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('conception') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Vision:</label>
                <textarea name="vision" id="vision" class="form-control {{ $errors->has('vision') ? ' is-invalid' : '' }}" cols="20" rows="10">
                    {{ $config->vision, old('vision') }}
                </textarea>
                @if ($errors->has('vision'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('vision') }}</strong>
               </span>
               @endif
            </div>
           </div>

           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Mission:</label>
                <textarea name="mission" id="mission" class="form-control {{ $errors->has('mission') ? ' is-invalid' : '' }}" cols="20" rows="10">
                    {{ $config->mission, old('mission') }}
                </textarea>
                @if ($errors->has('mission'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('mission') }}</strong>
               </span>
               @endif
            </div>
           </div>

           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Core Value:</label>
                <textarea name="core" id="core" class="form-control {{ $errors->has('core') ? ' is-invalid' : '' }}" cols="20" rows="10">
                    {{ $config->core_value, old('core') }}
                </textarea>
                @if ($errors->has('core'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('core') }}</strong>
               </span>
               @endif
            </div>
           </div>

           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Pioneer Message :</label>
                <textarea name="pioneer" id="pioneer" class="form-control {{ $errors->has('pioneer') ? ' is-invalid' : '' }}" cols="20" rows="10">
                    {{ $config->pioneer_message, old('pioneer') }}
                </textarea>
                @if ($errors->has('pioneer'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('pioneer') }}</strong>
               </span>
               @endif
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="usr">Pioneer Message 2:</label>
                <textarea name="pioneer1" id="pioneer1" class="form-control {{ $errors->has('pioneer1') ? ' is-invalid' : '' }}" cols="20" rows="10">
                    {{ $config->pioneer_message1, old('pioneer1') }}
                </textarea>
                @if ($errors->has('pioneer1'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('pioneer1') }}</strong>
               </span>
               @endif
            </div>
           </div>

       </div>
       <button class="btn btn-primary float-right mr-4">Update configuration</button>
    </form>
    </div>
</div>


@endsection
@section('script')
<script>
    $(function () {
    //Initialize Select2 Elements
    $('#address, #pioneer, #youth,  #youth1, #conception, #about, #core, #vision, #mission, #pioneer1').summernote({
      height: 100,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear', 'superscript', 'subscript']],
        ['color', ['color']],
        ['insert', ['link']],
        ['view', ['fullscreen','codeview', 'help', 'undo', 'redo']],
      ]

    })

  })
</script>
@endsection
