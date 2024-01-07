<?php

namespace App\Http\Controllers\backend\apps;

use App\Http\Controllers\Controller;

class UserViewBilling extends Controller
{
  public function index()
  {
    return view('backend.content.apps.app-user-view-billing');
  }
}
