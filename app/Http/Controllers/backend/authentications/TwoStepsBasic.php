<?php

namespace App\Http\Controllers\backend\authentications;

use App\Http\Controllers\Controller;

class TwoStepsBasic extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('backend.content.authentications.auth-two-steps-basic', ['pageConfigs' => $pageConfigs]);
  }
}
