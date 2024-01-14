    <!-- footer-area-start -->
    <footer>
        <div class="tpfooter__area theme-bg-2 pt-55 footer-border">
            <div class="tpfooter__top pb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tpfooter__widget footer-col-1 mb-50">
                                <h4 class="tpfooter__widget-title">Let Us Help You</h4>
                                <p>If you have any question, please <br> contact us at:
                                    <a href="mailto:support@example.com">support@example.com</a>
                                </p>
                                <div class="tpfooter__widget-social mt-45">
                                    <span class="tpfooter__widget-social-title mb-5">Social Media:</span>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tpfooter__widget footer-col-2 mb-50">
                                <h4 class="tpfooter__widget-title">Looking for Orfarm?</h4>
                                <p>68 St. Vicent Place, Glasgow, Greater <br> Newyork NH2012, UK.</p>
                                <div class="tpfooter__widget-time-info mt-35">
                                    <span>Monday – Friday: <b>8:10 AM – 6:10 PM</b></span>
                                    <span>Saturday: <b>10:10 AM – 06:10 PM</b></span>
                                    <span>Sunday: <b>Close</b></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-5">
                            <div class="tpfooter__widget footer-col-3 mb-50">
                                <h4 class="tpfooter__widget-title">HOT CATEGORIES</h4>
                                <div class="tpfooter__widget-links">
                                    @php
                                        $categories = App\Models\Category::all();
                                    @endphp
                                    @if ($categories->count() > 0)
                                        <ul>

                                            @foreach ($categories as $category)
                                                <li><a href="#">{{ $category->categoryName }}</a></li>
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
                        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-7">
                            <div class="tpfooter__widget footer-col-4 mb-50">
                                <h4 class="tpfooter__widget-title">Our newsletter</h4>
                                <div class="tpfooter__widget-newsletter">
                                    <p>Subscribe to the Orfarm mailing list to receive updates <br> on new arrivals &
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
                                                I accept terms & conditions & privacy policy.
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
                                <span class="tpfooter__copyright-text">Copyright © <a href="#">ORFARM</a> all
                                    rights reserved. Powered by <a href="#">ThemePure</a>.</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-12">
                            <div class="tpfooter__copyright-thumb text-end">
                                <img src="{{ asset('frontend') }}/assets/img/shape/footer-payment.png " alt="">
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
