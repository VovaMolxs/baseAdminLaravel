<?php

namespace App\Http\Controllers\backend\form_layouts;

use App\Http\Controllers\Controller;

class StickyActions extends Controller
{
  public function index()
  {
    return view('backend.content.form-layout.form-layouts-sticky');
  }
}
