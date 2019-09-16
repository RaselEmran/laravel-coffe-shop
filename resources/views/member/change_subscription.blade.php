@extends('layouts.app')

@section('page_header')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Dashboard</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

        </div>
    </div>
    <!-- /page header -->


@endsection
@section('content')


    <div class="card">
        <div class="card-header header-elements-sm-inline">
            <h6 class="card-title">Subcroption</h6>
       
        </div>
        <div class="card-body">
      {!! Form::open(['route' => 'user.post.plan', 'class' => 'form-validate-jquery', 'id' => 'content_form', 'files' => true, 'method' => 'POST']) !!}
           <fieldset class="mb-3">

                <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        {{ Form::label('title', __('Active Plan') , ['class' => 'col-form-label required']) }}
                        {{ Form::text('title', $user->subscrip->plan->name, ['class' => 'form-control', 'placeholder' =>  __('Active Plan'), 'required' => '','readonly'=>'']) }}
                    </div>
                </div>

                 <div class="col-lg-12">
                    <div class="form-group">
                       {{ Form::label('stripe_plan', __('Plan') , ['class' => 'col-form-label']) }}
                        <select name="plan_id" id="" class="form-control select" required="">
                            @foreach ($plans as $allplan)
                              <option value="{{$allplan->stripe_plan}}">{{$allplan->name}}</option>
                            @endforeach
                        </select>
                    </div>
                 </div>
                 <input type="hidden" name="user_id" value="{{$id}}">
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
    <script>
         _componentSelect2Normal();
    </script>

    <script>
         @if(session('msg'))
                    new PNotify({
                        title: 'Success',
                        text: '{{session('msg')}}',
                        type: 'success',
                        addclass: 'alert alert-styled-left',
                    });
         @endif
    </script>
    @endpush
