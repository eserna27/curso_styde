<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

      if (request()->has('empty')){
        $users = [];
      }
      else
      {
        $users = [
          "Lulu",
          "emmanuel",
          "daniela"
        ];
      }


      $title = "Listado de usuarios";

      return view("users.index", compact('title', 'users'));
    }

    public function show($id)
    {
      return view("users.show", [
        'id' => $id
      ]);
    }

    public function create()
    {
      return 'Crear nuevo usuario';
    }
}
