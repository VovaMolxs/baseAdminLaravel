<?php

namespace App\Http\Controllers\backend\icons;

use App\Http\Controllers\Controller;

class FontAwesome extends Controller
{
  public function index()
  {
    return view('backend.content.icons.icons-font-awesome');
  }
}
