@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>Worauf warten Sie?</p>
                <div class="jumbotron">
                    <h1 class="display-4">Schnell APP</h1>
                    <p class="lead">Laden Sie die neue Schnell APP!</p>
                    <hr class="my-4">
                    <ul>
                        @foreach($posts as $post)
                            <li><a class="text-decoration-none" href="{{route('single_post',$post->id)}}">{{$post->title}}</a></li>
                        @endforeach
                    </ul>
                    {{ $posts->links() }}
                    <p>Die APP wurde in 6 Sprachen entwickelt und ihre Nutzung ist sehr einfach.</p>
                    <p class="lead">
                        @auth
                            <a class="btn btn-warning btn-lg" href="{{route('posts.index')}}" role="button">Edit Blog Posts</a>
                            <a class="btn btn-primary btn-lg" href="{{route('posts.create')}}" role="button">Add new Post</a>
                            <a class="btn btn-success btn-lg" href="{{route('categories.index')}}" role="button">Manage Categories</a>
                            <a class="btn btn-success btn-lg" href="{{route('tags.index')}}" role="button">Manage Tags</a>
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
