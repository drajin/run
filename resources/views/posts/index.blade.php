





@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('inc.messages')
                <h1>Post Index</h1>
                <p>This is the Posts Index</p>
                @if(count($posts) > 0)
                    @foreach ($posts as $post)
                        <div class="card">
                            <div class="my-3">
                                <a class="ms-3 text-decoration-none fs-3" href="{{route('posts.show', $post)}}">{{ $post->title}}</a>
{{--                            <small>Written on {{ $post->created_at }} by {{$post->user['name']}}</small>--}}
                                <form class="d-inline" method="post" action="{{ route('posts.destroy', $post) }}" >
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger float-end me-3">Delete</button>
                                </form>
                                <a class="btn btn-sm btn-warning float-end me-3" href="{{route('posts.edit', $post)}}">Edit</a>
                            </div>
                        </div>
                    @endforeach

                @else
                    <p>No posts found</p>
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection
