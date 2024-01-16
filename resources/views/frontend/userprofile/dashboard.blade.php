
@extends('frontend.master')
@section('maincontent')
         <!-- breadcrumb-area-start -->
         <div class="breadcrumb__area pt-5 pb-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                           <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                           <span class="dvdr">/</span>
                           <span>User</span>
                           <span class="dvdr">/</span>
                           <span>Dashboard</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- breadcrumb-area-end -->
<style>

.tabContent{
    display: none;
}
.tab_active{
    display: block !important;
    font-size: 14px;
    font-weight: 600;
    color: #000;
    text-transform: uppercase;
    padding: 10px 20px;
    border: 1px solid #000;
    border-radius: 5px;
}

</style>
         <!-- track-area-start -->
         <section class="track-area pb-40">
            <div class="container">
               <div class="row justify-content-center my-5">
                  <div class="col-12 tab__container">
                    <div class="row">
                        <div class="col-md-3 tab__main">

                            <ul class="nav flex-column border border-primary">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#" tabindex="1">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#" tabindex="2">Profile</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#" tabindex="3">Orders</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#" tabindex="4">Dashboard</a>
                                </li>
                              </ul>
                        </div>
                        <div class="col-md-9 tab__content">
                            <div class="tab__content--1 tabContent ">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                      <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                  </ul>
                                this is dashboard</div>
                            <div class="tab__content--2 tabContent">this is Profile</div>
                            <div class="tab__content--3 tabContent">this is Orders</div>
                            <div class="tab__content--4 tabContent">this is dashboard</div>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </section>




         <!-- feature-area-start -->
         <section class="feature-area mainfeature__bg pt-50 pb-40" data-background="{{ asset('frontend') }}/assets/img/shape/footer-shape-1.svg">
            <div class="container">
               <div class="mainfeature__border pb-15">
                  <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                     <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                           <div class="mainfeature__icon">
                              <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-1.svg" alt="">
                           </div>
                           <div class="mainfeature__content">
                              <h4 class="mainfeature__title">Fast Delivery</h4>
                              <p>Across West & East India</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                           <div class="mainfeature__icon">
                              <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-2.svg" alt="">
                           </div>
                           <div class="mainfeature__content">
                              <h4 class="mainfeature__title">safe payment</h4>
                              <p>100% Secure Payment</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                           <div class="mainfeature__icon">
                              <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-3.svg" alt="">
                           </div>
                           <div class="mainfeature__content">
                              <h4 class="mainfeature__title">Online Discount</h4>
                              <p>Add Multi-buy Discount </p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                           <div class="mainfeature__icon">
                              <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-4.svg" alt="">
                           </div>
                           <div class="mainfeature__content">
                              <h4 class="mainfeature__title">Help Center</h4>
                              <p>Dedicated 24/7 Support </p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                           <div class="mainfeature__icon">
                              <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-5.svg" alt="">
                           </div>
                           <div class="mainfeature__content">
                              <h4 class="mainfeature__title">Curated items</h4>
                              <p>From Handpicked Sellers</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- feature-area-end -->
         <script>
            const tabmain = document.querySelectorAll('.tab__main ul li a');
            tabmain.forEach((main)=>{
                // console.log(main);
                main.addEventListener('click',(e)=>{
                    e.preventDefault();

                    // alert('ok');


                    let index = main.getAttribute('tabindex');
                    // alert(index)
                    document.querySelectorAll('.tabContent').forEach((content)=>{
                        content.classList.remove('tab_active');
                    });

                    const tab__content = document.querySelector(".tab__content--"+index);
                    // console.log(tab__content);
                    tab__content.classList.add('tab_active');

                })
            })
         </script>
         <!-- track-area-end -->
         @endsection
