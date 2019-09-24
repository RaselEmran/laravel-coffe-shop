@extends('layouts.master')

@section('page_header')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Incoming Messege</span>
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
            <h5 class="card-title">
                <a href="{{route('admin.messege.send')}}" class="btn btn-link"> <i class="icon-stack-plus mr-1"></i> Send Messege</a>
            </h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="fullscreen"></a>
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>

        <div class="card-body">

         <h2>Sending Messege</h2>
            <table class="table datatable-basic">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Receiving Name</th>
                    <th>Email</th>
                    <th>Messege</th>
                    <th>Send Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($send as $s)
                <tr>
                 <td>{{$loop->index+1}}</td>
                 <td>{{$s->user->first_name}} {{$s->user->last_name}}</td>
                 <td>{{$s->user->email}}</td>
                 <td>{{$s->body}}</td>
                 <td>{{$s->date}}</td>
    
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
      $('.datatable-basic').DataTable();
</script>
@endpush