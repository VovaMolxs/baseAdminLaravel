<?php

namespace App\Http\Controllers\backend\tables;

use App\Http\Controllers\Controller;

class DatatableBasic extends Controller
{
  public function index()
  {
    return view('backend.content.tables.tables-datatables-basic');
  }
}
