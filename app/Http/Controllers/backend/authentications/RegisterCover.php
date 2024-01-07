<?php

namespace App\Http\Controllers\backend\authentications;

use App\Http\Controllers\Controller;

class RegisterCover extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('backend.content.authentications.auth-register-cover', ['pageConfigs' => $pageConfigs]);
  }
}
