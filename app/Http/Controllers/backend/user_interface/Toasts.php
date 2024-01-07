<?php

namespace App\Http\Controllers\backend\user_interface;

use App\Http\Controllers\Controller;

class Toasts extends Controller
{
  public function index()
  {
    return view('backend.content.user-interface.ui-toasts');
  }
}
