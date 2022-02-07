

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-alert/>

                {{--                @include('inc.messages')--}}
                <h1>Trash</h1>
                    @foreach ($deleted_posts as $post)
                        <div class="card">
                            <div class="my-3 text-center">
                                <div class="clearfix">
                                    <p class="fs-3">{{ $post->title}}</p>
                                    <a class="btn btn-sm btn-danger float-end me-3" href="{{route('destroy_permanently', $post)}}">Permanently Delete</a>
                                    <a class="btn btn-sm btn-warning float-end me-3" href="{{route('restore', $post)}}">Restore</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <div class="clearfix">
                    <a class="btn btn-sm btn-danger float-end m-3" href="{{route('destroy_permanently_all')}}">Permanently Delete all</a>
                    <a class="btn btn-sm btn-warning float-end m-3" href="{{route('restore_all')}}">Restore all</a>
                </div>
            </div>
        </div>


    </div>
    </div>
@endsection
