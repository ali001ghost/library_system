<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


        protected $fillable = ['name', 'file_path' ,'sub_category_id','uploader_id','price','user_id'];

        public function user()
        {
            return $this->belongsTo(User::class,'user_id');
        }

        public function subcategory()
        {
            return $this->belongsTo(SubCategory::class,'subscribe_id');
        }




    // public function getDiscountedPriceAttribute()
    // {
    //     $discountedPrice = $this->price;
    //     if ($this->user->subscribe_id == 3) {
    //         $discountedPrice *= 0.85; // Apply 15% discount
    //     }
    //     return $discountedPrice;
    // }
}
