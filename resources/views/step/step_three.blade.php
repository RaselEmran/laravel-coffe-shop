<form  method="post" action="{{ route('card-payment') }}" id="content_form">
 <div class="row">
                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-md-12">
                                    <p class="invoice-title d-inline-block text-dark"> Invoice information </p>
                                    </div>
                                </div>
                               

                                    <div class="form-group col-md-6">
                                        <label for="first_name">Fornavn *</label>
                                        <input type="text" class="form-control py-4" id="first_name" aria-describedby="emailHelp" placeholder="" name="first_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Efternavn *</label>
                                        <input type="text" class="form-control py-4" id="last_name" placeholder="" name="last_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">E-mail *</label>
                                        <input type="email" name="email" class="form-control py-4" id="email" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">Telefonnummer *</label>
                                        <input type="phone" class="form-control py-4" name="phone" id="phone" placeholder="">
                                    </div>
                                    <!--<div class="form-group col-md-12">-->
                                    <!--    <label for="exampleInputPassword1">Country *</label> <br>-->
                                    <!--    <label for="exampleInputPassword1">Street Name and No. *</label>-->
                                    <!--    <input type="text" class="form-control py-4" id="" placeholder="">-->
                                    <!--</div>-->
                                    <div class="form-group col-md-6">
                                        <label for="post_code">Postnummer *</label>
                                        <input type="text" class="form-control py-4" name="post_code" id="post_code" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="by">By *</label>
                                        <input type="text" class="form-control py-4" name="by" id="by" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="password">Adgangskode *</label>
                                        <input type="password" class="form-control py-4" name="password" id="password" placeholder="">
                                    </div>

                                    <div class="col-md-12">
                                        <p class="invoice-title"> More info</p>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="note">Noter til levering (evt sted pakken må stilles mm.)</label>
                                        <textarea class="form-control" id="note" name="note" rows="2"></textarea>
                                    </div>
                                    <input type="hidden" name="plan_id" id="plan_id" value="{{$plan}}">
                                    <input type="hidden" name="price" id="price" value="{{$price}}">
                                    <input type="hidden" name="total" id="total" value="{{$price}}">
                                    <input type="hidden" name="pkg_id" id="pkg_id" value="{{$pkg}}">
                                    <input type="hidden" name="pkg_sub_id" id="pkg_sub_id" value="{{$pkg_sub}}">
                                    <input type="hidden" name="coffee_id" id="coffee_id" value="{{$product}}">
                                    <input type="hidden" name="delivary_date" value="{{ date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")+14, date("Y")))}}">


                            </div>
                            <div class="col-md-6 ">
                                <p class="invoice-title mx-4 text-dark"> Din bestilling</p>
                                <div class="box-area bg-grey py-4 px-2 mx-4">
                                    <div class="py-4 px-4">
                                        <p class="d-inline-block"> Prøvepakke × 1</p>
                                        <p class="d-inline-block float-right"> <span id="show_price">{{$price}}</span>DKK</p>

                                    </div>
                                    <div class="py-3 px-4">
                                        <p class="d-inline-block"> Fragt</p>
                                        <p class="d-inline-block float-right">Gratis </p>
                                    </div>
                                    <div class="bg-light-sm py-4 px-4">
                                        <p class="d-inline-block text-uppercase h5 font-weight-bold"> TOTAL </p>
                                        <p class="d-inline-block float-right text-uppercase h5 font-weight-bold"> <span id="show_total">{{$price}}</span>DKK </p>
                                    </div>
                                    <div class="px-4 py-4">
                                        <p class="mb-0"> Medlemskab (Hver 4 uge)  </p>
                                        <p> <small>Din første opfyldning vil være @php
                                            echo date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")+14, date("Y")))
                                        @endphp </small></p>
                                    </div>
                                </div>
                                <div class="bg-grey py-3 px-4 m-4">
                                    <p class="d-inline-block mb-0">Betalingskort</p>
                                    <img class="w-50 float-right" src="{{asset('landing/img/payment-creditcards.svg')}}" alt="">
                                </div>
                                <div class="form-group form-check  mx-4">

                                    <label class="form-check-label" for="exampleCheck3">
                                        <input type="checkbox" class="form-check-input " id="exampleCheck3"> &nbsp;Modtage nyheder og andet godt</label>
                                </div>
                                <div class="my-4">
                                    <button type="submit" class="btn btn-dark w-100 mx-4 py-4 text-uppercase font-weight-bold"> Tilmeld dig </button>
                                </div>
                                <div class="form-group form-check  mx-4">

                                    <label class="form-check-label" for="exampleCheck2"><input type="checkbox" class="form-check-input " id="exampleCheck2"> &nbsp; Accepter  <a href="handelsbetingelser.html" target="_blank"> Handelsbetingelser *</a></label>
                                </div>
                            </div>
                            
                        </div>
                
                    </form>