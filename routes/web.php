<?php

Route::get('/', function () {

    dd(
        config('profit.x_user_name'),
        hash(
            'gost',
            config('profit.x_password')
        )
    );


});
