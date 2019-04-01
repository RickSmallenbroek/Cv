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

// Frontend Routes...

Route::get('/', 'HomeController@index');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


// Backend Routes...
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', 'admin\DashboardController@index')->name('dashboard');
    Route::get('/settings', 'Admin\SettingsController@index')->name('settings');
    Route::post('/settings/editLinks', 'Admin\SettingsController@editActiveLinks')->name('editLinks');

    Route::get('/edit/About', 'Admin\EditPageController@showEditAbout')->name('showEditAbout');
    Route::post('/edit/About', 'Admin\EditPageController@editAboutPage')->name('editAboutPage');
    Route::get('/edit/Experience', 'Admin\EditPageController@editExperiencePage')->name('editExperiencePage');
    Route::get('/edit/Education', 'Admin\EditPageController@editEducationPage')->name('editEducationPage');
    Route::get('/edit/Skills', 'Admin\EditPageController@editSkillsPage')->name('editSkillsPage');
    Route::get('/edit/Interests', 'Admin\EditPageController@editInterestsPage')->name('editInterestsPage');
    Route::get('/edit/Awards', 'Admin\EditPageController@editAwardsPage')->name('editAwardsPage');
});
