<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Book extends Model
{
    use HasFactory;


        protected $fillable = ['name', 'file_path' ,'sub_category_id','uploader_id','price','user_id','author','review','pagenumber','rate','amount','image'];

        protected $appends=['newPrice'];

    public function getNewPriceAttribute()
    {
        $user = Auth::user();
        if ($user->subscribe_id == 2) {
            return $this->price - ($this->price * 0.20);

        }
          elseif ($user->subscribe_id == 3) {
             return $this->price - ($this->price * 0.35);

        //     // $this->save();
        }
         elseif ($user->subscribe_id == 1) {
            return $this->price;
         }
         return 0;
    }

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
