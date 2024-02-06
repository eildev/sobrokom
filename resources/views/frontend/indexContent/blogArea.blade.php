<!-- blog-area-start -->
@php
$home_blog = App\Models\BlogPost::latest()->limit(8)->get()

@endphp
<section class="blog-area pb-20 pt-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div class="tpsection mb-15">
                    <h4 class="tpsection__title text-start brand-product-title">Our Latest News</h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tpproduct__all-item">
                    <a href="blog.html">View All <i class="icon-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-container tpblog-active">
            <div class="swiper-wrapper">
                @foreach ($home_blog as $blog )
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img
                                    src="{{ asset('uploads/blog/blog_post/'.$blog->image)}}"
                                    alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">{{$blog['category']['cat_name']}}</a></span>
                                @if($blog->status == 0)
                                <span class="author-by"><a href="#">Admin</a></span>
                                @else
                                <span class="author-by"><a href="#">{{$blog['user']['userName']}}</a></span>
                                @endif
                                <span class="post-data"><a href="#">{{Carbon\Carbon::parse($blog->created_at)->diffForHumans()}}</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">{{$blog->title}}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->
