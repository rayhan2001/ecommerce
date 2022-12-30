@extends('layout.admin_app')
@section('title')
    Edit Unit
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Unit Edit Form</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('unit.update',$unit->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="unit_name">Unit_name <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control @error('unit_name') is-invalid @enderror" id="unit_name" name="unit_name" value="{{$unit->unit_name}}">
                                        @error('unit_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="description">Description</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" id="description" name="description" rows="5" >{{$unit->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="status">Status</label>
                                    <div class="col-lg-6">
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" {{$unit->status==1? 'selected':''}}>Active</option>
                                            <option value="0" {{$unit->status==0? 'selected':''}}>Inactive</option>
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
