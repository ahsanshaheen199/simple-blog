@extends('layout')
@section('content')
    <div id="wrapper">
        <div class="container" id="page">
            <h1>Update Article</h1>

            <form method="POST" action="/articles/{{$article->id}}">
                @csrf
                @method('PUT')
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{$article->title}}">
                </div>
                <div>
                    <label for="excerpt">Excerpt</label>
                    <textarea type="text" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
                </div>
                <div>
                    <label for="body">Body</label>
                    <textarea type="text" name="body" id="body">{{$article->body}}</textarea>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
