<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke($name, $nickname){
      $name = ucfirst($name);

      if ($nickname) {
        return "Hola {$name}, su apodo: {$nickname }";
      } else {
        return "Hola {$name}";
      }
    }
}
