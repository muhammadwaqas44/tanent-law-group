<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::post('/register-user','Site\UserController@register')->name('registerUser');

Route::post('/login-user','Site\UserController@login')->name('loginUser');

Route::get('/logout-user',"Site\UserController@logout")->name('logoutUser');

Route::post('/forget-password','Site\UserController@forgetPassword')->name('forgetPassword');
Route::get('reset/password/{token}','Site\UserController@resetPassword')->name('resetPassword');
Route::post('change-password','Site\UserController@changePassword')->name('changePassword');


//cms-pages
Route::get('/','Site\CmsController@home')->name('home');
Route::get('/buy-toolkit','Site\CmsController@buyNow')->name('buyNow');
Route::get('/about-us','Site\CmsController@aboutUs')->name('aboutUs');
Route::get('/contact-us','Site\CmsController@contactUs')->name('contactUs');
Route::get('/disclaimer','Site\CmsController@disclaimer')->name('disclaimer');
Route::get('/faq','Site\CmsController@faq')->name('faq');
Route::get('/free-videos','Site\CmsController@freeVideo')->name('freeVideo');
Route::get("/haven't-moved-out-yet",'Site\CmsController@landingPage1')->name('landingPage1');
Route::get("/already-moved-out",'Site\CmsController@landingPage2')->name('landingPage2');
Route::get("/need-more-help",'Site\CmsController@needMoreHelp')->name('needMoreHelp');
Route::get("/terms-of-use",'Site\CmsController@termsOfUse')->name('termsOfUse');
Route::get("/privacy-policy",'Site\CmsController@privacyPolicy')->name('privacyPolicy');
Route::get("/blogs",'Site\CmsController@blogTitle')->name('blogTitle');
Route::get("/blog-view/{blogId}",'Site\CmsController@blogView')->name('blogView');

Route::post('send-contact-email','Site\ContactUsController@sendEmail')->name('sendContactEmail');

Route::group(['middleware'=>['auth']],function() {


    Route::get('dashboard','Site\DashboardController@index')->name('dashboard');

    Route::get('payment','Site\PaymentController@showForm')->name('account');
    Route::post('make-payment','Site\PaymentController@createPayment')->name('make_payment');
    Route::get('account','Site\PaymentController@information')->name('account-info');

    Route::get('edit-profile','Site\UserProfileController@editProfile')->name('edit-profile');
    Route::post('update-profile','Site\UserProfileController@updateProfile')->name('update-profile');

    Route::post('update-password','Site\UserProfileController@updatePassword')->name('userUpdatePassword');

    Route::group(['middleware'=>['isPaid']],function(){

        Route::get('letter-1a','Site\LetterController@letter_1a')->name('letter-1a');
        Route::post('post_letter1','Site\LetterController@post_letter1')->name('post_letter1a');

        Route::post('letter-1a','Site\PdfController@save_letter_1a')->name('pdf_save_letter1a');
        Route::get('letter-1a/{id}','Site\PdfController@export_letter_1a')->name('export_letter1a');

        Route::get('letter-1b','Site\LetterController@letter_1b')->name('letter-1b');
        Route::post('post_letter1b','Site\LetterController@post_letter1b')->name('post_letter1b');

        Route::post('letter-1b','Site\PdfController@save_letter_1b')->name('pdf_save_letter1b');
        Route::get('letter-1b/{id}','Site\PdfController@export_letter_1b')->name('export_letter1b');

        Route::get('letter-2','Site\LetterController@letter_2')->name('letter-2');
        Route::post('post_letter2','Site\LetterController@post_letter2')->name('post_letter2');

        Route::post('letter-2','Site\PdfController@save_letter_2')->name('pdf_save_letter2');
        Route::get('letter-2/{id}','Site\PdfController@export_letter_2')->name('export_letter2');

        Route::get('request-repairs','Site\LetterController@request_repair')->name('request_repairs');
        Route::post('post-request-repairs','Site\LetterController@post_request_repair')->name('post_requesting_repair');

        Route::post('request-repairs','Site\PdfController@save_request_repairs')->name('pdf_request_repairs');
        Route::get('request-repairs/{id}','Site\PdfController@export_request_repairs')->name('export_request_repairs');


        Route::get('judgement-letter','Site\LetterController@judgementLetter')->name('judgement_letter');
        Route::post('post-judgement-letter','Site\LetterController@postJudgementLetter')->name('post_judgement_letter');

        Route::post('judgement-letter','Site\PDFController@judgementLetter')->name('pdf_judgement_letter');
        Route::get('judgement-letter/{id}','Site\PdfController@exportJudgementLetter')->name('export_judgement_letter');


        Route::get('get-letter','Site\LetterController@getLetter')->name('get-letters');
        Route::get('letter-listing','Site\LetterController@letterListing')->name('getLetter');

        Route::get('video','Site\DashboardController@video')->name('dashbaordVideo');

        Route::get('documents','Site\DashboardController@document')->name('otherDocument');



    });

});
