$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#delete_record').on('click', function(e) {
    e.preventDefault();
    let action = $(this).attr('href');
    swal({
        title: "Are you sure want to delete?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#f8b32d",
        confirmButtonText: "Confirm!",
        cancelButtonText: "Cancel !",
        closeOnConfirm: true,
        closeOnCancel: true
    }, function(isConfirm) {
        if (isConfirm) {
            window.location.replace(action);
        }
    });
    return false;
});

const toast = (type, msg, text = '') => {
    $.toast().reset('all');
    $("body").removeAttr('class');
    $.toast({ heading: msg, text: text, position: 'top-right', loader: false, icon: type, hideAfter: 5000 });
    return false;
}

let url = window.location.pathname;
let path = "actionproduct";

const getMenuCategory = () => {
    let menu = $("select[name=product_menu]").val();
    let category = $("input[name=category_hidden]").val();

    if (menu != '' && !isNaN(menu)) {
        $.ajax({
            type: "POST",
            data: { 'menu_id': menu },
            url: siteurl + 'cpanel_admin/getmenucategory',
            success: function(res) {
                let option = '<option value="">Select</option>';
                if (res.data.length) {
                    let result = res.data;
                    result.forEach(function(element) {
                        let selected = element.category_id == category ? 'selected' : '';
                        option += '<option value="' + element.category_id + '" ' + selected + '>' + element.category_name + '</option>';
                    });
                } else {
                    toast('error', 'No Category available for this Menu');
                }
                $("select[name=product_category]").empty().append(option).selectpicker('refresh');
            },
            error: function(d) {
                toast('error', 'Server Error', 'Somwthing went wrong');
            }
        });
    }
}


const getCatSubCategory = () => {
    let category =  url.indexOf(path) != -1 ? $("input[name=category_hidden]").val() : $("select[name=product_category]").val();
    let subcategory = $("input[name=subcategory_hidden]").val();

    if (category != '' && !isNaN(category)) {
        $.ajax({
            type: "POST",
            data: { 'category_id': category },
            url: siteurl + 'cpanel_admin/getcatsubcategory',
            success: function(res) {
                let option = '<option value="">Select</option>';
                if (res.data.length) {
                    let result = res.data;
                    result.forEach(function(element) {
                        let selected = element.subcategory_id == subcategory ? 'selected' : '';
                        option += '<option value="' + element.subcategory_id + '" ' + selected + '>' + element.subcategory_name + '</option>';
                    });
                } else {
                    toast('error', 'No Sub-Category available for this Category');
                }
                $("select[name=product_subcategory]").empty().append(option).selectpicker('refresh');
            },
            error: function(d) {
                toast('error', 'Server Error', 'Somwthing went wrong');
            }
        });
    }
}

if (url.indexOf(path) != -1) {
    getMenuCategory();
    getCatSubCategory();
}

path = 'actionuser';
if (url.indexOf(path) != -1) {
    // getUserStatelist();
}
