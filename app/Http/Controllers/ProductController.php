<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function index()
    {
//        $x = Product::all();
//        $x = Product::with('productMedia')->get();
        $x = Product::with(['productMedia','category'])->get();
        return response()->json($x);
    }

    public function create(Request $request)
    {
        $x = Product::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'categoryId'=>$request->categoryId,
        ]);

        $res= $x->save();
//

        return response()->json($res);
    }


    public function delete($prodId)
    {
       $x = Product::find($prodId) -> delete();
//      $x = Product::where('prodId', $prodId) -> delete();
      return response()->json($x);
    }

    public function update($id, Request $request)
    {
        $x = Product::find($id);
        $x -> title = $request -> title;
        $x -> price = $request -> price;
        $x -> categoryId = $request -> categoryId;
        $res= $x->save();
        return response()->json($res);
    }

//    public function add()
//    {
//        // the data need to be inserted
//        $data = [
//            'title' => 'insert data',
//            'price' => 0.1,
//        ];
//        //add data to table
//        dump(DB::table('product') -> insert($data));
//    }
}
