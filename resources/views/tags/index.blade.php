

@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('inc.messages')
                <h1>Manage Tags</h1>
                @if(count($tags) > 0)
                    @foreach ($tags as $tag)
                        <div class="card">
                            <div class="my-3">
                                <p>{{$tag->name}}</p>
                                <form class="d-inline" method="post" action="{{ route('tags.destroy', $tag) }}" >
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger float-end me-3">Delete</button>
                                </form>
                                <a class="btn btn-sm btn-warning float-end me-3" href="{{route('tags.edit', $tag)}}">Edit</a>
                            </div>
                        </div>
                    @endforeach

                @else
                    <p>No Tags yet</p>
                @endif
                <hr class="my-4">
                <div class="float-start">
                    <a class="btn btn-primary btn-me" href="{{route('tags.create')}}" role="button">Add new tag</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
