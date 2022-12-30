<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.size.index',[
            'sizes'=> Size::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $sizes = explode(',',$request->size);
       $size = new Size();
       $size->size = json_encode($sizes);
       $size->save();
        Toastr::success('Size Add Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
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
        return view('admin.size.edit',[
            'size'=> Size::find($id),
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
        $size = Size::find($id);
        $sizes = explode(',',$request->size);
        $size->size = json_encode($sizes);
        $size->status = $request->status;
        $size->save();
        Toastr::success('Size Update Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return redirect(route('size.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $size = Size::find($id);
        $size->delete();
        return back();
    }
    public function status($id){
        $size = Size::find($id);
        if ($size->status==1){
            $size->status =0;
        }else{
            $size->status=1;
        }
        $size->save();
        Toastr::success('Status Change Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
}
