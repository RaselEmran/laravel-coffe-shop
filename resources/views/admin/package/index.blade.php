@extends('layouts.master')

@section('page_header')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Coffee Packege</span>
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
            <h5 class="card-title">Basic datatable
                <a href="{{route('admin.package.create')}}" class="btn btn-link"> <i class="icon-stack-plus mr-1"></i> Add Coffee Packege</a>
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
                    <th>Item Name</th>
                    <th>Subscription Type</th>
                    <th>Interval Count</th>
                    <th>Price</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($plans as $plan)
                <tr>
                    <td>{{$loop->index+1}}</td>
                 <td>{{$plan->name}}</td>
                 <td>{{$plan->intervals}}</td>
                 <td>{{$plan->interval_count}}</td>
                 <td>{{$plan->cost}}</td>
                  <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('admin.package.show', $plan->id)}}" class="dropdown-item"><i class="icon-eye"></i> View</a>
                                    <a href="{{route('admin.package.edit', $plan->id)}}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                    <a href="" data-url="{{route('admin.package.destroy', $plan->id)}}" class="dropdown-item" id="delete_item" data-id="{{ $plan->id }}"><i class="icon-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </td>
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