<?php

namespace App\Http\Controllers\backend\front_pages;

use App\Http\Controllers\Controller;

class Checkout extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'front'];
    return view('backend.content.front-pages.checkout-page', ['pageConfigs' => $pageConfigs]);
  }
}
