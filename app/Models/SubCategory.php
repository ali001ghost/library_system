<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable=['name','category_id'];

    public function subcategory()
    {
        return $this->belongsTo(Category::class,);
    }

    public function book()
    {
        return $this->hasMany(Book::class,);
    }
}
