<?php

namespace App\Http\Controllers\backend\apps;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class EcommerceProductCategory extends Controller
{
  public function list()
  {


    return view('backend.content.apps.app-ecommerce-category-list');
  }

  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {

    $categories = Category::where('parent_id', 1)->get();


    return response()->json([
      'data' => $categories,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
