<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\FHelperController;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\HelperController;
use Mail;

class FrontendController extends Controller
{
    public function Home(Request $request)
    {
        $homepageBlog = FHelperController::getHomepageBlog();
        $homepageCategory = FHelperController::getHomepageCategory();
        $latestProducts = FHelperController::getLatestProduct();
        $popularProducts = FHelperController::getPopularProduct();
        $videoContent = HelperController::getHomepageVideo();
        return view('frontend.home', compact('homepageBlog', 'homepageCategory', 'latestProducts', 'popularProducts','videoContent'));
    }

    public function ContactUs()
    {
        return view('frontend.contact_us');
    }

    public function ContactForm()
    {
        return view('frontend.contact_form');
    }

    public function HandleContactForm(Request $request)
    {
        PrintData($request->input());
    }

    public function TermsConditions()
    {
        return view('frontend.terms_conditions');
    }

    public function PrivacyPolicy()
    {
        return view('frontend.privacy_policy');
    }

    public function TermsService()
    {
        return view('frontend.terms_service');
    }

    public function AboutUs()
    {
        return view('frontend.about_us');
    }

    public function Blogs()
    {
        $blogs = FHelperController::getBlogs();
        return view('frontend.blogs', compact('blogs'));
    }

    public function FAQ(){
        $faq = FHelperController::getFaq();
        return view('frontend.faq', compact('faq'));
    }

    public function Menu()
    {
        $menu = FHelperController::getMenu();
        if (count($menu)) {
        }
    }

    public function AllCategory(){
        $activeCategory = getActiveRecord('category');
        return view('frontend.viewallcategory', compact('activeCategory'));
    }

    public function Category(Request $request)
    {
        $segments = $request->input();
        $menuDetails  = $categoryDetails = [];
        $limit = 30;
        $start = $request->input('page')  ? ($request->input('page') - 1) * $limit : 0;
        $filter = [];
        if ($request->has('category')) {
            $categoryId = decryption($request->input('category'));
            $filter['product_category'] = $categoryId;

            if ($request->has('subcategory')) {
                $subcategoryId = decryption($request->input('subcategory'));
                $filter['product_subcategory'] = $subcategoryId;
            }

            if ($request->has('metal')) {
                $metal = decryption($request->input('metal'));
                $filter['product_type_of_metal'] = $metal;
            }

            if ($request->has('size')) {
                $size = decryption($request->input('size'));
                $filter['product_size'] = $size;
            }
            $categoryDetails = FHelperController::getCategoryById($categoryId);
        }

        if ($request->has('queryname')) {
            $filter['product_name'] = $request->input('queryname');
        }

        $productsLimit = FHelperController::getFilterProductsLimit($filter, $start, $limit);
        $totalproducts = FHelperController::getFilterProducts($filter);


        return view('frontend.category', compact('categoryDetails', 'totalproducts', 'productsLimit', 'limit'));
    }

    public function ProductDetails($id)
    {
        $productId = decryption($id);
        $productInfo = FHelperController::getProducts($productId);
        $productRelatedInfo = FHelperController::getRelatedProducts($productId);

        // PrintData($productInfo);

        return view('frontend.product_detail', compact('productInfo', 'productRelatedInfo'));
        // return view('frontend.product_details', compact('productInfo'));
    }
}
