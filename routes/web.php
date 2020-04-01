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

Route::get(
    '/',
    function () {

        return view('welcome', ['users' => App\User::all()]);
    }
);

Route::get(
    '/workshops',
    function () {

        $workshops = DB::table('workshops')

            ->select('workshops.workshop_name', 'workshops.description', 'workshops.time', 'workshops.date')

            ->get();

        return view('workshops', ['workshops' => $workshops]);
    }
);
