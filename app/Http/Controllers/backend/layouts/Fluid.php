<?php

namespace App\Http\Controllers\backend\layouts;

use App\Http\Controllers\Controller;

class Fluid extends Controller
{
  public function index()
  {
    $pageConfigs = ['contentLayout' => 'wide'];
    return view('backend.content.layouts-example.layouts-fluid',['pageConfigs'=> $pageConfigs]);
  }
}
