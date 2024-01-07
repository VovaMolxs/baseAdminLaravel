<?php

namespace App\Http\Controllers\backend\extended_ui;

use App\Http\Controllers\Controller;

class SweetAlert extends Controller
{
  public function index()
  {
    return view('backend.content.extended-ui.extended-ui-sweetalert2');
  }
}
