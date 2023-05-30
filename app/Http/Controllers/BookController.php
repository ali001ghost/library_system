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
                'file_path' => 'required|mimes:pdf',
                'image'=> 'required|mimes:jpg,png'

            ]);

            $path = upload($request->file_path, '/books/content');
            $image = upload($request->image, '/books/image');


           $result = Book::query()->create([
                'name' => $request->name,
                'file_path' => $path,
                'uploader_id'=>Auth::user()->id,
                'sub_category_id'=>$request->sub_category_id,
                'price'=>$request->price,
                'author'=>$request->author,

                'review'=>$request->review,
                'rate'=>$request->rate,
                'pagenumber'=>$request->pagenumber,
                'amount'=>$request->amount,
                'image'=>$image

            ]);

            return response()->json(['success' => 'File uploaded successfully.',
        'data' => $result ]);
        }

        public function index()
    {
        $us= User::all();
        $books = Book::all();

   return response()->json ([
    'response'=>'success',
    'data'=>$books]);
}
public function get(Request $request  )
{

    $books = Book::query()->where('sub_category_id', $request->sub_category_id)->get();
return response()->json ([
    'response'=>'success',
    'data'=>$books]);
}

}

