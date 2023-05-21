<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function  subscribe(Request $request)
    {
  $user=User::where('id', Auth::user()->id)->update([
        'subscribe_id'=> $request->subscribe_id
  ]
  );

    }


public function discount(Request $request)
{   $user=User::query()->with('Subscribe')
    ->firstOrFail();
    $price=Book::query()->get(['price']);
   $use= User::find($user->User->subscribe_id);
     if ($use->subscribe_id == 3) {
     $price = $price * 0.9; // Apply 10% discount
    return $price;}
}
}



