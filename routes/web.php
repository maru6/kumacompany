<?php

Route::get('/', 'PagesController@root')->name('root');

Route::get('message', 'MessagesController@message')->name('message');

Route::post('message', 'MessagesController@store')->name('messages.store');
