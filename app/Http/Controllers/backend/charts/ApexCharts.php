<?php

namespace App\Http\Controllers\backend\charts;

use App\Http\Controllers\Controller;

class ApexCharts extends Controller
{
  public function index()
  {
    return view('backend.content.charts.charts-apex');
  }
}
