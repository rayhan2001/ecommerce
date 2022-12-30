@extends('layout.admin_app')
@section('title')
    All Products
@endsection
@section('content')
    <div class="col-lg-12 ">
        <div class="card mt-5">
            <div class="card-body">
                <h4 class="card-title">Product Table</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                        <tr class="text-center">
                            <th>Sl</th>
                            <th>Category</th>
                            <th>Subcategory</th>
                            <th>Brand</th>
                            <th>Code</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            @php
                                $images = explode('|', $product->image);
                            @endphp
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->category_name}}</td>
                                <td>{{$product->subcategory_name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td>{{$product->product_code}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_price}}&#2547;</td>
                                <td>{{substr($product->description,0,80)}}</td>
                                <td>
                                    @foreach($images as $image)
                                    <img src="{{asset($image)}}" alt="" style="height: 50px; width: 50px;">
                                    @endforeach
                                </td>
                                <td>
                                    <span class="{{$product->status==1? 'label gradient-1':'label gradient-3'}} btn-rounded">{{$product->status==1? 'Active':'Inactive'}}</span>
                                </td>
                                <td>
                                    <span>
                                        @if($product->status==1)
                                            <a href="{{route('product.status',['id'=>$product->id])}}" data-toggle="tooltip" data-placement="top" title="Active"><i class="fa fa-thumbs-up color-muted"></i> </a>
                                            <br>
                                        @else
                                            <a href="{{route('product.status',['id'=>$product->id])}}" data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fa fa-thumbs-down color-muted"></i> </a>
                                            <br>
                                        @endif
                                        <a href="{{route('products.edit',$product->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted mt-2 mb-2"></i> </a><br>
                                        <form action="{{route('products.destroy',$product->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fa fa-close color-danger"></i></button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
