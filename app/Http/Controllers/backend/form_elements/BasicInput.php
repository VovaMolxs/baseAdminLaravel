<?php

namespace App\Http\Controllers\backend\form_elements;

use App\Http\Controllers\Controller;

class BasicInput extends Controller
{
  public function index()
  {
    return view('backend.content.form-elements.forms-basic-inputs');
  }
}
