@extends('layouts.app')

@section('content')
   {{-- <div class="row">
        <div class="col-lg-4">

            <!-- Members online -->
            <div class="card bg-teal-400">
                <div class="card-body">
                    <div class="d-flex">
                        <h3 class="font-weight-semibold mb-0">17-09-2019</h3>
                    </div>

                    <div>
                       Next Delivery Date
                        <div class="font-size-sm opacity-75">Previous: 09-09-2019</div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div id="members-online"></div>
                </div>
            </div>
            <!-- /members online -->

        </div>

        <div class="col-lg-4">

            <!-- Current server load -->
            <div class="card bg-pink-400">
                <div class="card-body">
                    <div class="d-flex">
                        <h3 class="font-weight-semibold mb-0">49.4%</h3>
                    </div>

                    <div>
                        Current server load
                        <div class="font-size-sm opacity-75">34.6% avg</div>
                    </div>
                </div>

                <div id="server-load"></div>
            </div>
            <!-- /current server load -->

        </div>

        <div class="col-lg-4">

            <!-- Today's revenue -->
            <div class="card bg-blue-400">
                <div class="card-body">
                    <div class="d-flex">
                        <h3 class="font-weight-semibold mb-0">$18,390</h3>
                    </div>

                    <div>
                        Today's revenue
                        <div class="font-size-sm opacity-75">$37,578 avg</div>
                    </div>
                </div>

                <div id="today-revenue"></div>
            </div>
            <!-- /today's revenue -->

        </div>
    </div>--}}

   <div class="card">
       <div class="card-header header-elements-inline">
           <h6 class="card-title">Running Subscription</h6>

       </div>

       <div class="card-body pb-0">
           <div class="row">
               <div class="col-xl-6">
                   <div class="media flex-column flex-sm-row mt-0 mb-3">
                       <div class="mr-sm-3 mb-2 mb-sm-0">
                           <div class="card-img-actions">
                               <a href="#">
                                   <img src="{{ asset('asset/global_assets/images/placeholders/placeholder.jpg')}}"
                                        class="img-fluid img-preview rounded" alt="">
                                   <span class="card-img-actions-overlay card-img"><i
                                           class="icon-play3 icon-2x"></i></span>
                               </a>
                           </div>
                       </div>

                       <div class="media-body">
                           <h6 class="media-title"><a href="#">RISTRETTO</a> </h6>
                           <ul class="list-inline list-inline-dotted text-muted mb-2">
                               <li class="list-inline-item"><i class="icon-book-play mr-2"></i> INTENSITY <span class="badge badge-success">12</span>
                               <li class="list-inline-item"><i class="icon-book-play mr-2"></i> RISTRETTO <span class="badge badge-success">12 ml</span>
                               </li>
                           </ul>
                           The him father parish looked has sooner. Attachment frequently terminated son
                           hello...
                       </div>
                   </div>

               </div>

               <div class="col-xl-6">
                   <div class="media flex-column flex-sm-row mt-0 mb-3">
                       <div class="mr-sm-3 mb-2 mb-sm-0">
                           <div class="card-img-actions">
                               <a href="#">
                                   <img src="{{ asset('asset/global_assets/images/placeholders/placeholder.jpg')}}"
                                        class="img-fluid img-preview rounded" alt="">
                                   <span class="card-img-actions-overlay card-img"><i
                                           class="icon-play3 icon-2x"></i></span>
                               </a>
                           </div>
                       </div>

                       <div class="media-body">
                           <h6 class="media-title"><a href="#">RISTRETTO</a></h6>
                           <ul class="list-inline list-inline-dotted text-muted mb-2">
                               <li class="list-inline-item"><i class="icon-book-play mr-2"></i> INTENSITY <span class="badge badge-success">12</span>
                               <li class="list-inline-item"><i class="icon-book-play mr-2"></i> RISTRETTO <span class="badge badge-success">12 ml</span>
                               </li>
                           </ul>
                           The him father parish looked has sooner. Attachment frequently terminated son
                           hello...
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

    <div class="card">
        <div class="card-header header-elements-sm-inline">
            <h6 class="card-title">Delivery History</h6>
            {{--<div class="header-elements">
                <a class="text-default daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
                    <i class="icon-calendar3 mr-2"></i>
                    <span></span>
                </a>
            </div>--}}
        </div>

        <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
            <div class="d-flex align-items-center mb-3 mb-md-0">
                <div id="tickets-status"></div>
                <div class="ml-3">
                    <h5 class="font-weight-semibold mb-0">Next Delivery Date
                    </h5>
                    <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Sep 16, 10:00 am</span>
                </div>
            </div>

            <div class="d-flex align-items-center mb-3 mb-md-0">
                <a href="#"
                   class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                    <i class="icon-alarm-add"></i>
                </a>
                <div class="ml-3">
                    <h5 class="font-weight-semibold mb-0">1,132</h5>
                    <span class="text-muted">Previous Delivery Count</span>
                </div>
            </div>

            <div class="d-flex align-items-center mb-3 mb-md-0">
                <a href="#"
                   class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                    <i class="icon-spinner11"></i>
                </a>
                <div class="ml-3">
                    <h5 class="font-weight-semibold mb-0">$ 49.00</h5>
                    <span class="text-muted">Package Price</span>
                </div>
            </div>

           {{-- <div>
                <a href="#" class="btn bg-teal-400"><i class="icon-statistics mr-2"></i> Report</a>
            </div>--}}
        </div>

        <div class="table-responsive">
            <table class="table text-nowrap">
                <thead>
                <tr>
                    <th class="text-center" style="width: 150px" >Date</th>
                    <th>Description</th>
{{--                    <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>--}}
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center">
                        <h6 class="mb-0">Sep, 12</h6>
                        <div class="font-size-sm text-muted line-height-1">2019</div>
                    </td>

                    <td>
                        <a href="#" class="text-default">
                            <div class="font-weight-semibold">[#1183] Workaround for OS X selects printing bug
                            </div>
                            <span class="text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <h6 class="mb-0">Sep, 12</h6>
                        <div class="font-size-sm text-muted line-height-1">2019</div>
                    </td>

                    <td>
                        <a href="#" class="text-default">
                            <div class="font-weight-semibold">[#1183] Workaround for OS X selects printing bug
                            </div>
                            <span class="text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <h6 class="mb-0">Sep, 12</h6>
                        <div class="font-size-sm text-muted line-height-1">2019</div>
                    </td>

                    <td>
                        <a href="#" class="text-default">
                            <div class="font-weight-semibold">[#1183] Workaround for OS X selects printing bug
                            </div>
                            <span class="text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <h6 class="mb-0">Sep, 12</h6>
                        <div class="font-size-sm text-muted line-height-1">2019</div>
                    </td>

                    <td>
                        <a href="#" class="text-default">
                            <div class="font-weight-semibold">[#1183] Workaround for OS X selects printing bug
                            </div>
                            <span class="text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <h6 class="mb-0">Sep, 12</h6>
                        <div class="font-size-sm text-muted line-height-1">2019</div>
                    </td>

                    <td>
                        <a href="#" class="text-default">
                            <div class="font-weight-semibold">[#1183] Workaround for OS X selects printing bug
                            </div>
                            <span class="text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
                        </a>
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
