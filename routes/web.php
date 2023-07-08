<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\AuthentificateController@check_authentificate');
Route::get('abonnement','App\Http\Controllers\AuthentificateController@abonne')->name('abonne');
Route::get('ecole','App\Http\Controllers\AuthentificateController@ecole')->name('ecole');
Route::get('pack_des_offres','App\Http\Controllers\AuthentificateController@gestion_des_offres')->name('pack');
Route::get('dashboard_bbcar','App\Http\Controllers\AuthentificateController@dashboad')->name('dashboadbbcar');

Route::get('offres_mensuelle','App\Http\Controllers\AuthentificateController@gestion_des_offres');
Route::post('ajouter_offre','App\Http\Controllers\AuthentificateController@ajout_offre');
Route::get('edite/{id}','App\Http\Controllers\AuthentificateController@edit')->name('editer');
Route::put('update/{id}','App\Http\Controllers\AuthentificateController@update')->name('offre.update');
Route::delete('supprimer/{id}','App\Http\Controllers\AuthentificateController@suppression')->name('supprimer');
Route::get('deconnecter','App\Http\Controllers\AuthentificateController@logout')->name('deconnexion');
Route::POST('sendMail','App\Http\Controllers\AuthentificateController@notificate')->name('envoieMail');
Route::get('infoMail','App\Http\Controllers\AuthentificateController@newmail')->name('gestion_mail');
Route::get('/notification', function () {
        return view('formail');
    });

Route::get('ajouter_une_offre', function(){
    return view('ajout_offre');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});
