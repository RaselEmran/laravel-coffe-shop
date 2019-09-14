@extends('layouts.frontend')
@section('content')
    <div class="container card mt-5 mb-4">
        <div class="row py-4 text-center">
            <div class="col-md-4">
                <p class="font-weight-bold"> <span class="border border-dark rounded-circle px-2 py-1"> 1 </span> &nbsp; Get your sample package</p>
            </div>
            <div class="col-md-4">
                <p class="font-weight-bold"> <span class="border border-dark rounded-circle px-2 py-1"> 2 </span> &nbsp; Get your sample package</p>
            </div>
            <div class="col-md-4">
                <p class="font-weight-bold"> <span class="border border-dark rounded-circle px-2 py-1"> 3</span> &nbsp; Get your sample package</p>
            </div>
        </div>
    </div>
    <div class="container bg-white py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('frontend/img/trial-step-boxes.jpg')}}" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <p class="banner-title"> Sample Package</p>
                <p> It will be delivered within 1-2 days in your mailbox. We send with the newspaper distribution. So there is fresh morning coffee already tomorrow.</p>
                <hr>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <p class="mb-0"> <small class="font-weight-bold"> Ristretto capsules 10x</small></p>
                        <p> <small> Strength: 12</small></p>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-0"> <small class="font-weight-bold"> Ristretto capsules 10x</small></p>
                        <p> <small> Strength: 12</small></p>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-0"> <small class="font-weight-bold"> Ristretto capsules 10x</small></p>
                        <p> <small> Strength: 12</small></p>
                    </div>
                </div>
                <hr>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <p class="h2 only"> Only 29, - </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('checkout') }}">
                            <button type="button" class="btn btn-dark text-uppercase px-5 py-3 font-weight-bold ">Click Here</button></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 my-auto">
                <img src="{{asset('frontend/img/icon-heart-sand.svg')}}" alt="">
                <span> The capsules are suitable for </span> <br>
                <span class="ml-4"> The capsules are suitable for </span>
            </div>
            <div class="col-md-4 my-auto">
                <img src="{{asset('frontend/img/icon-heart-sand.svg')}}" alt="">
                <span> The capsules are suitable for </span> <br>
                <span class="ml-4"> The capsules are suitable for </span>
            </div>
            <div class="col-md-2 my-auto">
                <img src="{{asset('frontend/img/icon-heart-sand.svg')}}" alt="">
                <span> The capsules are suitable for </span> <br>
            </div>
            <div class="col-md-2 my-auto">
                <img src="{{asset('frontend/img/icon-heart-sand.svg')}}" alt="">
                <span> The capsules are suitable for </span> <br>
            </div>
        </div>
    </div>
    <!-- area end -->
    <!--    ratting area start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-3 col-6">
                <img class="w-100" src="{{ asset('frontend/img/Save-money-icon.png')}}" alt="">
            </div>
            <div class="col-md-3 col-6">
                <img class="w-100" src="{{ asset('frontend/img/Quality-Coffee-icon.png')}}" alt="">
            </div>
            <div class="col-md-3 col-6">
                <img class="w-100" src="{{ asset('frontend/img/Flexibility-icon.png')}}" alt="">
            </div>
            <div class="col-md-3 col-6">
                <img class="w-100" src="{{ asset('frontend/img/Sustainability-icon.png')}}" alt="">
            </div>
        </div>
    </div>
    <!--    ratting area end -->
    <div class="container bg-white py-5 mb-5">
        <div class="accordion" id="accordionExample">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-muted h5 font-weight-bold"> sample package</p>

                    <div class="">
                        <div class="" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fas fa-arrow-right"></i>    Can I try the coffee before joining?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-arrow-right"></i>     How do I receive my sample pack?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-arrow-right"></i>   Can you send my first round of fillings sooner or later?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fas fa-arrow-right"></i>    How long is the shelf life?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <p class="text-muted h5 font-weight-bold"> membership</p>

                    <div class="">
                        <div class="" id="headingOne1">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                    <i class="fas fa-arrow-right"></i>    Can I try the coffee before joining?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                    <i class="fas fa-arrow-right"></i>     How do I receive my sample pack?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="" id="headingThree3">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                    <i class="fas fa-arrow-right"></i>   Can you send my first round of fillings sooner or later?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    fotter top start -->
@endsection
