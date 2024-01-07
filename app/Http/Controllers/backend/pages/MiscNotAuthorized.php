<?php

namespace App\Http\Controllers\backend\pages;

use App\Http\Controllers\Controller;

class MiscNotAuthorized extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('backend.content.pages.pages-misc-not-authorized', ['pageConfigs' => $pageConfigs]);
  }
}
