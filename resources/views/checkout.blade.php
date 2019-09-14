@extends('layouts.frontend')
@section('content')
  <div class="container-fluid d-block d-lg-none">
            <div class="row py-2 mobi-nav">
                <div class="col-4">
                    <a class="btn " data-toggle="collapse" href="#M-nav" role="button" aria-expanded="false" aria-controls="M-nav">
                        <i class="fas fa-bars"></i>
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <div class="col-4">
                    <!-- <img src="img/logo.svg" alt="" width="100%"> -->
                </div>
                <div class="col-4 text-right">
                    <a class="pr-0" href="bestil.html"><button type="button" class="btn btn-dark font-weight-bold py-2">TRY NOW</button></a>
                </div>
            </div>
            <div class="row bg-dark  py-5 collapse" id="M-nav">
                <div class="col-12 text-center">
                    <p> <a class="font-weight-bold text-white" href="behov.html"> So easy is the </a> </p>
                </div>
                <div class="col-12 text-center">
                    <p> <a class="font-weight-bold text-white" href="kaffen.html"> Coffee </a></p>
                </div>
                <div class="col-12 text-center">
                    <p> <a class="font-weight-bold text-white" href="about.html"> About Us </a></p>
                </div>
                <div class="col-6">
                    <a class="nav-link" href="sign-in.html">
                        <button type="button" class="btn btn-outline-light">SING IN</button>
                    </a>
                </div>
                <div class="col-6 text-right">
                    <a class="nav-link text-white" href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
        <!-- navbar end -->
        <!-- navbar end -->
        <!--  sing in area start -->
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-10">
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2 w-75">
                            <input type="password" class="form-control w-100 " id="inputPassword2" placeholder="Rabatkuponkode">
                        </div>
                        <button type="submit" class="btn btn-dark mb-2 ">Anvend rabatkupon</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 py-5">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="invoice-title d-inline-block "> Invoice information </p>
                        </div>
                        <div class="col-md-6">
                            <p class="d-inline-block float-right mt-2"> Returning customer? <a class="text-dark" href="#"> SIGN IN </a></p>
                        </div>
                    </div>
                    <form class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">First name *</label>
                            <input type="text" class="form-control py-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Surname *</label>
                            <input type="text" class="form-control py-4" id="exampleInputPassword1" placeholder="">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Company name (optional)</label>
                            <input type="text" class="form-control py-4" id="" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Email address *</label>
                            <input type="email" class="form-control py-4" id="" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Phone *</label>
                            <input type="phone" class="form-control py-4" id="" placeholder="">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Country *</label> <br>
                            <label for="exampleInputPassword1">Street Name and No. *</label>
                            <input type="text" class="form-control py-4" id="" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Zip code *</label>
                            <input type="text" class="form-control py-4" id="" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">By *</label>
                            <input type="text" class="form-control py-4" id="" placeholder="">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Create account password *</label>
                            <input type="password" class="form-control py-4" id="" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <p class="invoice-title"> Delivery address</p>
                        </div>
                        <div class="form-group form-check co-md-12">
                            <input type="checkbox" class="form-check-input " id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Second delivery address?</label>
                        </div>
                        <div class="col-md-12">
                            <p class="invoice-title"> More info</p>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Order Notes (optional)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Who referred you to the Coffee Boy? (optional)</label>
                            <input type="text" class="form-control py-4" id="" placeholder="">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 pt-5">
                    <p class="invoice-title"> Your order</p>
                    <div class="box-area bg-grey py-4 px-2 mx-4">
                        <div class="py-4 px-4">
                            <p class="d-inline-block"> Sample Package × 1</p>
                            <p class="d-inline-block float-right"> 29,00 DKK</p>
                        </div>
                        <div class="py-3 px-4">
                            <p class="d-inline-block"> Delivery</p>
                            <p class="d-inline-block float-right"> FREE DELIVERY </p>
                        </div>
                        <div class="bg-light-sm py-4 px-4">
                            <p class="d-inline-block text-uppercase h5 font-weight-bold"> TOTAL </p>
                            <p class="d-inline-block float-right text-uppercase h5 font-weight-bold"> 29.00 DKK </p>
                        </div>
                        <div class="px-4 py-4">
                            <p class="mb-0"> Membership (every 4 weeks) </p>
                            <p> <small> The first round of 60 capsules will be dispatched on August 23, 2019</small></p>
                        </div>
                    </div>
                    <div class="bg-grey py-3 px-4 m-4">
                        <p class="d-inline-block mb-0">Payment cards</p>
                        <img class="w-50 float-right" src="{{asset('frontend/img/payment-creditcards.svg')}}" alt="">
                    </div>
                    <div class="form-group form-check  mx-4">
                        <input type="checkbox" class="form-check-input " id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Receive exclusive offers and news about our products</label>
                    </div>
                    <div class="my-4">
                        <button class="btn btn-dark w-100 mx-4 py-4 text-uppercase font-weight-bold"> Proceed to payment</button>
                    </div>
                    <div class="form-group form-check  mx-4">
                        <input type="checkbox" class="form-check-input " id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I accept the Coffee Boy Terms and Conditions *</label>
                    </div>
                </div>
            </div>
        </div>
    <!--    fotter top start -->
@endsection
