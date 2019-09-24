@extends('layouts.master', ['title' => 'Send Messege'])

@section('page_header')
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Messege</span>
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
        <h5 class="card-title">Add New Package
            <a href="{{route('admin.package.index')}}" class="btn btn-link"> <i class="icon-eye mr-1"></i> Package List</a>
        </h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="fullscreen"></a>
                <a class="list-icons-item" data-action="collapse"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
      
            {!! Form::open(['route' => 'admin.messege.postsend', 'class' => 'form-validate-jquery', 'id' => 'content_form', 'files' => true, 'method' => 'POST']) !!}
        <fieldset class="mb-3">
            <legend class="text-uppercase font-size-sm font-weight-bold">{{isset($model) ? __('update') : __('Create')}} <span class="text-danger">*</span> <small> {{ __('required') }} </small></legend>
            <div class="row">
           
                <div class="col-lg-12">
                    <div class="form-group">
                        {{ Form::label('user_id', __('Sender') , ['class' => 'col-form-label required']) }}
                      {{ Form::select('user_id',$user,null, ['class' => 'form-control select', 'data-placeholder' =>  __('Sender'), 'data-parsley-errors-container' => '#client_category_error'])
                      }}
                    </div>
                 
                  </div>

                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('body', __('Messege') , ['class' => 'col-form-label']) }}
                        {{ Form::textarea('body', Null, ['class' => 'form-control', 'placeholder' =>  __('Messege'), 'style' => 'resize: none;', 'rows' => '3']) }}
                    </div>
                </div>
            </div>
 
            
            <div class="form-group row">
                <div class="col-lg-4 offset-lg-4">
                    {{ Form::submit(isset($model) ? __('update'):__('Send'), ['class' => 'btn btn-primary w-100', 'id' => 'submit']) }}
                    <button type="button" class="btn btn-link w-100" id="submiting" style="display: none;" disabled="">{{ __('submiting') }} <img src="{{ asset('asset/ajaxloader.gif') }}"></button>
                </div>
            </div>
        </fieldset>
        {!! Form::close() !!}


    </div>
</div>

@endsection

@push('admin.scripts')
 <script src="{{asset('js/pages/coffee.js')}}"></script>
 @endpush
