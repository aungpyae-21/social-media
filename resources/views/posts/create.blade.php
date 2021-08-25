@extends('layouts.app');

@section('content')
<div class="container">
   <form action="{{url("/p")}}" method="POST" enctype="multipart/form-data">
        @csrf
       <div class="row">
            <div class="col-8 offset-2">
                <div class="row d-flex justify-content-center">
                    <h2>New Post</h2>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
            
            
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption">

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            
                </div>
                <div class="row">
                    <label for="caption" class="col-md-4 col-form-label">Post image</label>
                    <input type="file" id="image" name="image" class="form-control-file  @error('image') is-invalid @enderror">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row mt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
            </div>
       </div>
   </form>
</div>
@endsection