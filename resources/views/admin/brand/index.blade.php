@extends('layout.admin_app')
@section('title')
    All Brand
@endsection
@section('content')
    <div class="col-lg-12 ">
        <div class="card mt-5">
            <div class="card-body">
                <h4 class="card-title">Brand Table</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                        <tr class="text-center">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$brand->brand_name}}</td>
                                <td>{{substr($brand->description,0,80)}}</td>
                                <td>
                                    <span class="{{$brand->status==1? 'label gradient-1':'label gradient-3'}} btn-rounded">{{$brand->status==1? 'Active':'Inactive'}}</span>
                                </td>
                                <td>
                                <span>
                                    @if($brand->status==1)
                                        <a href="{{route('brand.status',['id'=>$brand->id])}}" data-toggle="tooltip" data-placement="top" title="Active"><i class="fa fa-thumbs-up color-muted"></i> </a>
                                    @else
                                        <a href="{{route('brand.status',['id'=>$brand->id])}}" data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fa fa-thumbs-down color-muted"></i> </a>
                                    @endif

                                    <a href="{{route('brand.edit',$brand->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted px-2"></i> </a>
                                        <form action="{{route('brand.destroy',$brand->id)}}" method="post" style="display: inline-block">
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
