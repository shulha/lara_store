<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Goods;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categoryAction($id)
    {
        $category = Categories::find($id);
//           var_dump($category);
        if ($category) {
//            $goods = Goods::find(['category_id' => $category->id]);
            $goods = Goods::where('category_id', '=', $category->id)->get();
//            dd($goods);
            return view('goods', compact('goods'));
        }
    }
}
