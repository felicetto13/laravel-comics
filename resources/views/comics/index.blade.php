@extends('layouts.app')

@section('page_title', "Comics")

@section('page_content')
@include('jumbotron')
<div class="bg-dark-gray">
    <div class="container text-center py-5 position-relative">
        <div class="title-card-container">Current Series</div>
        <div class="row row-cols-6 justify-content-center py-4">
            @foreach ($books as $book)
            <div class="col my-3" >
                @include('partials.getBooks')
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection