<?php
/**
 * Appliaction Route
 *
 * @author    Naufal Dinta Azmi (naufal@qasico.com)
 * @package   App\Http
 * @since     File available since Release 2.1
 * @copyright Copyright (c) 2018 Qasico.
 */

Route::get('/', function () {
    return redirect(route("menu"));
});

Route::group(['prefix' => 'a'], function () {
    Route::get('/menu', ['uses' => 'Menu\GetController@GetMenu', 'as' => 'menu']);
    Route::group(['prefix' => 'siswa'], function () {
        Route::post('/', ['uses' => 'Siswa\PostController@PostSiswa', 'as' => 'siswa::siswa']);
        Route::get('/', ['uses' => 'Siswa\GetController@GetSiswa', 'as' => 'siswa::siswa']);
    });
    Route::group(['prefix' => 'calculation'], function () {
        Route::post('/rangking', ['uses' => 'Calculation\PostController@PostCalculation', 'as' => 'calculation::calculation.rangking']);
        Route::get('/rangking', ['uses' => 'Calculation\GetController@GetCalculation', 'as' => 'calculation::calculation.rangking']);
    });
    Route::group(['prefix' => 'report'], function () {
        Route::get('/', ['uses' => 'Report\GetController@GetReport', 'as' => 'report::report']);
    });
});
