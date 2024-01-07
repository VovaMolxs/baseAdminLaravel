<?php

namespace App\Http\Controllers\backend\layouts;

use App\Http\Controllers\Controller;

class WithoutNavbar extends Controller
{
  public function index()
  {
    return view('backend.content.layouts-example.layouts-without-navbar');
  }
}
