@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Edit tag </h1>
                <form method='post' action="{{route('tags.update', $tag)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Tag Name</label>
                        <input type="text" name="name" value="{{old('name', $tag->name)}}" class="form-control" placeholder="Tag name">
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
