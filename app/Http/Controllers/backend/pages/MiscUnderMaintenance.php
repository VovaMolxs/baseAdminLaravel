<?php

namespace App\Http\Controllers\backend\pages;

use App\Http\Controllers\Controller;

class MiscUnderMaintenance extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('backend.content.pages.pages-misc-under-maintenance', ['pageConfigs' => $pageConfigs]);
  }
}
