





@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('inc.messages')
                <h1>Manage Categories</h1>
                @if(count($categories) > 0)
                    @foreach ($categories as $category)
                        <div class="card">
                            <div class="my-3">
                                <p class="ms-3">{{ $category->name}}</p>
                                {{--                            <small>Written on {{ $category->created_at }} by {{$category->user['name']}}</small>--}}
                                <form class="d-inline" method="post" action="{{ route('categories.destroy', $category) }}" >
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger float-end me-3">Delete</button>
                                </form>
                                <a class="btn btn-sm btn-warning float-end me-3" href="{{route('categories.edit', $category)}}">Edit</a>
                            </div>
                        </div>
                    @endforeach

                @else
                    <p>No Categories yet</p>
                @endif
                <hr class="my-4">
                <div class="float-start">
                    <a class="btn btn-primary btn-me" href="{{route('categories.create')}}" role="button">Add new Category</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
