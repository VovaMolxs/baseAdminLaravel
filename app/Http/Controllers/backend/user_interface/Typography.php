<?php

namespace App\Http\Controllers\backend\user_interface;

use App\Http\Controllers\Controller;

class Typography extends Controller
{
  public function index()
  {
    return view('backend.content.user-interface.ui-typography');
  }
}