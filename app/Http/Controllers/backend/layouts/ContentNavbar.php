<?php

namespace App\Http\Controllers\backend\layouts;

use App\Http\Controllers\Controller;

class ContentNavbar extends Controller
{
  public function index()
  {
    return view('backend.content.layouts-example.layouts-content-navbar');
  }
}
