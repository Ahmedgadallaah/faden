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

                  //---------contact routes---------------------------
        
        Route::get('/contact/delete/{id}','ContactController@destroy');
        Route::get('/contact/edit/{id}','ContactController@edit');
        Route::post('/contact/edit/{id}','ContactController@update');
        Route::get('/contact/create',  'ContactController@create');
        Route::get('contact/', 'ContactController@index');
        Route::post('/contact/store', 'ContactController@store');
        Route::get('contact/InActive_contact/{id}', 'ContactController@InActive');
        Route::get('contact/Active_contact/{id}', 'ContactController@Active');

        //---------message routes---------------------------
        
        Route::get('/message/delete/{id}','MessageController@destroy');
        // Route::get('/contact/edit/{id}','ContactController@edit');
        // Route::post('/contact/edit/{id}','ContactController@update');
        // Route::get('/contact/create',  'ContactController@create');
         Route::get('message/', 'MessageController@index');
        //Route::post('/contact/store', 'ContactController@store');
        //Route::get('contact/InActive_contact/{id}', 'ContactController@InActive');
        //Route::get('contact/Active_contact/{id}', 'ContactController@Active');

         //---------locations routes---------------------------

         Route::get('/location/delete/{id}','LocationController@destroy');
         Route::get('/location/edit/{id}','LocationController@edit');
         Route::post('/location/edit/{id}','LocationController@update');
         Route::get('/location/create',  'LocationController@create');
         Route::get('location/', 'LocationController@index');
         Route::post('/location/store', 'LocationController@store');
         Route::get('location/InActive_location/{id}', 'LocationController@InActive');
         Route::get('location/Active_location/{id}', 'LocationController@Active');

        //---------experience routes---------------------------

         Route::get('/experience/delete/{id}','ExperienceController@destroy');
         Route::get('/experience/edit/{id}','ExperienceController@edit');
         Route::post('/experience/edit/{id}','ExperienceController@update');
         Route::get('/experience/create',  'ExperienceController@create');
         Route::get('experience/', 'ExperienceController@index');
         Route::post('/experience/store', 'ExperienceController@store');
         Route::get('experience/InActive_experience/{id}', 'ExperienceController@InActive');
         Route::get('experience/Active_experience/{id}', 'ExperienceController@Active');

        //---------title routes---------------------------

         Route::get('/title/delete/{id}','TitleController@destroy');
         Route::get('/title/edit/{id}','TitleController@edit');
         Route::post('/title/edit/{id}','TitleController@update');
         Route::get('/title/create',  'TitleController@create');
         Route::get('title/', 'TitleController@index');
         Route::post('/title/store', 'TitleController@store');
         Route::get('title/InActive_title/{id}', 'TitleController@InActive');
         Route::get('title/Active_title/{id}', 'TitleController@Active');

           //---------department routes---------------------------


         Route::get('/department/delete/{id}','DepartmentController@destroy');
         Route::get('/department/edit/{id}','DepartmentController@edit');
         Route::post('/department/edit/{id}','DepartmentController@update');
         Route::get('/department/create',  'DepartmentController@create');
         Route::get('department/', 'DepartmentController@index');
         Route::post('/department/store', 'DepartmentController@store');
         Route::get('department/InActive_department/{id}', 'DepartmentController@InActive');
        Route::get('department/Active_department/{id}', 'DepartmentController@Active');

        //---------hierarchy Details routes---------------------------

        Route::get('/hierarchyDetail/delete/{id}','HierarchyDetailController@destroy');
        Route::get('/hierarchyDetail/edit/{id}','HierarchyDetailController@edit');
        Route::post('/hierarchyDetail/edit/{id}','HierarchyDetailController@update');
        Route::get('/hierarchyDetail/create',  'HierarchyDetailController@create');
        Route::get('hierarchyDetail/', 'HierarchyDetailController@index');
        Route::post('/hierarchyDetail/store', 'HierarchyDetailController@store');

        Route::get('hierarchyDetail/InActive_hierarchyDetail/{id}', 'HierarchyDetailController@InActive');
       Route::get('hierarchyDetail/Active_hierarchyDetail/{id}', 'HierarchyDetailController@Active');

        //---------officers routes---------------------------

        Route::get('/officer/delete/{id}','OfficerController@destroy');
        Route::get('/officer/edit/{id}','OfficerController@edit');
        Route::post('/officer/edit/{id}','OfficerController@update');
        Route::get('/officer/create',  'OfficerController@create');
        Route::get('officer/', 'OfficerController@index');
        Route::post('/officer/store', 'OfficerController@store');

        Route::get('officer/InActive_officer/{id}', 'OfficerController@InActive');
       Route::get('officer/Active_officer/{id}', 'OfficerController@Active');

               //---------skills routes---------------------------

        Route::get('/skill/delete/{id}','SkillController@destroy');
        Route::get('/skill/edit/{id}','SkillController@edit');
        Route::post('/skill/edit/{id}','SkillController@update');
        Route::get('/skill/create',  'SkillController@create');
        Route::get('skill/', 'SkillController@index');
        Route::post('/skill/store', 'SkillController@store');

        Route::get('skill/InActive_skill/{id}', 'SkillController@InActive');
       Route::get('skill/Active_skill/{id}', 'SkillController@Active');

       
    });
//});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/index','HomeController@main');
Route::get('/','HomeController@main');

Route::get('/contact','HomeController@contact');
Route::get('/services','HomeController@services');
Route::get('/clients','HomeController@clients');
Route::get('/partners','HomeController@partners');
Route::get('/thanks','HomeController@thanks');
Route::get('/works','HomeController@works');
Route::get('/hierarchy','HomeController@hierarchy');
Route::get('/officer','HomeController@officers');
Route::post('/officer','OfficerController@store');
Route::get('/events','HomeController@events');
Route::get('event_gallery/{id}', 'HomeController@event_gallery');
Route::get('service_gallery/{id}', 'HomeController@service_gallery');
// Route::get('/job','HomeController@job');
Route::post('/jobs','HomeController@jobs');

Route::post('/newsletter','HomeController@Newsletter');

Route::post('/storeMessage','HomeController@store_message');
Route::get('/home', 'HomeController@home')->name('home');

Route::get('/test', 'HomeController@jobTotle');




