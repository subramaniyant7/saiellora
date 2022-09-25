<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class HelperController extends Controller
{

    static function getAdminDetailsExceptLoggedIn()
    {
        return DB::table("admin_details")
            ->select("admin_details.*", DB::raw("(SELECT admin_name FROM admin_details as t WHERE admin_details.admin_created_by = t.admin_id) as created_name"))
            ->where([['admin_id', '!=', Session::get('admin_id')], ['admin_name', '!=', 'root']])
            ->get();
    }

    static function getAdminDetails($id = '')
    {
        $admin = DB::table('admin_details');
        if ($id != '')  $admin->where('admin_id', $id);
        return $admin->get();
    }

    static function getMenuDetails($id = '')
    {
        $data = DB::table("menu");
        if ($id != '') $data->where('menu_id', $id);
        return $data->orderBy('menu_id', 'desc')->get();
    }

    static function getFAQDetails($id = '')
    {
        $data = DB::table("faq");
        if ($id != '') $data->where('faq_id', $id);
        return $data->orderBy('faq_id', 'desc')->get();
    }

    static function getCategoryDetails($id = '')
    {
        $data = DB::table("category");
        if ($id != '') $data->where('category_id', $id);
        return $data->orderBy('category_id', 'desc')->get();
    }

    static function getSubCategoryDetails($id = '')
    {
        $data = DB::table("subcategory");
        if ($id != '') $data->where('subcategory_id', $id);
        return $data->orderBy('subcategory_id', 'desc')->get();
    }

    static function getProductDetails($id = '')
    {
        $data = DB::table("products");
        if ($id != '') $data->where('product_id', $id);
        return $data->orderBy('product_id', 'desc')->get();
    }

    static function getBannerDetails($id = '')
    {
        $data = DB::table("banner_details");
        if ($id != '') $data->where('banner_id', $id);
        return $data->orderBy('banner_id', 'desc')->get();
    }

    static function getBlogDetails($id = '')
    {
        $data = DB::table("blog_details");
        if ($id != '') $data->where('blog_id', $id);
        return $data->orderBy('blog_id', 'desc')->get();
    }

    static function isAdminExist($name)
    {
        $admin = DB::table("admin_details")->where('admin_name', $name)->count();
        if ($admin) return true;
        return false;
    }


}
