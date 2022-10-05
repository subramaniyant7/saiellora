@extends('frontend.layout')

@section('content')
    <div class="container-fluid" style="margin-top: -18px;">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ URL::asset(FRONTEND . '/img/12-Aug-Banner_1296x@2x.webp') }}" alt="Los Angeles"
                            style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="{{ URL::asset(FRONTEND . '/img/navaratri-1_1296x@2x.webp') }}" alt="Chicago"
                            style="width:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shopify-section has-full-width-section">
        <section
            class="border-top section-text-with-icons section-id-template--15270806126752__16317334965826230b section full-width-section cc-carousel-scrolling cc-animate-init -in cc-animate-complete cc-start"
            style="background-color: #f6f9eb !important;padding:0.5em" data-cc-animate="">
            <div class="cc-carousel-container container cc-carousel-container--on-mobile cc-carousel-mobile--no-scrollbar"
                style="--bg-color-from: rgba(246, 249, 235, 0.99);--bg-color-to: rgba(246, 249, 235, 0);">

                <div class="icon-columns align-left icon-columns--no-text section-spacing--extra_small cc-carousel-mobile">
                    <div id="block-id-16317334965826230b-0"
                        class="icon-columns__column align-left icon-columns__column--short cc-fade-in cc-animate-init -in cc-animate-complete"
                        data-cc-animate="cc-fade-in" data-cc-animate-delay="0.15s" style="">
                        <div class="icon-columns__column--inner">
                            <div class="icon-column__image" style="width: 25px;color: #560835 !important;"><svg
                                    class="cc-icon cc-icon--heart" aria-hidden="true" focusable="false" role="presentation"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                    style="width: 25px;height: 25px;">
                                    <path
                                        d="M8.86 4.38a2.78 2.78 0 013.72-.3c1.4 1.2 1.2 3.11.19 4.13L7.98 13.1c-.05.06-.1.06-.19 0L3.01 8.2a2.8 2.8 0 01.19-4.1c1.06-.9 2.7-.76 3.74.28l.96.98.96-.98zm-.96-.45l.24-.25a3.78 3.78 0 015.07-.38l.01.01v.01a3.82 3.82 0 01.26 5.59l-4.79 4.9a1.12 1.12 0 01-1.45.12l-.1-.06L2.3 8.91a3.8 3.8 0 01.26-5.57 3.79 3.79 0 015.1.33l.01.01.24.25z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="icon-column__content" style="color: #515151 !important;">
                                <p class="icon-column__title" style="font-size: 15px">Curated with love</p>
                            </div>
                        </div>
                    </div>

                    <div id="block-id-16317334965826230b-1"
                        class="icon-columns__column align-left icon-columns__column--short cc-fade-in cc-animate-init -in cc-animate-complete"
                        data-cc-animate="cc-fade-in" data-cc-animate-delay="0.3s" style="">
                        <div class="icon-columns__column--inner">
                            <div class="icon-column__image" style="width: 25px;color: #560835 !important;"><svg
                                    class="cc-icon cc-icon--map_pin" aria-hidden="true" focusable="false"
                                    role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                    style="width: 25px;height: 25px;">
                                    <path
                                        d="M6.72 14.63L7.5 14l.78.63-.78.96-.78-.96zm1.41-1.44L7.5 14s-.25-.3-.63-.81C5.63 11.54 3 7.8 3 5.79 3 3.14 5.01 1 7.5 1S12 3.14 12 5.79c0 2.02-2.63 5.75-3.87 7.4zm.15 1.44L7.5 14l-.78.63-.01-.02-.04-.05a26.53 26.53 0 01-.67-.87c-.43-.58-1.01-1.37-1.59-2.26A24.32 24.32 0 012.8 8.62 7.07 7.07 0 012 5.79C2 2.65 4.4 0 7.5 0S13 2.65 13 5.79c0 .9-.36 1.9-.8 2.83-.45.95-1.04 1.93-1.61 2.81a43.67 43.67 0 01-2.26 3.13l-.04.05v.01h-.01z"
                                        fill-rule="evenodd"></path>
                                    <path d="M7.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm0 1a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="icon-column__content" style="color: #515151 !important;">
                                <p class="icon-column__title" style="font-size: 15px">Made in India</p>
                            </div>
                        </div>
                    </div>

                    <div id="block-id-16317334965826230b-2"
                        class="icon-columns__column align-left icon-columns__column--short cc-fade-in cc-animate-init -in cc-animate-complete"
                        data-cc-animate="cc-fade-in" data-cc-animate-delay="0.45s" style="">
                        <div class="icon-columns__column--inner">
                            <div class="icon-column__image" style="width: 25px;color: #560835 !important;"><svg
                                    class="cc-icon cc-icon--check_mark" aria-hidden="true" focusable="false"
                                    role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                    style="width: 25px;height: 25px;">
                                    <path fill-rule="evenodd"
                                        d="M14.441 3.733a.5.5 0 010 .707l-7.94 7.94a.5.5 0 01-.707 0L2.52 9.105a.5.5 0 11.707-.707l2.922 2.922 7.586-7.587a.5.5 0 01.707 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="icon-column__content" style="color: #515151 !important;">
                                <p class="icon-column__title" style="font-size: 15px">Top-notch Quality</p>
                            </div>
                        </div>
                    </div>

                    <div id="block-id-399ff856-1d50-47c6-9242-c56ed2e1d941"
                        class="icon-columns__column align-left icon-columns__column--short cc-fade-in cc-animate-init -in cc-animate-complete"
                        data-cc-animate="cc-fade-in" data-cc-animate-delay="0.6s" style="">
                        <div class="icon-columns__column--inner">
                            <div class="icon-column__image" style="width: 25px;color: #560835 !important;"><svg
                                    class="cc-icon cc-icon--price_tag" aria-hidden="true" focusable="false"
                                    role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                    style="width: 25px;height: 25px;">
                                    <path
                                        d="M7.59 1.34a1 1 0 01.7-.29h5.66a1 1 0 011 1v5.66a1 1 0 01-.3.7L7.6 15.5a1 1 0 01-1.42 0L.52 9.83a1 1 0 010-1.42l7.07-7.07zm6.36 6.37l-7.07 7.07-5.66-5.66L8.3 2.05h5.66v5.66z"
                                        fill-rule="evenodd"></path>
                                    <path
                                        d="M9.7 6.3a1 1 0 101.42-1.42 1 1 0 00-1.41 1.41zM9 7a2 2 0 102.83-2.83A2 2 0 009 7z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="icon-column__content" style="color: #515151 !important;">
                                <p class="icon-column__title" style="font-size: 15px">Wholesale pricing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="shopify-section section-image-with-text">
        <style data-shopify="">
            @media(min-width: 768px) {
                .section-id-template--15270806126752__1660395035d7566d05 .image-with-text__image__inner {
                    height: auto !important;
                    width: 100% !important;
                }

                .section-id-template--15270806126752__1660395035d7566d05 .image-with-text__text {
                    flex-basis: 40%;
                }

                .section-id-template--15270806126752__1660395035d7566d05 .image-with-text__image__inner .rimage-outer-wrapper {
                    background-size: contain;
                }
            }
        </style>
        <section
            class="border-top section image-with-text cf section-id-template--15270806126752__1660395035d7566d05
                image-with-text--contain image-with-text--image-right"
            data-section-type="image-with-text">
            <div class="container">
                <div class="image-with-text__text align-center cc-animate-init -in cc-animate-complete" data-cc-animate=""
                    data-cc-animate-delay="0.2s" style="">
                    <div class="image-with-text__text__wrap padded-block-y">
                        <h2 class="h1 align-center cc-animate-init -in cc-animate-complete" data-cc-animate=""
                            data-cc-animate-delay="0.3s" style="">
                            Navaratri'22
                        </h2>

                        <div class="rte align-center cc-animate-init -in cc-animate-complete" data-cc-animate=""
                            data-cc-animate-delay="0.4s" style="">
                            <p>Exclusive collection of <strong>Golu stands, Pooja utilities, and Return gifts</strong> by
                                Wedtree! A
                                special curation to make your Navaratri celebration <strong>One of its own kind</strong>!!
                            </p>
                        </div>

                        <div class="light-space-above cc-animate-init -in cc-animate-complete" data-cc-animate=""
                            data-cc-animate-delay="0.5s" style="">
                            <a class="btn" href="/blogs/event-journals/navaratri-the-festival-of-nine-nights">
                                Read Blog
                            </a>
                        </div>
                    </div>
                </div>

                <div class="image-with-text__image cc-animate-init -in cc-animate-complete" data-cc-animate="">
                    <div class="image-with-text__image__inner">
                        <div class="rimage-outer-wrapper cc-zoom-out cc-animate-init -in cc-animate-complete"
                            data-cc-animate="cc-zoom-out"
                            data-lazy-bg="{{ URL::asset(FRONTEND . '/img/Navaratri-blog_720x@2x.webp') }}"
                            style="max-width: 2100px; max-height: 1050px; background-image: url(&quot;{{ URL::asset(FRONTEND . '/img/Navaratri-blog_720x@2x.webp') }}&quot;);"
                            data-lazy-loaded="true">
                            <div class="rimage-wrapper" style="padding-top:50.0%">
                                <noscript>
                                    <img src="{{ URL::asset(FRONTEND . '/img/Navaratri-blog_720x@2x.webp') }}"
                                        alt="" class="rimage__image">
                                </noscript>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <div class="shopify-section section-image-with-text">
        <style data-shopify="">
            @media(min-width: 768px) {
                .section-id-template--15270806126752__1661578506d4ee519e .image-with-text__image__inner {
                    height: auto !important;
                    width: 100% !important;
                }

                .section-id-template--15270806126752__1661578506d4ee519e .image-with-text__text {
                    flex-basis: 40%;
                }

                .section-id-template--15270806126752__1661578506d4ee519e .image-with-text__image__inner .rimage-outer-wrapper {
                    background-size: contain;
                }
            }
        </style>

        <section
            class="border-top section image-with-text cf section-id-template--15270806126752__1661578506d4ee519e
            image-with-text--contain image-with-text--image-left"
            data-section-type="image-with-text">
            <div class="container">
                <div class="image-with-text__image cc-animate-init -in cc-animate-complete" data-cc-animate="">
                    <div class="image-with-text__image__inner">
                        <div class="rimage-outer-wrapper cc-zoom-out cc-animate-init -in cc-animate-complete"
                            data-cc-animate="cc-zoom-out"
                            data-lazy-bg="{{ URL::asset(FRONTEND . '/img/wedtree-Thumbnail-_10_1024x1024.webp') }}"
                            style="max-width: 1920px; max-height: 1080px; background-image: url(&quot;{{ URL::asset(FRONTEND . '/img/wedtree-Thumbnail-_10_1024x1024.webp') }}&quot;);"
                            data-lazy-loaded="true">
                            <div class="rimage-wrapper" style="padding-top:56.25%">
                                <noscript>
                                    <img src="{{ URL::asset(FRONTEND . '/img/wedtree-Thumbnail-_10_1024x1024.webp') }}"
                                        alt="" class="rimage__image">
                                </noscript>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="image-with-text__text align-center cc-animate-init -in cc-animate-complete" data-cc-animate=""
                    data-cc-animate-delay="0.2s" style="">
                    <div class="image-with-text__text__wrap padded-block-y">
                        <h2 class="h1 align-center cc-animate-init -in cc-animate-complete" data-cc-animate=""
                            data-cc-animate-delay="0.3s" style="">
                            Now Streaming..!
                        </h2>
                        <div class="rte align-center cc-animate-init" data-cc-animate="" data-cc-animate-delay="0.4s"
                            style="transition-delay: 0.4s;">
                            <p><strong>Time to get Navrathri ready!</strong>! Check out our Navaratri Special Curation of
                                Swarna Golu
                                - a miniature display of Navrathri Golu, Tanjore painted Golu steps, Brass Golu steps, and
                                diya
                                steps<br><br></p>
                        </div>
                        <div class="light-space-above cc-animate-init" data-cc-animate="" data-cc-animate-delay="0.5s"
                            style="transition-delay: 0.5s;">
                            <a class="
                btn " href="https://youtu.be/sFwfvXt2aGw">
                                Watch Video
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="shopify-section has-alt-bg has-full-width-section">
        <section class="border-top section products-section use-alt-bg full-width-section section-padding-small"
            data-section-type="featured-collection">
            <div class="container cc-animate-init -in cc-animate-complete" data-cc-animate="">
                <div class="opposing-items opposing-items--heading">
                    <h2 class="section-heading left">
                        <a href="/collections/navaratri-divine-gifts">
                            Navaratri Return Gifts
                        </a>
                    </h2>
                    <a class="more-link" href="/collections/navaratri-divine-gifts">
                        View all
                    </a>
                </div>

                <div class="cc-carousel-container not-a-carousel">
                    <div class="product-grid row grid one-row " data-normheights=".image" data-normheights-inner="img"
                        style="">
                        <div class="product-block layout-align-above align-center flex column max-cols-5 min-cols-2 product-block--gutter-0 product-block--gap-10 product-block--border-true product-block--no-quickbuy"
                            id="template--15270806126752__16404793379d4c4777_10493896712">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural " style="min-height: 280.26px;">
                                    <div class="inner">
                                        <a href="/products/murthi-ganesha-small-1" aria-label="Murthi - Ganesha Small">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 1024px">
                                                    <div class="rimage-wrapper" style="padding-top:100.0%">
                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/murthi-ganesha-small-divine-figurines-706_{width}x.jpg?v=1659944875"
                                                            loading="lazy"
                                                            alt="Murthi - Ganesha Small Divine Return Gifts"
                                                            width="1024" height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/murthi-ganesha-small-divine-figurines-706_220x@2x.jpg?v=1659944875"
                                                            data-lazy-loaded="true">

                                                        <noscript>

                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/murthi-ganesha-small-divine-figurines-706_1024x1024.jpg?v=1659944875"
                                                                alt="Murthi - Ganesha Small Divine Return Gifts"
                                                                class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="product-block__title-price">
                                    <a class="title" href="/products/murthi-ganesha-small-1">
                                        Murthi - Ganesha Small
                                    </a>
                                    <div style="" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="10493896712" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="5.00"
                                            data-number-of-reviews="3" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="5.00" tabindex="0"
                                                aria-label="5.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span> </span> <span
                                                class="jdgm-prev-badge__text">3
                                                reviews</span> </div>
                                    </div>


                                    <div class="themed-product-reviews">
                                        <div class="cc-rating" role="img" data-rating-decimal="0"
                                            aria-label="5.0 out of 5.0 stars">
                                            <span aria-hidden="true" class="cc-rating-stars">
                                                <span class="cc-rating-stars--inactive"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                                <span class="cc-rating-stars--active"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                            </span>
                                        </div>
                                        <p class="cc-rating-text">
                                            <span aria-hidden="true">5.0 / 5.0</span>
                                        </p>
                                        <span class="cc-rating-custom-caption">
                                            3 reviews
                                        </span>

                                    </div>

                                    <div class="price ">
                                        <span class="amount theme-money">Rs 39.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-block layout-align-above align-center flex column max-cols-5 min-cols-2 product-block--gutter-0 product-block--gap-10 product-block--border-true product-block--no-quickbuy"
                            id="template--15270806126752__16404793379d4c4777_7257592070304">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural image--with-secondary"
                                    style="min-height: 280.26px;">
                                    <div class="inner">
                                        <a href="/products/german-silver-tulasi-maadam-with-green-leaves-mini-wbg0100"
                                            aria-label="German Silver Tulasi Maadam with Green Leaves - WBG0100">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:133.33333333333334%">

                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-with-green-leaves-wbg0100-divine-figurines-889_{width}x.jpg?v=1659947545"
                                                            loading="lazy" alt="" width="768" height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-with-green-leaves-wbg0100-divine-figurines-889_220x@2x.jpg?v=1659947545"
                                                            data-lazy-loaded="true">

                                                        <noscript>
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-with-green-leaves-wbg0100-divine-figurines-889_1024x1024.jpg?v=1659947545"
                                                                alt="" class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="image__secondary">
                                                <div class="rimage-outer-wrapper rimage-background"
                                                    data-lazy-bg="https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-with-green-leaves-wbg0100-divine-figurines-704_{width}x.jpg?v=1659947548"
                                                    data-parent-fit="contain" data-lazy-loaded="true"
                                                    style="background-image: url(&quot;https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-with-green-leaves-wbg0100-divine-figurines-704_220x@2x.jpg?v=1659947548&quot;);">
                                                    <noscript>
                                                        <div class="rimage-wrapper"
                                                            style="padding-top:133.33333333333334%">
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-with-green-leaves-wbg0100-divine-figurines-704_1024x1024.jpg?v=1659947548"
                                                                alt="" class="rimage__image">
                                                        </div>
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="product-block__title-price">

                                    <a class="title"
                                        href="/products/german-silver-tulasi-maadam-with-green-leaves-mini-wbg0100">

                                        German Silver Tulasi Maadam with Green Leaves - WBG0100
                                    </a>

                                    <div style="" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="7257592070304" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="5.00"
                                            data-number-of-reviews="5" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="5.00" tabindex="0"
                                                aria-label="5.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span> </span> <span
                                                class="jdgm-prev-badge__text">5
                                                reviews</span> </div>
                                    </div>


                                    <div class="themed-product-reviews">
                                        <div class="cc-rating" role="img" data-rating-decimal="0"
                                            aria-label="5.0 out of 5.0 stars">
                                            <span aria-hidden="true" class="cc-rating-stars">
                                                <span class="cc-rating-stars--inactive"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                                <span class="cc-rating-stars--active"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                            </span>
                                        </div>
                                        <p class="cc-rating-text">
                                            <span aria-hidden="true">5.0 / 5.0</span>
                                        </p>
                                        <span class="cc-rating-custom-caption">
                                            5 reviews
                                        </span>
                                    </div>

                                    <div class="price ">
                                        <span class="amount theme-money">Rs 89.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-block layout-align-above align-center flex column max-cols-5 min-cols-2 product-block--gutter-0 product-block--gap-10 product-block--border-true product-block--no-quickbuy"
                            id="template--15270806126752__16404793379d4c4777_7244383223968">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural image--with-secondary"
                                    style="min-height: 280.26px;">
                                    <div class="inner">
                                        <a href="/products/german-silver-tulasi-maadam-mini-wbg0096"
                                            aria-label="German Silver Tulasi Maadam  - WBG0096">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:133.33333333333334%">
                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-wbg0096-divine-figurines-844_{width}x.jpg?v=1660033352"
                                                            loading="lazy" alt="" width="768" height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-wbg0096-divine-figurines-844_220x@2x.jpg?v=1660033352"
                                                            data-lazy-loaded="true">

                                                        <noscript>
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-wbg0096-divine-figurines-844_1024x1024.jpg?v=1660033352"
                                                                alt="" class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="image__secondary">
                                                <div class="rimage-outer-wrapper rimage-background"
                                                    data-lazy-bg="https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-wbg0096-divine-figurines-955_{width}x.jpg?v=1660033355"
                                                    data-parent-fit="contain" data-lazy-loaded="true"
                                                    style="background-image: url(&quot;https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-wbg0096-divine-figurines-955_220x@2x.jpg?v=1660033355&quot;);">
                                                    <noscript>
                                                        <div class="rimage-wrapper"
                                                            style="padding-top:133.33333333333334%">
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/german-silver-tulasi-maadam-wbg0096-divine-figurines-955_1024x1024.jpg?v=1660033355"
                                                                alt="" class="rimage__image">
                                                        </div>
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-block__title-price">

                                    <a class="title" href="/products/german-silver-tulasi-maadam-mini-wbg0096">

                                        German Silver Tulasi Maadam - WBG0096
                                    </a>

                                    <div style="" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="7244383223968" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="5.00"
                                            data-number-of-reviews="4" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="5.00" tabindex="0"
                                                aria-label="5.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span> </span> <span
                                                class="jdgm-prev-badge__text">4
                                                reviews</span> </div>
                                    </div>

                                    <div class="themed-product-reviews">
                                        <div class="cc-rating" role="img" data-rating-decimal="0"
                                            aria-label="5.0 out of 5.0 stars">
                                            <span aria-hidden="true" class="cc-rating-stars">
                                                <span class="cc-rating-stars--inactive"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                                <span class="cc-rating-stars--active"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                            </span>
                                        </div>
                                        <p class="cc-rating-text">
                                            <span aria-hidden="true">5.0 / 5.0</span>
                                        </p>
                                        <span class="cc-rating-custom-caption">
                                            4 reviews
                                        </span>
                                    </div>
                                    <div class="price ">
                                        <span class="amount theme-money">Rs 75.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-block layout-align-above align-center sold-out flex column max-cols-5 min-cols-2 product-block--gutter-0 product-block--gap-10 product-block--border-true product-block--no-quickbuy"
                            id="template--15270806126752__16404793379d4c4777_10495320200">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural " style="min-height: 280.26px;">
                                    <div class="inner">
                                        <a href="/products/murthi-laddu-gopal-small"
                                            aria-label="Murthi - Laddu Gopal Small">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 1024px">
                                                    <div class="rimage-wrapper" style="padding-top:100.0%">
                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/murthi-laddu-gopal-small-divine-figurines-579_220x@2x.jpg?v=1659942629"
                                                            loading="lazy"
                                                            alt="Murthi - Laddu Gopal Small Divine Return Gifts"
                                                            width="1024" height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/murthi-laddu-gopal-small-divine-figurines-579_220x@2x.jpg?v=1659942629"
                                                            data-lazy-loaded="true">

                                                        <noscript>
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/murthi-laddu-gopal-small-divine-figurines-579_1024x1024.jpg?v=1659942629"
                                                                alt="Murthi - Laddu Gopal Small Divine Return Gifts"
                                                                class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <span class="product-label product-label--soldout"><span>Sold Out</span></span>
                                </div>
                                <div class="product-block__title-price">
                                    <a class="title" href="/products/murthi-laddu-gopal-small">
                                        Murthi - Laddu Gopal Small
                                    </a>

                                    <div style="" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="10495320200" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="5.00"
                                            data-number-of-reviews="3" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="5.00" tabindex="0"
                                                aria-label="5.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span> </span> <span
                                                class="jdgm-prev-badge__text">3
                                                reviews</span> </div>
                                    </div>

                                    <div class="themed-product-reviews">
                                        <div class="cc-rating" role="img" data-rating-decimal="0"
                                            aria-label="5.0 out of 5.0 stars">
                                            <span aria-hidden="true" class="cc-rating-stars">
                                                <span class="cc-rating-stars--inactive"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                                <span class="cc-rating-stars--active"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                            </span>
                                        </div>
                                        <p class="cc-rating-text">
                                            <span aria-hidden="true">5.0 / 5.0</span>
                                        </p>
                                        <span class="cc-rating-custom-caption">
                                            3 reviews
                                        </span>
                                    </div>

                                    <div class="price ">
                                        <span class="amount theme-money">Rs 39.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-block layout-align-above align-center flex column max-cols-5 min-cols-2 product-block--gutter-0 product-block--gap-10 product-block--border-true product-block--last product-block--no-quickbuy"
                            id="template--15270806126752__16404793379d4c4777_10492524424">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural " style="min-height: 280.26px;">
                                    <div class="inner">
                                        <a href="/products/murthi-ganesha-big" aria-label="Murthi - Ganesha Big">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 1024px">
                                                    <div class="rimage-wrapper" style="padding-top:100.0%">
                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/murthi-ganesha-big-divine-figurines-492_{width}x.jpg?v=1659960666"
                                                            loading="lazy" alt="Murthi - Ganesha Big Divine Return Gifts"
                                                            width="1024" height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/murthi-ganesha-big-divine-figurines-492_220x@2x.jpg?v=1659960666"
                                                            data-lazy-loaded="true">

                                                        <noscript>
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/murthi-ganesha-big-divine-figurines-492_1024x1024.jpg?v=1659960666"
                                                                alt="Murthi - Ganesha Big Divine Return Gifts"
                                                                class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="product-block__title-price">
                                    <a class="title" href="/products/murthi-ganesha-big">
                                        Murthi - Ganesha Big
                                    </a>
                                    <div style="" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="10492524424" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="5.00"
                                            data-number-of-reviews="2" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="5.00" tabindex="0"
                                                aria-label="5.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span> </span> <span
                                                class="jdgm-prev-badge__text">2
                                                reviews</span> </div>
                                    </div>

                                    <div class="themed-product-reviews">
                                        <div class="cc-rating" role="img" data-rating-decimal="0"
                                            aria-label="5.0 out of 5.0 stars">
                                            <span aria-hidden="true" class="cc-rating-stars">
                                                <span class="cc-rating-stars--inactive"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                                <span class="cc-rating-stars--active"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                            </span>
                                        </div>
                                        <p class="cc-rating-text">
                                            <span aria-hidden="true">5.0 / 5.0</span>
                                        </p>
                                        <span class="cc-rating-custom-caption">
                                            2 reviews
                                        </span>
                                    </div>
                                    <div class="price ">
                                        <span class="amount theme-money">Rs 99.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                    </div>
                </div>
            </div>


        </section>



    </div>

    <div class="shopify-section has-alt-bg has-full-width-section" style="margin-top:2.5em !important">
        <section class="border-top section collections-section use-alt-bg full-width-section section-padding-small"
            data-section-type="featured-collections">
            <div class="container cc-animate-init -in cc-animate-complete" data-cc-animate="">
                <h2 class="section-heading"><strong>
                        <center>The LATEST from our collection!</center>
                    </strong></h2>
                <div class="cc-carousel-container not-a-carousel">
                    <div class="row product-grid grid grid--max-cols-4">
                        <div class="product-block collection-block collection-block--circle flex column max-cols-4 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.05s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/return-gifts-under-rs-99">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">
                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/channapatna-toys-coffee-pitcher-wbg0613-kids-return-gifts-564_{width}x.jpg?v=1661750457"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/channapatna-toys-coffee-pitcher-wbg0613-kids-return-gifts-564_300x@2x.jpg?v=1661750457"
                                                        data-lazy-loaded="true">
                                                    <noscript>
                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/channapatna-toys-coffee-pitcher-wbg0613-kids-return-gifts-564_1024x1024.jpg?v=1661750457"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center">
                                    <a href="/collections/return-gifts-under-rs-99" title="">Return Gifts
                                        under Rs 99
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-block collection-block collection-block--circle flex column max-cols-4 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.1s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/brass-diyas">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">
                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/brass-kalpa-vriksha-with-t-light-holder-wl0587-diya-870_{width}x.jpg?v=1660104822"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/brass-kalpa-vriksha-with-t-light-holder-wl0587-diya-870_300x@2x.jpg?v=1660104822"
                                                        data-lazy-loaded="true">
                                                    <noscript>
                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/brass-kalpa-vriksha-with-t-light-holder-wl0587-diya-870_1024x1024.jpg?v=1660104822"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/brass-diyas"
                                        title="">Brass Diyas</a></div>
                            </div>
                        </div>

                        <div class="product-block collection-block collection-block--circle flex column max-cols-4 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.15s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/swarna-golu">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/mini-diya-padi-set-of-2-wl1987-wooden-decor-349_{width}x.jpg?v=1663399754"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/mini-diya-padi-set-of-2-wl1987-wooden-decor-349_300x@2x.jpg?v=1663399754"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/mini-diya-padi-set-of-2-wl1987-wooden-decor-349_1024x1024.jpg?v=1663399754"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/swarna-golu"
                                        title="">Swarna Golu</a></div>
                            </div>
                        </div>

                        <div class="product-block collection-block collection-block--circle flex column max-cols-4 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.2s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/kids-return-gift-combos">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/chain-with-earrings-silver-finish-wbg0501-kids-return-gifts-380_{width}x.jpg?v=1659945269"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/chain-with-earrings-silver-finish-wbg0501-kids-return-gifts-380_300x@2x.jpg?v=1659945269"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/chain-with-earrings-silver-finish-wbg0501-kids-return-gifts-380_1024x1024.jpg?v=1659945269"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/kids-return-gift-combos"
                                        title="">Kids Return
                                        Gifts</a></div>
                            </div>
                        </div>

                        <div class="product-block product-block--flex-spacer flex column max-cols-4 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-4 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-4 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-4 min-cols-2"></div>
                    </div>
                </div>
            </div>


        </section>
    </div>


    <div class="shopify-section has-alt-bg has-full-width-section">
        <section
            class="border-top section products-section use-alt-bg full-width-section section-padding-small cc-start cc-carousel-scrolling"
            data-section-type="featured-collection">
            <div class="container cc-animate-init -in cc-animate-complete" data-cc-animate="">
                <div class="opposing-items opposing-items--heading">
                    <h2 class="section-heading left">
                        <a href="/collections/8-new-exciting-return-gifts">
                            Most popular return gifts
                        </a>
                    </h2>
                    <a class="more-link" href="/collections/8-new-exciting-return-gifts">
                        View all
                    </a>
                </div>

                <div class="cc-carousel-container">
                    <div class="product-grid row grid cc-carousel cc-initialized" data-normheights=".image"
                        data-normheights-inner="img">
                        <div class="product-block layout-align-above align-center flex column max-cols-5 min-cols-2
                        product-block--gutter-0 product-block--gap-10 product-block--border-true product-block--no-quickbuy"
                            id="template--15270806126752__16404781165f8fafd7_319089770536">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural image--with-secondary"
                                    style="min-height: 278.927px;">
                                    <div class="inner">
                                        <a href="/products/jewel-box-with-german-oxidised-finish-w3431"
                                            aria-label="Jewel Box with german Oxidised Finish W3431">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:133.33333333333334%">
                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/jewel-box-with-german-oxidised-finish-w3431-jewellery-holders-798_{width}x.jpg?v=1660046201"
                                                            loading="lazy" alt="" width="768"
                                                            height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/jewel-box-with-german-oxidised-finish-w3431-jewellery-holders-798_220x@2x.jpg?v=1660046201"
                                                            data-lazy-loaded="true">
                                                        <noscript>
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/jewel-box-with-german-oxidised-finish-w3431-jewellery-holders-798_1024x1024.jpg?v=1660046201"
                                                                alt="" class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="image__secondary">
                                                <div class="rimage-outer-wrapper rimage-background"
                                                    data-lazy-bg="https://cdn.shopify.com/s/files/1/2270/8977/products/jewel-box-with-german-oxidised-finish-w3431-jewellery-holders-374_{width}x.jpg?v=1660046205"
                                                    data-parent-fit="contain" data-lazy-loaded="true"
                                                    style="background-image: url(&quot;https://cdn.shopify.com/s/files/1/2270/8977/products/jewel-box-with-german-oxidised-finish-w3431-jewellery-holders-374_220x@2x.jpg?v=1660046205&quot;);">
                                                    <noscript>
                                                        <div class="rimage-wrapper"
                                                            style="padding-top:133.33333333333334%">
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/jewel-box-with-german-oxidised-finish-w3431-jewellery-holders-374_1024x1024.jpg?v=1660046205"
                                                                alt="" class="rimage__image">
                                                        </div>
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-block__title-price">
                                    <a class="title" href="/products/jewel-box-with-german-oxidised-finish-w3431">
                                        Jewel Box with german Oxidised Finish W3431
                                    </a>
                                    <div style="" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="319089770536" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="5.00"
                                            data-number-of-reviews="1" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="5.00" tabindex="0"
                                                aria-label="5.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span> </span> <span
                                                class="jdgm-prev-badge__text">1 review</span>
                                        </div>
                                    </div>

                                    <div class="themed-product-reviews">
                                        <div class="cc-rating" role="img" data-rating-decimal="0"
                                            aria-label="5.0 out of 5.0 stars">
                                            <span aria-hidden="true" class="cc-rating-stars">
                                                <span class="cc-rating-stars--inactive"><svg
                                                        class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                                <span class="cc-rating-stars--active"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                            </span>
                                        </div>
                                        <p class="cc-rating-text">
                                            <span aria-hidden="true">5.0 / 5.0</span>
                                        </p>
                                        <span class="cc-rating-custom-caption">
                                            1 review
                                        </span>
                                    </div>

                                    <div class="price ">
                                        <span class="amount theme-money">Rs 187.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-block layout-align-above align-center flex column max-cols-5 min-cols-2
                            product-block--gutter-0 product-block--gap-10 product-block--border-true product-block--no-quickbuy"
                            id="template--15270806126752__16404781165f8fafd7_1615957983322">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural image--with-secondary"
                                    style="min-height: 278.927px;">
                                    <div class="inner">
                                        <a href="/products/dark-wood-gemstone-painting-key-hanger-8-x-4-inch-w3926"
                                            aria-label="Dark Wood Hand Painted Key Hanger 8 X 4 inch - W3926">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 1024px">
                                                    <div class="rimage-wrapper" style="padding-top:100.0%">
                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/dark-wood-hand-painted-key-hanger-8-x-4-inch-w3926-hangers-757_{width}x.jpg?v=1660120324"
                                                            loading="lazy"
                                                            alt="Dark Wood Gemstone Painting Key Hanger 8 X 4 Inch - W3926 Hangers"
                                                            width="1024" height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/dark-wood-hand-painted-key-hanger-8-x-4-inch-w3926-hangers-757_220x@2x.jpg?v=1660120324"
                                                            data-lazy-loaded="true">
                                                        <noscript>
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/dark-wood-hand-painted-key-hanger-8-x-4-inch-w3926-hangers-757_1024x1024.jpg?v=1660120324"
                                                                alt="Dark Wood Gemstone Painting Key Hanger 8 X 4 Inch - W3926 Hangers"
                                                                class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="image__secondary">
                                                <div class="rimage-outer-wrapper rimage-background"
                                                    data-lazy-bg="https://cdn.shopify.com/s/files/1/2270/8977/products/dark-wood-hand-painted-key-hanger-8-x-4-inch-w3926-hangers-905_{width}x.jpg?v=1660120327"
                                                    data-parent-fit="contain" data-lazy-loaded="true"
                                                    style="background-image: url(&quot;https://cdn.shopify.com/s/files/1/2270/8977/products/dark-wood-hand-painted-key-hanger-8-x-4-inch-w3926-hangers-905_220x@2x.jpg?v=1660120327&quot;);">
                                                    <noscript>
                                                        <div class="rimage-wrapper" style="padding-top:100.0%">
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/dark-wood-hand-painted-key-hanger-8-x-4-inch-w3926-hangers-905_1024x1024.jpg?v=1660120327"
                                                                alt="Dark Wood Gemstone Painting Key Hanger 8 X 4 Inch - W3926 Hangers"
                                                                class="rimage__image">
                                                        </div>
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-block__title-price">
                                    <a class="title"
                                        href="/products/dark-wood-gemstone-painting-key-hanger-8-x-4-inch-w3926">
                                        Dark Wood Hand Painted Key Hanger 8 X 4 inch - W3926
                                    </a>

                                    <div style="" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="1615957983322" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="5.00"
                                            data-number-of-reviews="1" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="5.00" tabindex="0"
                                                aria-label="5.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span> </span> <span
                                                class="jdgm-prev-badge__text">1 review</span>
                                        </div>
                                    </div>

                                    <div class="themed-product-reviews">
                                        <div class="cc-rating" role="img" data-rating-decimal="0"
                                            aria-label="5.0 out of 5.0 stars">
                                            <span aria-hidden="true" class="cc-rating-stars">
                                                <span class="cc-rating-stars--inactive"><svg
                                                        class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                                <span class="cc-rating-stars--active"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                            </span>
                                        </div>
                                        <p class="cc-rating-text">
                                            <span aria-hidden="true">5.0 / 5.0</span>
                                        </p>



                                        <span class="cc-rating-custom-caption">
                                            1 review
                                        </span>

                                    </div>

                                    <div class="price ">
                                        <span class="amount theme-money">Rs 191.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-block layout-align-above align-center flex column max-cols-5
                                min-cols-2 product-block--gutter-0 product-block--gap-10 product-block--border-true product-block--no-quickbuy"
                            id="template--15270806126752__16404781165f8fafd7_7308949946528">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural image--with-secondary"
                                    style="min-height: 278.927px;">
                                    <div class="inner">
                                        <a href="/products/embroidery-clutch-purse-with-cross-design-wbg0170"
                                            aria-label="Embroidery Clutch Purse with Cross Design - WBG0170">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:133.33333333333334%">

                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/embroidery-clutch-purse-with-cross-design-wbg0170-clutches-purses-681_{width}x.jpg?v=1662476701"
                                                            loading="lazy" alt="" width="768"
                                                            height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/embroidery-clutch-purse-with-cross-design-wbg0170-clutches-purses-681_220x@2x.jpg?v=1662476701"
                                                            data-lazy-loaded="true">

                                                        <noscript>
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/embroidery-clutch-purse-with-cross-design-wbg0170-clutches-purses-681_1024x1024.jpg?v=1662476701"
                                                                alt="" class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="image__secondary">
                                                <div class="rimage-outer-wrapper rimage-background"
                                                    data-lazy-bg="https://cdn.shopify.com/s/files/1/2270/8977/products/embroidery-clutch-purse-with-cross-design-wbg0170-clutches-purses-747_{width}x.jpg?v=1662476709"
                                                    data-parent-fit="contain" data-lazy-loaded="true"
                                                    style="background-image: url(&quot;https://cdn.shopify.com/s/files/1/2270/8977/products/embroidery-clutch-purse-with-cross-design-wbg0170-clutches-purses-747_220x@2x.jpg?v=1662476709&quot;);">
                                                    <noscript>
                                                        <div class="rimage-wrapper"
                                                            style="padding-top:133.33333333333334%">
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/embroidery-clutch-purse-with-cross-design-wbg0170-clutches-purses-747_1024x1024.jpg?v=1662476709"
                                                                alt="" class="rimage__image">
                                                        </div>
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-block__title-price">
                                    <a class="title"
                                        href="/products/embroidery-clutch-purse-with-cross-design-wbg0170">
                                        Embroidery Clutch Purse with Cross Design - WBG0170
                                    </a>
                                    <div style="display: none;" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="7308949946528" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="0.00"
                                            data-number-of-reviews="0" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="0.00" tabindex="0"
                                                aria-label="0.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span> </span> <span
                                                class="jdgm-prev-badge__text">Be the first
                                                to Review this Product</span> </div>
                                    </div>

                                    <div class="themed-product-reviews">
                                    </div>

                                    <div class="price ">
                                        <span class="amount theme-money">Rs 189.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-block layout-align-above align-center flex column max-cols-5 min-cols-2 product-block--gutter-0 product-block--gap-10
                            product-block--border-true product-block--no-quickbuy"
                            id="template--15270806126752__16404781165f8fafd7_7102819074208">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural image--with-secondary"
                                    style="min-height: 278.927px;">
                                    <div class="inner">
                                        <a href="/products/om-brass-diya-wl0030" aria-label="Om Brass Diya - WBG0014">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:133.33333333333334%">

                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/om-brass-diya-wbg0014-diyas-465_{width}x.jpg?v=1660056977"
                                                            loading="lazy" alt="" width="768"
                                                            height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/om-brass-diya-wbg0014-diyas-465_220x@2x.jpg?v=1660056977"
                                                            data-lazy-loaded="true">

                                                        <noscript>
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/om-brass-diya-wbg0014-diyas-465_1024x1024.jpg?v=1660056977"
                                                                alt="" class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="image__secondary">
                                                <div class="rimage-outer-wrapper rimage-background"
                                                    data-lazy-bg="https://cdn.shopify.com/s/files/1/2270/8977/products/om-brass-diya-wbg0014-diyas-104_{width}x.jpg?v=1660056980"
                                                    data-parent-fit="contain" data-lazy-loaded="true"
                                                    style="background-image: url(&quot;https://cdn.shopify.com/s/files/1/2270/8977/products/om-brass-diya-wbg0014-diyas-104_220x@2x.jpg?v=1660056980&quot;);">
                                                    <noscript>
                                                        <div class="rimage-wrapper"
                                                            style="padding-top:133.33333333333334%">
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/om-brass-diya-wbg0014-diyas-104_1024x1024.jpg?v=1660056980"
                                                                alt="" class="rimage__image">
                                                        </div>
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <span class="product-label product-label--sale">
                                        <span>
                                            Save 3%
                                        </span>
                                    </span>
                                </div>
                                <div class="product-block__title-price">
                                    <a class="title" href="/products/om-brass-diya-wl0030">
                                        Om Brass Diya - WBG0014
                                    </a>
                                    <div style="display: none;" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="7102819074208" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="0.00"
                                            data-number-of-reviews="0" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="0.00" tabindex="0"
                                                aria-label="0.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span> </span> <span
                                                class="jdgm-prev-badge__text">Be the first
                                                to Review this Product</span> </div>
                                    </div>

                                    <div class="themed-product-reviews">
                                    </div>
                                    <div class="price on-sale">
                                        <span class="amount theme-money">Rs 165.00
                                        </span>
                                        <del><span class="theme-money">Rs 170.00
                                            </span></del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-block layout-align-above align-center sold-out flex column
                             max-cols-5 min-cols-2 product-block--gutter-0 product-block--gap-10
                            product-block--border-true product-block--no-quickbuy"
                            id="template--15270806126752__16404781165f8fafd7_7333890883744">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural image--with-secondary"
                                    style="min-height: 278.927px;">
                                    <div class="inner">
                                        <a href="/products/meenakari-oval-plate-with-floral-design-10-5inches-wbg0261"
                                            aria-label="Meenakari Oval Plate with Floral Design - 10.5Inches - WBG0261">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:133.33333333333334%">

                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/meenakari-oval-plate-with-floral-design-10-5inches-wbg0261-trays-plates-126_{width}x.jpg?v=1660194780"
                                                            loading="lazy" alt="" width="768"
                                                            height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/meenakari-oval-plate-with-floral-design-10-5inches-wbg0261-trays-plates-126_220x@2x.jpg?v=1660194780"
                                                            data-lazy-loaded="true">

                                                        <noscript>

                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/meenakari-oval-plate-with-floral-design-10-5inches-wbg0261-trays-plates-126_1024x1024.jpg?v=1660194780"
                                                                alt="" class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image__secondary">
                                                <div class="rimage-outer-wrapper rimage-background"
                                                    data-lazy-bg="https://cdn.shopify.com/s/files/1/2270/8977/products/meenakari-oval-plate-with-floral-design-10-5inches-wbg0261-trays-plates-899_{width}x.jpg?v=1660194785"
                                                    data-parent-fit="contain" data-lazy-loaded="true"
                                                    style="background-image: url(&quot;https://cdn.shopify.com/s/files/1/2270/8977/products/meenakari-oval-plate-with-floral-design-10-5inches-wbg0261-trays-plates-899_220x@2x.jpg?v=1660194785&quot;);">
                                                    <noscript>
                                                        <div class="rimage-wrapper"
                                                            style="padding-top:133.33333333333334%">
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/meenakari-oval-plate-with-floral-design-10-5inches-wbg0261-trays-plates-899_1024x1024.jpg?v=1660194785"
                                                                alt="" class="rimage__image">
                                                        </div>
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <span class="product-label product-label--soldout"><span>Sold Out</span></span>
                                </div>
                                <div class="product-block__title-price">
                                    <a class="title"
                                        href="/products/meenakari-oval-plate-with-floral-design-10-5inches-wbg0261">
                                        Meenakari Oval Plate with Floral Design - 10.5Inches - WBG0261
                                    </a>

                                    <div style="display: none;" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="7333890883744" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="0.00"
                                            data-number-of-reviews="0" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="0.00" tabindex="0"
                                                aria-label="0.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span> </span> <span
                                                class="jdgm-prev-badge__text">Be the first
                                                to Review this Product</span> </div>
                                    </div>






                                    <div class="themed-product-reviews">


                                    </div>


                                    <div class="price ">


                                        <span class="amount theme-money">Rs 199.00
                                        </span>




                                    </div>
                                </div>




                            </div>
                        </div>

                        <div class="product-block
                            layout-align-above align-center
                            flex column max-cols-5 min-cols-2 product-block--gutter-0
                            product-block--gap-10 product-block--border-true product-block--no-quickbuy
                            "
                            id="template--15270806126752__16404781165f8fafd7_7182954856608">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural image--with-secondary"
                                    style="min-height: 278.927px;">
                                    <div class="inner">
                                        <a href="/products/jute-bag-mango-prints-and-zipper-wl0524"
                                            aria-label="Jute bag - Mango prints and zipper - WBG0010">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:133.33333333333334%">

                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/jute-bag-mango-prints-and-zipper-wbg0010-bags-392_{width}x.jpg?v=1660454109"
                                                            loading="lazy" alt="" width="768"
                                                            height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/jute-bag-mango-prints-and-zipper-wbg0010-bags-392_220x@2x.jpg?v=1660454109"
                                                            data-lazy-loaded="true">

                                                        <noscript>

                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/jute-bag-mango-prints-and-zipper-wbg0010-bags-392_1024x1024.jpg?v=1660454109"
                                                                alt="" class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="image__secondary">
                                                <div class="rimage-outer-wrapper rimage-background"
                                                    data-lazy-bg="https://cdn.shopify.com/s/files/1/2270/8977/products/jute-bag-mango-prints-and-zipper-wbg0010-bags-821_{width}x.jpg?v=1660454114"
                                                    data-parent-fit="contain">
                                                    <noscript>
                                                        <div class="rimage-wrapper"
                                                            style="padding-top:133.33333333333334%">
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/jute-bag-mango-prints-and-zipper-wbg0010-bags-821_1024x1024.jpg?v=1660454114"
                                                                alt="" class="rimage__image">
                                                        </div>
                                                    </noscript>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <span class="product-label product-label--sale">
                                        <span>
                                            Save 22%
                                        </span>
                                    </span>
                                </div>
                                <div class="product-block__title-price">
                                    <a class="title" href="/products/jute-bag-mango-prints-and-zipper-wl0524">
                                        Jute bag - Mango prints and zipper - WBG0010
                                    </a>

                                    <div style="display: none;" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="7182954856608" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="0.00"
                                            data-number-of-reviews="0" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="0.00" tabindex="0"
                                                aria-label="0.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span> </span> <span
                                                class="jdgm-prev-badge__text">Be the first
                                                to Review this Product</span> </div>
                                    </div>






                                    <div class="themed-product-reviews">


                                    </div>


                                    <div class="price on-sale">


                                        <span class="amount theme-money">Rs 125.00
                                        </span>


                                        <del><span class="theme-money">Rs 160.00
                                            </span></del>



                                    </div>
                                </div>




                            </div>
                        </div>

                        <div class="product-block
                            layout-align-above align-center
                            sold-out flex column
                            max-cols-5
                            min-cols-2
                            product-block--gutter-0
                            product-block--gap-10
                            product-block--border-true


                            product-block--no-quickbuy


                            "
                            id="template--15270806126752__16404781165f8fafd7_7360289013920">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural image--with-secondary"
                                    style="min-height: 278.927px;">
                                    <div class="inner">
                                        <a href="/products/handbag-with-peacock-feathered-prints-wbg0352"
                                            aria-label="Handbag with Peacock feathered prints - WBG0352">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:133.33333333333334%">

                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/handbag-with-peacock-feathered-prints-wbg0352-hand-bags-589_{width}x.jpg?v=1660205650"
                                                            loading="lazy" alt="" width="768"
                                                            height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/handbag-with-peacock-feathered-prints-wbg0352-hand-bags-589_220x@2x.jpg?v=1660205650"
                                                            data-lazy-loaded="true">

                                                        <noscript>

                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/handbag-with-peacock-feathered-prints-wbg0352-hand-bags-589_1024x1024.jpg?v=1660205650"
                                                                alt="" class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="image__secondary">
                                                <div class="rimage-outer-wrapper rimage-background"
                                                    data-lazy-bg="https://cdn.shopify.com/s/files/1/2270/8977/products/handbag-with-peacock-feathered-prints-wbg0352-hand-bags-180_{width}x.jpg?v=1660205654"
                                                    data-parent-fit="contain">
                                                    <noscript>
                                                        <div class="rimage-wrapper"
                                                            style="padding-top:133.33333333333334%">
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/handbag-with-peacock-feathered-prints-wbg0352-hand-bags-180_1024x1024.jpg?v=1660205654"
                                                                alt="" class="rimage__image">
                                                        </div>
                                                    </noscript>
                                                </div>
                                            </div>

                                        </a>


                                    </div>
                                    <span class="product-label product-label--soldout"><span>Sold Out</span></span>
                                </div>
                                <div class="product-block__title-price">

                                    <a class="title" href="/products/handbag-with-peacock-feathered-prints-wbg0352">

                                        Handbag with Peacock feathered prints - WBG0352
                                    </a>
















                                    <div style="" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="7360289013920" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="5.00"
                                            data-number-of-reviews="3" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="5.00" tabindex="0"
                                                aria-label="5.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span><span
                                                    class="jdgm-star jdgm--on"></span> </span> <span
                                                class="jdgm-prev-badge__text">3
                                                reviews</span> </div>
                                    </div>






                                    <div class="themed-product-reviews">
                                        <div class="cc-rating" role="img" data-rating-decimal="0"
                                            aria-label="5.0 out of 5.0 stars">
                                            <span aria-hidden="true" class="cc-rating-stars">
                                                <span class="cc-rating-stars--inactive"><svg
                                                        class="cc-rating-stars__svg" width="13" height="13"
                                                        viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                                <span class="cc-rating-stars--active"><svg class="cc-rating-stars__svg"
                                                        width="13" height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg><svg class="cc-rating-stars__svg" width="13"
                                                        height="13" viewBox="0 0 13 13"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.43579 4.9459L13.63 4.9536L9.42653 8.01929L11.0329 12.97L6.81981 9.91778L2.60673 12.97L4.20346 8.01929L0 4.9536L5.20383 4.9459L6.81981 0L8.43579 4.9459Z">
                                                        </path>
                                                    </svg></span>
                                            </span>
                                        </div>
                                        <p class="cc-rating-text">
                                            <span aria-hidden="true">5.0 / 5.0</span>
                                        </p>



                                        <span class="cc-rating-custom-caption">
                                            3 reviews
                                        </span>

                                    </div>


                                    <div class="price ">


                                        <span class="amount theme-money">Rs 89.00
                                        </span>




                                    </div>
                                </div>




                            </div>
                        </div>

                        <div class="product-block
                            layout-align-above align-center
                            flex column
                            max-cols-5
                            min-cols-2
                            product-block--gutter-0
                            product-block--gap-10
                            product-block--border-true


                                product-block--no-quickbuy


                            "
                            id="template--15270806126752__16404781165f8fafd7_7360093749408">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural image--with-secondary"
                                    style="min-height: 278.927px;">
                                    <div class="inner">
                                        <a href="/products/string-bag-with-jute-base-8-x-11inches-wbg0343"
                                            aria-label="String Bag with Jute Base - 8 X 11Inches - WBG0343">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:133.33333333333334%">

                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/string-bag-with-jute-base-8-x-11inches-wbg0343-bags-139_{width}x.jpg?v=1660993246"
                                                            loading="lazy" alt="" width="768"
                                                            height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/string-bag-with-jute-base-8-x-11inches-wbg0343-bags-139_220x@2x.jpg?v=1660993246"
                                                            data-lazy-loaded="true">

                                                        <noscript>

                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/string-bag-with-jute-base-8-x-11inches-wbg0343-bags-139_1024x1024.jpg?v=1660993246"
                                                                alt="" class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="image__secondary">
                                                <div class="rimage-outer-wrapper rimage-background"
                                                    data-lazy-bg="https://cdn.shopify.com/s/files/1/2270/8977/products/string-bag-with-jute-base-8-x-11inches-wbg0343-bags-819_{width}x.jpg?v=1660993250"
                                                    data-parent-fit="contain">
                                                    <noscript>
                                                        <div class="rimage-wrapper"
                                                            style="padding-top:133.33333333333334%">
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/string-bag-with-jute-base-8-x-11inches-wbg0343-bags-819_1024x1024.jpg?v=1660993250"
                                                                alt="" class="rimage__image">
                                                        </div>
                                                    </noscript>
                                                </div>
                                            </div>

                                        </a>


                                    </div>

                                </div>
                                <div class="product-block__title-price">

                                    <a class="title" href="/products/string-bag-with-jute-base-8-x-11inches-wbg0343">

                                        String Bag with Jute Base - 8 X 11Inches - WBG0343
                                    </a>
















                                    <div style="display: none;" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="7360093749408" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="0.00"
                                            data-number-of-reviews="0" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="0.00" tabindex="0"
                                                aria-label="0.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span> </span> <span
                                                class="jdgm-prev-badge__text">Be the first
                                                to Review this Product</span> </div>
                                    </div>






                                    <div class="themed-product-reviews">


                                    </div>


                                    <div class="price ">


                                        <span class="amount theme-money">Rs 49.00
                                        </span>




                                    </div>
                                </div>




                            </div>
                        </div>

                        <div class="product-block
                            layout-align-above align-center
                            sold-out flex column
                            max-cols-5
                            min-cols-2
                            product-block--gutter-0
                            product-block--gap-10
                            product-block--border-true
                            product-block--last

                                product-block--no-quickbuy


                            "
                            id="template--15270806126752__16404781165f8fafd7_7447572578464">
                            <div class="product-block__inner">
                                <div class="image image--shape-natural image--with-secondary"
                                    style="min-height: 278.927px;">
                                    <div class="inner">
                                        <a href="/products/meenakari-oval-plate-with-floral-design-11-5inches-wbg0469"
                                            aria-label="Meenakari Oval Plate with Floral Design - 11.5Inches - WBG0468">
                                            <div class="image__primary">
                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:133.33333333333334%">

                                                        <img class="rimage__image "
                                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/meenakari-oval-plate-with-floral-design-11-5inches-wbg0468-trays-plates-394_{width}x.jpg?v=1660194792"
                                                            loading="lazy" alt="" width="768"
                                                            height="1024"
                                                            src="https://cdn.shopify.com/s/files/1/2270/8977/products/meenakari-oval-plate-with-floral-design-11-5inches-wbg0468-trays-plates-394_220x@2x.jpg?v=1660194792"
                                                            data-lazy-loaded="true">

                                                        <noscript>

                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/meenakari-oval-plate-with-floral-design-11-5inches-wbg0468-trays-plates-394_1024x1024.jpg?v=1660194792"
                                                                alt="" class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="image__secondary">
                                                <div class="rimage-outer-wrapper rimage-background"
                                                    data-lazy-bg="https://cdn.shopify.com/s/files/1/2270/8977/products/meenakari-oval-plate-with-floral-design-11-5inches-wbg0468-trays-plates-535_{width}x.jpg?v=1660194796"
                                                    data-parent-fit="contain">
                                                    <noscript>
                                                        <div class="rimage-wrapper"
                                                            style="padding-top:133.33333333333334%">
                                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/meenakari-oval-plate-with-floral-design-11-5inches-wbg0468-trays-plates-535_1024x1024.jpg?v=1660194796"
                                                                alt="" class="rimage__image">
                                                        </div>
                                                    </noscript>
                                                </div>
                                            </div>

                                        </a>


                                    </div>
                                    <span class="product-label product-label--soldout"><span>Sold Out</span></span>
                                </div>
                                <div class="product-block__title-price">

                                    <a class="title"
                                        href="/products/meenakari-oval-plate-with-floral-design-11-5inches-wbg0469">

                                        Meenakari Oval Plate with Floral Design - 11.5Inches - WBG0468
                                    </a>
















                                    <div style="display: none;" class="jdgm-widget jdgm-preview-badge jdgm--done-setup"
                                        data-id="7447572578464" data-template="index" data-auto-install="false">
                                        <div style="display:none" class="jdgm-prev-badge" data-average-rating="0.00"
                                            data-number-of-reviews="0" data-number-of-questions="0"> <span
                                                class="jdgm-prev-badge__stars" data-score="0.00" tabindex="0"
                                                aria-label="0.00 stars" role="button"> <span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span><span
                                                    class="jdgm-star jdgm--off"></span> </span> <span
                                                class="jdgm-prev-badge__text">Be the first
                                                to Review this Product</span> </div>
                                    </div>






                                    <div class="themed-product-reviews">


                                    </div>


                                    <div class="price ">


                                        <span class="amount theme-money">Rs 249.00
                                        </span>




                                    </div>
                                </div>




                            </div>
                        </div>

                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                    </div>
                </div>
            </div>

            <button class="cc-carousel--previous cc-animate-init cc-initialized -in cc-animate-complete"
                data-cc-animate="" aria-label="Previous">
                <svg fill="#000000" viewBox="0 0 24 24" height="24" width="24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M 14.51,6.51 14,6 8,12 14,18 14.51,17.49 9.03,12 Z"></path>
                </svg>

            </button>

            <button class="cc-carousel--next cc-animate-init cc-initialized -in cc-animate-complete" data-cc-animate=""
                aria-label="Next">
                <svg fill="#000000" viewBox="0 0 24 24" height="24" width="24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M 10,6 9.49,6.51 14.97,12 9.49,17.49 10,18 16,12 Z"></path>
                </svg>

            </button>
        </section>
    </div>


    <div id="shopify-section-template--15270806126752__1640476649f7fa543d" class="shopify-section">
        <section class="border-top section collections-section  section-padding-small"
            data-section-type="featured-collections">
            <div class="container cc-animate-init -in cc-animate-complete" data-cc-animate="">

                <h2 class="section-heading"><strong>
                        <center>Popular Return Gifts Collection</center>
                    </strong></h2>


                <div class="cc-carousel-container
            not-a-carousel">
                    <div class="row product-grid grid
              grid--max-cols-5


               ">



                        <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.05s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/divine-figurines">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/metal-ganesha-enamel-painted-blue-wl1969-2-divine-figurines-503_{width}x.jpg?v=1661578870"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/metal-ganesha-enamel-painted-blue-wl1969-2-divine-figurines-503_220x@2x.jpg?v=1661578870"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/metal-ganesha-enamel-painted-blue-wl1969-2-divine-figurines-503_1024x1024.jpg?v=1661578870"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/divine-figurines"
                                        title="">Divine Figurines</a>
                                </div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.1s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/diyas">
                                            <div class="rimage-outer-wrapper" style="max-width: 1300px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/collections/12-7_{width}x.jpg?v=1645097311"
                                                        loading="lazy" alt="Diyas" width="1300" height="600"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/collections/12-7_220x@2x.jpg?v=1645097311"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/collections/12-7_1024x1024.jpg?v=1645097311"
                                                            alt="Diyas" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/diyas" title="">Diyas</a>
                                </div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.15s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/pooja-utilities">
                                            <div class="rimage-outer-wrapper" style="max-width: 1300px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/collections/12-4_{width}x.jpg?v=1645097168"
                                                        loading="lazy" alt="Pooja Utilities" width="1300"
                                                        height="600"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/collections/12-4_220x@2x.jpg?v=1645097168"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/collections/12-4_1024x1024.jpg?v=1645097168"
                                                            alt="Pooja Utilities" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/pooja-utilities"
                                        title="">Pooja Utilities</a>
                                </div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.2s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/jewellery-organizers">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/jewel-box-with-german-oxidised-finish-w3431-jewellery-holders-798_{width}x.jpg?v=1660046201"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/jewel-box-with-german-oxidised-finish-w3431-jewellery-holders-798_220x@2x.jpg?v=1660046201"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/jewel-box-with-german-oxidised-finish-w3431-jewellery-holders-798_1024x1024.jpg?v=1660046201"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/jewellery-organizers"
                                        title="">Jewellery
                                        Organizers</a></div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.25s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/dry-fruit-boxes">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/dry-fruit-box-flower-embossed-wbg0617-768_{width}x.jpg?v=1661852828"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/dry-fruit-box-flower-embossed-wbg0617-768_220x@2x.jpg?v=1661852828"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/dry-fruit-box-flower-embossed-wbg0617-768_1024x1024.jpg?v=1661852828"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/dry-fruit-boxes"
                                        title="">Dry Fruit Boxes</a>
                                </div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2 cc-animate-init"
                            data-cc-animate="" data-cc-animate-delay="0.3s" style="transition-delay: 0.3s;">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/utensils">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/silver-coated-glass-small-w2425-utensils-334_{width}x.jpg?v=1660052460"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/silver-coated-glass-small-w2425-utensils-334_220x@2x.jpg?v=1660052460"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/silver-coated-glass-small-w2425-utensils-334_1024x1024.jpg?v=1660052460"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/utensils"
                                        title="">Utensils</a></div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2 cc-animate-init"
                            data-cc-animate="" data-cc-animate-delay="0.35s" style="transition-delay: 0.35s;">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/kumkum-holders">
                                            <div class="rimage-outer-wrapper" style="max-width: 1300px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/collections/12-8_{width}x.jpg?v=1645097231"
                                                        loading="lazy" alt="Kumkum Holders" width="1300"
                                                        height="600"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/collections/12-8_220x@2x.jpg?v=1645097231"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/collections/12-8_1024x1024.jpg?v=1645097231"
                                                            alt="Kumkum Holders" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/kumkum-holders"
                                        title="">Kumkum Holders</a></div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2 cc-animate-init"
                            data-cc-animate="" data-cc-animate-delay="0.4s" style="transition-delay: 0.4s;">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/trays-plates">
                                            <div class="rimage-outer-wrapper" style="max-width: 1024px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/minakari-plate-8-inch-special-trays-plates-248_{width}x.jpg?v=1660050854"
                                                        loading="lazy"
                                                        alt="Minakari Plate 8 Inch Special Trays &amp; Plates"
                                                        width="1024" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/minakari-plate-8-inch-special-trays-plates-248_220x@2x.jpg?v=1660050854"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/minakari-plate-8-inch-special-trays-plates-248_1024x1024.jpg?v=1660050854"
                                                            alt="Minakari Plate 8 Inch Special Trays &amp; Plates"
                                                            class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/trays-plates"
                                        title="">Trays &amp; Plates</a>
                                </div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2 cc-animate-init"
                            data-cc-animate="" data-cc-animate-delay="0.45s" style="transition-delay: 0.45s;">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/key-hangers">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/wooden-key-hanger-royal-elephant-big-12x6-wl2009-2-hangers-965_{width}x.jpg?v=1662533670"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/wooden-key-hanger-royal-elephant-big-12x6-wl2009-2-hangers-965_220x@2x.jpg?v=1662533670"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/wooden-key-hanger-royal-elephant-big-12x6-wl2009-2-hangers-965_1024x1024.jpg?v=1662533670"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/key-hangers" title="">Key
                                        Hangers</a></div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2 cc-animate-init"
                            data-cc-animate="" data-cc-animate-delay="0.5s" style="transition-delay: 0.5s;">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/dining-essentials">
                                            <div class="rimage-outer-wrapper" style="max-width: 1024px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/dark-wood-gemstone-coaster-set-of-4-coasters-835_{width}x.jpg?v=1661611270"
                                                        loading="lazy"
                                                        alt="Dark Wood Gemstone Coaster- Set Of 4 Utility Return Gifts"
                                                        width="1024" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/dark-wood-gemstone-coaster-set-of-4-coasters-835_220x@2x.jpg?v=1661611270"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/dark-wood-gemstone-coaster-set-of-4-coasters-835_1024x1024.jpg?v=1661611270"
                                                            alt="Dark Wood Gemstone Coaster- Set Of 4 Utility Return Gifts"
                                                            class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/dining-essentials"
                                        title="">Dining Essentials</a>
                                </div>
                            </div>
                        </div>



                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                    </div>
                </div>
            </div>


        </section>


    </div>


    <div id="shopify-section-template--15270806126752__164047772053a9c737" class="shopify-section">
        <section class="border-top section collections-section  section-padding-small"
            data-section-type="featured-collections">
            <div class="container cc-animate-init -in cc-animate-complete" data-cc-animate="">

                <h2 class="section-heading"><strong>
                        <center>Popular Favour Bags Collections</center>
                    </strong></h2>


                <div class="cc-carousel-container
            not-a-carousel">
                    <div
                        class="row product-grid grid
              grid--max-cols-4


               ">



                        <div class="product-block collection-block collection-block--circle flex column max-cols-4 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.05s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/jute-bags">
                                            <div class="rimage-outer-wrapper" style="max-width: 7500px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/collections/Banner-1_{width}x.jpg?v=1644479476"
                                                        loading="lazy" alt="Jute Bags" width="7500" height="2500"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/collections/Banner-1_300x@2x.jpg?v=1644479476"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/collections/Banner-1_1024x1024.jpg?v=1644479476"
                                                            alt="Jute Bags" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/jute-bags" title="">Jute
                                        Bags</a></div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-4 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.1s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/potli-bags">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/potli-bag-with-golden-dots-and-round-base-9inches-wbg0113-bags-712_{width}x.jpg?v=1660044747"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/potli-bag-with-golden-dots-and-round-base-9inches-wbg0113-bags-712_300x@2x.jpg?v=1660044747"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/potli-bag-with-golden-dots-and-round-base-9inches-wbg0113-bags-712_1024x1024.jpg?v=1660044747"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/potli-bags" title="">Potli
                                        Bags</a></div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-4 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.15s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/hand-bags">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/multicolor-handbag-with-white-floral-embroidery-wbg0298-hand-bags-209_{width}x.jpg?v=1661332450"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/multicolor-handbag-with-white-floral-embroidery-wbg0298-hand-bags-209_300x@2x.jpg?v=1661332450"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/multicolor-handbag-with-white-floral-embroidery-wbg0298-hand-bags-209_1024x1024.jpg?v=1661332450"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/hand-bags" title="">Hand
                                        Bags</a></div>
                            </div>
                        </div>




                        <div class="product-block collection-block collection-block--circle flex column max-cols-4 min-cols-2 cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.2s" style="">
                            <div class="product-block__inner">
                                <div class="image">
                                    <div class="inner">
                                        <a href="/collections/clutches-n-purses">
                                            <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                <div class="rimage-wrapper" style="padding-top:100%">

                                                    <img class="rimage__image "
                                                        data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/products/multi-design-jakat-pouch-wbg0110-clutches-purses-780_{width}x.jpg?v=1660226495"
                                                        loading="lazy" alt="" width="768" height="1024"
                                                        src="https://cdn.shopify.com/s/files/1/2270/8977/products/multi-design-jakat-pouch-wbg0110-clutches-purses-780_300x@2x.jpg?v=1660226495"
                                                        data-lazy-loaded="true">

                                                    <noscript>

                                                        <img src="https://cdn.shopify.com/s/files/1/2270/8977/products/multi-design-jakat-pouch-wbg0110-clutches-purses-780_1024x1024.jpg?v=1660226495"
                                                            alt="" class="rimage__image ">
                                                    </noscript>
                                                </div>
                                            </div>



                                        </a>
                                    </div>
                                </div>

                                <div class="title align-center"><a href="/collections/clutches-n-purses"
                                        title="">Clutches 'n'
                                        Purses</a></div>
                            </div>
                        </div>



                        <div class="product-block product-block--flex-spacer flex column max-cols-4 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-4 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-4 min-cols-2"></div>
                        <div class="product-block product-block--flex-spacer flex column max-cols-4 min-cols-2"></div>
                    </div>
                </div>
            </div>


        </section>


    </div>

    <div id="shopify-section-template--15270806126752__1643958633f489e666" class="shopify-section">
        <section id="section-id-template--15270806126752__1643958633f489e666"
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


                <div class="column-container column-count--2 align-center">

                    <div id="block-id-1643958633d4087687-0"
                        class="text-column align-center cc-fade-in-up cc-animate-init -in cc-animate-complete"
                        data-cc-animate="cc-fade-in-up" data-cc-animate-delay="0.15s" style="">


                        <div class="text-column__image text-column__image--shape-landscape"><a
                                href="https://goo.gl/maps/hMTHuBT28MEVFLAr9" aria-label="CHENNAI STORE">
                                <div class="rimage-outer-wrapper" style="max-width: 4608px">
                                    <div class="rimage-wrapper" style="padding-top:75.0%">

                                        <img class="rimage__image "
                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/files/20220128_163158_{width}x.jpg?v=1643958797"
                                            loading="lazy" alt="" width="4608" height="3456"
                                            src="https://cdn.shopify.com/s/files/1/2270/8977/files/20220128_163158_540x@2x.jpg?v=1643958797"
                                            data-lazy-loaded="true">

                                        <noscript>

                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/files/20220128_163158_1024x1024.jpg?v=1643958797"
                                                alt="" class="rimage__image ">
                                        </noscript>
                                    </div>
                                </div>

                            </a></div>



                        <h3 class="text-column__title align-center">CHENNAI STORE</h3>



                        <div class="text-column__text rte align-center">
                            <p>37, Thanikachalam Road, Opp. Hotel Mathysa, T Nagar, Chennai - 600017</p>
                            <p><strong>PHONE - 044 4230 0997</strong></p>
                            <p>Timing : 10 AM - 8 PM (Open all days)</p>
                        </div>



                        <div class="text-column__button-row align-center"><a
                                class="btn
                        btn--secondary
      "
                                href="https://goo.gl/maps/hMTHuBT28MEVFLAr9">
                                Google Map Location
                            </a>
                        </div>

                    </div>

                    <div id="block-id-1643958633d4087687-1"
                        class="text-column align-center cc-fade-in-up cc-animate-init -in cc-animate-complete"
                        data-cc-animate="cc-fade-in-up" data-cc-animate-delay="0.3s" style="">


                        <div class="text-column__image text-column__image--shape-landscape"><a href="/pages/contact-us"
                                aria-label="ONLINE CUSTOMER SUPPORT">
                                <div class="rimage-outer-wrapper" style="max-width: 3960px">
                                    <div class="rimage-wrapper" style="padding-top:66.66666666666666%">

                                        <img class="rimage__image "
                                            data-lazy-src="https://cdn.shopify.com/s/files/1/2270/8977/files/thumbs-up-on-yellow_{width}x.jpg?v=1643959654"
                                            loading="lazy" alt="" width="3960" height="2640"
                                            src="https://cdn.shopify.com/s/files/1/2270/8977/files/thumbs-up-on-yellow_540x@2x.jpg?v=1643959654"
                                            data-lazy-loaded="true">

                                        <noscript>

                                            <img src="https://cdn.shopify.com/s/files/1/2270/8977/files/thumbs-up-on-yellow_1024x1024.jpg?v=1643959654"
                                                alt="" class="rimage__image ">
                                        </noscript>
                                    </div>
                                </div>

                            </a></div>



                        <h3 class="text-column__title align-center">ONLINE CUSTOMER SUPPORT</h3>



                        <div class="text-column__text rte align-center">
                            <p><strong>PHONE - +91 99622 15000</strong></p>
                            <p>Operational Hours : 10 AM - 6:30 PM (Monday to Saturday)</p>
                            <p>Email - support@wedtree.com</p>
                        </div>



                        <div class="text-column__button-row align-center"><a
                                class="btn
                        btn--secondary
      " href="/pages/contact-us">
                                CONTACT US
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>



    </div>


@stop
