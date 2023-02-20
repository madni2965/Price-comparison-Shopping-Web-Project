<div>
    
    <!-- Carousel Start -->
  <!-- Carousel Start -->
  <div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('design')}}/img/carousel-1.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Low Price Product</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Low price with analysis and high quality product availabe on Amazon,ebay and Alibaba</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{route('Drone')}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('design')}}/img/carousel-2.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Used Products</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">High Quality with cheap price second hand products availabe just click and go to main shop and login then purcahse it quickly intead of others</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{route("Beding")}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('design')}}/img/carousel-3.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Coupons Codes Availabe </h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Summer collections , Winter collection & Events of any kind related products availabe here , just click and purchase on Amazon, ebay and Alibaba with Cheap price</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{route('Laptop')}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{ asset('design')}}/img/offer-1.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="{{route('Tech')}}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{ asset('design')}}/img/offer-2.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="{{route('Smartwatches')}}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa  text-primary m-0 mr-3"><i class="fa-solid fa-user"></i></h1>
                    <h5 class="font-weight-semi-bold m-0">Create Account Before Shopping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <a href="https://www.amazon.com"><h5 class="font-weight-semi-bold m-0">Register/Login On Amazon</h5></a>
                 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <a href="https://www.ebay.com/"> <h5 class="font-weight-semi-bold m-0">Register/Login On Ebay</h5></a> 
                  
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <a href="https://www.alibaba.com/"><h5 class="font-weight-semi-bold m-0">Register/Login On Alibaba</h5></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{route('Smartphones')}}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cart-1.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Smart Phones</h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{route('Laptop')}}" >
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cat-2.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Laptops</h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{route('Drone')}}">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cart-3.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Drone Cameras</h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{route('Sewing')}}">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cart-4.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Sewing Machines</h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{route('Beding')}}">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cart-5.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Bedding</h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{route('Tech')}}">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cart-6.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Tech Accessories</h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{route('Skincare')}}">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cart-7.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Skin Care</h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{route('Wirelesschrager')}}">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cart-8.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Wireless Phone Chargers </h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{route('Backcushion')}}">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cart-9.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Back Cushion</h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{route('Smartwatches')}}">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cart-10.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Smart Watch</h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none"  href="{{route('Bspeaker')}}">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cart-11.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Bluetooth Speaker</h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none"  href="{{route('Projector')}}">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('design')}}/catag-img/cart-12.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Portable Projector</h6>
                            <small class="text-body">Many Products</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Categories End -->


    
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{asset('design')}}/img/12.jpeg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="{{route('Laptop')}}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{asset('design')}}/img/34.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="https://www.alibaba.com/showroom/winter-products-2022.html" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->
   
    <section class="section-m1 banner">
        <h4>Black Friday Sales</h4>
        <h2>Upto <span>70% Off</span>- All Products & Accessories</h2>
        <a href="https://www.amazon.com/s?k=black+friday+early+deals&adgrpid=123074334170&gclid=CjwKCAiA76-dBhByEiwAA0_s9VNhQNnzeJc52wGJ_UF_7MzhacByGnMqm8rubEhlr_PO6sWVNiPUhhoCQXUQAvD_BwE&hvadid=585412407835&hvdev=c&hvlocphy=9060971&hvnetw=g&hvqmt=b&hvrand=1978862296052696630&hvtargid=kwd-297458609999&hydadcr=22367_13333092&tag=hydglogoo-20&ref=pd_sl_6on12t0u8r_b" class="btn btn-primary">Shop Now</a>
        <style>
            .banner{
             display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          text-align: center;
          background-image: url('{{asset('design')}}/img/ban-bg.jpg');
           width: 100%;
          height: 40vh;
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;
          background-position: center 100%;
         }
         #banner h4{
            
             font-size: 16px;
         }
         #banner h2{
             
             font-size: 30px;
             padding: 10px 0;
         }
         #banner h2 span{
             color: #ef3636;
            
         }
         </style>
   </section>
   

{{-- <div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="{{asset('design')}}/img/vendor-1.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('design')}}/img/vendor-2.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('design')}}/img/vendor-3.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('design')}}/img/vendor-4.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('design')}}/img/vendor-5.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('design')}}/img/vendor-6.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('design')}}/img/vendor-7.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('design')}}/img/vendor-8.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
 --}}


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-1.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-2.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-3.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-4.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-5.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-6.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-7.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-8.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-9.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-10.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-11.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-12.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-13.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-14.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-15.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-16.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-17.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-18.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-19.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="{{asset('design')}}/brands/vendor-20.jpg" alt="">
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
</div>
