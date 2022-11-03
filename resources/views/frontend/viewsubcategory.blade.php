@extends('frontend.layout')

@section('content')
    @php
        $lang = request()->lang != '' ? '?lang=' . request()->lang : '';
        $langCon = request()->lang != '' ? '&lang=' . request()->lang : '';
    @endphp
    <div id="shopify-section-template--15270806126752__1640476649f7fa543d" class="shopify-section">
        <section class="border-top section collections-section  section-padding-small"
            data-section-type="featured-collections" style="background:#e7c49c">
            <div class="container cc-animate-init -in cc-animate-complete" data-cc-animate="">
                <div class="cc-carousel-container not-a-carousel">
                    <div class="row product-grid grid grid--max-cols-5">
                        @forelse ($subcategory as $subcategory)
                            <div class="product-block collection-block collection-block--circle flex column max-cols-5 min-cols-2
                                cc-animate-init -in cc-animate-complete"
                                data-cc-animate="" data-cc-animate-delay="0.05s" style="">
                                <div class="product-block__inner">
                                    <div class="image">
                                        <div class="inner">
                                            <a
                                                href="{{ url(FRONTENDURL . 'products?category=' . encryption($subcategory->category_id) . '&subcategory=' . encryption($subcategory->subcategory_id).$langCon) }}">
                                                <div class="rimage-outer-wrapper" style="max-width: 768px">
                                                    <div class="rimage-wrapper" style="padding-top:100%">
                                                        <img class="rimage__image "
                                                            data-lazy-src="{{ URL::asset('uploads/subcategory/' . $subcategory->subcategory_img) }}"
                                                            loading="lazy" alt="" width="768" height="1024"
                                                            src="{{ URL::asset('uploads/subcategory/' . $subcategory->subcategory_img) }}"
                                                            data-lazy-loaded="true">
                                                        <noscript>
                                                            <img src="{{ URL::asset('uploads/subcategory/' . $subcategory->subcategory_img) }}"
                                                                alt="" class="rimage__image ">
                                                        </noscript>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="title align-center">
                                        <a href="{{ url(FRONTENDURL . 'products?category=' . encryption($subcategory->category_id) . '&subcategory=' . encryption($subcategory->subcategory_id).$langCon) }}"
                                            title="">
                                            {{ request()->lang != 'ta' ? $subcategory->subcategory_name : ($subcategory->subcategory_name_tamil !='' ?
                                            $subcategory->subcategory_name_tamil : $subcategory->subcategory_name) }}

                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div>No Sub Category available</div>
                        @endforelse

                    </div>
                </div>
            </div>
        </section>


    </div>

@stop
