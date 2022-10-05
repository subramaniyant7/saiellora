@extends('frontend.layout')

@section('content')
    <main id="content">
        <style>
            .panel-heading {
                background: #560835 !important;
                color: #fff !important;
            }

            /* content */
            #mainWrap {
                opacity: 1;
            }
            main {
                opacity: 1;
            }
            .s-main-faq__main {
                flex: 7;
                min-width: 400px;
            }

            .s-main-faq__main ._hidden {
                display: none;
            }

            .s-main-faq__main ._visible {
                display: block;
            }

            ._content ul {
                list-style: disc;
            }

            .faq-container {
                width: 80%;
                margin: 0 auto;
                padding: 20px 10px 20px 10px;
            }

            .faq-container .faq-title {
                display: block;
                text-align: center;
            }

            .faq-container .faq-title h1 {
                margin-bottom: 50px;
                color: #560835;
                font-size: 24px !important;
                line-height: 1 !important;
                padding-bottom: 0 !important;
            }

            .search-results-wrapper {
                margin-bottom: 20px;
            }

            /* main container */
            .faq-content-wrapper {
                display: flex;
                flex-wrap: wrap;
            }

            /* sidebar */
            .faq-sidebar {
                flex: 3;
                margin-right: 50px;
                max-width: 300px;
            }

            .faq-sidebar .s-main-faq__menu {
                position: relative;
                width: 100%;
                background: inherit;
                /*box-shadow: 1px 4px 25px rgba(212, 222, 224, .55);*/
                margin: 0 !important;
                padding: 0 !important;
                text-align: left;
            }

            .faq-sidebar .s-main-faq__menu-item {
                width: 100%;
                color: #1a1a1a;
                margin: 0 !important;
                line-height: 1;
                list-style-type: none;
                transition: background .2s ease-out;
                border-radius: 0px;
                margin-bottom: 0px !important;
                background-color: #FFFFFF;
            }

            .faq-sidebar .s-main-faq__menu-item::before {
                display: none !important;
            }

            .faq-sidebar .s-main-faq__menu-item:hover {
                background-color: #560835 !important;
            }

            .faq-sidebar .s-main-faq__menu-item:hover a {
                color: #FFFFFF !important;
            }

            .faq-sidebar .s-main-faq__menu-item .s-main-faq__menu-link {
                display: block;
                line-height: 1.5;
                color: #1a1a1a;
                padding: 14px 20px;
                font-size: 18px;
            }

            .faq-sidebar .s-main-faq__menu-item._active {
                background-color: #560835;
            }

            .faq-sidebar .s-main-faq__menu-item .s-main-faq__menu-link {
                color: #560835;
                text-decoration: none !important;
            }

            .faq-sidebar .s-main-faq__menu-item .s-main-faq__menu-link._active {
                color: #FFFFFF !important;
            }

            .faq-sidebar .s-main-faq__menu-item._active:hover {
                background-color: #560835 !important;
            }

            .faq-sidebar .s-main-faq__menu-item .s-main-faq__menu-link._active:hover {
                color: #FFFFFF !important;
            }

            /* Header */
            .s-main-faq__main .faq-heading-title {
                color: #560835;
                font-size: 20px !important;
                text-align: left;
                background-color: #FFFFFF;
                border-width: 0px;
                border-style: solid;
                border-color: #DEDEDE;
                border-radius: 0px;
                margin-bottom: 30px;
                padding-top: 0px;
                padding-right: 0px;
                padding-bottom: 0px !important;
                padding-left: 0px;
                margin-top: 0;
                line-height: 1 !important;
            }

            /* Quick navigation links */
            .s-main-faq__main .s-main-faq__links {
                display: none;
                list-style: none;
                padding-left: 0;
                text-align: left;
                margin-bottom: 20px;
                margin-top: 20px;
                margin-left: 0;
                margin-right: 0;
            }

            .s-main-faq__main .s-main-faq__links li {
                margin-bottom: 15px;
                margin-top: 0;
                margin-right: 0;
                margin-left: 0;
                line-height: 1;
            }

            .s-main-faq__main .s-main-faq__links li:last-of-type {
                margin-bottom: 0;
            }

            .s-main-faq__main .s-main-faq__links .faq_article_link {
                font-size: 18px;
                text-decoration: underline;
                color: #101010;

                cursor: pointer;
            }

            /* Subtitle */
            .s-main-faq__main .faq-subcategory-title {
                text-align: left !important;
                margin-top: 0;
                margin-bottom: 0;
                margin-right: 5px;
                padding: 0;
                line-height: 1 !important;
                font-weight: 700;
                color: #560835;
                font-size: 24px !important;
                text-transform: inherit;
                letter-spacing: inherit;
                padding: 0 !important;
            }


            .s-main-faq__main .faq-subcategory-header {
                width: 100%;
                position: relative;
                align-items: center;
                display: flex;
                justify-content: space-between;
                text-align: left !important;
                margin-bottom: 15px;
                padding-top: 5px;
                padding-right: 10px;
                padding-bottom: 5px;
                padding-left: 10px;
                background-color: #FFFFFF;

                border-width: 0px;
                border-style: solid;
                border-color: #FFFFFF;
                border-radius: 5px;
                cursor: pointer;





            }

            .chevron {
                border-style: solid;
                border-width: 0.15em 0.15em 0 0;
                border-color: #560835;
                display: inline-block;
                height: 0.45em;
                position: relative;
                top: 0.15em;
                transform: rotate(-45deg);
                vertical-align: top;
                width: 0.45em;
                min-width: 0.40em;
            }

            .chevron-bottom {
                top: 0;
                transform: rotate(135deg);
            }

            .caret {
                width: 0;
                height: 0;
                display: inline-block;
                border: 6px solid transparent;
            }

            .caret-down {
                border-top-color: #560835;
            }

            .caret-up {
                border-bottom-color: #560835;
            }

            .faq-minus::after {
                content: "\2212";
                color: #560835;
                font-weight: bold;
            }

            .faq-plus::after {
                content: '\002B';
                color: #560835;
                font-weight: bold;
            }

            .hide {
                display: none;
            }

            .display {
                display: inline-block !important;
            }

            /* Content */
            .s-main-faq__main .faq-subcategory-content {
                display: none;
                overflow-x: unset;
                color: #000000;
                font-size: 18px;
                text-align: left;
                background-color: #FFFFFF;

                border-width: 0px;
                border-style: solid;
                border-color: #FFFFFF;
                border-radius: 0px;

                padding-top: 0px;
                padding-right: 10px;
                padding-bottom: 0px;
                padding-left: 10px;
                margin-bottom: 15px;
                width: 100%;
                font-weight: 300;
                line-height: 1.5 !important;
            }

            .s-main-faq__main .faq-subcategory-content img,
            figure {
                height: auto;
                display: block;
                max-width: 100% !important;
            }

            .s-main-faq__main .faq-subcategory-content.active {
                -webkit-box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.15);
                -moz-box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.15);
                box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.15);
                padding: 10px;
            }

            .s-main-faq__main .faq-subcategory-content ul {
                margin-left: 15px;
                margin-right: 0;
            }

            .s-main-faq__main .faq-subcategory-content p {
                margin-left: 0 !important;
                margin-right: 0 !important;
                font-weight: 300;
            }

            .s-main-faq__main .faq-subcategory-content a {}

            .s-main-faq__main .faq-subcategory-content ul li {
                list-style: disc;
            }

            .s-main-faq__main .faq-subcategory-content *:not(a) {
                color: #000000 !important;
                font-size: 18px !important;
            }

            /* Search */
            #faq_search_input {
                width: 100%;
                margin-bottom: 20px;

                background: #ffffff;
                border: 1px solid #eee;

                padding: 10px 18px;
                border-radius: 0px;
            }


            #faq-search-results-ul {
                padding: 0;
                margin: 0;
                list-style-type: none;
            }

            #faq-search-results-ul li {
                display: none;
            }

            #faq-search-results-ul li:hover {
                cursor: pointer;
                opacity: 0.8;
                transition: .5s;
                text-decoration: underline;
            }

            .category-margin-bottom {
                margin-bottom: 30px;
            }

            .focus-content {
                padding: 10px !important;
                -webkit-box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.15) !important;
                -moz-box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.15) !important;
                box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.15) !important;
            }


            /* breakpoints */
            @media (min-width: 768px) and (max-width: 1004px) {
                .faq-sidebar {
                    margin-right: 0;
                    margin-bottom: 30px;
                    min-width: 100%;
                }
            }

            @media (max-width: 767px) {
                .faq-content-wrapper {
                    display: block;
                }

                .s-main-faq__main .faq-subcategory-header {
                    padding-right: 8px !important;
                    padding-left: 8px !important;
                }

                .s-main-faq__main .faq-subcategory-content {
                    padding-right: 8px !important;
                    padding-left: 8px !important;
                }

                .s-main-faq__main .faq-heading-title {
                    font-size: 22px !important;
                }

                .faq-icon {
                    font-size: 14px;
                }

                .faq-container {
                    min-width: 100%;
                    max-width: 100%;
                    padding-left: 10px;
                    padding-right: 10px;
                }

                .faq-container .faq-title h1 {
                    font-size: 24px !important;
                    margin-bottom: 20px;
                }

                .faq-sidebar {
                    margin-right: 0 !important;
                    padding: 10px;
                    min-width: 100%;
                }

                .s-main-faq__main .faq-table {
                    width: 90vw !important;
                    overflow-x: scroll !important;
                }

                .s-main-faq__main {
                    margin-top: 0 !important;
                    padding: 10px;
                    width: auto;
                    min-width: auto;
                }

            }
        </style>

        <div class="faq-container">
            <div class="faq-title">
                <h1>FAQ</h1>
            </div>

            <div class="panel-group" id="accordion">
                @foreach ($faq as $faq)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseOne">
                                    {{ $faq->faq_question}}
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                {{ $faq->faq_answer}}
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </main>

@stop
