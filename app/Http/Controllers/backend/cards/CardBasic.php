<?php

namespace App\Http\Controllers\backend\cards;

use App\Http\Controllers\Controller;

class CardBasic extends Controller
{
  public function index()
  {
    return view('backend.content.cards.cards-basic');
  }
}
