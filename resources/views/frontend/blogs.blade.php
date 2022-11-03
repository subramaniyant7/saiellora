@extends('frontend.layout')

@section('content')
    @php
        $lang = request()->lang != '' ? '?lang=' . request()->lang : '';
        $langCon = request()->lang != '' ? '&lang=' . request()->lang : '';
    @endphp
    <main id="content" style="background:#e7c49c;">
        <div id="shopify-section-template--15270806028448__main" class="shopify-section">
            <div class="section container" data-section-type="blog-template">
                <div class="inline-row cf mt-0 cc-animate-init -in cc-animate-complete" data-cc-animate="">
                    <!-- Begin breadcrumbs -->
                    <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a href="{{ url(FRONTENDURL).$langCon }}" itemprop="item"><span itemprop="name">
                                    {{ request()->lang != 'ta' ? 'Home' : 'வீடு' }}</span></a>
                            <meta itemprop="position" content="1">
                        </li>

                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <span class="breadcrumbs-divider"> / </span>
                            <a class="breadcrumb-active" href="javascript:void(0)" itemprop="item"><span
                                    itemprop="name">{{ request()->lang != 'ta' ? 'Blogs' : 'வலைப்பதிவுகள்' }}</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                    </ul>
                    <!-- End breadcrumbs -->
                </div>


                <div class="page-title opposing-items float-right cc-animate-init -in cc-animate-complete"
                    data-cc-animate="" data-cc-animate-delay="0.2s" style="">
                    <h1 class="text-center" style="font-size: 24px;">
                        {{ request()->lang != 'ta' ? 'Blogs' : 'வலைப்பதிவுகள்' }}
                    </h1>
                </div>

                <div class="articles row grid  use-infinite-scroll">
                    <div class="article full column cc-fade-in-up cc-animate-init -in cc-animate-complete"
                        data-cc-animate="cc-fade-in-up" data-cc-animate-delay="0.15s" style="">

                        @foreach ($blogs as $blog)
                            <div class="reading-column">
                                <h2>
                                    <a href="javascript:void(0)" title="">
                                        {{ request()->lang != 'ta' ? $blog->blog_title : ($blog->blog_title_tamil != '' ? $blog->blog_title_tamil : $blog->blog_title) }}
                                    </a>
                                </h2>

                                <div class="excerpt rte">
                                    <div style="text-align: center;">
                                        <img src="{{ URL::asset('uploads/blog/' . $blog->blog_image) }}" alt=""
                                            style="float: none;">
                                    </div>
                                    <p>
                                        <span>
                                            {{ request()->lang != 'ta' ? $blog->blog_description : ($blog->blog_description_tamil != '' ? $blog->blog_description_tamil : $blog->blog_description) }}

                                        </span>
                                    </p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
