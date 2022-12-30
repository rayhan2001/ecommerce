@extends('layout.admin_app')
@section('title')
    Size
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Size Add Form</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('size.store')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="size">Size<span class="text-danger"> *</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control @error('size') is-invalid @enderror" id="size" name="size" data-role="tagsinput"  placeholder="Enter a size..">
                                        @error('size')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-outline-primary">Add Size</button>
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
