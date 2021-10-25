@extends('layouts.fashion')
@section('content')

 <main>
     <div class="container">
         <div class="container">
             <div class="table-responsive cart_info">
             <table class="table table-condensed">
                 <thead>
                     <tr class="cart_menu">
                         <td class="image">Item</td>
                         <td class="description">Description</td>
                         <td class="price">Price</td>
                         <td class="total">Total</td>
                     </tr>
                 </thead>
                 <tbody>
                     @if (isset($cart_products))
                     @foreach($cart_products as $product)
                        <tr>
                            <td class="w-25">
                                <img class="d-block w-25 h-25" src="{{$product->image_url}}" alt="">
                            </td>
                            <td class="w-25">
                                {{$product->title}}
                            </td>
                            <td class="w-25">
                                {{$product->price}}$
                            </td>
                            <td class="w-25">
                                {{$product->price*0.9}}$
                            </td>
                        </tr>
                     @endforeach
                     @endif



                 </tbody>
             </table>
         </div>

<!--           -->
        <section id="do_action">
     <div class="container">
         <div class="heading">
             <h3>What would you like to do next?</h3>
             <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
         </div>
         <div class="roww">
             <div class="col-sm-6">
                 <div class="chose_area">
                     <ul class="user_option">
                         <li>
                             <input type="checkbox">
                             <label>Use Coupon Code</label>
                         </li>
                         <li>
                             <input type="checkbox">
                             <label>Use Gift Voucher</label>
                         </li>
                         <li>
                             <input type="checkbox">
                             <label>Estimate Shipping &amp; Taxes</label>
                         </li>
                     </ul>
                     <ul class="user_info">
                         <li class="single_field">
                             <label>Country:</label>
                             <select>
                                 <option>United States</option>
                                 <option>Bangladesh</option>
                                 <option>UK</option>
                                 <option>India</option>
                                 <option>Pakistan</option>
                                 <option>Ucrane</option>
                                 <option>Canada</option>
                                 <option>Dubai</option>
                             </select>

                         </li>
                         <li class="single_field">
                             <label>Region / State:</label>
                             <select>
                                 <option>Select</option>
                                 <option>Dhaka</option>
                                 <option>London</option>
                                 <option>Dillih</option>
                                 <option>Lahore</option>
                                 <option>Alaska</option>
                                 <option>Canada</option>
                                 <option>Dubai</option>
                             </select>

                         </li>
                         <li class="single_field zip-field">
                             <label>Zip Code:</label>
                             <input type="text">
                         </li>
                     </ul>
                     <div class="check-out-link ">
                     <a class="btn btn-default update" href="">Get Quotes</a>
                     <a class="btn btn-default check_out" href="">Continue</a>
                     </div>
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="total_area">
                     <ul>
                         <li>Cart Sub Total <span>$59</span></li>
                         <li>Eco Tax <span>$2</span></li>
                         <li>Shipping Cost <span>Free</span></li>
                         <li>Total <span>$61</span></li>
                     </ul>
                     <div class="check-out-link">
                         <a class="btn btn-default update center-txt" href="">Update</a>
                         <a class="btn btn-default check_out center-txt" href="">Check Out</a>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </section>
         </div>
     </div>
 </main>
@endsection



