let searchParams = new URLSearchParams(window.location.search)
let objectParam = Object.fromEntries(searchParams.entries());
$(document).ready(function () {


    $("#next_product").click(function () {
        document.getElementById('scroll_content').scrollLeft += 200;
    });

    $("#previous_product").click(function () {
        console.log('pppp')
        document.getElementById('scroll_content').scrollLeft -= 200;
    });


    $("#nextlatest_product").click(function () {
        document.getElementById('scrolllatest_content').scrollLeft += 200;
    });

    $("#previouslatest_product").click(function () {
        console.log('pppp')
        document.getElementById('scrolllatest_content').scrollLeft -= 200;
    });


    if(Object.keys(objectParam).length > 1){
        $('.clear_all').show();
    }
});


const handlFilter = (type, value) => {
    let searchParams = new URLSearchParams(window.location.search)
    let query = '';
    let q = 1;
    if (!searchParams.hasOwnProperty(type)) {
        searchParams.set(type, value);
    }
    for (const [i, v] of searchParams.entries()) {
        let paramsKey = q != 1 ? '&' + i : i;
        let paramsValue = v;
        if (paramsKey == type) query += paramsKey + '=' + value;
        else query += paramsKey + '=' + paramsValue;
        q++;
    }
    window.location.href = siteurl + 'products?' + query;
}


$(document).on('click', '.page_previous', function(e) {
    e.preventDefault();
    let property_page = parseInt($("input[name=property_page]").val());
    let searchParams = new URLSearchParams(window.location.search)
    let query = ''
    if (property_page - 1 >= 1) {
        searchParams.set("page", property_page - 1);
        let q = 1;
        for (const [i, v] of searchParams.entries()) {
            let paramsKey = q != 1 ? '&' + i : i;
            let paramsValue = v;
            query += paramsKey + '=' + paramsValue;
            q++;
        }
        window.location.href = siteurl + 'products?' + query;
    }
});

$(document).on('click', '.page_next', function(e) {
    e.preventDefault();
    let property_page = parseInt($("input[name=property_page]").val());
    let property_limit = parseInt($("input[name=property_limit]").val());
    let searchParams = new URLSearchParams(window.location.search)
    let query = '';
    if (property_page + 1 <= property_limit) {
        searchParams.set("page", property_page + 1);
        let q = 1;
        for (const [i, v] of searchParams.entries()) {
            let paramsKey = q != 1 ? '&' + i : i;
            let paramsValue = v;
            query += paramsKey + '=' + paramsValue;
            q++;
        }
        window.location.href = siteurl + 'products?' + query;
    }
});

const imageUpdate = (path) => {
    console.log(path)
    console.log(path.getAttribute('data-src'))
    $('#change_img').prop('src',path.getAttribute('data-src'))
}


var btn = $('#button');

$(window).scroll(function() {
    console.log('pppppp')
    console.log($(window).scrollTop())
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
