<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
  protected $fillable = [
    'categories',
    'title',
    'long_title',
    'slug',
    'category_detail',
    'parent_id',
    'menu',
    'featured',
    'image',
  ];


  public function parent()
  {
    return $this->belongsTo(Category::class, 'parent_id');
  }
  public function children()
  {
    return $this->hasMany(Category::class, 'parent_id');
  }
  public function countChildCategory($id) {
    return Category::where('parent_id', $id)->count();
  }


}
