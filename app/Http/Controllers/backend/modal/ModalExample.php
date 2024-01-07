<?php

namespace App\Http\Controllers\backend\modal;

use App\Http\Controllers\Controller;

class ModalExample extends Controller
{
  public function index()
  {
    return view('backend.content.modal.modal-examples');
  }
}
