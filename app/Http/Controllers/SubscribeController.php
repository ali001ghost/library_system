<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    }}
