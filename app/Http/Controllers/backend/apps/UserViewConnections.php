<?php

namespace App\Http\Controllers\backend\apps;

use App\Http\Controllers\Controller;

class UserViewConnections extends Controller
{
  public function index()
  {
    return view('backend.content.apps.app-user-view-connections');
  }
}
