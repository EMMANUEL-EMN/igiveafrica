<?php

use App\Http\Controllers\blog as ControllersBlog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;
use App\Http\Controllers\c_admin;
use App\Http\Controllers\clientDashboard;
use App\Http\Controllers\fundraising;
use App\Http\Controllers\shop;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\blog;
use App\Http\Controllers\contact;

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

Route::get('/', [main::class, 'index']);
Route::get('/about_us/', [main::class, 'about']);
Route::get('/our_services/', [main::class, 'services']);
Route::get('/how_it_works/', [main::class, 'how']);
Route::get('/why_us/', [main::class, 'why']);
Route::get('/pricing/', [main::class, 'pricing']);
Route::get('/Case_studies/', [main::class, 'caseStudies']);
Route::get('/our_team/', [main::class, 'team']);
Route::get('/partners/', [main::class, 'partner']);
Route::get('/events_&_auction/', [main::class, 'event']);
Route::get('/strategies/', [main::class, 'strategies']);
Route::get('/communication/', [main::class, 'communication']);
Route::get('/fundraisers/', [main::class, 'fundraisers']);
Route::get('/donors/', [main::class, 'donors']);
Route::get('/nonprofits/', [main::class, 'nonprofits']);
Route::get('/login/', [main::class, 'login']);
Route::post('/authuser', [userAuth::class, 'login'])->name('user.auth');
Route::get('/contact_us/', [main::class, 'contact']);
Route::post('/contact/igive', [contact::class, 'contact'])->name('contact.igive');
Route::get('/join', [contact::class, 'join']);

Route::post('/join/igiveafrica', [userAuth::class, 'joinus'])->name('client.join');

// blogs
Route::get('/blog/', [blog::class, 'index']);
Route::get('/blog/read/{id}', [blog::class, 'read']);

Route::get('/fundraise/courses_we_serve/', [fundraising::class, 'index']);

// onlineshop
Route::get('/charity_shop/', [shop::class, 'index']);

// content manager routes
Route::get('/c_dashboard', [c_admin::class, 'index']);

Route::get('/c_pages', [c_admin::class, 'pages']);
Route::post('/c_post_pages', [c_admin::class, 'addpages'])->name('pages.add');
// Route::get('/c_pages/{id}', [c_admin::class, 'editpages'])->name('pages.edit');
Route::get('/c_delete_pages/{id}', [c_admin::class, 'dpages'])->name('pages.delete');

Route::get('/c_gallery', [c_admin::class, 'gallery']);
Route::post('/c_pgallery', [c_admin::class, 'pgallery'])->name('gallery.post');
Route::get('/c_editgallery/{id}', [c_admin::class, 'editgallery'])->name('gallery.edit');
Route::put('/c_updategallery/{id}', [c_admin::class, 'updategallery'])->name('gallery.update');


Route::get('/c_web_content', [c_admin::class, 'content']);
Route::post('/c_add_content', [c_admin::class, 'storeContent'])->name('content.store');
Route::get('/editContent/{id}', [c_admin::class, 'editContent'])->name('content.edit');
Route::post('/updateContent', [c_admin::class, 'updateContent'])->name('content.update');
Route::get('/deleteContent/{id}', [c_admin::class, 'deleteContent'])->name('content.delete');

Route::get('/c_adverts', [c_admin::class, 'advert']);
Route::post('c_advertAdd', [c_admin::class, 'addAdvert'])->name('advert.add');
Route::get('/deleteAdvert/{id}', [c_admin::class, 'deleteAdvert'])->name('advert.delete');

Route::get('/c_blogs', [c_admin::class, 'blogs']);
Route::post('/addblog', [c_admin::class, 'addBlog'])->name('blog.add');
Route::get('/deleteBlog/{id}', [c_admin::class, 'deleteBlog'])->name('blog.delete');
Route::get('/editBlog/{id}', [c_admin::class, 'editBlog'])->name('blog.edit');
Route::put('/updateBlog', [c_admin::class, 'updateBlog'])->name('blog.update');

// client dashboard
Route::get('/campaign/dashboard', [clientDashboard::class, 'index']);
Route::get('/campaign/donors', [clientDashboard::class, 'donors']);
Route::get('/campaign/upgrade', [clientDashboard::class, 'upgrades']);
Route::get('/campaign/recuring_plans', [clientDashboard::class, 'recuring']);
Route::get('/campaign/campaigns', [clientDashboard::class, 'campaigns']);
Route::get('/campaign/fundraisers', [clientDashboard::class, 'fundraisers']);
Route::get('/campaign/reports', [clientDashboard::class, 'reports']);
Route::get('/campaign/intergrations', [clientDashboard::class, 'intergration']);
Route::get('/campaign/communication', [clientDashboard::class, 'communication']);
Route::get('/campaign/partners', [clientDashboard::class, 'partners']);
Route::get('/campaign/account_settings', [clientDashboard::class, 'settings']);
Route::get('/logout', [userAuth::class, 'logoutClient']);

Route::post('/campaign/campaign/application', [clientDashboard::class, 'capplication'])->name('client.campaign');
Route::get('/fundraise/read/{id}', [fundraising::class, 'campaignInfo']);
