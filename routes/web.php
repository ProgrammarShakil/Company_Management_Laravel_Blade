<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\JobApplyController;
use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\VerifyIdController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\JobPostController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\navsliderController;
use App\Http\Controllers\Backend\homeSliderController;
use App\Http\Controllers\Backend\PayEmployeeController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\adminSettingsController;
use App\Http\Controllers\Backend\OurActivitiesController;
use App\Http\Controllers\Backend\ProductDetailsController;
use App\Http\Controllers\Backend\JobAppliedCandidatesController;
  

Route::get('/', [welcomeController::class, 'index'])->name('welcome');

Route::get('/verify_id', [VerifyIdController::class, 'index'])->name('verify_id');

Route::get('/job_offer', [JobOfferController::class, 'index'])->name('job_offer');

Route::get('/job_offer_details/{id}', [JobOfferController::class, 'show'])->name('job_offer_details');

Route::get('/products_details/{id}', [ProductDetailsController::class,'index'])->name('products_details');

Route::get('/job_apply/{id}', [JobApplyController::class, 'showDataWithJobId'])->name('job_apply_with_job_id');

Route::post('/job_apply', [JobApplyController::class, 'JobApplyStore'])->name('job_apply_create');


Auth::routes();

//Admin Login Routes
Route::get('/login/admin', [AdminController::class, 'AdminLoginForm'])->name('admin.login.form');
Route::post('/admin-login', [AdminController::class, 'AdminLogin']);

// Admin Routes
Route::group(['middleware' => 'admin','prefix' => 'admin'], function(){

    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');


    Route::resource('/employee_list', EmployeeController::class)->names('admin.employee_list');
    Route::resource('/pay_employee', PayEmployeeController::class)->names('admin.pay_employee');

    Route::resource('/sliders', SliderController::class)->names('admin.all_sliders_index');

    Route::resource('/job_applied_candidates', JobAppliedCandidatesController::class)->names('admin.job_applied_candidates');

    Route::resource('/home_sliders', homeSliderController::class)->names('admin.sliders');

    Route::resource('/nav_sliders', navsliderController::class)->names('admin.nav_sliders');


    Route::resource('/settings', SettingsController::class)->names('admin.settings');
    
    Route::resource('/admin_profile_settings', adminSettingsController::class)->names('admin.admin_profile_settings');

    Route::resource('/footer_settings', FooterController::class)->names('admin.footer_settings');

    Route::resource('/logo_change', LogoController::class)->names('admin.logo_change');


    Route::resource('/team_members', TeamController::class)->names('admin.team_members');

    Route::resource('/job_post', JobPostController::class)->names('admin.job_post');

    Route::resource('/clients', ClientController::class)->names('admin.clients');

    Route::resource('/our_activities', OurActivitiesController::class)->names('admin.our_activities');


    Route::resource('/categories', CategoryController::class)->names('admin.categories');
    
    Route::resource('/sub_categories', SubCategoryController::class)->names('admin.sub_categories');


    Route::resource('/products', ProductController::class)->names('admin.products');


    Route::get('/admin_profile', [AdminProfileController::class, 'index'])->name('admin.admin_profile');

    Route::get('/password/view', [AdminController::class, 'passwordView']) ->name('admin.password.view');
    Route::post('/password/update', [AdminController::class, 'passwordUpdate']) ->name('admin.password.update');

    Route::get('/profile/admin_profile_details', [AdminController::class, 'profiledetails']) ->name('admin.admin_profile.profiledetails');
    Route::put('/profile/admin_profile_details/update', [AdminController::class, 'profiledetailsUpdate']) ->name('admin.profiledetails.update');
});





// Users Routes
Route::group(['middleware' => 'web'], function(){
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::get('users/password/view', [HomeController::class,'passwordView'])->name('users.password.view');
    Route::post('users/password/view', [HomeController::class,'passwordUpdate'])->name('users.password.update');

    Route::get('users/salary/view', [HomeController::class, 'salaryView']) ->name('users.salary.view');
    
    Route::get('users/profile/details', [HomeController::class, 'profiledetails']) ->name('users.profile.details');
    Route::put('users/profile/details/update', [HomeController::class, 'profiledetailsUpdate']) ->name('users.profiledetails.update');

}); 