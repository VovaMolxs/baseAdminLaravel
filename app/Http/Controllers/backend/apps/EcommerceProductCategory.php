<?php

namespace App\Http\Controllers\backend\apps;

use App\Http\Controllers\Controller;

class EcommerceProductCategory extends Controller
{
  public function index()
  {
    return view('backend.content.apps.app-ecommerce-category-list');
  }
}
