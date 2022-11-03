@extends('frontend.layout')

@section('content')
    @php
        $lang = request()->lang != '' ? '?lang=' . request()->lang : '';
    @endphp
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
                <h1 style="text-align:center;font-weight:24px;">
                    {{ request()->lang != 'ta' ? "We'd love to hear from you" : 'நாங்கள் உங்களிடமிருந்து கேட்க விரும்புகிறோம்' }}
                </h1>
                <div class="column-container column-count--2 align-center">
                    <div id="block-id-1643958633d4087687-0"
                        class="text-column align-center cc-fade-in-up cc-animate-init -in cc-animate-complete"
                        data-cc-animate="cc-fade-in-up" data-cc-animate-delay="0.15s" style="">
                        <div class="text-column__image text-column__image--shape-landscape">
                            <a href="https://g.page/sai-ellora-nachiyarkoil?share" aria-label="Sailellora">
                                <div class="rimage-outer-wrapper" style="max-width: 4608px">
                                    <div class="rimage-wrapper" style="padding-top:75.0%">
                                        <img class="rimage__image "
                                            data-lazy-src="{{ URL::asset(FRONTEND . '/img/shop.jpeg') }}" loading="lazy"
                                            alt="" width="4608" height="3456"
                                            src="{{ URL::asset(FRONTEND . '/img/shop.jpeg') }}" data-lazy-loaded="true">
                                        <noscript>
                                            <img src="{{ URL::asset(FRONTEND . '/img/shop.jpeg') }}" alt=""
                                                class="rimage__image ">
                                        </noscript>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h3 class="text-column__title" style="text-align: left">SAI ELLORA</h3>
                        <div class="text-column__text rte align-center" style="text-align: left">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> 1/694 MAIN ROAD ,NEAR GIRLS HIGHER
                                SECONDARY SCHOOL,NEAR HERO HONDA BIKE SHOWROOM,NACHIYAR
                                KOVIL,PIN 61260</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i>
                                {{ request()->lang != 'ta' ? 'Email' : 'மின்னஞ்சல்' }} - Saiellora@gmail.com</p>

                            <p><i class="fa fa-phone" aria-hidden="true"></i>
                                {{ request()->lang != 'ta' ? 'Phone' : 'தொலைபேசி' }} - 7200931501 ,
                                04352466399</p>

                            <p><i class="fa fa-clock-o" aria-hidden="true"></i>
                                {{ request()->lang != 'ta' ? 'Timing' : 'நேரம்' }} : <br /> 10 AM - 8 PM (Monday - Saturday)
                                <br /> 10 AM - 1 PM (Sunday)
                            </p>



                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                <a style="color:#3a1811;" class="" target="_blank"
                                    href="https://g.page/sai-ellora-nachiyarkoil?share">
                                    Google Map Location
                                </a>
                            </p>
                        </div>

                        {{-- <div class="text-column__button-row align-center">
                            <a class="btn btn--secondary" target="_blank"
                                href="https://g.page/sai-ellora-nachiyarkoil?share">
                                Google Map Location
                            </a>
                        </div> --}}
                    </div>

                    <div id="block-id-1643958633d4087687-1"
                        class="text-column align-center cc-fade-in-up cc-animate-init -in cc-animate-complete"
                        data-cc-animate="cc-fade-in-up" data-cc-animate-delay="0.3s" style="">
                        <div class="">
                            <h1 class="page-title" style="font-size:24px !important;">
                                {{ request()->lang != 'ta' ? 'Get in touch with us' : 'எங்களை தொடர்பு கொள்ளவும்' }}</h1>
                            @if (session('error'))
                                <div class="form-outline mb-4">
                                    <div class="col">
                                        <div class="error-msg">
                                            <span> Error : {{ session('error') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="form-outline mb-4">
                                    <div class="col">
                                        <div class="error-msg">
                                            <span> {{ session('success') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <form method="post" action="{{ url(FRONTENDURL . 'contact_form') }}" id="contact_form"
                                accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type"
                                    value="contact">
                                @csrf
                                <div class="input-row" style="display: flex;justify-content:space-around">
                                    <label for="contactFormName">Name:</label>
                                    <input type="text" id="contactFormName" name="name" required>
                                </div>
                                <div class="input-row" style="display: flex;justify-content:space-around">
                                    <label for="contactFormEmail">Email:</label>
                                    <input type="email" id="contactFormEmail" name="email" required>
                                </div>
                                <div class="input-row" style="display: flex;justify-content:space-around">
                                    <label for="contactFormTelephone">Phone:</label>
                                    <input type="number" id="contactFormTelephone" name="phone" required>
                                </div>
                                <div class="input-row" style="display: flex;justify-content:space-around">
                                    <label for="contactFormMessage">Message:</label>
                                    <textarea rows="15" cols="75" id="contactFormMessage" name="body" required></textarea>
                                </div>
                                <div class="input-row" style="display: flex;justify-content:space-around">
                                    <input type="submit" id="contactFormSubmit" value="Send" class="btn">
                                </div>
                            </form>

                        </div>
                        {{-- <div class="text-column__image text-column__image--shape-landscape">
                            <a href="{{ url(FRONTENDURL . 'contact_form' . $lang) }}" aria-label="ONLINE CUSTOMER SUPPORT">
                                <div class="rimage-outer-wrapper" style="max-width: 3960px">
                                    <div class="rimage-wrapper" style="padding-top:66.66666666666666%">
                                        <img class="rimage__image "
                                            data-lazy-src="{{ URL::asset(FRONTEND . '/img/thumbs-up-on-yellow_540x@2x.webp') }}"
                                            loading="lazy" alt="" width="3960" height="2640"
                                            src="{{ URL::asset(FRONTEND . '/img/thumbs-up-on-yellow_540x@2x.webp') }}"
                                            data-lazy-loaded="true">
                                        <noscript>
                                            <img src="{{ URL::asset(FRONTEND . '/img/thumbs-up-on-yellow_540x@2x.webp') }}"
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
                            <a class="btn btn--secondary" href="{{ url(FRONTENDURL . 'contact_form' . $lang) }}">
                                CONTACT US
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop
