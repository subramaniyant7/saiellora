<head>
    <title>Saiellora Vilakkukadai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset(FRONTEND . '/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset(FRONTEND . '/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset(FRONTEND . '/css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset(FRONTEND . '/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset(FRONTEND . '/css/all.css') }}">
    <link rel="stylesheet" href="{{ URL::asset(FRONTEND . '/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css">


    <script src="{{ URL::asset(FRONTEND . '/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset(FRONTEND . '/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset(FRONTEND . '/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset(FRONTEND . '/js/slick.js') }}"></script>
    <script src="{{ URL::asset(FRONTEND . '/js/custom.js') }}"></script>
    <script>
        let siteurl = "{{ FRONTENDURL }}";
    </script>
    <style>
        #scroll {
            position: fixed;
            right: 10px;
            bottom: 10px;
            cursor: pointer;
            width: 50px;
            height: 50px;
            background-color: #3a1811;
            text-indent: -9999px;
            display: none;
            -webkit-border-radius: 60px;
            -moz-border-radius: 60px;
            border-radius: 60px;
            z-index: 1;
        }

        #scroll span {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -8px;
            margin-top: -12px;
            height: 0;
            width: 0;
            border: 8px solid transparent;
            border-bottom-color: #ffffff;
        }

        #scroll:hover {
            background-color: #3a1811;
            opacity: 1;
            filter: "alpha(opacity=100)";
            -ms-filter: "alpha(opacity=100)";
        }
    </style>
</head>
@php
    $lang = request()->lang != '' ? '?lang=' . request()->lang : '';
    $langCon = request()->lang != '' ? '&lang=' . request()->lang : '';
@endphp
<a href="#" id="scroll" style="display: none;"><span></span></a>
