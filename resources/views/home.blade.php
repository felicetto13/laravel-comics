@extends('layouts.app')


@section('page_title','Comics DC')
    
@section('page_content')
    @include('jumbotron')
    @include('currentSeries')
    <div class="banner bg-blue">
        @include('banner')
    </div>
    
@endsection
