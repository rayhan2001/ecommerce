@extends('layout.admin_app')
@section('title')
    Unit
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Unit Add Form</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('unit.store')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="unit_name">Unit_name <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control @error('unit_name') is-invalid @enderror" id="unit_name" name="unit_name"  placeholder="Enter a unit_name..">
                                        @error('unit_name')
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
