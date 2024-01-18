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
                           <span>FAQs</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- breadcrumb-area-end -->

         <!-- faq-area-start -->
         <section class="faq-area pb-80">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="tpfaq__content mr-50">
                        <h4 class="tpfaq__title">How can we help you?</h4>
                        <p>Returns are free for orders shipped within the U.S. We include a UPS return label in every package which is at no cost to use.</p>
                        <span>Follow the steps below for a seamless returns process:</span>
                        <ul>
                           <li>
                              – Please indicate a reason for return using one of the Return Codes listed on the order form included in your package.
                           </li>
                           <li>
                              – Attach your UPS return label to the outside of the package. There is no cost to use this label.
                           </li>
                           <li>
                              – Please make note of your tracking number so that you are able to track it on its way back to us 
                           </li>
                        </ul>
                        <p>
                           You will receive an email once your return has been processed. Please allow 06 – 12 business days from the time your package arrives back to us for a refund to be issued.
                        </p>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="tpfaq">
                        <div class="tpfaq__item mb-45">
                           <h4 class="tpfaq__title mb-40">Shopping Information</h4>
                           <div class="accordion" id="accordionPanelsStayOpenExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    How much is shipping and how long will it take?
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                  <div class="accordion-body">
                                    The perfect way to enjoy brewing tea on low hanging fruit to identify. Duis autem vel eum iriure dolor in hendrerit vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. For me, the most important part of improving at photography has been sharing it. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Pellentesque habitant morbi tristique senectus et netus?
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                  <div class="accordion-body">
                                    The perfect way to enjoy brewing tea on low hanging fruit to identify. Duis autem vel eum iriure dolor in hendrerit vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. For me, the most important part of improving at photography has been sharing it.
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    How long will it take to get my package?
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                  <div class="accordion-body">
                                    The perfect way to enjoy brewing tea on low hanging fruit to identify. Duis autem vel eum iriure dolor in hendrerit vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. For me, the most important part of improving at photography has been sharing it.
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="tpfaq__item mb-45">
                           <h4 class="tpfaq__title mb-20">Payment information</h4>
                           <div class="accordion" id="accordionPanelsStayOpenExample2">
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                    How do I know if my order was successful?
                                   </button>
                                 </h2>
                                 <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                   <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                   </div>
                                 </div>
                               </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                    How much is shipping and how long will it take?
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                                  <div class="accordion-body">
                                    The perfect way to enjoy brewing tea on low hanging fruit to identify. Duis autem vel eum iriure dolor in hendrerit vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. For me, the most important part of improving at photography has been sharing it. 
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                    Pellentesque habitant morbi tristique senectus et netus?
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                                  <div class="accordion-body">
                                    The perfect way to enjoy brewing tea on low hanging fruit to identify. Duis autem vel eum iriure dolor in hendrerit vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. For me, the most important part of improving at photography has been sharing it. 
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="tpfaq__item">
                           <h4 class="tpfaq__title mb-20">Order & Returns</h4>
                           <div class="accordion" id="accordionPanelsStayOpenExample3">
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                    How do I know if my order was successful?
                                   </button>
                                 </h2>
                                 <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                                   <div class="accordion-body">
                                    consectetur adipisicing elit, sed do 
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                   </div>
                                 </div>
                               </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                                    How long will it take to get my package?
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                                  <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                                    Pellentesque habitant morbi tristique senectus et netus?
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
                                  <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- faq-area-end -->


         
         <!-- feature-area-start -->
         @include('frontend.body.servicesfooter')
         <!-- feature-area-end -->

@endsection
