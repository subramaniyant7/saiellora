<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FHelperController extends Controller
{
    static function getMenuDetails($id = '')
    {
        $data = DB::table("menu");
        if ($id != '') $data->where('menu_id', $id);
        return $data->orderBy('menu_id', 'desc')->get();
    }

    static function getMenu()
    {
        return DB::table("menu")->where('status', 1)->get();
    }

    static function getBlogs()
    {
        return DB::table("blog_details")->where('status', 1)->get();
    }

    static function getFaq()
    {
        return DB::table("faq")->where('status', 1)->get();
    }

    static function getFilterProducts($filter)
    {
        $products = DB::table("products");
        if(array_key_exists('product_name',$filter)){
            $products->where('product_name', 'like', '%'.$filter['product_name'].'%');
            unset($filter['product_name']);
        }
        return $products->where($filter)->get();
    }

    static function getProducts($id)
    {
        return DB::table("products")->where('product_id', $id)->get();
    }

    static function getRelatedProducts($id)
    {
        return DB::table("products")->where('product_subcategory', '!=', $id)->get();
    }

    static function getFilterProductsLimit($filter, $offset, $limit)
    {
        $products = DB::table("products");
        if(array_key_exists('product_name',$filter)){
            $products->where('product_name', 'like', '%'.$filter['product_name'].'%');
            unset($filter['product_name']);
        }
        return $products->where($filter)->skip($offset)->take($limit)->get();
    }

    static function getCategory($menuId)
    {
        return DB::table("category")->where([['menu_id', $menuId], ['status', 1]])->get();
    }

    static function getCategoryById($categoryId)
    {
        return DB::table("category")->where([['category_id', $categoryId], ['status', 1]])->get();
    }

    static function getHomepageBlog()
    {
        return DB::table("blog_details")->where([['blog_home', 1], ['status', 1]])->get();
    }

    static function getHomepageCategory()
    {
        return DB::table("category")->where([['category_homepage', 1], ['status', 1]])->get();
    }

    static function getLatestProduct()
    {
        return DB::table("products")->where([['product_latest', 1], ['status', 1]])->get();
    }

    static function getPopularProduct()
    {
        return DB::table("products")->where([['product_most_popular', 1], ['status', 1]])->get();
    }


    static function getMoreImages($id)
    {
        return DB::table('product_images')->where('product_id', $id)->get();
    }

    static function getSubcategoryByCategory($id)
    {
        return DB::table('subcategory')->where('category_id', $id)->get();
    }
}
