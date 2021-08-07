@extends('users.admin.layouts.app')
@section('title', "Manage Users")
@section('content')
<h1>Manage Users</h1>
 {{-- <a href="{{ route('events.create') }}" class="btn btn-dark"> Create new event</a> --}}
 <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Users details</h6>
            </div>
            @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success! </strong> {{ session('success') }}
            </div>
            @endif
            @if ($errors->any())

            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong style="font-size:20px;">Oops!
                    {{ 'Kindly rectify below errors' }}</strong><br />
                @foreach ($errors->all() as $error)
                    {{ $error }} <br />
                @endforeach
            </div>
        @endif
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div id="accordion">
                <table class="table align-items-center mb-0" id="table">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S/N</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last active</th>

                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php
                          $i=0;
                      @endphp
                      @foreach ($users as $user)


                    <tr>
                        <td>{{ ++$i }}</td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ $user->getMedia('avatar')->first()->getFullUrl('avatar') }}" class="avatar avatar-sm me-3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ ucwords($user->name) }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                            <p class="text-xs text-secondary mb-0">{{ $user->phone }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ ucwords($user->role) }}</p>
                        <p class="text-xs text-secondary mb-0">{{ $user->created_at }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm {{$user->status ==0 ? "bg-gradient-danger":"bg-gradient-success"  }} ">{{ $user->status ==0 ? "Unapprove":"Approved" }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $user->updated_at }}</span>
                      </td>
                      <td class="align-middle">
                        <a href="#edit{{ $user->id }}" data-toggle="collapse" class="text-white btn btn-dark font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          <span class="fa fa-edit"></span>
                        </a>
                        <div id="edit{{ $user->id }}" class="collapse" data-parent="#accordion">
                            <ul class="nav flex-column">
                                {{-- <li class="nav-item">
                                  <a class="nav-link" img="{{ $user->getMedia('avatar')->first()->getFullUrl() }}" href="#view" username="{{ ucwords($user->name) }}" email="{{ $user->email }}" phone="{{ $user->phone }}" data-toggle="modal" role="{{ ucwords($user->role) }}" join="{{ $user->created_at }}"><span class="btn btn-sm btn-rounded btn-info text-light">View</span></a>
                                </li> --}}
                                @if ($user->role=="admin")
                                 <li class="nav-item">
                                    <a class="nav-link" href="#admin" data-toggle="modal" role="{{ $user->role }}" username="{{ $user->name }}" url="{{ route('make-users-admin', [$user->id]) }}"><span class="btn btn-sm btn-rounded btn-secondary text-light">Withdraw admin</span></a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="#admin" data-toggle="modal"  role="{{ $user->role }}" username="{{ $user->name }}" url="{{ route('make-users-admin', [$user->id]) }}"><span class="btn btn-sm btn-rounded btn-secondary text-light">Make admin</span></a>
                                </li>
                                @endif

                                @if ($user->status==0)
                                <li class="nav-item">
                                    <a class="nav-link" status ="{{ $user->status }}"  username="{{ ucwords($user->name) }}" url="{{ route('approve-users', [$user->id, $user->status]) }}" href="#approve" data-toggle="modal"><span class="btn btn-sm btn-rounded btn-success text-light">Approve</span></a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" status ="{{ $user->status }}"  username="{{ $user->name }}" url="{{ route('approve-users', [$user->id, $user->status]) }}" href="#approve" data-toggle="modal"><span class="btn btn-sm btn-rounded btn-warning text-dark">Disable</span></a>
                                </li>
                                @endif

                                <li class="nav-item">
                                    <a class="nav-link" url ="{{ route('private-message.show', $user->id) }}" img="{{ $user->getMedia('avatar')->first()->getFullUrl() }}" href="#message" username="{{ ucwords($user->name) }}" userid="{{ $user->id   }}" data-toggle="modal"><span class="btn btn-sm btn-rounded btn-danger text-light">Private message</span></a>
                                </li>
                            </ul>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal" id="approve">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-uppercase">are sure you want <span id="status"></span> <span id="delname"></span></h4>
            <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="approveform" action="#">

                        {{ csrf_field() }}
                        {{-- @method("PUT") --}}
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                        <button  type="submit" class="btn btn-success text-uppercase">update user approval status</button>                </div>
    </form>
            </div>
        </div>
      </div>

      <div class="modal" id="admin">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-uppercase">are  <span id="statusmsg"></span></h4>
            <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="adminform" action="#">

                        {{ csrf_field() }}
                        {{-- @method("PUT") --}}
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                        <button  type="submit" class="btn btn-success text-uppercase">update admin</button>                </div>
    </form>
            </div>
        </div>
      </div>


      <div class="modal" id="message">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-uppercase">Quick Private message for  <span id="chatname"></span></h4>
                <div class="text-center">
                    <img src="" id="userimg" class="rounded-circle" style="width: 100px" alt="">
                </div>
            <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('private-message.store') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="content">Message body</label>
                            <textarea class="form-control blogarea {{ $errors->has('message') ? ' is-invalid' : '' }}" rows="3" name="message"></textarea>
                            @if ($errors->has('message'))
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('message') }}</strong>
                            </span>
                            @endif
                            </div>
                            <input type="hidden" value="" name="userid" id="userchatid">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <a href="" class="btn btn-success float-left" id="fmessage">View our full conversation</a>
                        <button  type="submit" class="btn btn-danger text-uppercase">Send message</button>                </div>
    </form>
            </div>
        </div>
         </div>

         <div class="modal" id="view">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase"><span id="dename"></span></h4>
                <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    {{-- <form id="userdelform" action="#" method="POST"> --}}
                        <div class="row">
                            <div class="col-4">
                                <img src="" class="card-img" id="img" alt="">
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-4">
                                        <h5 class="text-mute">Name</h5>
                                    </div>
                                    <div class="col-8">
                                        <h5 class="font-weight-bold" id="name"></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <h5 class="text-mute">Phone</h5>
                                    </div>
                                    <div class="col-8">
                                        <h5 class="font-weight-bold" id="phone"></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <h5 class="text-mute">Email</h5>
                                    </div>
                                    <div class="col-8">
                                        <h5 class="font-weight-bold" id="email"></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <h5 class="text-mute">Role</h5>
                                    </div>
                                    <div class="col-8">
                                        <h5 class="font-weight-bold" id="role"></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <h5 class="text-mute">Join on</h5>
                                    </div>
                                    <div class="col-8">
                                        <h5 class="font-weight-bold" id="join"></h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                            {{-- <button  type="submit" class="btn btn-danger text-uppercase">delete</button>                </div> --}}
        {{-- </form> --}}
                </div>
            </div>
             </div>
</div>
@endsection
@section('script')
<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $("#table").dataTable({
        "columnDefs": [{
            "sortable": false,
            "targets": [2, 3]
        }]
    });



// approved
    $('#approve').on('show.bs.modal', function(e){
          var name = $(e.relatedTarget).attr('username');
          var url = $(e.relatedTarget).attr('url');
          var statis = $(e.relatedTarget).attr('status');
          var status = statis==0 ? "approve":"disable";
        // $("#delname").text(mycat);
          $("#approveform").attr("action", url);
          $("#status").text(status);
          $("#delname").text(name);

     })


// approved
    $('#admin').on('show.bs.modal', function(e){
          var name = $(e.relatedTarget).attr('username');
        //   alert(name)
          var url = $(e.relatedTarget).attr('url');
          var statis = $(e.relatedTarget).attr('role');
        //   alert(statis);
          var status = statis =="member" ? "you want make "+name+" as admin":"you want withdraw admin from " +name;
            //  alert(status)
        // $("#delname").text(mycat);
          $("#adminform").attr("action", url);
          $("#statusmsg").text(status);
        //   $("#delna").text(name);

     })





     $('#message').on('show.bs.modal', function(e){
        var name = $(e.relatedTarget).attr('username');
        var userid = $(e.relatedTarget).attr('userid');
        var url = $(e.relatedTarget).attr('url');
        var img = $(e.relatedTarget).attr('img');

        // $("#delname").text(mycat);
        $("#userchatid").attr("value", userid);
        $("#fmessage").attr("href", url);
        $("#userimg").attr("src", img);
          $("#chatname").text(name);


     })

     $('.blogarea').summernote({
      height: 100,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear', 'superscript', 'subscript']],
        ['color', ['color']],
        ['para', ['ol', 'ul', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture']],
        ['view', ['fullscreen', 'help', 'undo', 'redo']],
      ]

    })
     $('#view').on('show.bs.modal', function(e){
        var name = $(e.relatedTarget).attr('username');
        var phone = $(e.relatedTarget).attr('phone');
        var email = $(e.relatedTarget).attr('email');
        var img = $(e.relatedTarget).attr('img');
        var role = $(e.relatedTarget).attr('role');
        var join = $(e.relatedTarget).attr('join');

        $("#dename").text(name);
        $("#img").attr("src", img);
          $("#name").text(name);
          $("#email").text(email);
          $("#phone").text(phone);
          $("#join").text(join);
          $("#role").text(role);

     })
});
</script>
@endsection

