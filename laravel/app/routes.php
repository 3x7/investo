<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// common widgets
function getCommonWidgets()
{
    $widgets['nav']     = View::make('common.navigation');
    $widgets['footer']  = View::make('common.footer');

    return $widgets;
}


Route::get('/',
    function () {
        $widgets = getCommonWidgets();
        return View::make('home')->with('widgets', $widgets);
    }
);

Route::get('/about_us',
    function () {
        $widgets = getCommonWidgets();
        return View::make('about_us')->with('widgets', $widgets);
    }
);

Route::get('/our_services',
    function () {
        $widgets = getCommonWidgets();
        return View::make('our_services')->with('widgets', $widgets);
    }
);

Route::get('/testimonials',
    function () {
        $widgets = getCommonWidgets();
        return View::make('testimonials')->with('widgets', $widgets);
    }
);

Route::get('/contact_us',
    function () {
        $widgets = getCommonWidgets();
        return View::make('contact_us')->with('widgets', $widgets);
    }
);