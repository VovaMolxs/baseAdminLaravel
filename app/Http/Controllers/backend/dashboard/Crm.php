<?php

namespace App\Http\Controllers\backend\dashboard;

use App\Http\Controllers\Controller;

class Crm extends Controller
{
  public function index()
  {
    return view('backend.content.dashboard.dashboards-crm');
  }
}
