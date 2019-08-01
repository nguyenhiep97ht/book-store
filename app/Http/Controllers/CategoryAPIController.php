<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryAPIController extends Controller
{
    //
    public function create(Request $request){

        $category = new Category;
        $category->name = $request->name;
        $category->short_desc = $request->short_desc;
        $category->save();
        if (!$category)
        return response()->json([
            'message' => 'add category failed'
        ], 404);
        return response()->json(['message' => 'add category succesfully'], 200);
    }
    public function update(Request $request, $id){
        $category = Category::find($id);
        //print_r($category);
        if($category != null){
            $category->name = $request->name;
            $category->short_desc = $request->short_desc;
            $category->save();
            return response()->json(['message' => 'update category succesfully'], 200);
        }
        else return response()->json([
            'message' => 'null'
        ], 404); 

    }
}
