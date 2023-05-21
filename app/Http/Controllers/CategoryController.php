<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function GetSub(Request $request )
    {
        $sub=SubCategory::query()->where('category_id', $request->category_id)->get();
        return response()->json([
            'message'=>'success',
            'sub_categories'=>$sub,
        ],200);;
    }
    public function Getcategory(Request $request )
    {
        $cat=Category::query()->get();
return response()->json([
    'message'=>'success',
    'categories'=>$cat,
],200);
    }
}
