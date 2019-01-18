<?php

Route::get("/", function (){
  return "Hola";
});

Route::get("/usuarios", "UserController@index")
  ->name('users.index');

Route::get("/usuarios/nuevo", "UserController@create")
  ->name('users.create');

Route::get("/usuarios/{user}", "UserController@show")
  ->where("user", "[0-9]+")
  ->name('users.show');

Route::get("/saludo/{name}/{nickname?}", "WelcomeController");
