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


    if (Object.keys(objectParam).length > 1) {
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
    console.log($('#filter_form').serialize());

    let formValue = $('#filter_form').serialize();

    console.log(searchParams.get('lang'));
    console.log('formValue', formValue)
    if(formValue != ''){
        $.ajax({
            type: 'get',
            url: `${siteurl}filter_data`,
            data: formValue,
            dataType: 'json',
            success: function (data) {
                console.log(data)
                if (data.status) {
                    console.log(data.query)
                    let qry = searchParams.get('lang') !== null ? data.query+'&lang='+searchParams.get('lang') : data.query
                    console.log(siteurl + 'products' + qry)
                    window.location.href = siteurl + 'products' + qry
                }
            },
            error: function (data) {
                console.log('error', data);
            },
            complete: function () {

            }
        });
    }else{
        location.reload();
    }


    // window.location.href = siteurl + 'products?' + query;
}


$(document).on('click', '.page_previous', function (e) {
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

$(document).on('click', '.page_next', function (e) {
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
    $('#change_img').prop('src', path.getAttribute('data-src'))
}

$(document).on('change', '#language_change', function () {
    // console.log('Test')

    var query = window.location.search.substring(1);
    var vars = query.split('&');

    console.log(query)
    console.log(vars)
    console.log(window.location)
    console.log(window.location.search)
    let searchParams = new URLSearchParams(window.location.search)
    const params = new URLSearchParams(location.search);
    // if(searchParams.get())
    searchParams.set("lang", this.value);
    console.log('params', params)
    let q = 1;
    let query1 = '';
    for (const [i, v] of searchParams.entries()) {
        let paramsKey = q != 1 ? '&' + i : i;
        let paramsValue = v;
        query1 += paramsKey + '=' + paramsValue;
        q++;
    }
    console.log(siteurl + (window.location.pathname != '/' ? window.location.pathname : '') +  '?'+query1)
    console.log(query1)
    // window.open(window.location.origin + (window.location.pathname !== '/' ? window.location.pathname : '') +  '?'+query1, '_same');
    window.location = window.location.origin + (window.location.pathname !== '/' ? window.location.pathname : '') +  '?'+query1;
    console.log(params.get('lang'));
});


var btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});



