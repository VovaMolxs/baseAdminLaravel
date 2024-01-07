<?php

namespace App\Http\Controllers\backend\layouts;

use App\Http\Controllers\Controller;

class Blank extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('backend.content.layouts-example.layouts-blank', ['pageConfigs' => $pageConfigs]);
  }
}
