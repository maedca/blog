@extends('admin.template.main')
@section('content')
@foreach($articles as $article)
    {{$article->title}}<br>
    {{$article->content}}<br>
    {{$article->category->name}}
    @endforeach
    @endsection