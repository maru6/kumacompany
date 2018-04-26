<?php

Route::get('/', 'PagesController@root')->name('root');

Route::get('message', 'MessagesController@message')->name('message');
