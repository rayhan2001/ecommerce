@extends('layout.admin_app')
@section('title')
    All Color
@endsection
@section('content')
    <div class="col-lg-12 ">
        <div class="card mt-5">
            <div class="card-body">
                <h4 class="card-title">Color Table</h4>
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
                        @foreach($colors as $color)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    @foreach(Json_decode($color->color) as $colors)
                                        <span>{{$colors}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <span class="{{$color->status==1? 'label gradient-1':'label gradient-3'}} btn-rounded">{{$color->status==1?'Active':'Inactive'}}</span>
                                </td>
                                <td>
                                    <span>
                                        @if($color->status==1)
                                            <a href="{{route('color.status',['id'=>$color->id])}}" data-toggle="tooltip" data-placement="top" title="Active"><i class="fa fa-thumbs-up color-muted"></i> </a>
                                        @else
                                            <a href="{{route('color.status',['id'=>$color->id])}}" data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fa fa-thumbs-down color-muted"></i> </a>
                                        @endif

                                        <a href="{{route('color.edit',$color->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted px-2"></i> </a>
                                        <form action="{{route('color.destroy',$color->id)}}" method="post" style="display: inline-block">
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
