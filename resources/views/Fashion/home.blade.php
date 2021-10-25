@extends('layouts.fashion')
@section('content')
         <header></header>
         <main>
    <section class="container">
       <div class="main-all">
           <div class="first-main">
            <img src="{{asset('Front/photos/Webp.net-resizeimage%20(5).jpg')}}" alt="girl">
            <h6 class="pinky-color font-two">Hot Collection</h6>
            <h3 class="upper-txt">New Trend For Woman</h3>
            <p class="par-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos enim eveniet dolorem sed animi sequi tenetur quaerat, et blanditiis atque Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis praesentium nisi, ea temporibus, voluptate quia!</p>
            <button type="button">Shop Now</button>
        </div>
        <div class="second-main">
          <div class="first-img">
              <img src="{{asset('Front/photos/Webp.net-resizeimage%20(6).jpg')}}" alt="girl">
          </div>
           <div class="second-img">
               <img src="{{asset('Front/photos/Webp.net-resizeimage%20(3).jpg')}}" alt="girl">
           </div>
        </div>
       </div>
         <section>
             <section class="main-sec-wel">
                 <div class="container">
                     <h4 class="center-txt">Featured Items</h4>

              <div class="row">
                  <div class="col-md-12 text-center">

                     @livewire('product-nav')


                  </div>
              </div>
             <!--            style="width: 18rem;"-->
                  <div class="all-kinds  list" id="all">
                         @livewire('product')




                  </div>

                  <div class="men hide mystyle list-two" id="men" >
                           <div class="first-line">
                         <div class="card" >
                            <img class="card-img-top" src="{{asset('Front/photos/pexels-andrea-piacquadio-8371m40.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                               <h5 class="card-text">Suspendisse et.</h5>
                            </div>
                          </div>
                           <div class="card" >
                            <img class="card-img-top" src="{{asset('Front/photos/Webp.net-resizeimage%20(4).jpg')}}"alt="Card image cap">
                            <div class="card-body">
                               <h5 class="card-text">Suspendisse et.</h5>
                            </div>
                          </div>

             <!--                         -->
                         <div class="card" >
                            <img class="card-img-top" src="{{asset('Front/photos/Webp.net-resizeimage%20(7).jpg')}}" alt="Card image cap">
                            <div class="card-body">
                               <h5 class="card-text">Suspendisse et.</h5>
                            </div>
                          </div>

             <!--                      -->
                      <div class="card" >
                            <img class="card-img-top" src="{{asset('Front/photos/pexels-daria-shevtsova-1030946.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-text">Suspendisse et.</h5>
                            </div>
                          </div>
                     </div>
                  </div>
                 </div>
              </section>

             </section>
             <section class="bannerr">
                  <img src="{{asset('Front/photos/Screenshot1.png')}}" alt="banner1" width="50%">
                  <img src="{{asset('Front/photos/Screenshot2.png')}}" alt="banner 2" width="50%">
              </section>
              <section class="trending" id="trend">
                  <div class="container">
                        <h4 class="center-txt"> Trending Items</h4>
                       <div class="row">
                         @livewire('product-trends')

                       </div>

                      <div class="learn-more">
                          <div class="container">
                              <button id ="learn-more-btn"> Learn More </button>
                              </div>
                      </div>

                  </div>
              </section>
         </section>
         <section class="more"></section>
         <section class="latest-blog">
             <div class="container">
                 <h4><span>Latest Blog</span></h4>
                 <div class="first-line">
                     <div class="card" >
                         <img class="card-img-top" src="{{asset('Front/photos/Webp.net-resizeimage%20(2).jpg')}}" alt="Card image cap">
                         <div class="card-body">
                           <h5 class="card-text">Some Headline Here</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa nulla mollitia deserunt a voluptatum reiciendis assumenda nobis officia esse quibusdam.</p>
                           <div class="fav">
                             <button class="btn border border-dark shadow-none">
                                 Read More
                             </button>
                           </div>
                         </div>
                       </div>
                       <div class="card" >
                         <img class="card-img-top" src="{{asset('Front/photos/Webp.net-resizeimage%20(2).jpg')}}" alt="Card image cap">
                         <div class="card-body">
                           <h5 class="card-text">Some Headline Here</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa nulla mollitia deserunt a voluptatum reiciendis assumenda nobis officia esse quibusdam.</p>
                           <div class="fav">
                             <button class="btn border border-dark shadow-none">
                                 Read More
                             </button>
                           </div>
                         </div>
                       </div>
                       <div class="card" >
                         <img class="card-img-top" src="{{asset('Front/photos/Webp.net-resizeimage%20(2).jpg')}}" alt="Card image cap">
                         <div class="card-body">
                           <h5 class="card-text">Some Headline Here</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa nulla mollitia deserunt a voluptatum reiciendis assumenda nobis officia esse quibusdam.</p>
                           <div class="fav">
                               <button class="btn border border-dark shadow-none">
                                   Read More
                               </button>
                           </div>
                         </div>
                       </div>

                </div>
             </div>
         </section>
         <section class="shop-by-brand">
             <div class="container">
                 <h4><span>Shop By Brand</span></h4>
                 <div class="all-brand-icons">
                      <div class="brand-icon">
                     <i class="fab fa-500px"></i>
                     <h5>Themeforest</h5>
                 </div>
                 <div class="brand-icon">
                     <i class="fab fa-500px"></i>
                     <h5>Themeforest</h5>
                 </div>
                 <div class="brand-icon">
                     <i class="fab fa-500px"></i>
                     <h5>Themeforest</h5>
                 </div>
                 <div class="brand-icon">
                     <i class="fab fa-500px"></i>
                     <h5>Themeforest</h5>


                 </div>
                 </div>
             </div>
         </section>
         </main>
@endsection

