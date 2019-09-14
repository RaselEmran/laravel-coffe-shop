@extends('layouts.frontend')
@section('content')
    <!--   banner area start -->
    <section class="kaffen-banner" style="background-image: url({{ asset('frontend/img/kaffen-mobile.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="banner-title"> Toasted with
                        love</p>
                    <p> The coffee boy's coffee is made by coffee enthusiasts
                        who have a great love for coffee and experience in coffee roasting.</p>

                    <button type="button" class="btn btn-dark py-3 px-4 font-weight-bold">Taste tomorrow</button>
                </div>
            </div>
        </div>
    </section>
    <!--   banner area end -->


    <!--   number setion area start -->
    <section class="kaffen-main">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-auto d-block d-sm-none">
                    <!--                    <img src="img/Kaffen_Ristretto-1024x683.png" alt="" width="100%">-->
                </div>
                <div class="col-md-6 bg-map-1">
                    <img class="kaffen-number pl-4" src="{{ asset('frontend/img/kaffen-number-1.svg')}}" alt="">

                    <p class="text-uppercase h3 d-inline-block"> ristretto</p>
                    <p class="mt-4">
                        A rich and intense ristretto made by our coffee roasters consisting mainly of Rubusta beans from Vietnam. The bittersweet and complex aroma really speaks to the senses with its touch of nuts and herbs. </p>

                    <p>
                        The Robusta bean contains twice as much caffeine as the Arabica bean, providing the perfect kick from the morning. Ristretto is therefore our favorite way to say good morning, but it is also perfect as a refresher during the day.

                    </p>
                    <p>
                        Its thick crema, combined with a long and pleasant finish, makes it ideal as a ristretto, but also as espresso, latte, cappuccino and other coffee drinks with milk.

                    </p>

                    <p class="d-inline-block font-weight-bold mr-4"> INTENSITY 12 </p>
                    <div class="colum d-inline-block">
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                    </div>
                    <br>
                    <div class="coffee d-inline-block mx-2">
                        <img class="coffee-cup" src="{{ asset('frontend/img/coffee-cup.svg') }}" alt="">
                        <div class="d-inline-block coffee-text-div">
                            <span> RISTRETTO</span> <br>
                            <span class="small"> 25ML</span>
                        </div>
                    </div>

                    <div class="coffee d-inline-block mx-2">
                        <img class="coffee-cup" src="{{ asset('frontend/img/coffee-cup.svg') }}" alt="">
                        <div class="d-inline-block coffee-text-div">
                            <span> ESPRESSO</span> <br>
                            <span> 40ML</span>
                        </div>
                    </div>

                    <div class="coffee d-inline-block mx-2">
                        <img class="coffee-cup" src="{{ asset('frontend/img/coffee-cup1.svg')}}" alt="">
                        <div class="d-inline-block coffee-text-div">
                            <span class="text-muted"> LUNGO</span> <br>
                            <span class="text-muted"> 100ML</span>
                        </div>
                    </div>
                    <br>

                    <button type="button" class="btn btn-dark py-3 px-4 font-weight-bold mt-5">TRY NOW</button>

                </div>
                <div class="col-md-6 my-auto d-none d-sm-block">
                    <!--                    <img src="img/Kaffen_Ristretto-1024x683.png" alt="" width="100%">-->
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-6 my-auto">
                    <!--                    <img src="img/Kaffen_Espresso-768x512.png" alt="" width="100%">-->
                </div>
                <div class="col-md-6 bg-map-3">
                    <img class="kaffen-number pl-4" src="{{ asset('frontend/img/kaffen-number-2.svg')}}" alt="">

                    <p class="text-uppercase h3 d-inline-block"> ristretto</p>
                    <p class="mt-4">
                        A rich and intense ristretto made by our coffee roasters consisting mainly of Rubusta beans from Vietnam. The bittersweet and complex aroma really speaks to the senses with its touch of nuts and herbs. </p>

                    <p>
                        The Robusta bean contains twice as much caffeine as the Arabica bean, providing the perfect kick from the morning. Ristretto is therefore our favorite way to say good morning, but it is also perfect as a refresher during the day.

                    </p>
                    <p>
                        Its thick crema, combined with a long and pleasant finish, makes it ideal as a ristretto, but also as espresso, latte, cappuccino and other coffee drinks with milk.

                    </p>

                    <p class="d-inline-block font-weight-bold mr-4"> INTENSITY 12 </p>
                    <div class="colum d-inline-block">
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg-none"> </span>
                        <span class="coffe-bg-none"> </span>
                        <span class="coffe-bg-none"> </span>
                        <span class="coffe-bg-none"> </span>
                    </div>
                    <br>
                    <div class="coffee d-inline-block mx-2">
                        <img class="coffee-cup" src="{{ asset('frontend/img/coffee-cup.svg')}}" alt="">
                        <div class="d-inline-block coffee-text-div">
                            <span> RISTRETTO</span> <br>
                            <span class="small"> 25ML</span>
                        </div>
                    </div>

                    <div class="coffee d-inline-block mx-2">
                        <img class="coffee-cup" src="{{ asset('frontend/img/coffee-cup.svg')}}" alt="">
                        <div class="d-inline-block coffee-text-div">
                            <span> ESPRESSO</span> <br>
                            <span> 40ML</span>
                        </div>
                    </div>

                    <div class="coffee d-inline-block mx-2">
                        <img class="coffee-cup" src="{{ asset('frontend/img/coffee-cup1.svg')}}" alt="">
                        <div class="d-inline-block coffee-text-div">
                            <span class="text-muted"> LUNGO</span> <br>
                            <span class="text-muted"> 100ML</span>
                        </div>
                    </div>
                    <br>

                    <button type="button" class="btn btn-dark py-3 px-4 font-weight-bold mt-5">TRY NOW</button>

                </div>

            </div>
            <div class="row py-5">


                <div class="col-md-6 my-auto d-block d-sm-none">
                    <!--                    <img src="img/Kaffen_Lungo-768x512.png" alt="" width="100%">-->
                </div>

                <div class="col-md-6 bg-map-2">
                    <img class="kaffen-number pl-4" src="{{ asset('frontend/img/kaffen-number-3.svg')}}" alt="">

                    <p class="text-uppercase h3 d-inline-block"> ristretto</p>
                    <p class="mt-4">
                        A rich and intense ristretto made by our coffee roasters consisting mainly of Rubusta beans from Vietnam. The bittersweet and complex aroma really speaks to the senses with its touch of nuts and herbs. </p>

                    <p>
                        The Robusta bean contains twice as much caffeine as the Arabica bean, providing the perfect kick from the morning. Ristretto is therefore our favorite way to say good morning, but it is also perfect as a refresher during the day.

                    </p>
                    <p>
                        Its thick crema, combined with a long and pleasant finish, makes it ideal as a ristretto, but also as espresso, latte, cappuccino and other coffee drinks with milk.

                    </p>

                    <p class="d-inline-block font-weight-bold mr-4"> INTENSITY 12 </p>
                    <div class="colum d-inline-block">
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg"> </span>
                        <span class="coffe-bg-none"> </span>
                        <span class="coffe-bg-none"> </span>
                        <span class="coffe-bg-none"> </span>
                        <span class="coffe-bg-none"> </span>
                        <span class="coffe-bg-none"> </span>
                    </div>
                    <br>
                    <div class="coffee d-inline-block mx-2">
                        <img class="coffee-cup" src="{{ asset('frontend/img/coffee-cup.svg')}}" alt="">
                        <div class="d-inline-block coffee-text-div">
                            <span class="text-muted"> RISTRETTO</span> <br>
                            <span class="small text-muted"> 25ML</span>
                        </div>
                    </div>

                    <div class="coffee d-inline-block mx-2">
                        <img class="coffee-cup" src="{{ asset('frontend/img/coffee-cup.svg')}}" alt="">
                        <div class="d-inline-block coffee-text-div">
                            <span class="text-muted"> ESPRESSO</span> <br>
                            <span class="text-muted"> 40ML</span>
                        </div>
                    </div>

                    <div class="coffee d-inline-block mx-2">
                        <img class="coffee-cup" src="{{ asset('frontend/img/coffee-cup1.svg')}}" alt="">
                        <div class="d-inline-block coffee-text-div">
                            <span> LUNGO</span> <br>
                            <span> 100ML</span>
                        </div>
                    </div>
                    <br>

                    <button type="button" class="btn btn-dark py-3 px-4 font-weight-bold mt-5">TRY NOW</button>

                </div>

                <div class="col-md-6 my-auto d-none d-sm-block">
                    <!--                    <img src="img/Kaffen_Lungo-768x512.png" alt="" width="100%">-->
                </div>
            </div>
        </div>
    </section>

    <!--   number setion area end-->
@endsection
