<?php

namespace App\Http\Controllers\backend\pages;

use App\Http\Controllers\Controller;

class AccountSettingsAccount extends Controller
{
  public function index()
  {
    return view('backend.content.pages.pages-account-settings-account');
  }
}