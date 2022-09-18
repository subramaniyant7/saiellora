<!DOCTYPE html>
<html>

<head>
    <title>Coming Soon</title>

    <!--EXTERNAL CSS-->
    <link rel="stylesheet" href="{{ URL::asset(FRONTEND . '/css/comingsoon.css') }}">

    <!--META TAGS-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!--FONTAWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
</head>
LOADER<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">

<body>
    <div class="container">
        <section>
            <h1 class="logo">Sai Ellora Vilakkukadai<em></em></h1>
            <h1>We are currently working on something awesome. Stay tuned!</h1>

            <span class="social_icons">
                <a href="https://www.youtube.com/channel/UCpijbO30zF6M_8mJ0WjUO6Q" title="Facebook" target="_blank"><i class="fa fa-youtube"></i></a>
                <a href="https://www.instagram.com/sai_ellora_handicrafts/?hl=en" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>

            </span>
        </section>
    </div>
    <!--IF LOADER INCLUDED</div>-->

    <!--JAVASCRIPT-->

</body>
<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>

</html>
