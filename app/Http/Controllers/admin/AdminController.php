<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\HelperController;
use App\Http\Controllers\frontend\FHelperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Storage;

class AdminController extends Controller
{

    public function AdminLogin(Request $req)
    {
        if ($req->admin_name != '' && $req->admin_password != '') {
            $isValidUser = DB::table('admin_details')->where([
                ['admin_name', $req->input('admin_name')],
                ['admin_password', md5(trim($req->admin_password))], ['status', 1]
            ])->get();
            if (count($isValidUser)) {
                $req->session()->put('admin_name', $isValidUser[0]->admin_name);
                $req->session()->put('admin_id', $isValidUser[0]->admin_id);
                $req->session()->put('admin_role', $isValidUser[0]->admin_role);
                return redirect(ADMINURL . '/dashboard');
            }
        }
        return back()->withInput()->with('error', 'Invalid Credentials');
    }

    public function Dashboard(Request $req)
    {
        return view('admin.dashboard');
    }

    public function ChangePassword(Request $req)
    {
        return view('admin.changepassword');
    }

    public function UpdatePassword(Request $request)
    {
        $formData = $request->except('_token');
        if ($formData['old_password'] == '' || $formData['new_password'] == '' || $formData['confirm_password'] == '') {
            return back()->with('error', 'Invalid action. Please try after some time');
        }
        if ($formData['new_password'] != $formData['confirm_password']) return back()->with('error', "New password and Confirm password doesn't matched");

        $adminId = decryption($request->admin_id);
        $adminData = HelperController::getAdminDetails($adminId);
        if (count($adminData)) {
            $admin = (array)$adminData[0];
            if ($admin['admin_password'] == md5($request->old_password)) {
                $admin['admin_password'] = md5($request->new_password);
                $update = updateQuery('admin_details', 'admin_id', $adminId, $admin);
                return redirect(ADMINURL . '/logout');
            }
            return back()->with('error', "Old password doesn't matched");
        }
        return back()->with('error', 'User not found');
    }


    public function HomePageVideo(){
        $homeVideo = HelperController::getHomepageVideo();
        return view('admin.homepagevideo', compact('homeVideo'));
    }

    public function SaveHomePageVideo(Request $request){
        $formData =  $request->except(['_token', 'home_video_id', 'edit_homeimage']);

        if ($request->hasFile('home_video_image')) {
            $file = $request->file('home_video_image');
            $destinationPath = public_path('uploads/homepage');
            $fileName = $file->getClientOriginalName();
            $fileExtension = explode('.', $fileName);
            if (
                strtolower(end($fileExtension)) != 'png' && strtolower(end($fileExtension)) != 'jpeg' &&  strtolower(end($fileExtension)) != 'jpg'
                && strtolower(end($fileExtension)) != 'webp'
            ) {
                return redirect()->back()->withInput()->with('error', 'Please upload the valid image!');
            }
            $file->move($destinationPath, $fileName);
            $formData['home_video_image'] = $fileName;
        } else {
            $formData['home_video_image'] =  $request->input('edit_homeimage');
        }

        if ($request->input('home_video_id') == '') {
            $saveData = insertQueryId('homepage_video', $formData);
            $homepageId = $saveData;
        } else {
            $homepageId = decryption($request->input('home_video_id'));
            $saveData = updateQuery('homepage_video', 'home_video_id', $homepageId, $formData);
        }

        $notify = notification($saveData);
        return back()->with($notify['type'], $notify['msg']);
    }


    public function GetMenuCategory(Request $request){
        $status = false;
        $menuid = $request->input('menu_id');
        $responseData =  DB::table('category')->where([['menu_id', $menuid],['status', 1]])->get();
        if(count($responseData)){
            $status = true;
        }
        return response()->json(['status' => $status, 'data' => $responseData]);
    }

    public function GetCatSubCategory(Request $request){
        $status = false;
        $categoryid = $request->input('category_id');
        $responseData =  DB::table('subcategory')->where([['category_id', $categoryid],['status', 1]])->get();
        if(count($responseData)){
            $status = true;
        }
        return response()->json(['status' => $status, 'data' => $responseData]);
    }

    public function ViewAdmin()
    {
        $adminDetails = HelperController::getAdminDetailsExceptLoggedIn();
        return view('admin.viewadmin', compact('adminDetails'));
    }

    public function ManageAdmin()
    {
        return view('admin.actionadmin');
    }

    public function ActionAdmin($option, $id)
    {
        $actionId = decryption($id);
        $adminData = HelperController::getAdminDetails($actionId);
        if (count($adminData) == 0) return redirect(ADMINURL . '/viewadmin');

        if ($option == 'delete') {
            $delete = deleteQuery($actionId, 'admin_details', 'admin_id');
            $notify = notification($delete);
            return redirect(ADMINURL . '/viewadmin')->with($notify['type'], 'Data Deleted Successfully');
        }
        return view('admin.actionadmin', ['action' => $option, 'data' => $adminData]);
    }

    public function SaveAdminDetails(Request $req)
    {
        $formData =  $req->except(['_token', 'admin_id']);
        if ($req->input('admin_id') == '') {
            $formData['admin_password'] = md5('root@123');
            $formData['admin_created_by'] =  $req->session()->get('admin_id');
            $saveData = insertQuery('admin_details', $formData);
        } else {
            $saveData = updateQuery('admin_details', 'admin_id', decryption($req->input('admin_id')), $formData);
        }
        $notify = notification($saveData);
        return redirect(ADMINURL . '/viewadmin')->with($notify['type'], $notify['msg']);
    }

    public function ViewMenu()
    {
        $menuDetails = HelperController::getMenuDetails();
        return view('admin.viewmenu', compact('menuDetails'));
    }

    public function ManageMenu()
    {
        return view('admin.actionmenu');
    }

    public function ActionMenu($option, $id)
    {
        $actionId = decryption($id);
        $menuData = HelperController::getMenuDetails($actionId);
        if (count($menuData) == 0) return redirect(ADMINURL . '/viewmenu');

        if ($option == 'delete') {
            $delete = deleteQuery($actionId, 'menu', 'menu_id');
            $notify = notification($delete);
            return redirect(ADMINURL . '/viewmenu')->with($notify['type'], 'Data Deleted Successfully');
        }
        return view('admin.actionmenu', ['action' => $option, 'data' => $menuData]);
    }

    public function SaveMenuDetails(Request $req)
    {
        $formData =  $req->except(['_token', 'menu_id', 'edit_menuimage']);

        if ($req->hasFile('menu_image')) {
            $file = $req->file('menu_image');
            $destinationPath = public_path('uploads/menu');
            $fileName = $file->getClientOriginalName();
            $fileExtension = explode('.', $fileName);
            if (
                strtolower(end($fileExtension)) != 'png' && strtolower(end($fileExtension)) != 'jpeg' &&  strtolower(end($fileExtension)) != 'jpg'
                && strtolower(end($fileExtension)) != 'webp'
            ) {
                return redirect()->back()->withInput()->with('error', 'Please upload the valid image!');
            }
            $file->move($destinationPath, $fileName);
            $formData['menu_image'] = $fileName;
        } else {
            $formData['menu_image'] =  $req->input('edit_menuimage');
        }
        if ($req->input('menu_id') == '') {
            $saveData = insertQuery('menu', $formData);
        } else {
            $productId = decryption($req->input('menu_id'));
            $saveData = updateQuery('menu', 'menu_id', $productId, $formData);
        }
        $notify = notification($saveData);
        return redirect(ADMINURL . '/viewmenu')->with($notify['type'], $notify['msg']);
    }

    public function ViewProductMetal()
    {
        $productMetal = HelperController::getProductMetal();
        return view('admin.viewproductmetal', compact('productMetal'));
    }

    public function ManageProductMetal()
    {
        return view('admin.actionproductmetal');
    }

    public function ActionProductMetal($option, $id)
    {
        $actionId = decryption($id);
        $productMetalData = HelperController::getProductMetal($actionId);
        if (count($productMetalData) == 0) return redirect(ADMINURL . '/viewproductmetal');

        if ($option == 'delete') {
            $delete = deleteQuery($actionId, 'product_metal', 'product_metal_id');
            $notify = notification($delete);
            return redirect(ADMINURL . '/viewproductmetal')->with($notify['type'], 'Data Deleted Successfully');
        }
        return view('admin.actionproductmetal', ['action' => $option, 'data' => $productMetalData]);
    }

    public function SaveProductMetalDetails(Request $req)
    {
        $formData =  $req->except(['_token', 'product_metal_id']);
        if ($req->input('product_metal_id') == '') {
            $saveData = insertQuery('product_metal', $formData);
        } else {
            $productId = decryption($req->input('product_metal_id'));
            $saveData = updateQuery('product_metal', 'product_metal_id', $productId, $formData);
        }
        $notify = notification($saveData);
        return redirect(ADMINURL . '/viewproductmetal')->with($notify['type'], $notify['msg']);
    }

    public function ViewProductSize()
    {
        $productMetalSize = HelperController::getProductSize();
        return view('admin.viewproductsize', compact('productMetalSize'));
    }

    public function ManageProductSize()
    {
        return view('admin.actionproductsize');
    }

    public function ActionProductSize($option, $id)
    {
        $actionId = decryption($id);
        $productMetalData = HelperController::getProductSize($actionId);
        if (count($productMetalData) == 0) return redirect(ADMINURL . '/viewproductsize');

        if ($option == 'delete') {
            $delete = deleteQuery($actionId, 'product_size', 'product_size_id');
            $notify = notification($delete);
            return redirect(ADMINURL . '/viewproductsize')->with($notify['type'], 'Data Deleted Successfully');
        }
        return view('admin.actionproductsize', ['action' => $option, 'data' => $productMetalData]);
    }

    public function SaveProductSizeDetails(Request $req)
    {
        $formData =  $req->except(['_token', 'product_size_id']);
        if ($req->input('product_size_id') == '') {
            $saveData = insertQuery('product_size', $formData);
        } else {
            $productId = decryption($req->input('product_size_id'));
            $saveData = updateQuery('product_size', 'product_size_id', $productId, $formData);
        }
        $notify = notification($saveData);
        return redirect(ADMINURL . '/viewproductsize')->with($notify['type'], $notify['msg']);
    }

    public function ViewCategory()
    {
        $categoryDetails = HelperController::getCategoryDetails();
        return view('admin.viewcategory', compact('categoryDetails'));
    }

    public function ManageCategory()
    {
        return view('admin.actioncategory');
    }

    public function ActionCategory($option, $id)
    {
        $actionId = decryption($id);
        $menuData = HelperController::getCategoryDetails($actionId);
        if (count($menuData) == 0) return redirect(ADMINURL . '/viewcategory');

        if ($option == 'delete') {
            $delete = deleteQuery($actionId, 'category', 'category_id');
            $notify = notification($delete);
            return redirect(ADMINURL . '/viewcategory')->with($notify['type'], 'Data Deleted Successfully');
        }
        return view('admin.actioncategory', ['action' => $option, 'data' => $menuData]);
    }

    public function SaveCategoryDetails(Request $req)
    {
        $formData =  $req->except(['_token', 'category_id', 'edit_categoryimage']);

        if ($req->hasFile('category_img')) {
            $file = $req->file('category_img');
            $destinationPath = public_path('uploads/category');
            $fileName = $file->getClientOriginalName();
            $fileExtension = explode('.', $fileName);
            if (
                strtolower(end($fileExtension)) != 'png' && strtolower(end($fileExtension)) != 'jpeg' &&  strtolower(end($fileExtension)) != 'jpg'
                && strtolower(end($fileExtension)) != 'webp'
            ) {
                return redirect()->back()->withInput()->with('error', 'Please upload the valid image!');
            }
            $file->move($destinationPath, $fileName);
            $formData['category_img'] = $fileName;
        } else {
            $formData['category_img'] =  $req->input('edit_categoryimage');
        }

        $product_latest = 0;
        if((array_key_exists('category_homepage', $formData)) && $formData['category_homepage'] == 'on'){
            $product_latest = 1;
        }

        $formData['category_homepage'] = $product_latest;

        if ($req->input('category_id') == '') {
            $saveData = insertQuery('category', $formData);
        } else {
            $productId = decryption($req->input('category_id'));
            $saveData = updateQuery('category', 'category_id', $productId, $formData);
        }
        $notify = notification($saveData);
        return redirect(ADMINURL . '/viewcategory')->with($notify['type'], $notify['msg']);
    }

    public function ViewSubCategory()
    {
        $subcategoryDetails = HelperController::getSubCategoryDetails();
        return view('admin.viewsubcategory', compact('subcategoryDetails'));
    }

    public function ManageSubCategory()
    {
        return view('admin.actionsubcategory');
    }

    public function ActionSubCategory($option, $id)
    {
        $actionId = decryption($id);
        $subCategoryData = HelperController::getSubCategoryDetails($actionId);
        if (count($subCategoryData) == 0) return redirect(ADMINURL . '/viewsubcategory');

        if ($option == 'delete') {
            $delete = deleteQuery($actionId, 'subcategory', 'subcategory_id');
            $notify = notification($delete);
            return redirect(ADMINURL . '/viewsubcategory')->with($notify['type'], 'Data Deleted Successfully');
        }
        return view('admin.actionsubcategory', ['action' => $option, 'data' => $subCategoryData]);
    }

    public function SaveSubCategoryDetails(Request $req)
    {
        $formData =  $req->except(['_token', 'subcategory_id', 'edit_subcategoryimage']);

        if ($req->hasFile('subcategory_img')) {
            $file = $req->file('subcategory_img');
            $destinationPath = public_path('uploads/subcategory');
            $fileName = $file->getClientOriginalName();
            $fileExtension = explode('.', $fileName);
            if (
                strtolower(end($fileExtension)) != 'png' && strtolower(end($fileExtension)) != 'jpeg' &&  strtolower(end($fileExtension)) != 'jpg'
                && strtolower(end($fileExtension)) != 'webp'
            ) {
                return redirect()->back()->withInput()->with('error', 'Please upload the valid image!');
            }
            $file->move($destinationPath, $fileName);
            $formData['subcategory_img'] = $fileName;
        } else {
            $formData['subcategory_img'] =  $req->input('edit_subcategoryimage');
        }
        if ($req->input('subcategory_id') == '') {
            $saveData = insertQuery('subcategory', $formData);
        } else {
            $productId = decryption($req->input('subcategory_id'));
            $saveData = updateQuery('subcategory', 'subcategory_id', $productId, $formData);
        }
        $notify = notification($saveData);
        return redirect(ADMINURL . '/viewsubcategory')->with($notify['type'], $notify['msg']);
    }

    public function ViewFAQ()
    {
        $faqDetails = HelperController::getFAQDetails();
        return view('admin.viewfaq', compact('faqDetails'));
    }

    public function ManageFAQ()
    {
        return view('admin.actionfaq');
    }

    public function ActionFAQ($option, $id)
    {
        $actionId = decryption($id);
        $faqData = HelperController::getFAQDetails($actionId);
        if (count($faqData) == 0) return redirect(ADMINURL . '/viewfaq');

        if ($option == 'delete') {
            $delete = deleteQuery($actionId, 'faq', 'faq_id');
            $notify = notification($delete);
            return redirect(ADMINURL . '/viewfaq')->with($notify['type'], 'Data Deleted Successfully');
        }
        return view('admin.actionfaq', ['action' => $option, 'data' => $faqData]);
    }

    public function SaveFAQDetails(Request $req)
    {
        $formData =  $req->except(['_token', 'faq_id']);
        if ($req->input('faq_id') == '') {
            $saveData = insertQuery('faq', $formData);
        } else {
            $productId = decryption($req->input('faq_id'));
            $saveData = updateQuery('faq', 'faq_id', $productId, $formData);
        }
        $notify = notification($saveData);
        return redirect(ADMINURL . '/viewfaq')->with($notify['type'], $notify['msg']);
    }

    public function ViewProduct()
    {
        $productDetails = HelperController::getProductDetails();
        return view('admin.viewproduct', compact('productDetails'));
    }

    public function ManageProduct()
    {
        return view('admin.actionproduct');
    }

    public function ActionProduct($option, $id)
    {
        $actionId = decryption($id);
        $productData = HelperController::getProductDetails($actionId);
        if (count($productData) == 0) return redirect(ADMINURL . '/viewproduct');

        if ($option == 'delete') {
            $delete = deleteQuery($actionId, 'products', 'product_id');
            $notify = notification($delete);
            return redirect(ADMINURL . '/viewproduct')->with($notify['type'], 'Data Deleted Successfully');
        }
        return view('admin.actionproduct', ['action' => $option, 'data' => $productData, 'moreimages'=>HelperController::getMoreImages($actionId)]);
    }

    public function SaveProductDetails(Request $req)
    {
        $formData =  $req->except(['_token', 'product_id', 'edit_productimage', 'category_hidden','subcategory_hidden','product_subimage']);

        // echo '<pre>';
        // print_r($formData);
        // // exit;

        if ($req->hasFile('product_image')) {
            $file = $req->file('product_image');
            $destinationPath = public_path('uploads/products');
            $fileName = $file->getClientOriginalName();
            $fileExtension = explode('.', $fileName);
            if (
                strtolower(end($fileExtension)) != 'png' && strtolower(end($fileExtension)) != 'jpeg' &&  strtolower(end($fileExtension)) != 'jpg'
                && strtolower(end($fileExtension)) != 'webp'
            ) {
                return redirect()->back()->withInput()->with('error', 'Please upload the valid image!');
            }
            $file->move($destinationPath, $fileName);
            $formData['product_image'] = $fileName;
        } else {
            $formData['product_image'] =  $req->input('edit_productimage');
        }

        $product_latest = 0;
        $product_most_popular = 0;

        // echo $formData['product_latest'];
        if((array_key_exists('product_latest', $formData)) && $formData['product_latest'] == 'on'){
            echo 'ppp';
            $product_latest = 1;
        }

        if((array_key_exists('product_most_popular', $formData)) && $formData['product_most_popular'] == 'on'){
            $product_most_popular = 1;
        }


        $formData['product_latest'] = $product_latest;
        $formData['product_most_popular'] = $product_most_popular;


        // print_r($formData);
        // exit;



        if ($req->input('product_id') == '') {
            $saveData = insertQueryId('products', $formData);
            $productId = $saveData;
        } else {
            $productId = decryption($req->input('product_id'));
            $saveData = updateQuery('products', 'product_id', $productId, $formData);
        }

        if($req->hasFile('product_subimage')){
            $moreImages = $req->file('product_subimage');
            $addtionalImageData = array('product_id'=>$productId);
            foreach($moreImages as $k => $moreImage){
                $moredestinationPath = 'uploads/products/additional';
                $morefileName = ($k+1).'_'.$formData['product_name'].'_'.$moreImage->getClientOriginalName();
                $moreImage->move($moredestinationPath,$morefileName);
                if(HelperController::imageExist($productId,$k+1)==0) {
                    $addtionalImageData['product_image'] = $morefileName;
                    $addtionalImageData['row'] = $k+1;
                    $moresaveData = insertQuery('product_images',$addtionalImageData);
                }else{
                    $addtionalImageData['product_image'] = $morefileName;
                    $update = DB::table('product_images')->where([['product_id',$productId],['row',$k+1]])->update($addtionalImageData);
                }
            }
        }



        $notify = notification($saveData);
        return redirect(ADMINURL . '/viewproduct')->with($notify['type'], $notify['msg']);
    }

    public function ViewBanner()
    {
        $bannerDetails = HelperController::getBannerDetails();
        return view('admin.viewbannerdetails', compact('bannerDetails'));
    }

    public function ManageBanner()
    {
        return view('admin.actionbannerdetails');
    }

    public function ActionBanner($option, $id)
    {
        $actionId = decryption($id);
        $bannerData = HelperController::getBannerDetails($actionId);
        if (count($bannerData) == 0) return redirect(ADMINURL . '/viewbanner');

        if ($option == 'delete') {
            $delete = deleteQuery($actionId, 'banner_details', 'banner_id');
            $notify = notification($delete);
            return redirect(ADMINURL . '/viewbanner')->with($notify['type'], 'Data Deleted Successfully');
        }
        return view('admin.actionbannerdetails', ['action' => $option, 'data' => $bannerData]);
    }

    public function SaveBannerDetails(Request $req)
    {
        $formData =  $req->except(['_token', 'banner_id', 'edit_bannerimage']);

        if ($req->hasFile('banner_image')) {
            $file = $req->file('banner_image');
            $destinationPath = public_path('uploads/banner');
            $fileName = $file->getClientOriginalName();
            $fileExtension = explode('.', $fileName);
            if (
                strtolower(end($fileExtension)) != 'png' && strtolower(end($fileExtension)) != 'jpeg' &&  strtolower(end($fileExtension)) != 'jpg'
                && strtolower(end($fileExtension)) != 'webp'
            ) {
                return redirect()->back()->withInput()->with('error', 'Please upload the valid image!');
            }
            $file->move($destinationPath, $fileName);
            $formData['banner_image'] = $fileName;
        } else {
            $formData['banner_image'] =  $req->input('edit_bannerimage');
        }
        if ($req->input('banner_id') == '') {
            $saveData = insertQuery('banner_details', $formData);
        } else {
            $bannerId = decryption($req->input('banner_id'));
            $saveData = updateQuery('banner_details', 'banner_id', $bannerId, $formData);
        }
        $notify = notification($saveData);
        return redirect(ADMINURL . '/viewbanner')->with($notify['type'], $notify['msg']);
    }





    public function ViewBlog()
    {
        $blogDetails = HelperController::getBlogDetails();
        return view('admin.viewblogdetails', compact('blogDetails'));
    }

    public function ManageBlog()
    {
        return view('admin.actionblogdetails');
    }

    public function ActionBlog($option, $id)
    {
        $actionId = decryption($id);
        $blogData = HelperController::getBlogDetails($actionId);
        if (count($blogData) == 0) return redirect(ADMINURL . '/viewblog');

        if ($option == 'delete') {
            $delete = deleteQuery($actionId, 'blog_details', 'blog_id');
            $notify = notification($delete);
            return redirect(ADMINURL . '/viewblog')->with($notify['type'], 'Data Deleted Successfully');
        }
        return view('admin.actionblogdetails', ['action' => $option, 'data' => $blogData]);
    }

    public function SaveBlogDetails(Request $req)
    {
        $formData =  $req->except(['_token', 'blog_id', 'edit_blogimage']);

        if ($req->hasFile('blog_image')) {
            $file = $req->file('blog_image');
            $destinationPath = public_path('uploads/blog');
            $fileName = $file->getClientOriginalName();
            $fileExtension = explode('.', $fileName);
            if (
                strtolower(end($fileExtension)) != 'png' && strtolower(end($fileExtension)) != 'jpeg' &&  strtolower(end($fileExtension)) != 'jpg'
                && strtolower(end($fileExtension)) != 'webp'
            ) {
                return redirect()->back()->withInput()->with('error', 'Please upload the valid image!');
            }
            $file->move($destinationPath, $fileName);
            $formData['blog_image'] = $fileName;
        } else {
            $formData['blog_image'] =  $req->input('edit_blogimage');
        }
        if ($req->input('blog_id') == '') {
            $saveData = insertQuery('blog_details', $formData);
        } else {
            $productId = decryption($req->input('blog_id'));
            $saveData = updateQuery('blog_details', 'blog_id', $productId, $formData);
        }
        $notify = notification($saveData);
        return redirect(ADMINURL . '/viewblog')->with($notify['type'], $notify['msg']);
    }


    public function AdminLogout(Request $req)
    {
        $req->session()->forget('admin_name');
        $req->session()->forget('admin_id');
        $req->session()->forget('admin_role');
        return redirect(ADMINURL);
    }
}
