<div id="shopify-section-header" class="shopify-section section-header">
    <style data-shopify="">
        .logo img {
            width: 95px;
        }

        @media (min-width: 768px) {
            .logo img {
                width: 125px;
            }
        }

        .section-header {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 99999;
        }
    </style>
    @php
        $lang = request()->lang != '' ? '?lang=' . request()->lang : '';
        $langCon = request()->lang != '' ? '&lang=' . request()->lang : '';
    @endphp
    <div class="header-container cc-animate-init -in cc-animate-complete" data-section-type="header" itemscope=""
        itemtype="http://schema.org/Organization" data-cc-animate="" data-is-sticky="true">
        <div class="page-header layout-left using-compact-mobile-logo">
            <div class="toolbar-container">
                <div class="container">
                    <div id="toolbar"
                        class="toolbar cf toolbar--two-cols-xs toolbar--two-cols  toolbar--text-box-large">
                        <div class="toolbar-left ">
                            <div class="toolbar-logo">
                                <div class="logo align-left">
                                    <a href="{{ url(FRONTENDURL) . $lang }}" itemprop="url" type="{{ request()->lang }}">
                                        <span>Sai Ellora</span>
                                        <span style="display: block;font-size: 16px">Since 1950</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="toolbar-right ">
                            <div class="toolbar-links">
                                <div class="main-search main-search--text-box-large" data-live-search="true"
                                    data-live-search-price="true" data-live-search-vendor="true"
                                    data-live-search-meta="true" data-show-sold-out-label="true"
                                    data-show-sale-label="true">

                                    <div class="main-search__container ">
                                        <form class="main-search__form" action="{{ url(FRONTENDURL . 'products') }}"
                                            method="get" autocomplete="off">
                                            <input class="main-search__input snize-input-style" type="text"
                                                name="queryname" autocomplete="off"
                                                placeholder="{{ request()->lang != 'ta' ? 'Search...' : 'தேடல்' }}"
                                                aria-label="Search Store" required>

                                            <button type="submit" aria-label="Submit"><svg width="19px"
                                                    height="21px" viewBox="0 0 19 21" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="currentColor" stroke-width="0.5">
                                                        <g transform="translate(0.000000, 0.472222)">
                                                            <path
                                                                d="M14.3977778,14.0103889 L19,19.0422222 L17.8135556,20.0555556 L13.224,15.0385 C11.8019062,16.0671405 10.0908414,16.619514 8.33572222,16.6165556 C3.73244444,16.6165556 0,12.8967778 0,8.30722222 C0,3.71766667 3.73244444,0 8.33572222,0 C12.939,0 16.6714444,3.71977778 16.6714444,8.30722222 C16.6739657,10.4296993 15.859848,12.4717967 14.3977778,14.0103889 Z M8.33572222,15.0585556 C12.0766111,15.0585556 15.1081667,12.0365 15.1081667,8.30827778 C15.1081667,4.58005556 12.0766111,1.558 8.33572222,1.558 C4.59483333,1.558 1.56327778,4.58005556 1.56327778,8.30827778 C1.56327778,12.0365 4.59483333,15.0585556 8.33572222,15.0585556 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </button>
                                        </form>

                                        <div class="main_search__popup" aria-expanded="false">
                                            <div class="main-search__results"></div>
                                            <div class="main-search__footer-buttons">
                                                <div class="all-results-container"></div>
                                                <a class="main-search__results-close-link btn alt outline"
                                                    href="#">
                                                    Close
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div style="color:#000;">
                            <img src="{{ URL::asset('frontend/img/language.png')}}" alt="Language" style="width:26px;height:24px;background:#fff;">
                            <select name="language_change" id="language_change">
                                <option value="en"
                                    {{ request()->lang == '' || request()->lang == 'en' ? 'selected' : '' }}>
                                    English(Default)</option>
                                <option value="ta" {{ request()->lang == 'ta' ? 'selected' : '' }}>Tamil</option>
                            </select>
                        </div>
                    </div>


                    <div class="mobile-search-form mobile-only">
                        <div class="main-search main-search--text-box-large" data-live-search="true"
                            data-live-search-price="true" data-live-search-vendor="true" data-live-search-meta="true"
                            data-show-sold-out-label="true" data-show-sale-label="true">

                            <div class="main-search__container ">
                                <form class="main-search__form" action="{{ url(FRONTENDURL . 'products') }}"
                                    method="get" autocomplete="off">
                                    <input class="main-search__input snize-input-style" type="text" name="queryname"
                                        autocomplete="off"
                                        placeholder="{{ request()->lang != 'ta' ? 'Search...' : 'தேடல்' }}"
                                        aria-label="Search Store" required>

                                    <button type="submit" aria-label="Submit"><svg width="19px" height="21px"
                                            viewBox="0 0 19 21" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="currentColor" stroke-width="0.5">
                                                <g transform="translate(0.000000, 0.472222)">
                                                    <path
                                                        d="M14.3977778,14.0103889 L19,19.0422222 L17.8135556,20.0555556 L13.224,15.0385 C11.8019062,16.0671405 10.0908414,16.619514 8.33572222,16.6165556 C3.73244444,16.6165556 0,12.8967778 0,8.30722222 C0,3.71766667 3.73244444,0 8.33572222,0 C12.939,0 16.6714444,3.71977778 16.6714444,8.30722222 C16.6739657,10.4296993 15.859848,12.4717967 14.3977778,14.0103889 Z M8.33572222,15.0585556 C12.0766111,15.0585556 15.1081667,12.0365 15.1081667,8.30827778 C15.1081667,4.58005556 12.0766111,1.558 8.33572222,1.558 C4.59483333,1.558 1.56327778,4.58005556 1.56327778,8.30827778 C1.56327778,12.0365 4.59483333,15.0585556 8.33572222,15.0585556 Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </form>

                                <div class="main_search__popup" aria-expanded="false">
                                    <div class="main-search__results"></div>
                                    <div class="main-search__footer-buttons">
                                        <div class="all-results-container"></div>
                                        <a class="main-search__results-close-link btn alt outline" href="#">
                                            Close
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .caret {
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
            margin-left: -1px;
        }

        .dropdown-submenu.open>a:after {
            border-left-color: #fff;
        }

        .dropdown-submenu.open>.dropdown-menu,
        .dropdown-submenu.open>.dropdown-menu {
            display: block;
        }

        .dropdown-submenu .dropdown-menu {
            margin-bottom: 8px;
        }

        .navbar {
            margin-bottom: 0;
        }

        .navbar-default .navbar-nav .open .dropdown-menu .dropdown-submenu ul {
            background-color: #fff;
        }

        .navbar-default .navbar-nav li a {
            color: #3a1811;
            font-size: 20px;
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu .dropdown-submenu ul {
            background-color: #333;
        }

        .navbar .navbar-nav .open .dropdown-submenu .dropdown-menu>li>a {
            padding-left: 30px;
        }

        /* .navbar-default {
            background-color: #e7c49c;
            border-color: #e7c49c;
        } */
        .navbar-default {
            background-color: #e7c49c;
            border-color: #e7c49c;
        }

        .product-block.layout-align-above {
            background: #e7c49c;
        }

        @media screen and (min-width:992px) {
            .dropdown-submenu .dropdown-menu {
                margin-bottom: 2px;
            }

            .navbar .navbar-nav .open .dropdown-submenu .dropdown-menu>li>a {
                padding-left: 25px;
            }

            .navbar-default .navbar-nav .open .dropdown-menu .dropdown-submenu ul {
                background-color: #fff;
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu .dropdown-submenu ul {
                background-color: #fff;
            }
        }
    </style>
    <nav class="navbar navbar-default ">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">

                    <ul class="nav navbar-nav">

                        <li><a href="{{ url(FRONTENDURL) . $lang }}">{{ request()->lang != 'ta' ? 'Home' : 'வீடு' }} </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true"
                                aria-expanded="false">{{ request()->lang != 'ta' ? 'Products' : 'தயாரிப்புகள்' }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach (getActiveRecord('category') as $category)
                                    @php
                                        $subCategory = \App\Http\Controllers\frontend\FHelperController::getSubcategoryByCategory($category->category_id);
                                    @endphp
                                    <li class="{{ count($subCategory) ? 'dropdown-submenu' : '' }}"
                                        val="{{ count($subCategory) }}">
                                        @if (count($subCategory))
                                            <a href="{{ url(FRONTENDURL . 'subcategory/' . encryption($category->category_id) . $lang) }}"
                                                class="dropdown-submenu-toggle">{{ request()->lang != 'ta' ? $category->category_name : ($category->category_name_tamil != '' ? $category->category_name_tamil : $category->category_name) }}
                                                <b class="caret"></b></a>
                                        @else
                                            <a
                                                href="{{ url(FRONTENDURL . 'subcategory/' . encryption($category->category_id) . $lang) }}">
                                                {{ request()->lang != 'ta' ? $category->category_name : ($category->category_name_tamil != '' ? $category->category_name_tamil : $category->category_name) }}
                                            </a>
                                        @endif
                                        @if (count($subCategory))
                                            <ul class="dropdown-menu">
                                                @foreach ($subCategory as $subCategory)
                                                    <li>
                                                        <a
                                                            href="{{ url('products?category=' . encryption($category->category_id) . '&subcategory=' . encryption($subCategory->subcategory_id) . $langCon) }}">
                                                            {{ request()->lang != 'ta' ? $subCategory->subcategory_name : ($subCategory->subcategory_name_tamil != '' ? $subCategory->subcategory_name_tamil : $subCategory->subcategory_name) }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                        <li><a
                                href="{{ url(FRONTENDURL . 'about_us' . $lang) }}">{{ request()->lang != 'ta' ? 'About Us' : 'எங்களை பற்றி' }}</a>
                        </li>
                        <li><a
                                href="{{ url(FRONTENDURL . 'contact_us' . $lang) }}">{{ request()->lang != 'ta' ? 'Contact Us' : 'தொடர்பு கொள்ள' }}</a>
                        </li>
                        <li><a
                                href="{{ url(FRONTENDURL . 'blogs' . $lang) }}">{{ request()->lang != 'ta' ? 'Blogs' : 'வலைப்பதிவுகள்' }}</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /container -->
    </nav>
</div>





<script>
    $(document).ready(function() {
        $(".drop-uber").hover(function() {
            $(this).addClass("open");
        }, function() {
            $(this).removeClass("open");
        });

        $('.dropdown-submenu').mouseenter(function() {
            $(this).children('.dropdown-menu').css('display', 'block');
        });

        $('.dropdown-submenu').mouseleave(function() {
            $(this).children('.dropdown-menu').css('display', 'none');
        });



        $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: false,
            slidesToShow: 5,
            slidesToScroll: 3
        });
    });
</script>
