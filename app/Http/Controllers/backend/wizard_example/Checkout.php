<?php

namespace App\Http\Controllers\backend\wizard_example;

use App\Http\Controllers\Controller;

class Checkout extends Controller
{
  public function index()
  {
    return view('backend.content.wizard-example.wizard-ex-checkout');
  }
}
