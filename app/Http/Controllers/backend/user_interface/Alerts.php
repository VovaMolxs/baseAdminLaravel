<?php

namespace App\Http\Controllers\backend\user_interface;

use App\Http\Controllers\Controller;

class Alerts extends Controller
{
  public function index()
  {
    return view('backend.content.user-interface.ui-alerts');
  }
}
