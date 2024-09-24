<?php

namespace App\Http\Controllers;

use Dotenv\Parser\Value;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index(){
    
    return view('home');
  }

  public function newNote(){
    echo "estou a criar uma nova nota";
  }
}
