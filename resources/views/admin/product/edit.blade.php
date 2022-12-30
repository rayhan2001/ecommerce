@extends('layout.admin_app')
@section('title')
    Edit Products
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Product Edit Form</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="category_name">Category Name<span class="text-danger"> *</span></label>
                                    <div class="col-lg-6">
                                        <select name="cat_id" id="category_name" class="form-control @error('cat_id') is-invalid @enderror" >
                                            <option value="">Select One</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$product->cat_id==$category->id? 'selected':''}}>{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('cat_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="subcategory_name">Sub Category Name<span class="text-danger"> *</span></label>
                                    <div class="col-lg-6">
                                        <select name="subcat_id" id="subcategory_name" class="form-control @error('subcat_id') is-invalid @enderror" >
                                            <option value="">Select One</option>
                                            @foreach($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}" {{$product->subcat_id==$subcategory->id? 'selected':''}}>{{$subcategory->subcategory_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('subcat_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="brand">Brand Name<span class="text-danger"> *</span></label>
                                    <div class="col-lg-6">
                                        <select name="brand_id" id="brand" class="form-control @error('brand_id') is-invalid @enderror" >
                                            <option value="">Select One</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}" {{$product->brand_id==$brand->id? 'selected':''}}>{{$brand->brand_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="unit">Select Unit <span class="text-danger"> *</span></label>
                                    <div class="col-lg-6">
                                        <select name="unit_id" id="unit" class="form-control @error('unit_id') is-invalid @enderror" >
                                            <option value="">Select One</option>
                                            @foreach($units as $unit)
                                                <option value="{{$unit->id}}" {{$product->unit_id==$unit->id? 'selected':''}}>{{$unit->unit_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('unit_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="size">Select Size <span class="text-danger"> *</span></label>
                                    <div class="col-lg-6">
                                        <select name="size_id" id="size" class="form-control @error('size_id') is-invalid @enderror" >
                                            <option value="">Select One</option>
                                            @foreach($sizes as $size)
                                                <option value="{{$size->id}}" {{$product->size_id==$size->id? 'selected':''}}>{{implode(',',Json_decode($size->size))}}</option>
                                            @endforeach
                                        </select>
                                        @error('size_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="color">Select Color <span class="text-danger"> *</span></label>
                                    <div class="col-lg-6">
                                        <select name="color_id" id="color" class="form-control @error('color_id') is-invalid @enderror" >
                                            <option value="">Select One</option>
                                            @foreach($colors as $color)
                                                <option value="{{$color->id}}" {{$product->color_id==$color->id? 'selected':''}}>{{implode(',',Json_decode($color->color))}}</option>
                                            @endforeach
                                        </select>
                                        @error('color_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="product_code">Product Code<span class="text-danger"> *</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control @error('product_code') is-invalid @enderror" id="product_code" name="product_code" value="{{$product->product_code}}">
                                        @error('product_code')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="product_name">Product Name<span class="text-danger"> *</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name"  value="{{$product->product_name}}">
                                        @error('product_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="description">Description</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" id="description" name="description" rows="5">{{$product->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="product_price">Product_price<span class="text-danger"> *</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control @error('product_price') is-invalid @enderror" id="product_price" name="product_price"  value="{{$product->product_price}}">
                                        @error('product_price')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
{{--                                @foreach($product as $img)--}}
{{--                                    @php--}}
{{--                                        $images = explode('|', $img->image);--}}
{{--                                    @endphp--}}
{{--                                @endforeach--}}
{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-lg-4 col-form-label" for="image">Image<span class="text-danger"> *</span>--}}
{{--                                    </label>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <input type="file" class="form-control" id="image" name="file[]" multiple>--}}
{{--                                        @foreach($images as $image)--}}
{{--                                            <img src="{{asset($image)}}" alt="" style="height: 50px; width: 50px;" class="img-thumbnail mt-2">--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="status">Status</label>
                                    <div class="col-lg-6">
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" {{$product->status==1? 'selected':''}}>Active</option>
                                            <option value="0" {{$product->status==0? 'selected':''}}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

