<?php

namespace App\Http\Controllers\backend\authentications;

use App\Http\Controllers\Controller;

class LoginCover extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('backend.content.authentications.auth-login-cover', ['pageConfigs' => $pageConfigs]);
  }
}
