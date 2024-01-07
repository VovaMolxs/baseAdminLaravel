<?php

namespace App\Http\Controllers\backend\dashboard;

use App\Http\Controllers\Controller;

class Analytics extends Controller
{
  public function index()
  {
    return view('backend.content.dashboard.dashboards-analytics');
  }
}
