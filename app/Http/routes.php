<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/doctor/{id}', 'HomeController@show');
    /*
     * 用户注册登录
     * */
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
    Route::get('auth/password', 'Auth\PasswordController@password');
    Route::get('auth/password/forget', 'Auth\PasswordController@forget');

       /*修改密码*/
    Route::get('/reset', 'Auth\ResetController@index');
    Route::post('/reset/update', 'Auth\ResetController@update');

    Route::get('/captcha/{config?}', function (\Mews\Captcha\Captcha $captcha, $config = 'default') {
        return $captcha->create($config);
    });

    /*
     * 医院概况
    */
    Route::get('/articles', 'News\ArticlesController@index');

    /*
     * 医院新闻
     * */
    Route::group(['prefix' => 'news'], function () {
        Route::get('notice', 'News\NoticeController@index');
        Route::get('notice/{id}', 'News\NoticeController@show');
        Route::get('media_focus', 'News\FocusController@index');
        Route::get('media_focus/{id}', 'News\FocusController@show');
    });
    /*
     * 专家介绍
     */
    Route::get('/professor', 'Professor\ProfessorController@index');
    /*
     * 科室介绍
     */
    Route::group(['prefix' => 'department'], function () {
        Route::get('surgical', 'Departments\SurgicalController@index');//内科
        Route::get('surgical/{id}', 'Departments\SurgicalController@show');//内科
        Route::get('medicine', 'Departments\MedicineController@index');//外科
        Route::get('medicine/{id}', 'Departments\MedicineController@show');//外科

        Route::get('angiocarpy', 'Departments\AngiocarpyController@index');//心血管科
        Route::get('nerve', 'Departments\NerveController@index');//神经科
        Route::get('orthopaedic', 'Departments\OrthopaedicController@index');//骨科
        Route::get('urinary', 'Departments\UrinaryController@index');//泌尿外科
        Route::get('obstetrics', 'Departments\ObstetricsController@index');//产科
        Route::get('diagnose', 'Departments\DiagnoseController@index');//产前诊断科
        Route::get('pediatric', 'Departments\PediatricController@index');//儿科
        Route::get('chinese_medicine', 'Departments\ChineseMedicineController@index');//中医科
    });
    /*
     * 就诊流程
     * */
    Route::get('/outpatient', 'Process\OutpatientController@index');
    Route::get('/emergency', 'Process\EmergencyController@index');
    Route::get('/time', 'Process\TimesController@index');
    Route::get('/needs', 'Process\NeedsController@index');

    /*
     * 健康知道
     * */
    Route::get('/health', 'Health\HealthController@index');
    Route::get('/health/{id}', 'Health\HealthController@show');

    /*
     * 联系我们
     * */
    Route::get('/contact', 'ContactController@index');
});


Route::group(['namespace' => 'Backend', 'prefix' => 'backend', 'middleware' => 'api'], function () {

    Route::post('login', 'AuthController@postLogin');
    Route::post('logout', 'AuthController@postLogout');
    Route::post('upload', 'CommonController@upload');
    Route::group(['middleware' => []], function () {
        Route::get('dashboard', 'DashboardController@index');
        Route::get('admin_info', 'AdminController@getAdminByToken');

        Route::resource('admin', 'AdminController');
        Route::resource('dept', 'DeptController');
        Route::resource('doctor', 'DoctorController');
        Route::resource('category', 'CategoryController');
        Route::resource('post', 'PostController');
        Route::resource('user', 'UserController');
        Route::resource('tag', 'TagController');

    });

});

Route::post('upload_img', 'Backend\CommonController@uploadImg');