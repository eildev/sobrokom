<!-- footer-area-start -->
<footer>
    <div class="tpfooter__area theme-bg-2 pt-55 footer-border">
        <div class="tpfooter__top pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="tpfooter__widget footer-col-1 mb-50">
                            <h4 class="tpfooter__widget-title">Let Us Help You</h4>
                            <p>For any questions fill free to contact with us at
                                <a href="mailto:www.sobrokom.store@gmail.com">sobrokom.store@gmail.com</a> <br>
                                <a href="mailto:info@sobrokom.store">info@sobrokom.store</a>
                            </p>
                            <div class="tpfooter__widget-social mt-45">
                                <span class="tpfooter__widget-social-title mb-5">Social Media:</span>
                                <a target="_blank" href="https://www.facebook.com/profile.php?id=100094627520182"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                        <div class="tpfooter__widget footer-col-2 mb-50">
                            <h4 class="tpfooter__widget-title">HOT CATEGORIES</h4>
                            <div class="tpfooter__widget-links">
                                @php
                                    $categories = App\Models\Category::all();
                                @endphp
                                @if ($categories->count() > 0)
                                    <ul>

                                        @foreach ($categories as $category)
                                            <li><a
                                                    href="{{ route('category.wise.product', $category->slug) }}">{{ $category->categoryName }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <ul>
                                        <li><a href="#">Fruits & Vegetables</a></li>
                                        <li><a href="#">Dairy Products</a></li>
                                        <li><a href="#">Package Foods</a></li>
                                        <li><a href="#">Beverage</a></li>
                                        <li><a href="#">Health & Wellness</a></li>
                                    </ul>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-5">
                        <div class="tpfooter__widget footer-col-3 mb-50">
                            <h4 class="tpfooter__widget-title">Customer Care</h4>
                            <div class="tpfooter__widget-links">
                                <ul>
                                    <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                                    <li><a href="{{ route('termsandcondition') }}">Terms & Conditions</a></li>
                                    <li><a href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('aboutus') }}">Returns & Refunds</a></li>
                                    <li><a href="{{ route('faqs') }}">Faq's</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-7">
                        <div class="tpfooter__widget footer-col-4 mb-50">
                            <h4 class="tpfooter__widget-title">Our newsletter</h4>
                            <div class="tpfooter__widget-newsletter">
                                <p>Subscribe to the SOBROKOM.STORE mailing list to receive updates <br> on new arrivals
                                    &
                                    other information.</p>
                                <form>
                                    <span><i><img src="{{ asset('frontend') }}/assets/img/shape/message-1.svg"
                                                alt=""></i></span>
                                    <input type="email" placeholder="Your email address..." id="subscriber_mail"
                                        name="subscriber_mail">
                                    <button
                                        class="tpfooter__widget-newsletter-submit tp-news-btn subscribe">Subscribe</button>
                                </form>
                                <div class="tpfooter__widget-newsletter-check mt-10">
                                    <div class="form-check">
                                        <input class="form-check-input accept_terms" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I accept <a style="color:#9e54a1" target="_blank"
                                                href="{{ route('termsandcondition') }}">terms & conditions & privacy
                                                policy.</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tpfooter___bottom pt-40 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-12">
                        <div class="tpfooter__copyright">
                            <span class="tpfooter__copyright-text">Copyright © <a
                                    href="{{ route('home') }}">SOBROKOM.STORE</a> all
                                rights reserved.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-12">
                        <div class="tpfooter__copyright text-md-end">
                            <span class="tpfooter__copyright-text">Design and Developed by © <a target="_blank"
                                    href="https://eclipseintellitech.com/">Eclipse
                                    Intellitech Ltd.</a></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    const btn = document.querySelector('.subscribe');
    btn.addEventListener('click', function(e) {
        e.preventDefault();

        // Check if the "Accept Terms & Conditions" checkbox is checked
        let acceptTermsCheckbox = document.querySelector('.accept_terms');
        if (!acceptTermsCheckbox.checked) {
            toastr.warning('Please accept our terms and conditions to subscribe.');
            return;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let email = document.querySelector('#subscriber_mail').value;
        $.ajax({
            url: '/subscribe/store',
            type: 'POST',
            data: {
                'email': email,
            },
            success: function(success_response) {
                if (success_response.status == 200) {
                    toastr.success(success_response.message);
                    document.querySelector('#subscriber_mail').value = '';
                } else {
                    toastr.warning(success_response.error.email);
                }
                // console.log(majid.message);

            }
        });
    });
</script>
<!-- footer-area-end -->
