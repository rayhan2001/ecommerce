@extends('layout.admin_app')
@section('title')
    Products
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Product Add Form</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="category_name">Category Name<span class="text-danger"> *</span></label>
                                    <div class="col-lg-6">
                                        <select name="cat_id" id="category_name" class="form-control @error('cat_id') is-invalid @enderror" >
                                            <option value="">Select One</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
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
                                                <option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
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
                                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
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
                                                <option value="{{$unit->id}}">{{$unit->unit_name}}</option>
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
                                                <option value="{{$size->id}}">{{implode(',',Json_decode($size->size))}}</option>
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
                                                <option value="{{$color->id}}">{{implode(',',Json_decode($color->color))}}</option>
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
                                        <input type="text" class="form-control @error('product_code') is-invalid @enderror" id="product_code" name="product_code" placeholder="Enter a product_code..">
                                        @error('product_code')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="product_name">Product Name<span class="text-danger"> *</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name"  placeholder="Enter a product_name..">
                                        @error('product_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="description">Description</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Type Something"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="product_price">Product_price<span class="text-danger"> *</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control @error('product_price') is-invalid @enderror" id="product_price" name="product_price"  placeholder="Enter a product_price..">
                                        @error('product_price')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="image">Image<span class="text-danger"> *</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" id="image" name="file[]" multiple>
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

