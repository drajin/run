@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Edit category</h1>
                <form method='post' action="{{route('categories.update', $category)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" value="{{old('name', $category->name)}}" class="form-control" placeholder="Name">
                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
