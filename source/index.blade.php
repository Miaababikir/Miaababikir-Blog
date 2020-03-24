@extends('_layouts.master')

@section('header')
    @include('_components.header')
    @include('_components.featured-posts')
@stop

@section('body')

    <h2>Latest Articles</h2>
    @foreach ($posts->take(6) as $post)
        @include('_components.post-preview-inline')
    @endforeach

@stop
