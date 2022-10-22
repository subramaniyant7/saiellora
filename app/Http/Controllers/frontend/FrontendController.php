<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\FHelperController;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\HelperController;
use Mail;
use DB;

class FrontendController extends Controller
{
    public function Home(Request $request)
    {
        $homepageBlog = FHelperController::getHomepageBlog();
        $homepageCategory = FHelperController::getHomepageCategory();
        $latestProducts = FHelperController::getLatestProduct();
        $popularProducts = FHelperController::getPopularProduct();
        $videoContent = HelperController::getHomepageVideo();
        return view('frontend.home', compact('homepageBlog', 'homepageCategory', 'latestProducts', 'popularProducts', 'videoContent'));
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

    public function FAQ()
    {
        $faq = FHelperController::getFaq();
        return view('frontend.faq', compact('faq'));
    }

    public function Menu()
    {
        $menu = FHelperController::getMenu();
        if (count($menu)) {
        }
    }

    public function AllCategory()
    {
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
        $products = DB::table("products");
        $total = DB::table("products");
        if ($request->has('category')) {
            $categorySplit = explode('~', $request->input('category'));
            $categoryId = [];
            foreach ($categorySplit as $cat) {
                array_push($categoryId, decryption($cat));
            }
            $filter['product_category'] = $categoryId;
            $products->whereIn('product_category', $categoryId);
            $total->whereIn('product_subcategory', $categoryId);

            $categoryDetails = FHelperController::getCategoryById($categoryId);
        }
        if ($request->has('subcategory')) {
            $subcategorySplit = explode('~', $request->input('subcategory'));
            $subcategoryId = [];
            foreach ($subcategorySplit as $subcat) {
                array_push($subcategoryId, decryption($subcat));
            }
            $filter['product_subcategory'] = $subcategoryId;
            $products->whereIn('product_subcategory', $subcategoryId);
            $total->whereIn('product_subcategory', $subcategoryId);
        }

        if ($request->has('metal')) {
            $metalSplit = explode('~', $request->input('metal'));
            $metalId = [];
            foreach ($metalSplit as $metal) {
                array_push($metalId, decryption($metal));
            }
            $filter['product_type_of_metal'] = $metalId;
            $products->whereIn('product_type_of_metal', $metalId);
            $total->whereIn('product_type_of_metal', $metalId);
        }

        if ($request->has('product_size')) {
            $sizeSplit = explode('~', $request->input('product_size'));
            $sizeId = [];
            foreach ($sizeSplit as $size) {
                array_push($sizeId, decryption($size));
            }
            $filter['product_size'] = $sizeId;
            $products->whereIn('product_size', $sizeId);
            $total->whereIn('product_size', $sizeId);
        }

        if ($request->has('queryname')) {
            $filter['product_name'] = $request->input('queryname');
        }

        if (array_key_exists('product_name', $filter)) {
            $products->where('product_name', 'like', '%' . $filter['product_name'] . '%');
            $total->where('product_name', 'like', '%' . $filter['product_name'] . '%');
            unset($filter['product_name']);
        }

        $productsLimit = $products->skip($start)->take($limit)->get();
        $totalproducts = $total->get();

        return view('frontend.category', compact('categoryDetails', 'totalproducts', 'productsLimit', 'limit'));
    }

    public function ProductDetails($id)
    {
        $productId = decryption($id);
        $productInfo = FHelperController::getProducts($productId);
        $productRelatedInfo = FHelperController::getRelatedProducts($productId);
        return view('frontend.product_detail', compact('productInfo', 'productRelatedInfo'));
    }

    public function FilterData(Request $request)
    {
        $status = false;
        $formData = $request->input();
        $query = '';
        if (count($formData)) {
            $lastKey = key(array_slice($formData, -1, 1, true));
            $status = true;
            $query .= '?';
            foreach ($formData as $k => $data) {
                $query .= $k . '=';
                foreach ($data as $p => $pdata) {
                    $query .= $pdata . (count($formData[$k]) != $p + 1 ? '~' : '');
                }
                if ($lastKey != $k) $query .= '&';
            }
        }
        return response()->json(['status' => $status, 'query' => $query]);
    }
}
