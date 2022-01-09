@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Create Post </h1>
                <form method='post' action="{{route('posts.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Title">
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" name="body" rows="3" placeholder="Body">{{old('body')}}</textarea>
                        @error('body')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
                </div>
            </div>
        </div>
@endsection
