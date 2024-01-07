<?php

namespace App\Http\Controllers\backend\pages;

use App\Http\Controllers\Controller;

class AccountSettingsBilling extends Controller
{
  public function index()
  {
    return view('backend.content.pages.pages-account-settings-billing');
  }
}
