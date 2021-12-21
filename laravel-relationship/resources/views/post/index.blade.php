@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card py-5 px-5">
                <div class="card-header">Category Post</div>

                <form action="{{ url('/store-post') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Title</label>
                      <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name">
                      
                    </div>
                    <span class="">
                        @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </span>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Select Category</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="cat">
                        <option disabled selected>Please Chose One</option>
                        @foreach ($cats as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                        @endforeach
                      </select>
                    </div>
                    <span class="">
                        @error('cat')
                                <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </span>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Example textarea</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <span class="">
                        @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </span>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Photo</label>
                        <input type="file" name="photo" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <span class="">
                        @error('photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </span>
                    <input type="submit" value="Add Post" class="btn btn-primary">
                  </form>
                 
            </div>
        </div>
    </div>
</div>
@endsection