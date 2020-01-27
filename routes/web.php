<?php

Route::redirect('/', '/posts');

Route::resource('posts', 'PostController');
