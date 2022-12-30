<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index',[
            'products'=>DB::table('products')
                    ->join('categories','products.cat_id','=','categories.id')
                    ->join('sub_categories','products.subcat_id','=','sub_categories.id')
                    ->join('brands','products.brand_id','=','brands.id')
                    ->join('units','products.unit_id','=','units.id')
                    ->join('sizes','products.size_id','=','sizes.id')
                    ->join('colors','products.color_id','=','colors.id')
                    ->select('products.*','categories.category_name','sub_categories.subcategory_name','brands.brand_name','units.unit_name','sizes.size','colors.color')
                    ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create',[
            'categories'=>Category::where('status',1)->get(),
            'subcategories'=>SubCategory::where('status',1)->get(),
            'subcategories'=>SubCategory::where('status',1)->get(),
            'brands'=>Brand::where('status',1)->get(),
            'units'=>Unit::where('status',1)->get(),
            'sizes'=>Size::where('status',1)->get(),
            'colors'=>Color::where('status',1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd($request->all());
        $validator = $request->validate([
            'product_code' => 'required',
            'product_name' => 'required',
            'cat_id' => 'required',
            'subcat_id' => 'required',
            'brand_id' => 'required',
            'unit_id' => 'required',
            'size_id' => 'required',
            'color_id' => 'required',
            'product_price' => 'required',
        ], [
            'product_code.required' => 'Product Code field is required !!',
            'product_name.required' => 'Product Name field is required !!',
            'cat_id.required' => 'Category Name field is required !!',
            'subcat_id.required' => 'Sub Category Name field is required !!',
            'brand_id.required' => 'Brand Name field is required !!',
            'unit_id.required' => 'Unit field is required !!',
            'size_id.required' => 'Size field is required !!',
            'color_id.required' => 'Color field is required !!',
            'product_price.required' => 'Product Price field is required !!',
        ]);
        $product = new Product();
        $product->cat_id = $request->cat_id;
        $product->subcat_id = $request->subcat_id;
        $product->brand_id = $request->brand_id;
        $product->unit_id = $request->unit_id;
        $product->size_id = $request->size_id;
        $product->color_id = $request->color_id;
        $product->product_code = $request->product_code;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->description = $request->description;
//        $product->image = $this->productImage($request);
        $images = array();
        $files = $request->file('file');
        if (!empty($files)){
            foreach ($files as $file){
                $imageName = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $imageFullName = $imageName.'.'.$ext;
                $dir = 'upload/product_image/';
                $imageUrl=$dir.$imageFullName;
                $file->move($dir,$imageFullName);
                $images[]=$imageUrl;
            }
//            dd($images);
            $product['image']=implode("|",$images);
        }
//        dd($product['image']);
        $product->save();
        Toastr::success('Product Add Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
////public function productImage($request){
////    if($files=$request->file('image')){
////        foreach($files as $file){
////            $name='image'.'-'.rand() . '.' . $file->extension();
////            $uploadPath='upload/product/';
////            $imageUrl=$uploadPath.$name;
////            $file->move($uploadPath,$name);
////            return $imageUrl;
////        }
////    }
//}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.product.edit',[
            'product'=> Product::find($id),
            'categories'=>Category::where('status',1)->get(),
            'subcategories'=>SubCategory::where('status',1)->get(),
            'subcategories'=>SubCategory::where('status',1)->get(),
            'brands'=>Brand::where('status',1)->get(),
            'units'=>Unit::where('status',1)->get(),
            'sizes'=>Size::where('status',1)->get(),
            'colors'=>Color::where('status',1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->cat_id = $request->cat_id;
        $product->subcat_id = $request->subcat_id;
        $product->brand_id = $request->brand_id;
        $product->unit_id = $request->unit_id;
        $product->size_id = $request->size_id;
        $product->color_id = $request->color_id;
        $product->product_code = $request->product_code;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->description = $request->description;
//        if ($request->file('file')){
//            if ($product->file !=null){
//                unlink($product->file);
//            }
//            $images = array();
//            $files = $request->file('file');
//            if (!empty($files)){
//                foreach ($files as $file){
//                    $imageName = md5(rand(1000, 10000));
//                    $ext = strtolower($file->getClientOriginalExtension());
//                    $imageFullName = $imageName.'.'.$ext;
//                    $dir = 'upload/product_image/';
//                    $imageUrl=$dir.$imageFullName;
//                    $file->move($dir,$imageFullName);
//                    $images[]=$imageUrl;
//                }
//                $product['image']=implode("|",$images);
//            }
//        }
        $product->status = $request->status;
        $product->save();
        Toastr::success('Product Update Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $images = explode('|',$product->image);
        foreach ($images as $image){
            if (!empty($image)){
                unlink($image);
            }
        }
        $product->delete();
        Toastr::success('Product Delete Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
    public function status($id){
        $product = Product::find($id);
        if ($product->status==1){
            $product->status =0;
        }else{
            $product->status=1;
        }
        $product->save();
        Toastr::success('Status Change Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
}
