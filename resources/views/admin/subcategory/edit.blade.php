@extends('layout.admin_app')
@section('title')
    Edit Sub Category
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">SubCategory Edit Form</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('subcategory.update',$subcategory->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="subcategory_name">Sub Category_name</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control @error('subcategory_name') is-invalid @enderror" id="subcategory_name" name="subcategory_name" value="{{$subcategory->subcategory_name}}">
                                        @error('subcategory_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="category_name">Select Category</label>
                                    <div class="col-lg-6">
                                        <select name="cat_id" id="category_name" class="form-control @error('subcategory_name') is-invalid @enderror">
                                            <option value="">Select One</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$subcategory->cat_id==$category->id? 'selected':''}}>{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('subcategory_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="description">Description</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" id="description" name="description" rows="5" >{{$subcategory->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="status">Status</label>
                                    <div class="col-lg-6">
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" {{$subcategory->status==1? 'selected':''}}>Active</option>
                                            <option value="0" {{$subcategory->status==0? 'selected':''}}>Inactive</option>
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
