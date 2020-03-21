@extends('_layouts.master')

@section('body')

    @foreach ($posts->where('featured', false)->take(6) as $post)
            @include('_components.post-preview-inline')
    @endforeach

@stop
