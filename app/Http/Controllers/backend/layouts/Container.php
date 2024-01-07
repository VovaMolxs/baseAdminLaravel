<?php

namespace App\Http\Controllers\backend\layouts;

use App\Http\Controllers\Controller;

class Container extends Controller
{
  public function index()
  {
    $pageConfigs = ['contentLayout' => 'compact'];
    return view('backend.content.layouts-example.layouts-container',['pageConfigs'=> $pageConfigs]);
  }
}
