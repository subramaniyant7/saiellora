@extends('frontend.layout')

@section('content')

    <style>

    </style>

    <main id="content">
        <div id="shopify-section-template--15270806093984__main" class="shopify-section main-collection-section">
            <div class="section collection-page" data-section-type="collection-template"
                data-components="price-range,accordion,sticky-scroll-direction" data-use-infinite-scroll="false"
                data-is-sticky="true" data-ajax-filtering="false" data-is-sidebar="true">
                <div class="container">
                    @if (count($categoryDetails))
                        <div class="collection-breadcrumb collection-breadcrumb--above inline-row cf no-margin-top cc-animate-init -in cc-animate-complete"
                            data-cc-animate="">
                            <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a href="{{ url(FRONTENDURL) }}" itemprop="item"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1">
                                </li>

                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <span class="breadcrumbs-divider"> / </span>
                                    <a class="breadcrumb-active" href="javascript:void(0)" itemprop="item"><span
                                            itemprop="name">{{ $categoryDetails[0]->category_name }}</span></a>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ul>
                        </div>
                    @endif
                    <style data-shopify="">
                        .section-header {
                            position: static;
                        }
                    </style>
                    <div data-cc-animate="" data-ajax-scroll-to="" class="cc-animate-init -in cc-animate-complete">
                        <form data-filter-form=""
                            class="product-list-toolbar product-list-toolbar--sticky cc-animate-init -in cc-animate-complete"
                            data-cc-animate="" data-cc-animate-delay="0.2s" style="">
                            <div class="cc-toolbar-buttons cc-toolbar-buttons--filters">
                                <a href="#" class="cc-toolbar-filter-toggle">
                                    <svg width="23" height="19" viewBox="0 0 23 19" stroke-width="1.25"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.625" y1="4" x2="3.6" y2="4"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                        <line x1="11.1" y1="4" x2="22.375" y2="4"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                        <line x1="0.625" y1="14.7383" x2="11.3" y2="14.7383"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                        <line x1="18.8" y1="14.7383" x2="22.375" y2="14.7383"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                        <circle cx="7.45459" cy="4.1709" r="3.375" fill="none"
                                            stroke="currentColor">
                                        </circle>
                                        <circle cx="14.9995" cy="14.9092" r="3.375" fill="none"
                                            stroke="currentColor">
                                        </circle>
                                    </svg>
                                    Filter
                                    <span class="filter-count"></span>
                                </a>
                            </div>

                        </form>

                        <div class="cc-product-filter-container" data-ajax-container="">
                            <div class="cc-product-filter__mob-veil"></div>

                            <form data-filter-form=""
                                class="cc-product-filter cc-product-filter--sticky cc-sticky-scroll-direction cc-initialized"
                                style="top: 0px;">
                                <h2 class="cc-product-filter__mob_title">Filter</h2>

                                <button type="button" class="cc-product-filter__close" aria-label="Close">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon feather-x"
                                        viewBox="0 0 24 24">
                                        <path d="M18 6L6 18M6 6l12 12"></path>
                                    </svg>
                                </button>
                                <div class="cc-accordion cc-initialized" data-allow-multi-open="true">
                                    <details class="cc-accordion-item is-open" open="">
                                        <summary class="cc-accordion-item__title">Category</summary>
                                        <div class="cc-accordion-item__panel">
                                            <div class="cc-accordion-item__content">
                                                @foreach (getActiveRecord('category') as $category)
                                                    <label class="cc-checkbox ">
                                                        <input class="cc-checkbox__input"
                                                            id="Filter-filter.v.availability-1" type="checkbox"
                                                            name="filter.v.availability"
                                                            value="{{ encryption($category->category_id) }}"
                                                            {{ request()->get('category') && $category->category_id == decryption(request()->get('category')) ? 'checked' : '' }}
                                                            onclick="handlFilter('category', this.value)">
                                                        <span
                                                            class="cc-checkbox__label">{{ $category->category_name }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </details>
                                </div>

                                <div class="cc-accordion cc-initialized" data-allow-multi-open="true">
                                    <details class="cc-accordion-item is-open" open="">
                                        <summary class="cc-accordion-item__title">Sub-Category</summary>
                                        <div class="cc-accordion-item__panel">
                                            <div class="cc-accordion-item__content">
                                                @foreach (getActiveRecord('subcategory') as $subcategory)
                                                    <label class="cc-checkbox ">
                                                        <input class="cc-checkbox__input"
                                                            id="Filter-filter.v.availability-1" type="checkbox"
                                                            name="filter.v.availability"
                                                            value="{{ encryption($subcategory->subcategory_id) }}"
                                                            {{ request()->get('subcategory') && $subcategory->subcategory_id == decryption(request()->get('subcategory')) ? 'checked' : '' }}
                                                            onclick="handlFilter('subcategory', this.value)">
                                                        <span
                                                            class="cc-checkbox__label">{{ $subcategory->subcategory_name }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </details>
                                </div>

                                <div class="cc-accordion cc-initialized" data-allow-multi-open="true">
                                    <details class="cc-accordion-item is-open" open="">
                                        <summary class="cc-accordion-item__title">Product Metal</summary>
                                        <div class="cc-accordion-item__panel">
                                            <div class="cc-accordion-item__content">
                                                @foreach (getActiveRecord('product_metal') as $metal)
                                                    <label class="cc-checkbox ">
                                                        <input class="cc-checkbox__input"
                                                            id="Filter-filter.v.availability-1" type="checkbox"
                                                            name="filter.v.availability"
                                                            value="{{ encryption($metal->product_metal_id) }}"
                                                            {{ request()->get('metal') && $metal->product_metal_id == decryption(request()->get('metal')) ? 'checked' : '' }}
                                                            onclick="handlFilter('metal', this.value)">
                                                        <span
                                                            class="cc-checkbox__label">{{ $metal->product_metal_name }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </details>
                                </div>

                                <div class="cc-accordion cc-initialized" data-allow-multi-open="true">
                                    <details class="cc-accordion-item is-open" open="">
                                        <summary class="cc-accordion-item__title">Product Size</summary>
                                        <div class="cc-accordion-item__panel">
                                            <div class="cc-accordion-item__content">
                                                @foreach (getActiveRecord('product_size') as $metal)
                                                    <label class="cc-checkbox ">
                                                        <input class="cc-checkbox__input"
                                                            id="Filter-filter.v.availability-1" type="checkbox"
                                                            name="filter.v.availability"
                                                            value="{{ encryption($metal->product_size_id) }}"
                                                            {{ request()->get('size') && $metal->product_size_id == decryption(request()->get('size')) ? 'checked' : '' }}
                                                            onclick="handlFilter('size', this.value)">
                                                        <span
                                                            class="cc-checkbox__label">{{ $metal->product_size_name }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </details>
                                </div>

                                <a href="{{ url(FRONTENDURL . 'products?category=' . request()->get('category')) }}"
                                    type="button" class="clear_all button alt" style="display:none">
                                    Clear all
                                </a>
                            </form>

                            <div class="product-list-container product-list-container--sidebar cc-animate-init -in cc-animate-complete"
                                data-cc-animate="" data-cc-animate-delay="0.2s" style="">
                                <div class="product-list product-grid row grid " data-normheights=".image"
                                    data-normheights-inner="img">
                                    @php
                                        $currentPage = request()->page ? request()->page : 1;
                                        $url = 'category=' . request()->category;
                                        $filterUrl = $url . '&&page=' . $currentPage;

                                        if (count($totalproducts) <= $limit) {
                                            $paginationLimit = 0;
                                        } elseif (count($totalproducts) > $limit) {
                                            $number = explode('.', count($totalproducts) / $limit);
                                            $paginationLimit = isset($number[1]) ? $number[0] + 1 : $number[0];
                                        }
                                    @endphp
                                    @forelse ($productsLimit as $product)
                                        <div
                                            class="product-block layout-align-above align-center flex column max-cols-3 min-cols-1 product-block--gutter-0  product-block--gap-10 product-block--border-true
                                            product-block--no-quickbuy">
                                            <div class="product-block__inner">
                                                <div class="image image--shape-natural image--with-secondary"
                                                    style="min-height: 365.771px;">
                                                    <div class="inner">
                                                        <a href="{{ url(FRONTENDURL . 'productdetails/' . encryption($product->product_id)) }}"
                                                            aria-label="Coffee Mug (Set of 2) - Black Matt - WL0986">
                                                            <div class="image__primary">
                                                                <div class="rimage-outer-wrapper"
                                                                    style="max-width: 768px">
                                                                    <div class="rimage-wrapper"
                                                                        style="padding-top:133.33333333333334%">
                                                                        <img class="rimage__image "
                                                                            data-lazy-src="{{ URL::asset('uploads/products/' . $product->product_image) }}"
                                                                            loading="lazy" alt="" width="768"
                                                                            height="1024"
                                                                            src="{{ URL::asset('uploads/products/' . $product->product_image) }}"
                                                                            data-lazy-loaded="true">
                                                                        <noscript>
                                                                            <img src="{{ URL::asset('uploads/products/' . $product->product_image) }}"
                                                                                alt="{{ $product->product_name }}"
                                                                                class="rimage__image ">
                                                                        </noscript>
                                                                    </div>
                                                                    <div class="product-block__title-price">
                                                                        <a class="title"
                                                                            href="{{ url(FRONTENDURL . 'productdetails/' . encryption($product->product_id)) }}">
                                                                            {{ $product->product_name }}
                                                                        </a>
                                                                        @if ($product->product_price > 0)
                                                                            <div>Rs.{{ $product->product_price }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="image__secondary">
                                                                <a href="{{ url(FRONTENDURL . 'productdetails/' . encryption($product->product_id)) }}">
                                                                <div class="rimage-outer-wrapper"
                                                                    data-lazy-bg="{{ URL::asset('uploads/products/' . $product->product_image) }}"
                                                                    data-parent-fit="contain" data-lazy-loaded="true"
                                                                    style="background-image: url(&quot;{{ URL::asset('uploads/products/' . $product->product_image) }}&quot;);">
                                                                    <noscript>
                                                                        <div class="rimage-wrapper"
                                                                            style="padding-top:133.33333333333334%">
                                                                            <img src="{{ URL::asset('uploads/products/' . $product->product_image) }}"
                                                                                alt="" class="rimage__image">
                                                                        </div>
                                                                    </noscript>
                                                                </div>
                                                            </a>
                                                            </div>


                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <h1>No Products found</h1>
                                    @endforelse

                                    <div
                                        class="product-block product-block--flex-spacer flex column max-cols-3 min-cols-1">
                                    </div>
                                    <div
                                        class="product-block product-block--flex-spacer flex column max-cols-3 min-cols-1">
                                    </div>
                                    <div
                                        class="product-block product-block--flex-spacer flex column max-cols-3 min-cols-1">
                                    </div>
                                </div>


                                <div class="results-pagination ">
                                    @if (count($totalproducts))
                                        <div>
                                            <div class="results-count results-count--lower">{{ count($totalproducts) }}
                                                results</div>
                                        </div>
                                    @endif
                                    @if ($paginationLimit > 0)
                                        <div>
                                            <ul class="pagination">
                                                <li {{ $currentPage == 1 ? 'disabled' : '' }}>
                                                    <a href="#" {{ $currentPage == 1 ? 'disabled' : '' }}
                                                        class="page_previous">

                                                        <svg fill="#000000" height="24" viewBox="0 0 24 24"
                                                            width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Left</title>
                                                            <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z">
                                                            </path>
                                                            <path d="M0-.5h24v24H0z" fill="none"></path>
                                                        </svg>

                                                    </a>
                                                </li>
                                                {{-- <li class="active">
                                                    <span class="linkless">1</span>
                                                </li> --}}

                                                @if ($paginationLimit > 10)
                                                    @if ($currentPage != $paginationLimit && $currentPage < $paginationLimit - 5)
                                                        @for ($u = $currentPage; $u <= $currentPage + 2; $u++)
                                                            @php
                                                                $active = $currentPage == $u ? 'active' : '';
                                                            @endphp
                                                            <li class="{{ $active }}">
                                                                <a href="{{ FRONTENDURL . 'products?' . $url . '&&page=' . $u }}"
                                                                    class="">
                                                                    {{ $u }}
                                                                </a>
                                                            </li>
                                                        @endfor
                                                        <li class=""> <a href="#" class="">...</a></li>

                                                        @for ($u = $paginationLimit - 2; $u <= $paginationLimit; $u++)
                                                            @php
                                                                $active = $currentPage == $u ? 'active' : '';
                                                            @endphp
                                                            <li class="{{ $active }}">
                                                                <a href="{{ FRONTENDURL . 'products?' . $url . '&&page=' . $u }}"
                                                                    class="">
                                                                    {{ $u }}
                                                                </a>
                                                            </li>
                                                        @endfor
                                                    @else
                                                        @for ($u = $paginationLimit - 5; $u <= $paginationLimit; $u++)
                                                            @php
                                                                $active = $currentPage == $u ? 'active' : '';
                                                            @endphp
                                                            <li class="{{ $active }}">
                                                                <a href="{{ FRONTENDURL . 'products?' . $url . '&&page=' . $u }}"
                                                                    class="">
                                                                    {{ $u }}
                                                                </a>
                                                            </li>
                                                        @endfor
                                                    @endif
                                                @else
                                                    @for ($u = 1; $u <= $paginationLimit; $u++)
                                                        @php
                                                            $active = request()->page && request()->page == $u ? 'active' : '';
                                                            if (!request()->page && $u == 1) {
                                                                $active = 'active';
                                                            }
                                                        @endphp


                                                        <li class="{{ $active }}">
                                                            <a href="{{ FRONTENDURL . 'products?' . $url . '&&page=' . $u }}"
                                                                class="">
                                                                {{ $u }}
                                                            </a>
                                                        </li>
                                                    @endfor
                                                @endif




                                                <li>
                                                    <a href="#"
                                                        {{ $currentPage == $paginationLimit ? 'disabled' : '' }}
                                                        class="page_next">
                                                        <svg fill="#000000" height="24" viewBox="0 0 24 24"
                                                            width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Right</title>
                                                            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z">
                                                            </path>
                                                            <path d="M0-.25h24v24H0z" fill="none"></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <input type="hidden" name="property_page" id="prop_page"
                                                    value="{{ request()->page ? request()->page : 1 }}">
                                                <input type="hidden" name="property_limit" id="prop_limit"
                                                    value="{{ $paginationLimit }}">
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@stop
