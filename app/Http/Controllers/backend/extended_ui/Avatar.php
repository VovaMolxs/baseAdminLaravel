<?php

namespace App\Http\Controllers\backend\extended_ui;

use App\Http\Controllers\Controller;

class Avatar extends Controller
{
  public function index()
  {
    return view('backend.content.extended-ui.extended-ui-avatar');
  }
}
