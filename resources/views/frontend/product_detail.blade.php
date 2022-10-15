@extends('frontend.layout')

@section('content')

    <main id="content" style="padding-top:4em;background:#e7c49c;">
        <div id="shopify-section-template--15270806290592__main" class="shopify-section section-product-template">
            <div class="section container product-container product-container--wide " data-section-type="product-template"
                data-components="accordion">

                <div class="row product-container">
                    <div class="product-gallery half column gallery-loaded cc-animate-init -in cc-animate-complete"
                        data-enable-zoom="true" data-full-image-width="768" data-cc-animate="">
                        <div class="main">
                            <div class="product-gallery--hover-veil"></div>
                            <div class="product-media product-media--image" data-media-id="25365304869024"
                                data-media-type="image" style="display: block;">
                                <a class="main-img-link main-img-link--lightbox zoom-enabled" href="javascript:void(0)"
                                    title="" style="position: relative; overflow: hidden;">
                                    <div class="rimage-outer-wrapper" style="max-width: 768px">
                                        <div class="rimage-wrapper" style="padding-top:133.33333333333334%">
                                            <img class="rimage__image "
                                                data-lazy-src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                loading="lazy" alt="" width="768" height="1024"
                                                src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                data-lazy-loaded="true">

                                            <noscript>
                                                <img src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                    alt="" class="rimage__image ">
                                            </noscript>
                                        </div>
                                    </div>
                                    <img src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                        class="zoomImg" alt="Zoom image" id="change_img"
                                        style="position: absolute; top: -97.1964px; left: -7.85714px; opacity: 1; width: 768px; height: 1024px; border: none; max-width: none; max-height: none;">
                                </a>
                            </div>


                            <div class="product-media product-media--image" data-media-id="25365305065632"
                                data-media-type="image">
                                <a class="main-img-link main-img-link--lightbox" href="javascript:void(0)" title="">
                                    <div class="rimage-outer-wrapper" style="max-width: 768px">
                                        <div class="rimage-wrapper" style="padding-top:133.33333333333334%">

                                            <img class="rimage__image "
                                                data-lazy-src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                loading="lazy" alt="" width="768" height="1024"
                                                src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                data-lazy-loaded="true">

                                            <noscript>
                                                <img src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                    alt="" class="rimage__image ">
                                            </noscript>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="product-media product-media--image" data-media-id="25365305622688"
                                data-media-type="image">
                                <a class="main-img-link main-img-link--lightbox" href="javascript:void(0)" title="">
                                    <div class="rimage-outer-wrapper" style="max-width: 768px">
                                        <div class="rimage-wrapper" style="padding-top:133.33333333333334%">
                                            <img class="rimage__image "
                                                data-lazy-src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                loading="lazy" alt="" width="768" height="1024"
                                                src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                data-lazy-loaded="true">
                                            <noscript>
                                                <img src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                    alt="" class="rimage__image ">
                                            </noscript>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="product-media product-media--image" data-media-id="25365306114208"
                                data-media-type="image">
                                <a class="main-img-link main-img-link--lightbox" href="javascript:void(0)" title="">
                                    <div class="rimage-outer-wrapper" style="max-width: 768px">
                                        <div class="rimage-wrapper" style="padding-top:133.33333333333334%">
                                            <img class="rimage__image "
                                                data-lazy-src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                loading="lazy" alt="" width="768" height="1024"
                                                src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                data-lazy-loaded="true">

                                            <noscript>
                                                <img src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                    alt="" class="rimage__image ">
                                            </noscript>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="product-media product-media--image" data-media-id="25365306343584"
                                data-media-type="image">
                                <a class="main-img-link main-img-link--lightbox" href="javascript:void(0)"
                                    title="">
                                    <div class="rimage-outer-wrapper" style="max-width: 768px">
                                        <div class="rimage-wrapper" style="padding-top:133.33333333333334%">
                                            <img class="rimage__image "
                                                data-lazy-src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                loading="lazy" alt="" width="768" height="1024"
                                                src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                data-lazy-loaded="true">

                                            <noscript>
                                                <img src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                    alt="" class="rimage__image ">
                                            </noscript>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="product-media product-media--image" data-media-id="25365307359392"
                                data-media-type="image">
                                <a class="main-img-link main-img-link--lightbox" href="javascript:void(0)"
                                    title="">
                                    <div class="rimage-outer-wrapper" style="max-width: 768px">
                                        <div class="rimage-wrapper" style="padding-top:133.33333333333334%">
                                            <img class="rimage__image "
                                                data-lazy-src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                loading="lazy" alt="" width="768" height="1024"
                                                src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                data-lazy-loaded="true">
                                            <noscript>
                                                <img src="{{ URL::asset('uploads/products/' . $productInfo[0]->product_image) }}"
                                                    alt="" class="rimage__image ">
                                            </noscript>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @php
                            $categoryInfo = App\Http\Controllers\frontend\FHelperController::getMoreImages($productInfo[0]->product_id);

                        @endphp
                        @if (count($categoryInfo))
                            <div
                                class="thumbnails slick-slider--indented-side-icons slick-initialized slick-slider slick-slider--all-visible">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" aria-label="Image slider"
                                        style="opacity: 1; width: 588px; transform: translate3d(0px, 0px, 0px);"
                                        role="listbox">
                                        @foreach ($categoryInfo as $categoryInfo)
                                            <a class="thumbnail thumbnail--media-image active slick-slide slick-current slick-active"
                                                href="javascript:void(0)"
                                                data-src="{{ URL::asset('uploads/products/additional/' . $categoryInfo->product_image) }}"
                                                data-full-image-width="768" data-media-type="image"
                                                data-media-id="25365304869024" aria-label="Select thumbnail"
                                                style="width: 90px;" tabindex="0" role="option" data-slick-index="0"
                                                aria-hidden="false"
                                                path={{ URL::asset('uploads/products/additional/' . $categoryInfo->product_image) }}
                                                onclick="imageUpdate(this)">

                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:133.33333333333334%">
                                                        <img class="rimage__image"
                                                            data-lazy-src="{{ URL::asset('uploads/products/additional/' . $categoryInfo->product_image) }}"
                                                            loading="lazy" width="768" height="1024" alt=""
                                                            src="{{ URL::asset('uploads/products/additional/' . $categoryInfo->product_image) }}"
                                                            data-lazy-loaded="true">
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <form method="post" action="/cart/add" id="product_form_7231342510240" accept-charset="UTF-8"
                        class="product-form product-form--mini product-form--not-quickbuy half column"
                        enctype="multipart/form-data" data-ajax-add-to-cart="true" data-product-id="7231342510240"
                        data-enable-history-state="true" data-open-cart-drawer="true"><input type="hidden"
                            name="form_type" value="product"><input type="hidden" name="utf8" value="✓">
                        <!-- begin product form and details -->
                        <div class="product-details cc-animate-init -in cc-animate-complete" data-cc-animate=""
                            data-cc-animate-delay="0.5s" style="">
                            <div class="brand-and-type feature-col product-detail__gap-sm">
                                <span class="type">
                                    <a href="javascript:void(0)"
                                        title="">{{ getCategoryDetails($productInfo[0]->product_category)[0]->category_name }}</a>
                                </span>
                            </div>

                            <h1 class="product-title product-detail__gap-sm">
                                {{ $productInfo[0]->product_name }}
                            </h1>

                            @if ($productInfo[0]->product_price > 0)
                                <div id="price" class="product-price product-detail__gap-sm">
                                    <span class="current-price theme-money">Rs
                                        {{ number_format($productInfo[0]->product_price) }}</span>
                                </div>
                            @endif
                            <div class="cc-rating-container product-detail__gap-sm"></div>

                            <div class="product-detail__gap-sm" data-show-in-quickbuy="true">
                                {{ $productInfo[0]->product_description }} <br /><br /><br />

                                <b>Size : </b> <span
                                    class="metafield-multi_line_text_field">{{ getProductMetal($productInfo[0]->product_size)[0]->product_metal_name }}</span>
                                |<b> Type of Metal :
                                </b>{{ getProductSize($productInfo[0]->product_type_of_metal)[0]->product_size_name }}<br><br><br>
                            </div>

                        </div>
                        <!-- end product form and details -->
                    </form>
                </div>
            </div>
        </div>

        <div id="shopify-section-template--15270806290592__product-recommendations" class="shopify-section">
            <div class="product-recommendations cc-animate-init -in cc-animate-complete" data-product-id="7231342510240"
                data-section-id="template--15270806290592__product-recommendations"
                data-section-type="product-recommendations"
                data-url="/recommendations/products?section_id=template--15270806290592__product-recommendations&amp;limit=5&amp;product_id=7231342510240"
                data-cc-animate="">
                <section class="border-top section products-section">
                    <div class="container">
                        <h2 class="section-heading">You may also like</h2>
                        <div class="product-grid row grid one-row" data-normheights=".image" data-normheights-inner="img"
                            style="">

                            @foreach ($productRelatedInfo as $relatedproducts)
                                <div class="product-block layout-align-above align-center flex column max-cols-5 min-cols-2 product-block--gutter-0 product-block--gap-10 product-block--border-true product-block--no-quickbuy"
                                    id="template--15270806290592__product-recommendations_7281726816416">
                                    <div class="product-block__inner">
                                        <div class="image image--shape-natural image--with-secondary"
                                            style="min-height: 361.062px;">
                                            <div class="inner">
                                                <a href="{{ url(FRONTENDURL.'productdetails/'.encryption($relatedproducts->product_id)) }}"
                                                    aria-label="German Silver - Urli with Round Stand - 10 Inches - WL1054">
                                                    <div class="image__primary">
                                                        <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                            <div class="rimage-wrapper"
                                                                style="padding-top:133.33333333333334%">
                                                                <img class="rimage__image "
                                                                    data-lazy-src="{{ URL::asset('uploads/products/' . $relatedproducts->product_image) }}"
                                                                    loading="lazy" alt="" width="768"
                                                                    height="1024"
                                                                    src="{{ URL::asset('uploads/products/' . $relatedproducts->product_image) }}"
                                                                    data-lazy-loaded="true">

                                                                <noscript>
                                                                    <img src="{{ URL::asset('uploads/products/' . $relatedproducts->product_image) }}"
                                                                        alt="" class="rimage__image ">
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="image__secondary">
                                                        <div class="rimage-outer-wrapper rimage-background"
                                                            data-lazy-bg="{{ URL::asset('uploads/products/' . $relatedproducts->product_image) }}"
                                                            data-parent-fit="contain" data-lazy-loaded="true"
                                                            style="background-image: url(&quot;{{ URL::asset('uploads/products/' . $relatedproducts->product_image) }}&quot;);">
                                                            <noscript>
                                                                <div class="rimage-wrapper"
                                                                    style="padding-top:133.33333333333334%">
                                                                    <img src="{{ URL::asset('uploads/products/' . $relatedproducts->product_image) }}"
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
                                                href="/products/german-silver-imported-urli-with-round-stand-10-inches-wl1054?pr_prod_strat=copurchase&amp;pr_rec_id=b99522115&amp;pr_rec_pid=7281726816416&amp;pr_ref_pid=7231342510240&amp;pr_seq=uniform">
                                                {{ $relatedproducts->product_name }}
                                            </a>
                                            @if($relatedproducts->product_price > 0)
                                            <div class="price ">
                                                <span class="amount theme-money">Rs  {{ number_format($relatedproducts->product_price,2) }}</span>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                            <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                            <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                            <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                            <div class="product-block product-block--flex-spacer flex column max-cols-5 min-cols-2"></div>
                        </div>
                    </div>
                </section>
            </div>


            <div style="clear:both"></div>
        </div>
    </main>


@stop
