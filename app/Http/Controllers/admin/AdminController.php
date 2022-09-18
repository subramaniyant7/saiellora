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
        return view('admin.actionproduct', ['action' => $option, 'data' => $productData]);
    }

    public function SaveProductDetails(Request $req)
    {
        $formData =  $req->except(['_token', 'product_id', 'edit_productimage']);

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
        if ($req->input('product_id') == '') {
            $saveData = insertQuery('products', $formData);
        } else {
            $productId = decryption($req->input('product_id'));
            $saveData = updateQuery('products', 'product_id', $productId, $formData);
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
