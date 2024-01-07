<?php

namespace App\Http\Controllers\backend\form_wizard;

use App\Http\Controllers\Controller;

class Icons extends Controller
{
  public function index()
  {
    return view('backend.content.form-wizard.form-wizard-icons');
  }
}
