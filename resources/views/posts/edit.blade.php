@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Edit Post </h1>
                <form method='post' action="{{route('posts.update', $post)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="title" name="title" value="{{old('title', $post->title)}}" class="form-control" placeholder="Title">
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" name="body" rows="3" placeholder="Body">{{old('body',$post->body)}}</textarea>
                        @error('body')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Change Image</label>
                        <input type="file" class="form-control" id="image">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" @if(old('category') == $post->category) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tags[]">Edit Tags</label>
                        <select class="form-control js-example-basic-multiple" name="tags[]" multiple="multiple">
                            @foreach($tags as $tag)

                                <option value="{{ $tag->id }}"
                                @if(in_array($tag->name, $post->tag->pluck('name')->toArray()))
                                    {{'selected'}}
                                    @endif
                                >{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('scripts')
{{--    {!!  !!}--}}
{{--    $(document).ready(function() {--}}
{{--    $('.js-example-basic-multiple').select2();--}}
{{--    $('.js-example-basic-multiple').select2().val({!! json_encode($post->tag()->getRelatedIds())  !!}).trigger('change');--}}
{{--    });--}}

{{--    $(".js-example-tags").select2({tags: true});--}}

@endsection
