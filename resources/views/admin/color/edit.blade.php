@extends('layout.admin_app')
@section('title')
    Edit Color
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Color Edit Form</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('color.update',$color->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="color">Color<span class="text-danger"> *</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control @error('color') is-invalid @enderror" id="color" name="color" data-role="tagsinput" required value="{{implode(',',Json_decode($color->color))}}">
                                        @error('color')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="status">Status</label>
                                    <div class="col-lg-6">
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" {{$color->status==1? 'selected':''}}>Active</option>
                                            <option value="0" {{$color->status==0? 'selected':''}}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-outline-primary">Add Color</button>
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
