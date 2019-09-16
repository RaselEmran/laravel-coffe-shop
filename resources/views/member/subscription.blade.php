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
            {{--<div class="header-elements">
                <a class="text-default daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
                    <i class="icon-calendar3 mr-2"></i>
                    <span></span>
                </a>
            </div>--}}
        </div>

        <div class="table-responsive">
            <table class="table text-nowrap">
            <thead>
                <tr>
                    <th>Subscroption Plan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span class="badge badge-success">{{$user->subscrip->plan->name}}</span> {{$user->subscrip->plan->cost}} Dkk</td>
                    <td>
                        <a href="{{ route('change.subscription',$user->id) }}" class="btn btn-info">Change Subscription</a>
                        <a href="" class="btn btn-danger" id="delete_item" data-id="{{ $user->id }}" data-url="{{ route('user.subscription.destroy', $user->id )}}">Cancel Subscription</a>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    @endsection

@push('js')
    <script src="{{ asset('asset/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{ asset('asset/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{ asset('asset/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{ asset('asset/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script src="{{ asset('asset/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{ asset('asset/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script src="{{ asset('asset/assets/js/app.js')}}"></script>
    <script src="{{ asset('asset/global_assets/js/demo_pages/dashboard.js')}}"></script>
    @endpush
