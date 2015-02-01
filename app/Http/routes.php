<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//navigation
Route::get( '/',					[ 'as' => 'index',		'uses' => 'NavigationController@showIndex'		]);
Route::get( 'kurser', 				[ 'as' => 'courses',		'uses' => 'NavigationController@showCourses'		]);
Route::get( 'login', 				[ 'as' => 'login',		'uses' => 'NavigationController@showLogin'		]);
Route::get( 'opret-bruger',			[ 'as' => 'createUser',		'uses' => 'NavigationController@showCreateUser'		]);
Route::get( 'min-menu',			[ 'as' => 'menu',		'uses' => 'NavigationController@showMenu'		]);

//courses	
Route::get( 'kurser/{category}',		[ 'as' => 'category', 		'uses' => 'NavigationController@showCategory'		]);
Route::get( 'kursus/{course}',		[ 'as' => 'course', 		'uses' => 'NavigationController@showCourse'		]);
Route::get( 'kursus/{course}/{lesson}',	[ 'as' => 'lesson', 		'uses' => 'NavigationController@showLesson'		]);
	
//dashboard
Route::get( 'mine-kurser', 			[ 'as' => 'myCourses',	'uses' => 'NavigationController@showMyCourses'		]);
Route::get( 'udgivne-kurser',			[ 'as' => 'teachingCourses',	'uses' => 'NavigationController@showTeachingCourses'	]);
Route::get( 'opret-kursus', 			[ 'as' => 'createCourse',	'uses' => 'NavigationController@showCreateCourse'	]);
Route::get( 'ret-profil', 			[ 'as' => 'editProfile',		'uses' => 'NavigationController@showEditProfile'		]);
Route::get( 'min-ønskeliste',			[ 'as' => 'wishlist',		'uses' => 'NavigationController@showWishlist'		]);

//footer
Route::get( 'om', 				[ 'as' => 'about',		'uses' => 'NavigationController@showAbout'		]);
Route::get( 'faq', 				[ 'as' => 'faq',			'uses' => 'NavigationController@showFaq'			]);
Route::get( 'support', 				[ 'as' => 'support',		'uses' => 'NavigationController@showSupport'		]);
Route::get( 'kontakt', 				[ 'as' => 'contact',		'uses' => 'NavigationController@showContact'		]);

