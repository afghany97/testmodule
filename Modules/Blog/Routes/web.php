<?php


Route::domain('blog.test.local')->group(function () {
    Route::get('/', function () {
        return "blog in test";
    });
});
