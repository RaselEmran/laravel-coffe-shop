@extends('layouts.master')

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
            <h5 class="card-title">Basic datatable
                <a href="{{route('admin.coffee.create')}}" class="btn btn-link"> <i class="icon-stack-plus mr-1"></i> Add Coffee</a>
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Intensity</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($coffees as $coffee)
                <tr>
                    <td>{{$loop->index}}</td>
                    <td><a href="{{route('admin.coffee.show', $coffee->id)}}">{{$coffee->title}}</a></td>
                    <td>{{Str::limit($coffee->description, 50)}}</td>
                    <td>{{$coffee->intensity .' / '. $coffee->total_intensity}}</td>
                    <td><span class="badge badge-{{$coffee->status == 1 ? 'success' : 'danger' }}">Active</span></td>
                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('admin.coffee.show', $coffee->id)}}" class="dropdown-item"><i class="icon-eye"></i> View</a>
                                    <a href="{{route('admin.coffee.edit', $coffee->id)}}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                    <a href="{{route('admin.coffee.delete', $coffee->id)}}" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
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
      $('.datatable-basic').DataTable();
</script>
@endpush