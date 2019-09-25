@extends('layouts.master')

@section('page_header')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Delivari</span>
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
            <h5 class="card-title">Delivari List
            </h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="fullscreen"></a>
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>

        <div class="card-body">


            <table class="table datatable-basic">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Member Name</th>
                    <th>Email</th>
                    <th>Plan Name</th>
                    <th>Product Name</th>
                    <th>Delivari Type</th>
                    <th>Status</th>
                    <th>Delivari Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($delivari as $d)
                <tr>
                 <td>{{$loop->index+1}}</td>
                 <td>{{$d->user->first_name}} {{$d->user->last_name}}</td>
                 <td>{{$d->user->email}}</td>
                 <td>{{$d->plan->name}}</td>
                 <td>{{$d->plan->coffee->title}}</td>
                 <td>Every {{$d->plan->interval_count}} {{$d->plan->intervals}}</td>
                 <td>
                     @if ($d->status=='order')
                       <span class="badge badge-info">Order</span>
                      @elseif($d->status=='delivari') 
                      <span class="badge badge-success">Delivari</span>
                     @endif
                 </td>
                 <td>
                    {{date("F d Y",strtotime($d->delivary_date))}}
                   
                    
                  </td>
                  <td><a href="" class="btn btn-danger"  data-id="{{ $d->id }}" data-url="{{ route('admin.delivari.order',$d->id) }}" id="change_status">Delivari To</a></td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
@push('admin.scripts')
<script src="{{ asset('asset/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('asset/global_assets/js/plugins/tables/datatables/extensions/select.min.js') }}"></script>
<script src="{{ asset('asset/global_assets/js/plugins/tables/datatables/extensions/buttons.min.js') }}"></script>
<script src="{{ asset('asset/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js') }}"></script>
<script>
      $('.datatable-basic').DataTable({
        responsive: true
      });
</script>
@endpush