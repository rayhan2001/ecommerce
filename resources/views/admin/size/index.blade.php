@extends('layout.admin_app')
@section('title')
    All Size
@endsection
@section('content')
    <div class="col-lg-12 ">
        <div class="card mt-5">
            <div class="card-body">
                <h4 class="card-title">Size Table</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                        <tr class="text-center">
                            <th scope="col">Sl</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sizes as $size)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    @foreach(Json_decode($size->size) as $sizes)
                                        <span>{{$sizes}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <span class="{{$size->status==1? 'label gradient-1':'label gradient-3'}} btn-rounded">{{$size->status==1?'Active':'Inactive'}}</span>
                                </td>
                                <td>
                                    <span>
                                        @if($size->status==1)
                                            <a href="{{route('size.status',['id'=>$size->id])}}" data-toggle="tooltip" data-placement="top" title="Active"><i class="fa fa-thumbs-up color-muted"></i> </a>
                                        @else
                                            <a href="{{route('size.status',['id'=>$size->id])}}" data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fa fa-thumbs-down color-muted"></i> </a>
                                        @endif

                                        <a href="{{route('size.edit',$size->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted px-2"></i> </a>
                                        <form action="{{route('size.destroy',$size->id)}}" method="post" style="display: inline-block">
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
