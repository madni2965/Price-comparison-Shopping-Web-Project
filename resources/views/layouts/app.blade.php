
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Price Comparsion Online Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

   
  <!-- Favicon -->
  <link href="{{ asset('design')}}/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Libraries Stylesheet -->
  <link href="{{ asset('design')}}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{ asset('design')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ asset('design')}}/css/style.css" rel="stylesheet">
 
    @livewireStyles
</head>

<body>
 <!-- Topbar Start -->
 <div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            
            <button class="btn btn-sm btn-light" type="button"><a href="#">About</a></button>
            <button class="btn btn-sm btn-light" type="button"><a href="#">FAQs</a></button>
            <button class="btn btn-sm btn-light" type="button"><a href="#">FAQs</a></button>
            
        </div>
        <div class="col-lg-5 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
               @auth
               <div class="btn-group">
                <button type="button" class="btn btn-sm btn-light" >{{ Auth::user()->name }} </button>
                  
                </div>
            </div>
            <div class="btn-group mx-2">
                <button type="button" class="btn btn-sm btn-light" > <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a></form></button>
               
            </div>
               @else
               <div class="btn-group">
                <button type="button" class="btn btn-sm btn-light" ><a href="{{route('login')}}">Login</a> </button>
                  
                </div>
            </div>
            <div class="btn-group mx-2">
                <button type="button" class="btn btn-sm btn-light" ><a href="{{route('register')}}">SignUp</a></button>
               
            </div>
            @endif
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-light dropdown-toggle fi-rs-angle-down" data-toggle="dropdown"> My Account</button>
                    @auth
                            @if(Auth::user()->utype == 'ADM')        
                    
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button"><a href="{{route('admin.dashboard')}}">Dashboard</a></button>
                    <button class="dropdown-item" type="button"><a href="#">Product</a></button>
                    <button class="dropdown-item" type="button"><a href="#">Catagories</a></button>
                    <button class="dropdown-item" type="button"><a href="#">Customers</a></button>
                    {{-- <button class="dropdown-item" type="button"><a href="#">Product</a></button> --}}
                    
                </div>
                @else
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button"><a href="{{route('user.dashboard')}}">Dashboard</a></button>
                </div>
                @endif
                @endif
            </div>
       
            <div class="d-inline-flex align-items-center d-block d-lg-none">
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-heart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                </a>
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-shopping-cart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                </a> 
            </div>
        </div>
    </div>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Sasta</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Hoga</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
          @livewire('header-search-component')
        </div>
        <div class="col-lg-4 col-6 text-right">
            <p class="m-0">Third Party Service</p>
            <h5 class="m-0">Amazon Alibaba Ebay</h5>
        </div>
    </div>
</div>
<!-- Topbar End -->



    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
             </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Sasta</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Hoga</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="mainindex" class="nav-item nav-link active">Home</a>
                            <a href="{{route('shop')}}" class="nav-item nav-link">Hot Products</a>
                            <a href="{{route('Coupon')}}" class="nav-item nav-link">Coupon</a>
                            <a href="{{route('Event')}}" class="nav-item nav-link">Events</a>
     
                            <a href="{{route('Usedproduct')}}" class="nav-item nav-link">Used Products</a>
                            <a href="contactus" class="nav-item nav-link">Contact Us</a>
                        </div>
                        @livewire('wishlist-icon-component')
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

{{$slot}}


   <!-- Footer Start -->
   <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
            <p class="mb-4">Here we will provide all kind of product  with deeply analysis for customer care.We can prodive the second hand products to everyone. Just come here & enjoy </p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>room#209 Iqbal Hostel, Rahim Yar Khan</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>nmadni827@gmail.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+92 302 2357042</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="mainindex"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Hot Products</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Coupon</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Event</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                        <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                    <p>Subscribe here, new products update daily </p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-square mr-2" href="www.twitter.com/sastahoga"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="www.facebook.com/sastahoga"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="www.linkdin.com/sastahoga"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-square" href="www.instagram.com/sastahoga"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
                &copy; <a class="text-primary" href="www.sastahogablogpost.com">Domain</a>. All Rights Reserved. Designed
                by
                <a class="text-primary" href="#">Nasir Madni</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="{{('design')}}/img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->
  
  


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


         <!-- JavaScript Libraries -->
         <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
         <script src="{{ asset('design')}}/lib/easing/easing.min.js"></script>
         <script src="{{ asset('design')}}/lib/owlcarousel/owl.carousel.min.js"></script>
     
         <!-- Contact Javascript File -->
         <script src="{{ asset('design')}}/mail/jqBootstrapValidation.min.js"></script>
         <script src="{{ asset('design')}}/mail/contact.js"></script>
     
         <!-- Template Javascript -->
         <script src="{{ asset('design')}}/js/main.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
         </script>
   
    @livewireScripts
    @stack('script')
</body>

</html>
