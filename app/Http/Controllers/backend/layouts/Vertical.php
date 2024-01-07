<?php

namespace App\Http\Controllers\backend\layouts;

use App\Http\Controllers\Controller;

class Vertical extends Controller
{
  public function index()
  {

    $pageConfigs = ['myLayout' => 'vertical'];

    return view('backend.content.dashboard.dashboards-analytics', ['pageConfigs' => $pageConfigs]);
  }
}
