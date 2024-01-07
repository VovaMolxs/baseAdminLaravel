<?php

namespace App\Http\Controllers\backend\apps;

use App\Http\Controllers\Controller;

class EcommerceSettingsLocations extends Controller
{
  public function index()
  {
    return view('backend.content.apps.app-ecommerce-settings-locations');
  }
}
