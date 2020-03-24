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
// Route::get('/{any}', function(){
//     return view('welcome');
// })->where('any', '.*');

Route::get('lang/{locale}', function($locale){
    session()->put('locale',$locale);
    return Redirect()->back();
});





//Route::group(['prefix' => '{lang}/admin'], function() {
    
    Route::group(['prefix' => 'admin', 'middleware' => ['auth'] ], function() {

        Route::get('/',function(){
            return view('admin.home');
        });

        //---------clients routes---------------------------

        Route::get('/client/delete/{id}','ClientController@destroy');
        Route::get('/client/edit/{id}','ClientController@edit');
        Route::post('/client/edit/{id}','ClientController@update');
        Route::get('/client/create',  'ClientController@create');
        Route::get('client/', 'ClientController@index');
        Route::post('/client/store', 'ClientController@store');
        Route::get('client/InActive_client/{id}', 'ClientController@InActive');
        Route::get('client/Active_client/{id}', 'ClientController@Active');
        

        //---------parteners routes---------------------------

        Route::get('/partner/delete/{id}','PartnerController@destroy');
        Route::get('/partner/edit/{id}','PartnerController@edit');
        Route::post('/partner/edit/{id}','PartnerController@update');
        Route::get('/partner/create',  'PartnerController@create');
        Route::get('partner/', 'PartnerController@index');
        Route::post('/partner/store', 'PartnerController@store');
        Route::get('partner/InActive_partner/{id}', 'PartnerController@InActive');
        Route::get('partner/Active_partner/{id}', 'PartnerController@Active');
        //---------hierarchy routes---------------------------


         Route::get('/hierarchy/delete/{id}','HierarchyController@destroy');
         Route::get('/hierarchy/edit/{id}','HierarchyController@edit');
         Route::post('/hierarchy/edit/{id}','HierarchyController@update');
         Route::get('/hierarchy/create',  'HierarchyController@create');
         Route::get('hierarchy/', 'HierarchyController@index');
         Route::post('/hierarchy/store', 'HierarchyController@store');

         Route::get('hierarchy/InActive_hierarchy/{id}', 'HierarchyController@InActive');
        Route::get('hierarchy/Active_hierarchy/{id}', 'HierarchyController@Active');
          //---------work routes---------------------------


         Route::get('/work/delete/{id}','WorkController@destroy');
         Route::get('/work/edit/{id}','WorkController@edit');
         Route::post('/work/edit/{id}','WorkController@update');
         Route::get('/work/create',  'WorkController@create');
         Route::get('work/', 'WorkController@index');
         Route::post('/work/store', 'WorkController@store');

         Route::get('work/InActive_work/{id}', 'WorkController@InActive');
        Route::get('work/Active_work/{id}', 'WorkController@Active');


          //---------Thank routes---------------------------


         Route::get('/thank/delete/{id}','ThankController@destroy');
         Route::get('/thank/edit/{id}','ThankController@edit');
         Route::post('/thank/edit/{id}','ThankController@update');
         Route::get('/thank/create',  'ThankController@create');
         Route::get('thank/', 'ThankController@index');
         Route::post('/thank/store', 'ThankController@store');

         Route::get('thank/InActive_thank/{id}', 'ThankController@InActive');
        Route::get('thank/Active_thank/{id}', 'ThankController@Active');
         //---------social routes---------------------------


         Route::get('/social/delete/{id}','SocialController@destroy');
         Route::get('/social/edit/{id}','SocialController@edit');
         Route::post('/social/edit/{id}','SocialController@update');
         Route::get('/social/create',  'SocialController@create');
         Route::get('social/', 'SocialController@index');
         Route::post('/social/store', 'SocialController@store');

         Route::get('social/InActive_social/{id}', 'SocialController@InActive');
        Route::get('social/Active_social/{id}', 'SocialController@Active');
         //---------setting routes---------------------------


        //  Route::get('/setting/delete/{id}','SettingController@destroy');
         Route::get('/setting/edit/{id}','SettingController@edit');
         Route::post('/setting/edit/{id}','SettingController@update');
         Route::get('/setting/create',  'SettingController@create');
         Route::get('setting/', 'SettingController@index');
         Route::post('/setting/store', 'SettingController@store');

         Route::get('setting/InActive_setting/{id}', 'SettingController@InActive');
        Route::get('setting/Active_setting/{id}', 'SettingController@Active');
                  //---------event routes---------------------------


         Route::get('/event/delete/{id}','EventController@destroy');
         Route::get('/event/edit/{id}','EventController@edit');
         Route::post('/event/edit/{id}','EventController@update');
         Route::get('/event/create',  'EventController@create');
         Route::get('event/', 'EventController@index');
         Route::post('/event/store', 'EventController@store');

         Route::get('event/image/{id}', 'EventController@show');
         Route::get('event/InActive_event/{id}', 'EventController@InActive');
        Route::get('event/Active_event/{id}', 'EventController@Active');

        //---------Service routes---------------------------


         Route::get('/service/delete/{id}','ServiceController@destroy');
         Route::get('/service/edit/{id}','ServiceController@edit');
         Route::post('/service/edit/{id}','ServiceController@update');
         Route::get('/service/create',  'ServiceController@create');
         Route::get('service/', 'ServiceController@index');
         Route::post('/service/store', 'ServiceController@store');
         Route::get('service/image/{id}', 'ServiceController@show');
         Route::get('service/InActive_service/{id}', 'ServiceController@InActive');
        Route::get('service/Active_service/{id}', 'ServiceController@Active');
         //---------job routes---------------------------

         
         Route::get('/job/delete/{id}','JobController@destroy');
         Route::get('/job/edit/{id}','JobController@edit');
         Route::post('/job/edit/{id}','JobController@update');
         Route::get('/job/create',  'JobController@create');
         Route::get('job/', 'JobController@index');
         Route::post('/job/store', 'JobController@store');

         Route::get('job/InActive_job/{id}', 'JobController@InActive');
        Route::get('job/Active_job/{id}', 'JobController@Active');
                  //---------job routes---------------------------

                           
        Route::get('/contact/delete/{id}','ContactController@destroy');
        Route::get('/contact/edit/{id}','ContactController@edit');
        Route::post('/contact/edit/{id}','ContactController@update');
        Route::get('/contact/create',  'ContactController@create');
        Route::get('contact/', 'ContactController@index');
        Route::post('/contact/store', 'ContactController@store');
        Route::get('contact/InActive_contact/{id}', 'ContactController@InActive');
        Route::get('contact/Active_contact/{id}', 'ContactController@Active');
    });
//});



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
