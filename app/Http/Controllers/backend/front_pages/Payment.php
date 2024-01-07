<?php

namespace App\Http\Controllers\backend\front_pages;

use App\Http\Controllers\Controller;

class Payment extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'front'];
    return view('backend.content.front-pages.payment-page', ['pageConfigs' => $pageConfigs]);
  }
}
