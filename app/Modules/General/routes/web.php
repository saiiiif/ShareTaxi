<?php

Route::group(['module' => 'General', 'middleware' => ['web'], 'namespace' => 'App\Modules\General\Controllers'], function() {

    Route::get('/', 'GeneralController@showHome')->name('showHome');
    Route::get('/legal', 'GeneralController@showLegalMentions')->name('showLegalMentions');
    Route::get('/faq', 'GeneralController@showFAQ')->name('showFAQ');
    Route::get('/conditions', 'GeneralController@showConditions')->name('showConditions');
    Route::get('/comment-ca-fonctionne', 'GeneralController@showHowItWorks')->name('showHowItWorks');

    Route::get('/contact', 'GeneralController@showContact')->name('showContact');
    Route::post('/contact', 'GeneralController@handleContact')->name('handleContact');

    Route::get('/manage/topFeatured/{type}', 'GeneralController@handleTopFeaturedPhotographs')->name('handleTopFeaturedPhotographs');

});
