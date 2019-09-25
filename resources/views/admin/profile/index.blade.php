@extends('layouts.master', ['title' => 'Profile'])

@section('page_header')
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Profile</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

    </div>
</div>
<!-- /page header -->
@endsection

@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="fullscreen"></a>
                <a class="list-icons-item" data-action="collapse"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
           <form action="{{ route('admin.profile.update') }}" method="post" id="profile_up">
                  <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                            <label>Email Address:</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email Address" value="{{$admin->email}}">

                    </div>
                  </div>

                    <div class="col-md-12">
                    <div class="form-group">
                            <label>User Name:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="User Name" value="{{$admin->name}}">

                    </div>
                  </div>
              </div>

                <div class="text-right">
                <button type="submit" class="btn btn-primary"  id="submit">Update Profile<i class="icon-arrow-right14 position-right"></i></button>
             
                </div>
             </form>


    </div>
    <div class="card-body">
           <form action="{{ route('admin.password') }}" id="pass_change" method="post">
                  <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                            <label>New Password:</label>
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                    </div>
                  </div>

                    <div class="col-md-12">
                    <div class="form-group">
                            <label>Confirm Password:</label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                    </div>
                  </div>
              </div>
                <div class="text-right">
                <button type="submit" class="btn btn-primary"  id="submit">Update Password<i class="icon-arrow-right14 position-right"></i></button>
                
                </div>
             </form>
    </div>
</div>

@endsection

@push('admin.scripts')
<script>
 $(document).on('submit','#profile_up', function(e){
   e.preventDefault();

    $(".ajax_error").remove();
   var formData = new FormData($(this)[0]);
   var url = $(this).attr('action');

              $.ajax({
              method:'POST',
              url: url,
              data:formData,
              dataType:'JSON',
              contentType: false,
              cache: false,
              processData: false,
              success: function(data){
             // console.log(data);
                     if (data.success) {
                     new PNotify({
                                title: 'Well Done!',
                                text: data.message,
                                type: 'success',
                                addclass: 'alert alert-styled-left',
                            });
                    
                      setTimeout(function(){

                      window.location.href=data.goto;
                      },2500);

                    }

                     else {
                            const errors = data.message
                                console.log(errors)
                            var i = 0;
                            $.each(errors, function(key, value) {
                                const first_item = Object.keys(errors)[i]
                                const message = errors[first_item][0]
                                $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                                  new PNotify({
                                        title: 'Something Wrong!',
                                        text: value,
                                        type: 'error',
                                        addclass: 'alert alert-danger alert-styled-left',
                                    });
                                i++;
                            });
                       $('.select').select2();
                       $('#submit').show();
                       $('#submiting').hide();
                        }
               },
                error: function(data) {
                        var jsonValue = $.parseJSON(data.responseText);
                        //console.log(jsonValue.Message);
                          new PNotify({
                                        title: 'Something Wrong!',
                                        text: jsonValue.message,
                                        type: 'error',
                                        addclass: 'alert alert-danger alert-styled-left',
                                    });

                        $('.select').select2();
                         $('#submit').show();
                         $('#submiting').hide();
                    }

            });
  });

 //password
  $(document).on('submit','#pass_change', function(e){
   e.preventDefault();

    $(".ajax_error").remove();
   var formData = new FormData($(this)[0]);
   var url = $(this).attr('action');

              $.ajax({
              method:'POST',
              url: url,
              data:formData,
              dataType:'JSON',
              contentType: false,
              cache: false,
              processData: false,
              success: function(data){
             // console.log(data);
                     if (data.success) {
                           new PNotify({
                                title: 'Well Done!',
                                text: data.message,
                                type: 'success',
                                addclass: 'alert alert-styled-left',
                            });
            
                    
                      setTimeout(function(){

                      window.location.href=data.goto;
                      },2500);

                    }

                     else {
                            const errors = data.message
                                console.log(errors)
                            var i = 0;
                            $.each(errors, function(key, value) {
                                const first_item = Object.keys(errors)[i]
                                const message = errors[first_item][0]
                                $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                                    new PNotify({
                                        title: 'Something Wrong!',
                                        text: value,
                                        type: 'error',
                                        addclass: 'alert alert-danger alert-styled-left',
                                    });
                                i++;
                            });
                       $('.select').select2();
                       $('#submit').show();
                       $('#submiting').hide();
                        }
               },
                error: function(data) {
                        var jsonValue = $.parseJSON(data.responseText);
                        //console.log(jsonValue.Message);
                          new PNotify({
                                        title: 'Something Wrong!',
                                        text: jsonValue.message,
                                        type: 'error',
                                        addclass: 'alert alert-danger alert-styled-left',
                                    });
                        $('.select').select2();
                         $('#submit').show();
                         $('#submiting').hide();
                    }

            });
  });
</script>
 @endpush
