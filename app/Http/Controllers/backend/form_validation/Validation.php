<?php

namespace App\Http\Controllers\backend\form_validation;

use App\Http\Controllers\Controller;

class Validation extends Controller
{
  public function index()
  {
    return view('backend.content.form-validation.form-validation');
  }
}
