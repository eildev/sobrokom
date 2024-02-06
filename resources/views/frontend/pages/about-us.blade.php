@extends('frontend.master')
@section('maincontent')
  <!-- breadcrumb-area-start -->
  <div class="breadcrumb__area pt-5 pb-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                           <span class="tp-breadcrumb__active"><a style="color:#9e54a1" href="{{ route('home') }}">Home</a></span>
                           <span class="dvdr">/</span>
                           <span>About Us</span>
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
                     <div class="tpcontact-inner text-center mt-20 mb-40">
                        <div class="tpcontact-inner-text">
                           <h5 class="tpcontact-inner-sub-title"  style="font-size:16px">about us</h5>
                           <h5 class="tpcontact-inner-title mb-20">Welcome to <a style="color:#9e54a1" href="{{ route('home') }}"> sobrokom.store </a> !</h5>
                           <p style="text-align: justify;">At <a style="color:#9e54a1" href="{{ route('home') }}"> sobrokom.store,</a>  we believe in more than just providing products; we are committed to delivering an unparalleled shopping experience. Founded in 2024, we have evolved into a one-stop destination for all your needs, offering a diverse range of high-quality products that blend style, functionality, and affordability</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12">
                     <div class="tpcontact mb-30">
                        <div class="tpcontact__img mb-15 w-img">
                           <img src="assets/img/banner/contact-big-bg1.jpg" alt="">
                        </div>
                        <div class="tplocation__text">
                           <h4 class="tplocation__text-title">Our Mission</h4>
                           <div class="tplocation__content tplocation__content-two">
                              <p>Our mission is to empower individuals to express their unique style and meet their lifestyle needs effortlessly. We curate a collection that not only reflects the latest trends but also caters to the diverse tastes of our customers. Whether you're seeking fashion-forward apparel, cutting-edge electronics, or home essentials, <a style="color:#9e54a1" href="{{ route('home') }}"> sobrokom.store </a> is here to exceed your expectations.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <div class="tpcontact mb-30">
                        <div class="tpcontact__img mb-15 w-img">
                           <img src="assets/img/banner/contact-big-bg1.jpg" alt="">
                        </div>
                        <div class="tplocation__text">
                           <h4 class="tplocation__text-title">Quality Assurance</h4>
                           <div class="tplocation__content tplocation__content-two">
                              <p>At <a style="color:#9e54a1" href="{{ route('home') }}"> sobrokom.store,</a>  quality is our top priority. We partner with reputable suppliers and conduct rigorous quality checks to ensure that every product meets our stringent standards. Your satisfaction and confidence in our products drive us to continuously improve and innovate.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <div class="tpcontact mb-30">
                        <div class="tpcontact__img mb-15 w-img">
                           <img src="assets/img/banner/contact-big-bg1.jpg" alt="">
                        </div>
                        <div class="tplocation__text">
                           <h4 class="tplocation__text-title">Customer-Centric Approach</h4>
                           <div class="tplocation__content tplocation__content-two">
                              <p>We understand the importance of excellent customer service. Our dedicated support team is always ready to assist you, whether you have questions about products, need help with your order, or want advice on the latest trends. Your happiness is our success, and we go the extra mile to ensure your shopping experience is seamless and enjoyable.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <div class="tpcontact mb-30">
                        <div class="tpcontact__img mb-15 w-img">
                           <img src="assets/img/banner/contact-big-bg1.jpg" alt="">
                        </div>
                        <div class="tplocation__text">
                           <h4 class="tplocation__text-title">Sustainability Initiatives</h4>
                           <div class="tplocation__content tplocation__content-two">
                              <p>As part of our commitment to a better world, we actively pursue sustainable practices. We strive to reduce our environmental footprint by using eco-friendly packaging, sourcing ethically produced goods, and supporting initiatives that promote a greener planet.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <div class="tpcontact mb-30">
                        <div class="tpcontact__img mb-15 w-img">
                           <img src="assets/img/banner/contact-big-bg1.jpg" alt="">
                        </div>
                        <div class="tplocation__text">
                           <h4 class="tplocation__text-title">Join Our Community</h4>
                           <div class="tplocation__content tplocation__content-two">
                              <p> <a style="color:#9e54a1" href="{{ route('home') }}"> sobrokom.store </a> is more than just a marketplace; it's a community. Connect with us on social media to stay updated on the latest arrivals, exclusive promotions, and be a part of our growing family. We value your feedback and suggestions as they guide us in enhancing your shopping experience.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <div class="tpcontact mb-30">
                        <div class="tplocation__text">
                           <div class="tplocation__content tplocation__content-two">
                              <p>Thank you for choosing <a style="color:#9e54a1" href="{{ route('home') }}"> sobrokom.store.</a>  We look forward to serving you and being a part of your journey.</p>
                              <p->Happy Shopping!</p->
                              <h4 class="tplocation__text-title"> <a style="color:#9e54a1" href="{{ route('home') }}"> Sobrokom.store </a> Team</h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact-area-end -->

         <div class="container py-2">
            <h2 class="font-weight-light text-center text-muted py-3">Timeline Example 2</h2>
            <!-- timeline item 1 -->
            <div class="row g-0">
                <div class="col-sm">
                    <!--spacer-->
                </div>
                <!-- timeline item 1 center dot -->
                <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                        <div class="col">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                    <span class="badge rounded-pill bg-light border">&nbsp;</span>
                </h5>
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
                <!-- timeline item 1 event content -->
                <div class="col-sm py-2">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="float-end text-muted small">Jan 9th 2019 7:00 AM</div>
                            <h4 class="card-title text-muted">Day 1 Orientation</h4>
                            <p class="card-text">Welcome to the campus, introduction and get started with the tour.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
            <!-- timeline item 2 -->
            <div class="row g-0">
                <div class="col-sm py-2">
                    <div class="card border-primary shadow radius-15">
                        <div class="card-body">
                            <div class="float-end text-primary small">Jan 10th 2019 8:30 AM</div>
                            <h4 class="card-title text-primary">Day 2 Sessions</h4>
                            <p class="card-text">Sign-up for the lessons and speakers that coincide with your course syllabus. Meet and greet with instructors.</p>
                            <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-target="#t22_details" data-bs-toggle="collapse">Show Details ▼</button>
                            <div class="collapse border" id="t22_details">
                                <div class="p-2 text-monospace">
                                    <div>08:30 - 09:00 Breakfast in CR 2A</div>
                                    <div>09:00 - 10:30 Live sessions in CR 3</div>
                                    <div>10:30 - 10:45 Break</div>
                                    <div>10:45 - 12:00 Live sessions in CR 3</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                    <span class="badge rounded-pill bg-primary">&nbsp;</span>
                </h5>
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
                <div class="col-sm">
                    <!--spacer-->
                </div>
            </div>
            <!--/row-->
            <!-- timeline item 3 -->
            <div class="row g-0">
                <div class="col-sm">
                    <!--spacer-->
                </div>
                <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                        <span class="badge rounded-pill bg-light border">&nbsp;</span>
                    </h5>
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
                <div class="col-sm py-2">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="float-end text-muted small">Jan 11th 2019 8:30 AM</div>
                            <h4 class="card-title">Day 3 Sessions</h4>
                            <p>Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
            <!-- timeline item 4 -->
            <div class="row g-0">
                <div class="col-sm py-2">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="float-end text-muted small">Jan 12th 2019 11:30 AM</div>
                            <h4 class="card-title">Day 4 Wrap-up</h4>
                            <p>Join us for lunch in Bootsy's cafe across from the Campus Center.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                        <span class="badge rounded-pill bg-light border">&nbsp;</span>
                    </h5>
                    <div class="row h-50">
                        <div class="col">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
                <div class="col-sm">
                    <!--spacer-->
                </div>
            </div>
            <!--/row-->
        </div>
         <!-- feature-area-start -->
         @include('frontend.body.servicesfooter')
         <!-- feature-area-end -->

@endsection
