<?php

namespace App\Http\Controllers\backend\maps;

use App\Http\Controllers\Controller;

class Leaflet extends Controller
{
  public function index()
  {
    return view('backend.content.maps.maps-leaflet');
  }
}
