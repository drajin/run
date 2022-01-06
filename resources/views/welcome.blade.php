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
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
