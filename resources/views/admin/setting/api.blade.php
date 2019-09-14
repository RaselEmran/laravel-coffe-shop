@extends('layouts.master', ['title' => 'Api Setup'])

@section('page_header')
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Api</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

    </div>
</div>
<!-- /page header -->
@endsection

@section('content')
<div class="card">
  
    <div class="card-body">
  
   <form role="form" action="{{ route('admin.api.store') }}" method="post"  id="content_form">
            <div class="row">
                <legend>Facebook Api</legend>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>FACEBOOK_CLIENT_ID:</label>
                        <input type="text" name="fb_client_id" id="fb_client_id" class="form-control" placeholder="FACEBOOK_CLIENT_ID" value="{{config('settings.fb_client_id')}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>FACEBOOK_CLIENT_SECRET:</label>
                        <input type="text" name="fb_secret_id" id="fb_secret_id" class="form-control" placeholder="FACEBOOK_CLIENT_SECRET"  value="{{config('settings.fb_secret_id')}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <legend>Google Plus Api</legend>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>G+_CLIENT_ID:</label>
                        <input type="text" name="google_client_id" id="google_client_id" class="form-control" placeholder="G+_CLIENT_ID"  value="{{config('settings.google_client_id')}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>G+_CLIENT_SECRET:</label>
                        <input type="text" name="google_secret_id" id="google_secret_id" class="form-control" placeholder="G+_CLIENT_SECRET"  value="{{config('settings.google_secret_id')}}">
                    </div>
                </div>

            </div>
            <div class="row">
                <legend>Stripe Api</legend>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>STRIPE_KEY:</label>
                        <input type="text" name="stripe_key" id="stripe_key" class="form-control" placeholder="STRIPE_KEY"  value="{{config('settings.stripe_key')}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>STRIPE_SECRET:</label>
                        <input type="text" name="strpe_secret" id="strpe_secret" class="form-control" placeholder="STRIPE_SECRET"  value="{{config('settings.strpe_secret')}}">
                    </div>
                </div>

            </div>
            <div class="row">
                <legend>Social address</legend>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Facebook Link:</label>
                        <input type="text" name="fb_id" id="fb_id" class="form-control" placeholder="Facebook Link"  value="{{config('settings.fb_id')}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Linkedin Link:</label>
                        <input type="text" name="linkedin_link" id="linkedin_link" class="form-control" placeholder="Linkedin Link"  value="{{config('settings.linkedin_link')}}">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Instagram Link:</label>
                        <input type="text" name="insta_link" id="insta_link" class="form-control" placeholder="Instagram Link"  value="{{config('settings.insta_link')}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>You tube Link:</label>
                        <input type="text" name="youtube_link" id="youtube_link" class="form-control" placeholder="You tube Link"  value="{{config('settings.youtube_link')}}">
                    </div>
                </div>

            </div>

            <div class="row">
                <legend>System Settings</legend>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Currency Rate:</label>
                        <input type="text" name="c_rate" id="c_rate" class="form-control" placeholder="1USD = ? MYR"  value="{{config('settings.c_rate')}}">
                    </div>
                </div>

            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary"  id="submit">Set Api<i class="icon-arrow-right14 position-right"></i></button>
                <button type="button" class="btn btn-link" id="submiting" style="display: none;">Processing <img src="{{ asset('ajaxloader.gif') }}" width="80px"></button>
            </div>
        </form>

    </div>
</div>

@endsection

@push('admin.scripts')
<script src="{{asset('js/pages/api.js')}}"></script>

@endpush
