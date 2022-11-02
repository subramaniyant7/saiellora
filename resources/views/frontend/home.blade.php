@extends('frontend.layout')

@section('content')
    @include('frontend.banner')
    @php
        $lang = request()->lang != '' ? '?lang=' . request()->lang : '';
        $langCon = request()->lang != '' ? '&lang=' . request()->lang : '';
    @endphp
    @if (count($homepageCategory))
        {{-- Category --}}
        <div id="shopify-section-template--15270806126752__1640476649f7fa543d" class="shopify-section">
            <section style="background: #e7c49c;" class="border-top section collections-section  section-padding-small"
                data-section-type="featured-collections">
                <div class="container cc-animate-init -in cc-animate-complete" data-cc-animate="">

                    <div class="opposing-items opposing-items--heading">
                        <h2 class="section-heading left">
                            <a href="{{ url(FRONTENDURL) . 'category' . $lang }}">
                                {{ request()->lang != 'ta' ? 'Categories' : 'வகைகள்' }}
                            </a>
                        </h2>
                    </div>


                    <div class="cc-carousel-container ">
                        <div class="product-grid cc-carousel cc-initialized row product-grid grid grid--max-cols-5" id="category_content">
                            @foreach ($homepageCategory as $category)
                                <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2
                                    cc-animate-init -in cc-animate-complete"
                                    data-cc-animate="" data-cc-animate-delay="0.05s" style="">
                                    <div class="product-block__inner">
                                        <div class="image">
                                            <div class="inner">
                                                <a
                                                    href="{{ url(FRONTENDURL . 'products?category=' . encryption($category->category_id) . $langCon) }}">
                                                    <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                        <div class="rimage-wrapper" style="padding-top:100%">
                                                            <img class="rimage__image "
                                                                data-lazy-src="{{ URL::asset('uploads/category/' . $category->category_img) }}"
                                                                loading="lazy" alt="" width="768" height="1024"
                                                                src="{{ URL::asset('uploads/category/' . $category->category_img) }}"
                                                                data-lazy-loaded="true">
                                                            <noscript>
                                                                <img src="{{ URL::asset('uploads/category/' . $category->category_img) }}"
                                                                    alt="" class="rimage__image ">
                                                            </noscript>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="title align-center">
                                            <a href="{{ url(FRONTENDURL . 'products?category=' . encryption($category->category_id) . $langCon) }}"
                                                title="">
                                                {{ request()->lang != 'ta' ? $category->category_name : ($category->category_name_tamil != '' ? $category->category_name_tamil : $category->category_name) }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <button class="cc-carousel--previous cc-animate-init cc-initialized -in cc-animate-complete"
                    id="previous_category" data-cc-animate="" aria-label="Previous">
                    <svg fill="#3a1811" viewBox="0 0 24 24" height="24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M 14.51,6.51 14,6 8,12 14,18 14.51,17.49 9.03,12 Z" stroke="#3a1811" stroke-width="2">
                        </path>
                    </svg>

                </button>

                <button class="cc-carousel--next cc-animate-init cc-initialized -in cc-animate-complete" data-cc-animate=""
                    id="next_category" aria-label="Next">
                    <svg fill="#3a1811" viewBox="0 0 24 24" height="24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path font-weight="bold" d="M 10,6 9.49,6.51 14.97,12 9.49,17.49 10,18 16,12 Z" stroke="#3a1811"
                            stroke-width="2"></path>
                    </svg>

                </button>
            </section>
        </div>
    @endif

    @if (count($latestProducts))
        {{-- Latest Products --}}
        <div class="shopify-section has-alt-bg has-full-width-section">
            <section style="background: #e7c49c;"
                class="border-top section products-section use-alt-bg full-width-section section-padding-small cc-start cc-carousel-scrolling"
                data-section-type="featured-collection">
                <div class="container cc-animate-init -in cc-animate-complete" data-cc-animate="">
                    <div class="opposing-items opposing-items--heading">
                        <h2 class="section-heading left">
                            <a href="javascript:void(0)">
                                {{ request()->lang != 'ta' ? 'Latest Products' : 'சமீபத்திய தயாரிப்புகள்' }}
                            </a>
                        </h2>
                    </div>

                    <div class="cc-carousel-container">
                        <div class="product-grid row grid cc-carousel cc-initialized" id="scroll_content"
                            data-normheights=".image" data-normheights-inner="img">

                            @foreach ($latestProducts as $latestproduct)
                                <div class="product-block layout-align-above align-center flex column max-cols-5 min-cols-2
                                product-block--gutter-0 product-block--gap-10 product-block--border-true product-block--no-quickbuy"
                                    id="template--15270806126752__16404781165f8fafd7_319089770536">
                                    <div class="product-block__inner">
                                        <div class="image image--shape-natural image--with-secondary"
                                            style="min-height: 278.927px;">
                                            <div class="inner">
                                                <a href="{{ url(FRONTENDURL . 'productdetails/' . encryption($latestproduct->product_id) . $lang) }}"
                                                    aria-label="">
                                                    <div class="image__primary">
                                                        <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                            <div class="rimage-wrapper"
                                                                style="padding-top:133.33333333333334%">
                                                                <img class="rimage__image "
                                                                    data-lazy-src="{{ URL::asset('uploads/products/' . $latestproduct->product_image) }}"
                                                                    loading="lazy" alt="" width="768"
                                                                    height="1024"
                                                                    src="{{ URL::asset('uploads/products/' . $latestproduct->product_image) }}"
                                                                    data-lazy-loaded="true">
                                                                <noscript>
                                                                    <img src="{{ URL::asset('uploads/products/' . $latestproduct->product_image) }}"
                                                                        alt="" class="rimage__image ">
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="image__secondary">
                                                        <div class="rimage-outer-wrapper rimage-background"
                                                            data-parent-fit="contain" data-lazy-loaded="true"
                                                            style="background-image: url(&quot;{{ URL::asset('uploads/products/' . $latestproduct->product_image) }}&quot;);">
                                                            <noscript>
                                                                <div class="rimage-wrapper"
                                                                    style="padding-top:133.33333333333334%">
                                                                    <img src="{{ URL::asset('uploads/products/' . $latestproduct->product_image) }}"
                                                                        alt="" class="rimage__image">
                                                                </div>
                                                            </noscript>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-block__title-price">
                                            <a class="title" href="#">
                                                {{ request()->lang != 'ta' ? $latestproduct->product_name : ($latestproduct->product_name_tamil != '' ? $latestproduct->product_name_tamil : $latestproduct->product_name) }}

                                            </a>
                                            @if ($latestproduct->product_price > 0)
                                                <div class="price ">
                                                    <span class="amount theme-money">Rs
                                                        {{ number_format($latestproduct->product_price, 2) }}
                                                    </span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <button class="cc-carousel--previous cc-animate-init cc-initialized -in cc-animate-complete"
                    id="previous_product" data-cc-animate="" aria-label="Previous">
                    <svg fill="#3a1811" viewBox="0 0 24 24" height="24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M 14.51,6.51 14,6 8,12 14,18 14.51,17.49 9.03,12 Z" stroke="#3a1811" stroke-width="2">
                        </path>
                    </svg>

                </button>

                <button class="cc-carousel--next cc-animate-init cc-initialized -in cc-animate-complete"
                    data-cc-animate="" id="next_product" aria-label="Next">
                    <svg fill="#3a1811" viewBox="0 0 24 24" height="24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path font-weight="bold" d="M 10,6 9.49,6.51 14.97,12 9.49,17.49 10,18 16,12 Z" stroke="#3a1811"
                            stroke-width="2"></path>
                    </svg>

                </button>
            </section>
        </div>
    @endif

    {{-- Blog --}}
    <div class="shopify-section section-image-with-text">
        <style data-shopify="">
            .slider {
                width: 50%;
                margin: 100px auto;
            }

            .slick-slide {
                margin: 0px 20px;
            }

            .slick-slide img {
                width: 100%;
            }

            .slick-prev:before,
            .slick-next:before {
                color: black;
            }


            .slick-slide {
                transition: all ease-in-out .3s;
                opacity: .2;
            }

            .slick-active {
                opacity: .5;
            }

            .slick-current {
                opacity: 1;
            }

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

        @if (count($homepageBlog) && $homepageBlog[0]->status == 1)
            <section style="background: #e7c49c;"
                class="border-top section image-with-text cf section-id-template--15270806126752__1660395035d7566d05
                image-with-text--contain image-with-text--image-right"
                data-section-type="image-with-text">
                <div class="container">
                    <div class="image-with-text__text align-center cc-animate-init -in cc-animate-complete"
                        data-cc-animate="" data-cc-animate-delay="0.2s" style="">
                        <div class="image-with-text__text__wrap padded-block-y">
                            <h2 class="h1 align-center cc-animate-init -in cc-animate-complete" data-cc-animate=""
                                data-cc-animate-delay="0.3s" style="">
                                {{ request()->lang != 'ta' ? $homepageBlog[0]->blog_title : ($homepageBlog[0]->blog_title_tamil != '' ? $homepageBlog[0]->blog_title_tamil : $homepageBlog[0]->blog_title) }}
                            </h2>

                            <div class="rte align-center cc-animate-init -in cc-animate-complete" data-cc-animate=""
                                data-cc-animate-delay="0.4s" style="">
                                <p>
                                    {{ request()->lang != 'ta' ? $homepageBlog[0]->blog_description : ($homepageBlog[0]->blog_description_tamil != '' ? $homepageBlog[0]->blog_description_tamil : $homepageBlog[0]->blog_description) }}

                                </p>
                            </div>

                            <div class="light-space-above cc-animate-init -in cc-animate-complete" data-cc-animate=""
                                data-cc-animate-delay="0.5s" style="">
                                <a class="btn" href="{{ url(FRONTENDURL . 'blogs' . $lang) }}">
                                    {{ request()->lang != 'ta' ? 'Read Blogs' : 'வலைப்பதிவுகளைப் படியுங்கள்' }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="image-with-text__image cc-animate-init -in cc-animate-complete" data-cc-animate="">
                        <div class="image-with-text__image__inner">
                            <div class="rimage-outer-wrapper cc-zoom-out cc-animate-init -in cc-animate-complete"
                                data-cc-animate="cc-zoom-out"
                                data-lazy-bg="{{ URL::asset('uploads/blog/' . $homepageBlog[0]->blog_image) }}"
                                style="max-width: 2100px; max-height: 1050px; background-image: url(&quot;{{ URL::asset('uploads/blog/' . $homepageBlog[0]->blog_image) }}&quot;);"
                                data-lazy-loaded="true">
                                <div class="rimage-wrapper" style="padding-top:50.0%">
                                    <noscript>
                                        <img src="{{ URL::asset('uploads/blog/' . $homepageBlog[0]->blog_image) }}"
                                            alt="" class="rimage__image">
                                    </noscript>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        @endif
    </div>

    @if (count($popularProducts))
        {{-- Most Popular Products --}}
        <div class="shopify-section has-alt-bg has-full-width-section">
            <section style="background: #e7c49c;"
                class="border-top section products-section use-alt-bg full-width-section section-padding-small cc-start cc-carousel-scrolling"
                data-section-type="featured-collection">
                <div class="container cc-animate-init -in cc-animate-complete" data-cc-animate="">
                    <div class="opposing-items opposing-items--heading">
                        <h2 class="section-heading left">
                            <a href="javascript:void(0)">
                                {{ request()->lang != 'ta' ? 'Most Popular Products' : 'மிகவும் பிரபலமான தயாரிப்புகள்' }}
                            </a>
                        </h2>
                    </div>

                    <div class="cc-carousel-container">
                        <div class="product-grid row grid cc-carousel cc-initialized" id="scrolllatest_content"
                            data-normheights=".image" data-normheights-inner="img">

                            @foreach ($popularProducts as $popularProduct)
                                <div class="product-block layout-align-above align-center flex column max-cols-5 min-cols-2
                                        product-block--gutter-0 product-block--gap-10 product-block--border-true product-block--no-quickbuy"
                                    id="template--15270806126752__16404781165f8fafd7_319089770536">
                                    <div class="product-block__inner">
                                        <div class="image image--shape-natural image--with-secondary"
                                            style="min-height: 278.927px;">
                                            <div class="inner">
                                                <a href="{{ url(FRONTENDURL . 'productdetails/' . encryption($popularProduct->product_id) . $lang) }}"
                                                    aria-label="Jewel Box with german Oxidised Finish W3431">
                                                    <div class="image__primary">
                                                        <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                            <div class="rimage-wrapper"
                                                                style="padding-top:133.33333333333334%">
                                                                <img class="rimage__image "
                                                                    data-lazy-src="{{ URL::asset('uploads/products/' . $popularProduct->product_image) }}"
                                                                    loading="lazy" alt="" width="768"
                                                                    height="1024"
                                                                    src="{{ URL::asset('uploads/products/' . $popularProduct->product_image) }}"
                                                                    data-lazy-loaded="true">
                                                                <noscript>
                                                                    <img src="{{ URL::asset('uploads/products/' . $popularProduct->product_image) }}"
                                                                        alt="" class="rimage__image ">
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="image__secondary">
                                                        <div class="rimage-outer-wrapper rimage-background"
                                                            data-parent-fit="contain" data-lazy-loaded="true"
                                                            style="background-image: url(&quot;{{ URL::asset('uploads/products/' . $popularProduct->product_image) }}&quot;);">
                                                            <noscript>
                                                                <div class="rimage-wrapper"
                                                                    style="padding-top:133.33333333333334%">
                                                                    <img src="{{ URL::asset('uploads/products/' . $popularProduct->product_image) }}"
                                                                        alt="" class="rimage__image">
                                                                </div>
                                                            </noscript>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-block__title-price">
                                            <a class="title" href="#">
                                                {{ request()->lang != 'ta' ? $popularProduct->product_name : ($popularProduct->product_name_tamil != '' ? $popularProduct->product_name_tamil : $popularProduct->product_name) }}

                                            </a>
                                            @if ($popularProduct->product_price > 0)
                                                <div class="price ">
                                                    <span class="amount theme-money">Rs
                                                        {{ number_format($popularProduct->product_price, 2) }}
                                                    </span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>


                <button class="cc-carousel--previous cc-animate-init cc-initialized -in cc-animate-complete"
                    id="previouslatest_product" data-cc-animate="" aria-label="Previous">
                    <svg fill="#3a1811" viewBox="0 0 24 24" height="24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M 14.51,6.51 14,6 8,12 14,18 14.51,17.49 9.03,12 Z" stroke="#3a1811" stroke-width="2">
                        </path>
                    </svg>

                </button>

                <button class="cc-carousel--next cc-animate-init cc-initialized -in cc-animate-complete"
                    data-cc-animate="" id="nextlatest_product" aria-label="Next">
                    <svg fill="#3a1811" viewBox="0 0 24 24" height="24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M 10,6 9.49,6.51 14.97,12 9.49,17.49 10,18 16,12 Z" stroke="#3a1811" stroke-width="2">
                        </path>
                    </svg>
                </button>
            </section>
        </div>
    @endif


    @if (count($videoContent) && $videoContent[0]->status == 1)
        {{-- Video --}}
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

            <section style="background: #e7c49c;"
                class="border-top section image-with-text cf section-id-template--15270806126752__1661578506d4ee519e
                image-with-text--contain image-with-text--image-left"
                data-section-type="image-with-text">
                <div class="container">
                    <div class="image-with-text__image cc-animate-init -in cc-animate-complete" data-cc-animate="">
                        <div class="image-with-text__image__inner">
                            <div class="rimage-outer-wrapper cc-zoom-out cc-animate-init -in cc-animate-complete"
                                data-cc-animate="cc-zoom-out"
                                data-lazy-bg="{{ URL::asset('uploads/homepage/' . $videoContent[0]->home_video_image) }}"
                                style="max-width: 1920px; max-height: 1080px; background-image: url(&quot;{{ URL::asset('uploads/homepage/' . $videoContent[0]->home_video_image) }}&quot;);"
                                data-lazy-loaded="true">
                                <div class="rimage-wrapper" style="padding-top:56.25%">
                                    <noscript>
                                        <img src="{{ URL::asset('uploads/homepage/' . $videoContent[0]->home_video_image) }}"
                                            alt="" class="rimage__image">
                                    </noscript>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="image-with-text__text align-center cc-animate-init -in cc-animate-complete"
                        data-cc-animate="" data-cc-animate-delay="0.2s" style="">
                        <div class="image-with-text__text__wrap padded-block-y">
                            <h2 class="h1 align-center cc-animate-init -in cc-animate-complete" data-cc-animate=""
                                data-cc-animate-delay="0.3s" style="">
                                {{ request()->lang != 'ta' ? $videoContent[0]->home_video_title : ($videoContent[0]->home_video_title_tamil != '' ? $videoContent[0]->home_video_title_tamil : $videoContent[0]->home_video_title) }}
                            </h2>
                            <div class="rte align-center cc-animate-init" data-cc-animate="" data-cc-animate-delay="0.4s"
                                style="transition-delay: 0.4s;">
                                <p>
                                    {{ request()->lang != 'ta' ? $videoContent[0]->home_video_description : ($videoContent[0]->home_video_description_tamil != '' ? $videoContent[0]->home_video_description_tamil : $videoContent[0]->home_video_description) }}
                                    <br><br>
                                </p>
                            </div>
                            <div class="light-space-above cc-animate-init" data-cc-animate=""
                                data-cc-animate-delay="0.5s" style="transition-delay: 0.5s;">
                                {{-- {!! $videoContent[0]->home_video_link !!} --}}
                                <a class="btn" href="{{ $videoContent[0]->home_video_link }}" target="_blank">
                                    {{ request()->lang != 'ta' ? 'Watch Video' : 'வீடியோவை பார்க்கவும்' }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endif



@stop
