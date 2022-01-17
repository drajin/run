

@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('inc.messages')
                <h1>Manage Tags</h1>
                @if(count($tags) > 0)
                    <table class="table">
                        <thead>
                        <th>#</th>
                        <th>Name</th>
                        </thead>

                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <th>{{$tag->id}}</th>
                                <td>
                                    <a href="">{{$tag->name}}</a>
                                    <form class="d-inline" method="post" action="{{ route('tags.destroy', $tag) }}"
                                          onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger float-end me-3">Delete</button>
                                    </form>
                                    <a class="btn btn-sm btn-warning float-end me-3" href="{{route('tags.edit', $tag)}}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

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
