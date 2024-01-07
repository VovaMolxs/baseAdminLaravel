<?php

namespace App\Http\Controllers\backend\extended_ui;

use App\Http\Controllers\Controller;

class PerfectScrollbar extends Controller
{
  public function index()
  {
    return view('backend.content.extended-ui.extended-ui-perfect-scrollbar');
  }
}
