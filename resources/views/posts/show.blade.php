@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="/posts" class="btn btn-defult" >Back</a>
                <h1>{{$post->title}}</h1>
                <div>
                <p>{{$post->body}}</p>
                </div>

                <hr>
                <small></small>
                <hr>
{{--                @if(!Auth::guest())  --}} {{-- if the user is not a guest show this --}}
                 {{-- the user has to match id --}}
                <div>
                    <form method="POST" action="{{route('posts.destroy', $post)}}" >
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger float-end me-3" value="Delete" />
                    </form>
                    <a href="{{route('posts.edit', $post)}}" class="btn btn-warning float-end me-3">Edit</a>

                </div>

{{--                @endif--}}
{{--                @endif--}}
            </div>
        </div>
    </div>
    </div>
@endsection
