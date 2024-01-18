@extends('frontend.master')
@section('maincontent')

     <!-- breadcrumb-area-start -->
     <div class="breadcrumb__area pt-5 pb-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                           <span class="tp-breadcrumb__active"><a href="{{ route('home') }}">Home</a></span>
                           <span class="dvdr">/</span>
                           <span>Contact Us</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- breadcrumb-area-end -->

         <!-- contact-area-start -->
         <section class="contact-area mb-45">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-6">
                     <div class="tpcontact-inner text-center mt-20">
                        <div class="tpcontact-inner-text">
                           <h5 class="tpcontact-inner-sub-title" style="font-size:16px">Connect With Us</h5>
                           <p>Follow us on <a style="color:#9e54a1" href="https://www.facebook.com/profile.php?id=100094627520182">Facebook</a> to stay updated on company news, culture, and job opportunities.
Join us at sobrokom.store and be a part of a dynamic team that is redefining online shopping!</p>
                           <h5 class="mt-60">Or drop us a line through the form below and we will get back to you</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact-area-end -->

         <!-- map-area-start -->
         <section class="map-area tpmap__box">
            <div class="container">
               <div class="row gx-0">
                  <div class="col-lg-8 col-md-8 offset-2 order-1 order-md-2">
                     <div class="tpform__wrapper pb-80">
                        <div class="tpform__box">
                           <form action="#">
                              <div class="row gx-7">
                                 <div class="col-lg-6">
                                    <div class="tpform__input mb-20">
                                       <input type="text" placeholder="Your Name *">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="tpform__input mb-20">
                                       <input type="email" placeholder="Your Email *">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="tpform__input mb-20">
                                       <input type="text" placeholder="Subject *">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="tpform__input mb-20">
                                       <input type="text" placeholder="Phone">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="tpform__textarea">
                                       <textarea name="message" placeholder="Message"></textarea>
                                       <div class="tpform__textarea-check mt-20 mb-25">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault01">
                                             <label class="form-check-label" for="flexCheckDefault01">
                                                I am bound by the terms of the <a target="_blank" href="{{ route('termsandcondition') }}">Service I accept Privacy Policy.</a>
                                             </label>
                                           </div>                                  
                                       </div>
                                       <button>Send message</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- map-area-end -->

   <!-- feature-area-start -->
   @include('frontend.body.servicesfooter')
         <!-- feature-area-end -->
@endsection
