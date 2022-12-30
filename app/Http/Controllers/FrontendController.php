<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.pages.home',[
            'categories' => Category::where('status',1)->get(),
            'products' => Product::where('status',1)->latest()->limit(5)->get(),
        ]);
    }
    public function productView($id){
        $products = DB::table('products')
            ->join('categories','products.cat_id','categories.id')
            ->join('sub_categories','products.subcat_id','sub_categories.id')
            ->join('brands','products.brand_id','brands.id')
            ->join('units','products.unit_id','units.id')
            ->join('sizes','products.size_id','sizes.id')
            ->join('colors','products.color_id','colors.id')
            ->select('products.*','categories.category_name','sub_categories.subcategory_name','brands.brand_name','units.unit_name','sizes.size','colors.color')
            ->where('products.status',1)
            ->first();
        return view('frontend.pages.view_product',[
            'categories' => Category::where('status',1)->get(),
            'product' => $products,
        ]);
    }
}
