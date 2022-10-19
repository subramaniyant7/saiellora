<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\admin\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.comingsoon');
// });


Route::get('/', [FrontendController::class, 'Home']);
Route::get('/terms_conditions', [FrontendController::class, 'TermsConditions']);
Route::get('/privacy_policy', [FrontendController::class, 'PrivacyPolicy']);
Route::get('/terms_service', [FrontendController::class, 'TermsService']);
Route::get('/about_us', [FrontendController::class, 'AboutUs']);
Route::get('/contact_us', [FrontendController::class, 'ContactUs']);
Route::get('/contact_form', [FrontendController::class, 'ContactForm']);
Route::post('/contact_form', [FrontendController::class, 'HandleContactForm']);
Route::get('/blogs', [FrontendController::class, 'Blogs']);
Route::get('/faq', [FrontendController::class, 'FAQ']);

Route::get('/category', [FrontendController::class, 'AllCategory']);
Route::get('/products', [FrontendController::class, 'Category']);
Route::get('/productdetails/{id}', [FrontendController::class, 'ProductDetails']);


Route::prefix(ADMINURL)->group(function () {
    Route::get('/', function () { return view('admin.login'); })->middleware('adminloginvalidate');
    Route::post('/login', [AdminController::class, 'AdminLogin'])->middleware('adminloginvalidate');

    Route::middleware(['adminauth'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'Dashboard']);
        Route::get('/change_password', [AdminController::class, 'ChangePassword']);
        Route::post('/change_password', [AdminController::class, 'UpdatePassword']);

        Route::get('/homepage_video', [AdminController::class, 'HomePageVideo']);
        Route::post('/homepage_video', [AdminController::class, 'SaveHomePageVideo']);
        Route::post('/homepage_tamilvideo', [AdminController::class, 'SaveTamilHomePageVideo']);

        Route::post('/getmenucategory', [AdminController::class, 'GetMenuCategory']);
        Route::post('/getcatsubcategory', [AdminController::class, 'GetCatSubCategory']);

        Route::get('/viewadmin', [AdminController::class, 'ViewAdmin']);
        Route::get('/manageadmin', [AdminController::class, 'ManageAdmin']);
        Route::get('/actionadmin/{option}/{id}', [AdminController::class, 'ActionAdmin']);
        Route::post('/saveadmindetails', [AdminController::class, 'SaveAdminDetails']);

        Route::get('/viewmenu', [AdminController::class, 'ViewMenu']);
        Route::get('/managemenu', [AdminController::class, 'ManageMenu']);
        Route::get('/actionmenu/{option}/{id}', [AdminController::class, 'ActionMenu']);
        Route::post('/savemenudetails', [AdminController::class, 'SaveMenuDetails']);

        Route::get('/viewproductmetal', [AdminController::class, 'ViewProductMetal']);
        Route::get('/manageproductmetal', [AdminController::class, 'ManageProductMetal']);
        Route::get('/actionproductmetal/{option}/{id}', [AdminController::class, 'ActionProductMetal']);
        Route::post('/saveproductmetaldetails', [AdminController::class, 'SaveProductMetalDetails']);
        Route::post('/savetamilproductmetaldetails', [AdminController::class, 'SaveTamilProductMetalDetails']);

        Route::get('/viewproductsize', [AdminController::class, 'ViewProductSize']);
        Route::get('/manageproductsize', [AdminController::class, 'ManageProductSize']);
        Route::get('/actionproductsize/{option}/{id}', [AdminController::class, 'ActionProductSize']);
        Route::post('/saveproductsizedetails', [AdminController::class, 'SaveProductSizeDetails']);
        Route::post('/savetamilproductsizedetails', [AdminController::class, 'SaveTamilProductSizeDetails']);

        Route::get('/viewcategory', [AdminController::class, 'ViewCategory']);
        Route::get('/managecategory', [AdminController::class, 'ManageCategory']);
        Route::get('/actioncategory/{option}/{id}', [AdminController::class, 'ActionCategory']);
        Route::post('/savecategorydetails', [AdminController::class, 'SaveCategoryDetails']);
        Route::post('/savetamilcategorydetails', [AdminController::class, 'SaveTamilCategoryDetails']);

        Route::get('/viewsubcategory', [AdminController::class, 'ViewSubCategory']);
        Route::get('/managesubcategory', [AdminController::class, 'ManageSubCategory']);
        Route::get('/actionsubcategory/{option}/{id}', [AdminController::class, 'ActionSubCategory']);
        Route::post('/savesubcategorydetails', [AdminController::class, 'SaveSubCategoryDetails']);
        Route::post('/savetamilsubcategorydetails', [AdminController::class, 'SaveTamilSubCategoryDetails']);

        Route::get('/viewproduct', [AdminController::class, 'ViewProduct']);
        Route::get('/manageproduct', [AdminController::class, 'ManageProduct']);
        Route::get('/actionproduct/{option}/{id}', [AdminController::class, 'ActionProduct']);
        Route::post('/saveproductdetails', [AdminController::class, 'SaveProductDetails']);
        Route::post('/savetamilproductdetails', [AdminController::class, 'SaveTamilProductDetails']);

        Route::get('/viewbanner', [AdminController::class, 'ViewBanner']);
        Route::get('/managebanner', [AdminController::class, 'ManageBanner']);
        Route::get('/actionbanner/{option}/{id}', [AdminController::class, 'ActionBanner']);
        Route::post('/savebannerdetails', [AdminController::class, 'SaveBannerDetails']);

        Route::get('/viewfaq', [AdminController::class, 'ViewFAQ']);
        Route::get('/managefaq', [AdminController::class, 'ManageFAQ']);
        Route::get('/actionfaq/{option}/{id}', [AdminController::class, 'ActionFAQ']);
        Route::post('/savefaqdetails', [AdminController::class, 'SaveFAQDetails']);
        Route::post('/savetamilfaqdetails', [AdminController::class, 'SaveTamilFAQDetails']);

        Route::get('/viewblog', [AdminController::class, 'ViewBlog']);
        Route::get('/manageblog', [AdminController::class, 'ManageBlog']);
        Route::get('/actionblog/{option}/{id}', [AdminController::class, 'ActionBlog']);
        Route::post('/saveblogdetails', [AdminController::class, 'SaveBlogDetails']);
        Route::post('/savetamilblogdetails', [AdminController::class, 'SaveTamilBlogDetails']);

        Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('logout');
    });
});
