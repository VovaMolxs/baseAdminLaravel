<?php

namespace App\Http\Controllers\backend\authentications;

use App\Http\Controllers\Controller;

class ResetPasswordBasic extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('backend.content.authentications.auth-reset-password-basic', ['pageConfigs' => $pageConfigs]);
  }
}
