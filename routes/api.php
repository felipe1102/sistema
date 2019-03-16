<?php

use Illuminate\Http\Request;


/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/', function () {
    return response()->json(['message' => 'API teste', 'created by' => 'Felipe Moreira de castro']);
});
Route::get('login', 'ApiControllerAdm@login');
Route::post('register', 'ApiControllerAdm@register');
