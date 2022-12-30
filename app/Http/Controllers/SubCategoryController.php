<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.subcategory.index',[
            'subcategories'=> DB::table('sub_categories')
            ->join('categories','sub_categories.cat_id','=','categories.id')
            ->select('sub_categories.*','categories.category_name')
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
        return view('admin.subcategory.create',[
           'categories'=> Category::all(),
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
        $validator = $request->validate([
            'subcategory_name' => 'required',
            'cat_id' => 'required'
        ], [
            'subcategory_name.required' => 'Name field is required !!',
            'cat_id.required' => 'Name field is required !!'
        ]);
        $subcategory = new SubCategory();
        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->cat_id = $request->cat_id;
        $subcategory->description = $request->description;
        $subcategory->save();
        Toastr::success('Category Add Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }

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
        return view('admin.subcategory.edit',[
            'subcategory'=> SubCategory::find($id),
            'categories'=>Category::all(),
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
        $subcategory = SubCategory::find($id);
        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->cat_id = $request->cat_id;
        $subcategory->description = $request->description;
        $subcategory->status = $request->status;
        $subcategory->save();
        Toastr::success('SubCategory Update Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return redirect(route('subcategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->delete();
        return back();
    }
    public function status($id){
        $subcategory = SubCategory::find($id);
        if ($subcategory->status==1){
            $subcategory->status =0;
        }else{
            $subcategory->status=1;
        }
        $subcategory->save();
        Toastr::success('Status Change Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
}
