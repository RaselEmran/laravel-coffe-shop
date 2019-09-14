@extends('layouts.frontend')
@section('content')
    <!--   banner area start -->
    <section class="behov-banner" style="background: url({{ asset('frontend/img/Saaleterdet.png') }});">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 ml-auto pl-5 text-justify text-black" style="font-weight: bold;">
                    <p class="banner-title ">NEVER DRY ...</p>
                    <p> Coffee has always been of great importance in my life, ever since I was a kid. Here I remember clearly the visits of my grandmother. She had always bought imported coffee that was roasted with love - and it could clearly be smelled when you entered the apartment, where the air was always filled with the coffee's many aromas. But it wasn't any coffee - it was always quality coffee.</p>
                    <p>
                        Since then I have been a regular user of Nespresso® coffee capsules, as well as the alternatives from the supermarket. But there was nothing that could match Grandma's coffee, and so I set out to create an alternative to the expensive capsules, focusing on quality. From there, many world-wide visits with suppliers and coffee farmers began to explore the market in depth. From all the visits, we chose only the best ones that could deliver a quality that coffee lovers and my grandmother would approve.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--   banner area end -->

    <!--   number setion area start -->
    <section class="profile-area" style="background-image: url({{ asset('frontend/img/Medlemskab.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-6  ml-auto">
                    <p class="banner-title"> Your profile</p>
                    <p> We love our coffee so much that we have made (probably) Denmark's most flexible membership. We have left the check to you. You can change frequency, date of shipment and what variants you want - with just a few clicks.
                    </p>
                    <p> And of course, you can pause or cancel your account at any time.</p>
                    <br>
                    <button type="button" class="btn btn-dark font-weight-bold py-3">START TODAY </button>
                </div>
            </div>
        </div>
    </section>
    <!--   number setion area end-->
@endsection
