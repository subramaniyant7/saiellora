@extends('frontend.layout')

@section('content')
    <div id="shopify-section-template--15270806126752__1643958633f489e666" class="shopify-section">
        <section id="section-id-template--15270806126752__1643958633f489e666" style="background:#e7c49c;"
            class="section section-text-columns-with-images cc-animate-init -in cc-animate-complete" data-cc-animate="">
            <style data-shopify="">
                #section-id-template--15270806126752__1643958633f489e666 #block-id-1643958633d4087687-0 .text-column__image {
                    max-width: 700px;
                }

                #section-id-template--15270806126752__1643958633f489e666 #block-id-1643958633d4087687-1 .text-column__image {
                    max-width: 700px;
                }
            </style>

            <div class="container">
                <h1>Contact Us</h1>
                <div class="column-container column-count--2 align-center">
                    <div id="block-id-1643958633d4087687-0"
                        class="text-column align-center cc-fade-in-up cc-animate-init -in cc-animate-complete"
                        data-cc-animate="cc-fade-in-up" data-cc-animate-delay="0.15s" style="">
                        <div class="text-column__image text-column__image--shape-landscape">
                            <a
                                href="https://g.page/sai-ellora-nachiyarkoil?share" aria-label="Sailellora">
                                <div class="rimage-outer-wrapper" style="max-width: 4608px">
                                    <div class="rimage-wrapper" style="padding-top:75.0%">
                                        <img class="rimage__image "
                                            data-lazy-src="{{ URL::asset(FRONTEND.'/img/shop.jpeg') }}"
                                            loading="lazy" alt="" width="4608" height="3456"
                                            src="{{ URL::asset(FRONTEND.'/img/shop.jpeg') }}"
                                            data-lazy-loaded="true">
                                        <noscript>
                                            <img src="{{ URL::asset(FRONTEND.'/img/shop.jpeg') }}"
                                                alt="" class="rimage__image ">
                                        </noscript>
                                    </div>
                                </div>
                            </a></div>

                        <h3 class="text-column__title align-center">SAI ELLORA HANDICRAFTS</h3>
                        <div class="text-column__text rte align-center">
                            <p>NEAR GIRLS HIGH SCHOOL, near HERO SHOW ROOM, Natchiarkoil, Tamil Nadu 612602</p>
                            <p><strong>PHONE - 7200931501, 9443635502</strong></p>
                            <p>Timing : 10 AM - 8 PM (Open all days)</p>
                        </div>

                        <div class="text-column__button-row align-center">
                            <a class="btn btn--secondary" target="_blank" href="https://g.page/sai-ellora-nachiyarkoil?share">
                                Google Map Location
                            </a>
                        </div>
                    </div>

                    <div id="block-id-1643958633d4087687-1"
                        class="text-column align-center cc-fade-in-up cc-animate-init -in cc-animate-complete"
                        data-cc-animate="cc-fade-in-up" data-cc-animate-delay="0.3s" style="">
                        <div class="text-column__image text-column__image--shape-landscape">
                            <a href="{{ url(FRONTENDURL.'contact_form') }}"
                                aria-label="ONLINE CUSTOMER SUPPORT">
                                <div class="rimage-outer-wrapper" style="max-width: 3960px">
                                    <div class="rimage-wrapper" style="padding-top:66.66666666666666%">
                                        <img class="rimage__image "
                                            data-lazy-src="{{ URL::asset(FRONTEND.'/img/thumbs-up-on-yellow_540x@2x.webp')}}"
                                            loading="lazy" alt="" width="3960" height="2640"
                                            src="{{ URL::asset(FRONTEND.'/img/thumbs-up-on-yellow_540x@2x.webp')}}"
                                            data-lazy-loaded="true">
                                        <noscript>
                                            <img src="{{ URL::asset(FRONTEND.'/img/thumbs-up-on-yellow_540x@2x.webp')}}"
                                                alt="" class="rimage__image ">
                                        </noscript>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h3 class="text-column__title align-center">ONLINE CUSTOMER SUPPORT</h3>

                        <div class="text-column__text rte align-center">
                            <p><strong>PHONE - +91 7200931501, +91 9443635502</strong></p>
                            <p>Operational Hours : 10 AM - 8 PM (Monday to Saturday)</p>
                            <p>Email - karunaveen86@gmail.com</p>
                        </div>

                        <div class="text-column__button-row align-center">
                            <a class="btn btn--secondary" href="{{ url(FRONTENDURL.'contact_form') }}">
                                CONTACT US
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop
