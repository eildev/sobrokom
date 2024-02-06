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
                           <span class="tp-breadcrumb__active"><a href="{{route('all.blog.post')}}">{{$singleBlog['category']['cat_name']}} </a></span>
                           <span class="dvdr">/</span>
                           <span>{{$singleBlog->title}}</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- breadcrumb-area-end -->

         <!-- blog-details-area-start -->
         <section class="blog-details-area pb-50">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-blog-details__thumb">
                        <img src="{{asset('uploads/blog/blog_post/'.$singleBlog->image)}}" alt="">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-10 col-lg-12">
                     <div class="tp-blog-details__wrapper">
                        <div class="tp-blog-details__content">
                           <div class="tpblog__entry-wap mb-5">
                              <span class="cat-links"><a href="#">{{$singleBlog['category']['cat_name']}}</a></span>
                              <span class="author-by"><a href="#">Admin</a></span>
                              <span class="post-data"><a href="#">{{Carbon\Carbon::parse($singleBlog->created_at)->diffForHumans()}}</a></span>
                           </div>
                           <h2 class="tp-blog-details__title mb-25">{{$singleBlog->title}}</h2>
                           <p>
                            {{$singleBlog->desc}}
                           </p>


                        </div>


                        <div class="postbox__tag-border mb-45">
                           <div class="row align-items-center">
                              <div class="col-xl-7 col-lg-6 col-md-12">
                                 <div class="postbox__tag">
                                    <div class="postbox__tag-list tagcloud">
                                       <span>Tagged: </span>
                                       @php
                                           $tags = explode(",", $singleBlog->tags);
                                       @endphp
                                        @for($i=0; $i < count($tags); $i++)
                                        <a href="#">{{$tags[$i]}}</a>
                                        @endfor


                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-5 col-lg-6 col-md-12">
                                 <div class="postbox__social-tag">
                                    <span>share:</span>
                                    <a class="blog-d-lnkd" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="blog-d-pin" href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a class="blog-d-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="blog-d-tweet" href="#"><i class="fab fa-twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>


                        <div class="postbox__comment mb-65">
                           <h3 class="postbox__comment-title mb-35">LEAVE A COMMENTs</h3>
                           <ul>
                              <li>
                                 <div class="postbox__comment-box d-flex">
                                    <div class="postbox__comment-info">
                                       <div class="postbox__comment-avater mr-25">
                                          <img src="assets/img/blog/comment-1.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="postbox__comment-text">
                                       <div class="postbox__comment-name">
                                          <h5>Kristin Watson</h5>
                                       </div>
                                       <p>The tiles are highly resistant to water and dirt and can be cleaned, so they are compatible with the cultivation of plants and cooking and the functions. There are few plugins and apps available for this purpose, many of them required a monthly subscription. </p>
                                       <div class="postbox__comment-reply">
                                          <a href="#">Leave Reply</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="children mb-30">
                                 <div class="postbox__comment-box pl-90 d-flex">
                                    <div class="postbox__comment-info">
                                       <div class="postbox__comment-avater mr-25">
                                          <img src="assets/img/blog/comment-2.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="postbox__comment-text">
                                       <div class="postbox__comment-name">
                                          <h5>Brooklyn Simmons</h5>
                                       </div>
                                       <p>Include anecdotal examples of your experience, or things you took notice of that you <br> feel others would find useful.</p>
                                       <div class="postbox__comment-reply">
                                          <a href="#">Leave Reply</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="postbox__comment-box d-flex">
                                    <div class="postbox__comment-info">
                                       <div class="postbox__comment-avater mr-25">
                                          <img src="assets/img/blog/comment-3.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="postbox__comment-text">
                                       <div class="postbox__comment-name">
                                          <h5>Kristin Watson</h5>
                                       </div>
                                       <p>The tiles are highly resistant to water and dirt and can be cleaned, so they are compatible with the cultivation of plants and cooking and the functions. There are few plugins and apps available for this purpose, many of them required a monthly subscription. </p>
                                       <div class="postbox__comment-reply">
                                          <a href="#">Leave Reply</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="tpreview__form postbox__form">
                           <h4 class="tpreview__form-title mb-10">LEAVE A REPLY </h4>
                           @guest
                           <h4 class="tpreview__form-title mb-10 text-danger">At first, you need to login to your account | <a class="btn btn-sm bg-light" href="{{route('login')}}">Login</a> |</h4
                            @else
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="{{route('blog.comment')}}" method="POST">
                                @csrf
                                <input type="hidden" name="subcriber_id" id="subcriber_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="blog_id" id="blog_id" value="{{$singleBlog->id}}">
                                  <div class="row">

                                     <div class="col-lg-12">
                                        <div class="tpreview__input mb-5">
                                           <textarea  name="message" required placeholder="Message"></textarea>
                                        </div>
                                     </div>
                                     <div class="col-lg-12">
                                        <div class="tpfooter__widget-newsletter-check postbox__check-box">
                                           <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                              <label class="form-check-label" for="flexCheckDefault2">
                                                 Save my name, email, and website in this browser for the next time I comment.
                                              </label>
                                            </div>
                                        </div>
                                        <div class="tpreview__submit mt-25">
                                           <button type="submit" class="tp-btn">Post Comment</button>
                                        </div>
                                     </div>
                                  </div>
                               </form>
                           @endguest


                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- blog-details-area-end -->

        <!-- feature-area-start -->
    @include('frontend.body.servicesfooter')
    <!-- feature-area-end -->



@endsection
