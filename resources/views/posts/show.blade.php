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

                <h6>{{$post->user->name}}
                    <time>{{$post->created_at->diffForHumans()}}</time>
                    @foreach($post->tag as $tag)
                    <span class="badge float-end bg-primary me-1"><a class="link-light text-decoration-none" href="/{{$post->id}}?tag={{$tag->name}}">{{$tag->name}}</a></span>
                    @endforeach
                <span class="badge float-end bg-warning me-1"><a class="link-light text-decoration-none" href="/{{$post->id}}?category={{$post->category->name}}">{{$post->category->name}}</a></span></h6>
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
@endsection
