<?php

Route::get("/", function (){
  return "Hola";
});

Route::get("/usuarios", function(){
  return "usarios";
});

Route::get("/usuarios/nuevo", function(){
  return "nuevo";
});

Route::get("/usuarios/{id}", function($id){
  return "Mostrando detalle del usuario: {$id}";
});

Route::get("/saludo/{name}/{last_name}", function($name, $last_name){
  return "Hola {$name} {$last_name}";
});
