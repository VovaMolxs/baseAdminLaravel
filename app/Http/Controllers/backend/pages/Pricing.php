<?php

namespace App\Http\Controllers\backend\pages;

use App\Http\Controllers\Controller;

class Pricing extends Controller
{
  public function index()
  {
    return view('backend.content.pages.pages-pricing');
  }
}
