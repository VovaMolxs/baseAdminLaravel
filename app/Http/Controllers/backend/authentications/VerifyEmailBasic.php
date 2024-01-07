<?php

namespace App\Http\Controllers\backend\authentications;

use App\Http\Controllers\Controller;

class VerifyEmailBasic extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('backend.content.authentications.auth-verify-email-basic', ['pageConfigs' => $pageConfigs]);
  }
}
