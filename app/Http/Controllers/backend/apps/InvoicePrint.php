<?php

namespace App\Http\Controllers\backend\apps;

use App\Http\Controllers\Controller;

class InvoicePrint extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('backend.content.apps.app-invoice-print', ['pageConfigs' => $pageConfigs]);
  }
}
