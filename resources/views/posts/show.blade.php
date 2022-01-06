@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="/posts" class="btn btn-defult" >Back</a>
                <h1></h1>
                <div>

                </div>

                <hr>
                <small></small>
                <hr>
{{--                @if(!Auth::guest())  --}} {{-- if the user is not a guest show this --}}
                 {{-- the user has to match id --}}
                <a href="" class="btn btn-warning">Edit</a>
                <form method="POST" action="" >
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <div id="operations">
                        <input type="submit" name="commit" class="btn btn-danger float-right" value="Delete" />
                    </div>
                </form>
{{--                @endif--}}
{{--                @endif--}}
            </div>
        </div>
    </div>
    </div>
@endsection
