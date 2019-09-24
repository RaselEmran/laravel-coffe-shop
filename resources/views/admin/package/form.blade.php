@extends('layouts.master', ['title' => 'Coffee Setup'])

@section('page_header')
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Coffee</span>
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
        @if(isset($model))
            {!! Form::model($model, ['route' => ['admin.package.update', $model->id], 'class' => 'form-validate-jquery', 'id' => 'content_form', 'method' => 'PUT', 'files' => true]) !!}
        @else
            {!! Form::open(['route' => 'admin.package.store', 'class' => 'form-validate-jquery', 'id' => 'content_form', 'files' => true, 'method' => 'POST']) !!}
        @endif
        <fieldset class="mb-3">
            <legend class="text-uppercase font-size-sm font-weight-bold">{{isset($model) ? __('update') : __('Create')}} <span class="text-danger">*</span> <small> {{ __('required') }} </small></legend>
            <div class="row">
           
                    <div class="col-lg-12">
                    @if (!isset($model))
                    <div class="form-group">
                        {{ Form::label('stripe_plan', __('Coffee Title') , ['class' => 'col-form-label required']) }}
                      {{ Form::select('stripe_plan',$coffee,null, ['class' => 'form-control select', 'data-placeholder' =>  __('Coffee'), 'data-parsley-errors-container' => '#client_category_error'])
                      }}
                    </div>
                       @else
                     <div class="form-group">
                        {{ Form::label('name', __('Coffee Title') , ['class' => 'col-form-label']) }}
                        {{ Form::text('up', null, ['class' => 'form-control', 'placeholder' =>  __('Coffee Title'),'readonly'=>'']) }}
                    </div>
                  @endif
                </div>
             
                 
                <div class="col-lg-12">
                    <div class="form-group">
                        {{ Form::label('name', __('Plan Name') , ['class' => 'col-form-label required']) }}
                        {{ Form::text('name', Null, ['class' => 'form-control', 'placeholder' =>  __('Plan Name'), 'required' => '']) }}
                    </div>
                </div>
               @if (!isset($model))
                <div class="col-lg-12">
                    <div class="form-group">
                        {{ Form::label('intervals', __('Interval') , ['class' => 'col-form-label required']) }}
                          {{Form::select('intervals', ['month' => 'month', 'day' => 'day','week'=>'week','year'=>'year'], Null, ['class' => 'form-control select' ])}}
                    </div>
                </div>
                 @endif
                @if (!isset($model))
                <div class="col-lg-12">
                    <div class="form-group">
                        {{ Form::label('interval_count', __('Interval Count') , ['class' => 'col-form-label required']) }}
                          {{ Form::text('interval_count', Null, ['class' => 'form-control', 'placeholder' =>  __('Interval Count '), 'required' => '']) }}
                    </div>
                </div>
                 @endif

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('description', __('description') , ['class' => 'col-form-label']) }}
                        {{ Form::textarea('description', Null, ['class' => 'form-control', 'placeholder' =>  __('description'), 'style' => 'resize: none;', 'rows' => '3']) }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        {{ Form::label('status', __('status') , ['class' => 'col-form-label']) }}
                        {{-- {{ Form::label('status', __('Status') , ['class' => 'col-form-label']) }} --}}

                        {{Form::select('status', ['1' => 'Active', '0' => 'inactive'], Null, ['class' => 'form-control select' ])}}

                    </div>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-lg-4 offset-lg-4">
                    {{ Form::submit(isset($model) ? __('update'):__('create'), ['class' => 'btn btn-primary w-100', 'id' => 'submit']) }}
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
