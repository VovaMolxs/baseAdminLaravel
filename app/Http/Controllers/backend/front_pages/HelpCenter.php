<?php

namespace App\Http\Controllers\backend\front_pages;

use App\Http\Controllers\Controller;

class HelpCenter extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'front'];
    return view('backend.content.front-pages.help-center-landing', ['pageConfigs' => $pageConfigs]);
  }
}
