<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $mahsulotlar=[
        ["name"=>'Nokia',"price"=> 111],
        ["name"=>'Nokia3310',"price"=>991],
    ];
    return view('dashboard',compact("mahsulotlar"));
});
