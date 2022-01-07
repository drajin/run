@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>This is the min app</p>
                <div class="jumbotron">
                    <h1 class="display-4">title</h1>
                    <p class="lead">This is the min app</p>
                    <hr class="my-4">
                    <ul>
                        @foreach($posts as $post)
                        <li>{{$post->title}}</li>
                            @endforeach
                    </ul>
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <p class="lead">
                        @auth
                            <a class="btn btn-warning btn-lg" href="{{route('posts.index')}}" role="button">Edit Blog Posts</a>
                            <a class="btn btn-primary btn-lg" href="{{route('posts.create')}}" role="button">Add new Post</a>

                        @else
                            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
                            @endauth

                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
