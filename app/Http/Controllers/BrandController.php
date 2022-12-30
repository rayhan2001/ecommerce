<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.brand.index',[
            'brands'=> Brand::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->description = $request->description;
        $brand->save();
        Toastr::success('Brands Add Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
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
        return view('admin.brand.edit',[
            'brand'=> Brand::find($id),
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
        $brand = Brand::find($id);
        $brand->brand_name = $request->brand_name;
        $brand->description = $request->description;
        $brand->status = $request->status;
        $brand->save();
        Toastr::success('Brand Update Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return redirect(route('brand.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return back();
    }
    public function status($id){
        $brand = Brand::find($id);
        if ($brand->status==1){
            $brand->status =0;
        }else{
            $brand->status=1;
        }
        $brand->save();
        Toastr::success('Status Change Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
}
