@extends('layout')
@section('content')
    <div id="wrapper">
        <div class="container" id="page">
            <ul class="style1">
                @foreach ($articles as $article)
                    <li>
                        <h3><a href="{{ route('articles.show',$article) }}">{{ $article->title }}</a></h3>
                        <p>{{ $article->excerpt }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

