<?php

namespace App\Http\Controllers\backend\form_elements;

use App\Http\Controllers\Controller;

class Editors extends Controller
{
  public function index()
  {
    return view('backend.content.form-elements.forms-editors');
  }
}
