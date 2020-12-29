<?php

use Illuminate\Support\Facades\Route;

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

//ERROR

Route::fallback(function() {
    return response(view('404'), 404);
 });

//USER

Route::get('/', [
        'uses' => 'App\Http\Controllers\MainController@home', 'as'   => 'home'
    ]);

Route::get('/association', [
        'uses' => 'App\Http\Controllers\AssociationController@association', 'as' => 'association'
    ]);

Route::get('/egality', [
    'as' => 'egality', 'uses' => 'App\Http\Controllers\EgalityController@egality'
]);

Route::get('/actions', [
    'as' => 'actions', 'uses' => 'App\Http\Controllers\ActionsController@actions'
]);

Route::get('/actualities', [
    'as' => 'actualities', 'uses' => 'App\Http\Controllers\ActualitiesController@actualities'
]);

Route::get('/join-us', [
    'as' => 'join-us', 'uses' => 'App\Http\Controllers\JoinUsController@joinUs'
]);

// Route::post('/join-us', [
//     'as' => 'contact', 'uses' => 'App\Http\Controllers\JoinUsController@contact'
// ]);

Route::get('/donation', [
    'as' => 'donation', 'uses' => 'App\Http\Controllers\DonationController@donation'
]);

//==========================
//ADMIN
//==========================

Route::get('/admin/home', [
    'as' => 'adminHome', 'uses' => 'App\Http\Controllers\MainController@adminHome',
])->middleware('auth');

//Home

Route::get('/admin/home-modify', [
    'as' => 'adminHomeModify', 'uses' => 'App\Http\Controllers\MainController@adminHomeModify'
])->middleware('auth');

Route::get('/admin/home/{id}', [
    'as' => 'adminHomeSection', 'uses' => 'App\Http\Controllers\MainController@adminHomeSection'
])->middleware('auth');

Route::post('/admin/home/{id}', [
    'as' => 'adminHomeSectionEdit', 'uses' => 'App\Http\Controllers\MainController@adminHomeSectionEdit'
])->middleware('auth');

//Egality

Route::get('/admin/egality', [
    'as' => 'adminEgality', 'uses' => 'App\Http\Controllers\EgalityController@adminEgality'
])->middleware('auth');

Route::get('/admin/egality/{id}', [
    'as' => 'adminEgalitySection', 'uses' => 'App\Http\Controllers\EgalityController@adminEgalitySection'
])->middleware('auth');

Route::post('/admin/egality/{id}', [
    'as' => 'adminEgalitySectionEdit', 'uses' => 'App\Http\Controllers\EgalityController@adminEgalitySectionEdit'
])->middleware('auth');

//Actions

Route::get('/admin/actions', [
    'as' => 'adminActions', 'uses' => 'App\Http\Controllers\ActionsController@adminActions'
])->middleware('auth');

Route::get('/admin/actions/{id}', [
    'as' => 'adminActionsSection', 'uses' => 'App\Http\Controllers\ActionsController@adminActionsSection'
])->middleware('auth');

Route::post('/admin/actions/{id}', [
    'as' => 'adminActionsSectionEdit', 'uses' => 'App\Http\Controllers\ActionsController@adminActionsSectionEdit'
])->middleware('auth');

//Actualities

Route::get('/admin/actualities', [
    'as' => 'adminActualities', 'uses' => 'App\Http\Controllers\ActualitiesController@adminActualities'
])->middleware('auth');

Route::get('/admin/actualities/create', [
    'as' => 'adminActualitiesCreate', 'uses' => 'App\Http\Controllers\ActualitiesController@adminActualitiesCreate'
])->middleware('auth');

Route::post('/admin/actualities/create', [
    'as' => 'adminActualitiesCreate', 'uses' => 'App\Http\Controllers\ActualitiesController@adminActualitiesAdd'
])->middleware('auth');

Route::get('/admin/actualities/{id}', [
    'as' => 'adminActualitiesSection', 'uses' => 'App\Http\Controllers\ActualitiesController@adminActualitiesSection'
])->middleware('auth');

Route::post('/admin/actualities/{id}', [
    'as' => 'adminActualitiesSectionEdit', 'uses' => 'App\Http\Controllers\ActualitiesController@adminActualitiesSectionEdit'
])->middleware('auth');

Route::post('/admin/actualities/delete/{id}', [
    'as' => 'adminActualitiesDelete', 'uses' => 'App\Http\Controllers\ActualitiesController@adminActualitiesDelete'
])->middleware('auth');

//JoinUS

Route::get('/admin/join-us', [
    'as' => 'adminJoinUs', 'uses' => 'App\Http\Controllers\JoinUsController@adminJoinUs'
])->middleware('auth');

Route::get('/admin/join-us/{id}', [
    'as' => 'adminJoinUsSection', 'uses' => 'App\Http\Controllers\JoinUsController@adminJoinUsSection'
])->middleware('auth');

Route::post('/admin/join-us/{id}', [
    'as' => 'adminJoinUsSectionEdit', 'uses' => 'App\Http\Controllers\JoinUsController@adminJoinUsSectionEdit'
])->middleware('auth');

// CONNECT

Route::get('/admin/login', [
    'as' => 'adminLogIn', 'uses' => 'App\Http\Controllers\ConnexionController@adminLogIn'
]);

Route::post('/admin/login', [
    'as' => 'adminLogInForm', 'uses' => 'App\Http\Controllers\ConnexionController@adminLoginForm'
]);

Route::get('/admin/logout', [
    'as' => 'adminLogOut', 'uses' => 'App\Http\Controllers\ConnexionController@adminLogOut'
]);
