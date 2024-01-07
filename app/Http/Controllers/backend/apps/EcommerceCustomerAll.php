<?php

namespace App\Http\Controllers\backend\apps;

use App\Http\Controllers\Controller;

class EcommerceCustomerAll extends Controller
{
  public function index()
  {
    return view('backend.content.apps.app-ecommerce-customer-all');
  }
}
