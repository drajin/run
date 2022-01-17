@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="/" class="btn btn-defult" >Back</a>
                <h1>{{$post->title}}</h1>
                <img class="img-fluid max-width:100%; height:auto;" src="{{asset('/images/'. $post->image_path)}}">
                <div>
                <p>{{$post->body}}</p>
                </div>
                <hr>

                <small>{{$post->user->name}}
                    @foreach($post->tag as $tag)
                    <span class="badge float-end bg-primary">{{$tag->name}}</span>
                    @endforeach
                <span class="badge float-end bg-warning">{{$post->category->name}}</span></small>
                <hr>
{{--                @if(!Auth::guest())    if the user is not a guest show this --}}
                @auth
                <div>
                    <form method="POST" action="{{route('posts.destroy', $post)}}" >
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger float-end me-3" value="Delete" />
                    </form>
                    <a href="{{route('posts.edit', $post)}}" class="btn btn-warning float-end me-3">Edit</a>
                </div>
                @endauth

{{--                @endif--}}
{{--                @endif--}}
            </div>
        </div>
    </div>
    </div>
@endsection
