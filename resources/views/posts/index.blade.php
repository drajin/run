





@extends('layouts.app')



@section('content')
    <div class="container">
        <h1>Post Index</h1>
        <p>This is the Posts Index</p>
        <div class="row justify-content-center">
            <div class="col-md-8">
{{--                @if(count($posts) > 0)--}}
{{--                    @foreach ($posts as $post)--}}
{{--                        <div class="card">--}}
{{--                            <h3><a href="/posts/{{$post->id}}">{{ $post->title}}</a></h3>--}}
{{--                            <small>Written on {{ $post->created_at }} by {{$post->user['name']}}</small>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                    {{$posts->links()}}--}}

{{--                @else--}}
{{--                    <p>No posts found</p>--}}
{{--                @endif--}}
{{--                @endsection--}}
            </div>
        </div>
    </div>
    </div>
@endsection
