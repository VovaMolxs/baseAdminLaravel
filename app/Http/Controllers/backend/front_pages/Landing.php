<?php

namespace App\Http\Controllers\backend\front_pages;

use App\Http\Controllers\Controller;

class Landing extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'front'];
    return view('backend.content.front-pages.landing-page', ['pageConfigs' => $pageConfigs]);
  }
}
