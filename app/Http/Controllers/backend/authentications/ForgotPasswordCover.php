<?php

namespace App\Http\Controllers\backend\authentications;

use App\Http\Controllers\Controller;

class ForgotPasswordCover extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('backend.content.authentications.auth-forgot-password-cover', ['pageConfigs' => $pageConfigs]);
  }
}
