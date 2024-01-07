<?php

namespace App\Http\Controllers\backend\layouts;

use App\Http\Controllers\Controller;

class Horizontal extends Controller
{
  public function index()
  {

    $pageConfigs = ['myLayout' => 'horizontal'];

    return view('backend.content.dashboard.dashboards-analytics',['pageConfigs'=> $pageConfigs]);
  }
}
