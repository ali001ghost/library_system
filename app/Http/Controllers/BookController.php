<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{

        public function upload(Request $request)
        {
            $request->validate([
                'file' => 'required|mimes:pdf'
            ]);

            $name = $request->file->getClientOriginalName();
            $path = $request->file('file')->store('files');

            Book::create([
                'name' => $name,
                'file_path' => $path,
                'uploader_id'=>Auth::user()->id,
                 'sub_category_id'=>$request->sub_category_id,
                 'price'=>$request->price,
     'user_id'=>Auth::user()->id

            ]);

            return response()->json(['success' => 'File uploaded successfully.']);
        }

        public function index()
    {
        $us= User::all();
        $books = Book::all();
        foreach ($books as $book) {
            $user = Auth::user();
            if ($user->subscribe_id == 2) {
                $book->append = $book->price - ($book->price * 0.20); $book;

            }
              elseif ($user->subscribe_id == 3) {
                 $book->append = $book->price - ($book->price * 0.35); $book;
           
            //     // $book->save();
            }
             elseif ($user->subscribe_id == 1) {
                $book->append = $book->price - ($book->price); $book;

    }}
   // $book->save();   }
    return response()->json($books);
}
}

//     public function index()
//     {
//         Book::whereHas('user', function ($query) {
//             $query->where('subscribe_id', 3);
//         })->update([
//             'price' => DB::raw('price * 0.85'),
//         ]);
//         $books = Book::all();
//         return response()->json($books);
//     }

//
