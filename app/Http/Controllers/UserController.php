<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller

{






    public function store(Request $request)
    {
        $request->validate([
            'file_path' => 'required|mimes:jpg'
        ]);

        $path = upload($request->file_path, '/images/content');


}
    }

