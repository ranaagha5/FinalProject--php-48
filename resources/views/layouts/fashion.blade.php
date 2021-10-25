<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion</title>
    <link rel="stylesheet" href="{{asset('Front/CSS/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/CSS/main.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
    @livewireStyles


    </head>
<body>
    <section class="upper">
       <section class="container">
           <div class="first">
            <p class="par-color">Free Shiping on All orders Over 75$</p>
        </div>
        <div class="second">
           <div class="first-nav">
               <ul>
                   <li><a href="{{URL::to('/profile')}}" class="par-color">My Account</a></li>

                   <li><a href="#" class="par-color">Whishlist</a></li>
                   <li><a href="#" class="par-color">Current: USD</a></li>
                   @livewire('cart-counter')
@auth
    <li class=""><a href="{{URL::to('/logout')}}" class="text-danger">        log out    </a></li>
@endauth

               </ul>
           </div>
        </div>
        </section>

    </section>



       <nav>
        <section class="sec-upper">
<form method="POST" action="{{url('/search')}}">
                {{csrf_field()}}
                <input type="text" name="search" placeholder="Search here What you need....">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
            </section>
           <div class="container">
              <section class="nav_bar">
                   <h2 class="white-txt font-one">Fashion</h2>
                    <ul>
                        <li><a href="#" class="white-txt">Home</a></li>
                        <li class="down-btn"><a href="#" class="white-txt">Woman</a></li>
                        <li class="down-btn "><a href="#" class="white-txt">Men </a></li>
                        <li class="down-btn"><a href="#" class="white-txt">Footwear  </a></li>
                        <li class="down-btn"><a href="#" class="white-txt">Accessories  </a></li>
                        <li class="down-btn "><a href="#" class="white-txt">Sales</a></li>
                        <li class="down-btn "><a href="#" class="white-txt">Blog</a></li>
                        <span class="white-txt" id="bars" style="font-size:50px;cursor:pointer" onclick="openNav()">&#9776; </span>
                    </ul>
              </section>
              <div id="mySidenav" class="sidenav">
                       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <li><a href="#" class="white-txt">Home</a></li>
                        <li class="down-btn"><a href="#" class="white-txt">Woman</a></li>
                        <li class="down-btn "><a href="#" class="white-txt">Men </a></li>
                        <li class="down-btn"><a href="#" class="white-txt">Footwear  </a></li>
                        <li class="down-btn"><a href="#" class="white-txt">Accessories  </a></li>
                        <li class="down-btn "><a href="#" class="white-txt">Sales</a></li>
                        <li class="down-btn "><a href="#" class="white-txt">Blog</a></li>
              </div>

           </div>
       </nav>

             @yield('content')

  <footer class=" text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="links first-links">
        <h5 class="text-uppercase white-txt">Shops</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="par-color">New In</a>
          </li>
          <li>
            <a href="#!" class="par-color">Woman</a>
          </li>
          <li>
            <a href="#!" class="par-color">Men</a>
          </li>
          <li>
            <a href="#!" class="par-color">Schuhe Shoes</a>
          </li>
           <li>
            <a href="#!" class="par-color">Bags &amp; Accessories</a>
          </li>
           <li>
            <a href="#!" class="par-color">Top Brands</a>
          </li>
           <li>
            <a href="#!" class="par-color">Sale &amp; Special Offers</a>
          </li>
           <li>
            <a href="#!" class="par-color">Lookbook</a>
          </li>
        </ul>
      </div>

      <!--Grid column-->

      <!--Grid column-->
      <div class="links second-links">
        <h5 class="text-uppercase white-txt">Informations</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="par-color">About Us</a>
          </li>
          <li>
            <a href="#!" class="par-color">Customer Survice</a>
          </li>
          <li>
            <a href="#!" class="par-color">New Collection</a>
          </li>
          <li>
            <a href="#!" class="par-color">Best Sellers</a>
          </li>
           <li>
            <a href="#!" class="par-color">Manufacturers</a>
          </li>
           <li>
            <a href="#!" class="par-color">Privacy Policy</a>
          </li>
           <li>
            <a href="#!" class="par-color">Team &amp; condition</a>
          </li>
           <li>
            <a href="#!" class="par-color">Blog</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="links third-links">
        <h5 class="text-uppercase white-txt">Customer Service</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="par-color">Search Terms</a>
          </li>
          <li>
            <a href="#!" class="par-color">Advanced Search</a>
          </li>
          <li>
            <a href="#!" class="par-color">Orders and Returns</a>
          </li>
          <li>
            <a href="#!" class="par-color">Contact Us</a>
          </li>
           <li>
            <a href="#!" class="par-color">RSS</a>
          </li>
           <li>
            <a href="#!" class="par-color">Help &amp; FAQs</a>
          </li>
           <li>
            <a href="#!" class="par-color">Consultant</a>
          </li>
           <li>
            <a href="#!" class="par-color">Store Locations</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="links fourth-links">
        <h5 class="text-uppercase white-txt">Newsletter</h5>
        <p class="par-color">Sign up for News Letter</p>
            <input type="email" placeholder=" enter your email">
         <button type="submit" class="white-txt">Subscribe</button>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="end par-color left-txt" style="background-color: rgba(0, 0, 0, 0.2);">
   <div class="container">
         <p>© 2014 ELLA Fashion Store Shopify. All Rights Reserved. Ecommerce Software by shopify.</p>
    <div class="bay-right">
        <h4>Visa</h4>
        <h4>Master Card</h4>
        <h4>Paypal</h4>
    </div>
   </div>

  </div>
  <!-- Copyright -->
</footer>







       <script src="{{asset('Front/JS/custom.js')}}"></script>
       <script src="{{asset('Front/JS/all.min.js')}}"></script>
       <script src="{{asset('Front/JS/bootstrap.min.js')}}"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/udm/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



       @livewireScripts



    </body>
</html>
