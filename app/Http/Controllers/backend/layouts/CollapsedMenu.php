<?php

namespace App\Http\Controllers\backend\layouts;

use App\Http\Controllers\Controller;

class CollapsedMenu extends Controller
{
  public function index()
  {

    $pageConfigs = ['menuCollapsed' => true];

    return view('backend.content.layouts-example.layouts-collapsed-menu',['pageConfigs'=> $pageConfigs]);
  }
}
