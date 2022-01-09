@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Edit Post </h1>
                <form method='post' action="{{route('posts.update', $post)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="title" name="title" value="{{old('title', $post->title)}}" class="form-control" placeholder="Title">
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" name="body" rows="3" placeholder="Body">{{old('body',$post->body)}}</textarea>
                        @error('body')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
