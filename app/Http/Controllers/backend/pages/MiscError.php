<?php

namespace App\Http\Controllers\backend\pages;

use App\Http\Controllers\Controller;

class MiscError extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('backend.content.pages.pages-misc-error', ['pageConfigs' => $pageConfigs]);
  }
}
