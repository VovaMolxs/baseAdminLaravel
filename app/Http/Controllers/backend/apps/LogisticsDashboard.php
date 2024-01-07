<?php

namespace App\Http\Controllers\backend\apps;

use App\Http\Controllers\Controller;

class LogisticsDashboard extends Controller
{
  public function index()
  {
    return view('backend.content.apps.app-logistics-dashboard');
  }
}
