<?php

namespace App\Http\Controllers\backend\apps;

use App\Http\Controllers\Controller;

class InvoicePreview extends Controller
{
  public function index()
  {
    return view('backend.content.apps.app-invoice-preview');
  }
}
