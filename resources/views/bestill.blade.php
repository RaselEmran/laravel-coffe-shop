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
    <div class="container bg-white py-5" id="main_body">
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
                        {{-- <a href="{{ route('checkout') }}"> --}}
                            <button type="button" class="btn btn-dark text-uppercase px-5 py-3 font-weight-bold " id="first_step">Click Here</button>{{-- </a> --}}
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

@push('js')
 <script>
     $("#first_step").on('click',function(){
      

           $.ajax({

              type: 'GET',
              url: "{{URL::to('/step-one')}}",
              dateType: 'html',
              success: function(data){
                $("#main_body").html("");
                $("#main_body").html(data);
                console.log(data);
             
               }
              
            });
     });

     $(document).on('click','#pkg_button',function(){
            var pkg =$(this).data('package');
            var price =$(this).data('price');
            var product =$(this).data('product');

           $.ajax({

              type: 'GET',
              url: "{{URL::to('/step-two')}}",
              data : {pkg:pkg,price:price,product:product},
              dateType: 'html',
              success: function(data){
                $("#main_body").html("");
                $("#main_body").html(data);
               console.log(data);
               }
              
            });
     });
 </script>
 <script>
        $(document).on('click','#pkg1_sub3',function(){
            var pkg =$("#pkg").val();
            var product =$("#product_id").val();
            var price =$("#pkg_price").val();
            var pkg_sub =$(this).data('id');
            var plan =$(this).data('plan');
            console.log(price);
            $.ajax({

              type: 'GET',
              url: "{{URL::to('/step-three')}}",
              data : {pkg:pkg,price:price,product:product,pkg_sub:pkg_sub,plan:plan},
              dateType: 'html',
              success: function(data){
                $("#main_body").html("");
                $("#main_body").html(data);
               console.log(data);
               }
              
            });
            // $("#show_price").text(price);
            // $("#show_total").text(price);
            // $("#price").val(price);
            // $("#total").val(price);
            // $("#pkg_id").val(pkg);
            // $("#pkg_sub_id").val(pkg1_sub3);
            // $("#coffee_id").val(product);
            // $("#plan_id").val(plan);


        });

         $(document).on('click','#pkg1_sub2',function(){
            var pkg =$("#pkg").val();
            var price =$("#pkg_price").val();
            var pkg_sub =$(this).data('id');
            var product =$("#product_id").val();
            var plan =$(this).data('plan');

          $.ajax({

              type: 'GET',
              url: "{{URL::to('/step-three')}}",
              data : {pkg:pkg,price:price,product:product,pkg_sub:pkg_sub,plan:plan},
              dateType: 'html',
              success: function(data){
                $("#main_body").html("");
                $("#main_body").html(data);
               console.log(data);
               }
              
            });

            // $("#show_price").text(price);
            // $("#show_total").text(price);
            //  $("#price").val(price);
            // $("#total").val(price);
            // $("#pkg_id").val(pkg);
            // $("#pkg_sub_id").val(pkg1_sub2);
            // $("#plan_id").val(plan);
            // console.log(plan);

        });

        $(document).on('click','#pkg1_sub1',function(){
            var pkg =$("#pkg").val();
            var price =$("#pkg_price").val();
            var pkg_sub =$(this).data('id');
            var product =$("#product_id").val();
            var plan =$(this).data('plan');

            $.ajax({

              type: 'GET',
              url: "{{URL::to('/step-three')}}",
              data : {pkg:pkg,price:price,product:product,pkg_sub:pkg_sub,plan:plan},
              dateType: 'html',
              success: function(data){
                $("#main_body").html("");
                $("#main_body").html(data);
               console.log(data);
               }
              
            });

            // $("#show_price").text(price);
            // $("#show_total").text(price);
            //  $("#price").val(price);
            // $("#total").val(price);
            // $("#pkg_id").val(pkg);
            // $("#pkg_sub_id").val(pkg1_sub1);
            // $("#coffee_id").val(product);
            // $("#plan_id").val(plan);
            // console.log(price);

        });
 </script>
    <script>
        $(document).on('submit','#content_form', function(e) {
        e.preventDefault();
        $('#submit').hide();
        $('#submiting').show();
        $(".error").remove();
        var submit_url = $('#content_form').attr('action');
        //Start Ajax
        var formData = new FormData($("#content_form")[0]);
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function(data) {
                  if(data.status == 'danger'){
                    toastr.error(data.message);


                  }
              else{
                toastr.success(data.message);
                $('#submit').show();
                $('#submiting').hide();
                $('#modal_remote').modal('toggle');
                 if (data.goto) {
                   setTimeout(function(){

                     window.location.href=data.goto;
                   },2500);
                }

            }
            },
            error: function(data) {
                var jsonValue = data.responseJSON;
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function(key, value) {
                        const first_item = Object.keys(errors)[i];
                        const message = errors[first_item][0];
                        if ($('#' + first_item).length > 0) {

                            $('#' + first_item).after(function(){
                                return "<div class='text-danger error'>"+value+"</div>";
                            });

                        }

                        // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                        toastr.error(value);
                        i++;
                    });
                } else {
                    toastr.error(jsonValue.message);

                }
                $('#submit').show();
                $('#submiting').hide();
            }
        });
    });
    </script>

    <script>
        @if ((Session::has('success-message')))
        toastr.success({{
        Session::get('success-message') }});
        
        @endif
    </script>
@endpush
