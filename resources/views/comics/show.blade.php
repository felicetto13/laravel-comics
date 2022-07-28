@extends('layouts.app')

@section('page_title', $book['title'])

@section('page_content')
    @include('jumbotron')
    <div>
        <div class="section-card-avatar">
            <div class="container position-relative">
                <div class="">
                    <img src="{{ $book['thumb'] }}" alt="{{ $book['title'] }}">
                </div>
            </div>
        </div>
        <div class="container text-center py-5 position-relative">

            <div class="row">
                <div class="col-8">
                    <div class="book_title">
                        {{ $book['title'] }}
                    </div>
                    <div class="price_section">
                        <div class="price flex-grow-1 d-flex justify-content-between">
                            <span>US. Price <strong class="text-white">{{ $book['price'] }} </strong></span>
                            <span>AVAILABLE</span>
                        </div>
                        <div class="check_availability">
                            <select name="check" id="check-availability">
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="description_section">
                        <p>
                            {!! $book['description'] !!}
                        </p>
                    </div>
                </div>
                <div class="col adv-section">
                    <span>ADVERTISEMENT</span>
                    <img src="{{ asset('/images/adv.jpg') }}" alt="Advertisement">
                </div>
            </div>
        </div>
        <div class="section-details">
            <div class="container">
                <div class="row data-book gap-3">
                    <div class="col">
                        <ul class="list-unstyled ">
                            <li class="pb-3">
                                <h2>Talent</h2>
                            </li>
                            <li>
                                <div class="row justify-content-between py-2 ">
                                    <div class="col-3">
                                        <span>Art By: </span>
                                    </div>
                                    <div class="col text-start">
                                        <a href="#">{{ implode(',', $book['artists']) }}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row justify-content-between py-2 ">
                                    <div class="col-3">
                                        <span>Written By: </span>
                                    </div>
                                    <div class="col text-start">
                                        <a href="#">{{ implode(',', $book['writers']) }}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-unstyled ">
                            <li class="pb-3">
                                <h2>Specs</h2>
                            </li>
                            <li>
                                <div class="row justify-content-between py-2 ">
                                    <div class="col-3">
                                        <span>Series: </span>
                                    </div>
                                    <div class="col text-start">
                                        <a href="#">{{$book['series']}}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row justify-content-between py-2 ">
                                    <div class="col-3">
                                        <span>Price U.S.: </span>
                                    </div>
                                    <div class="col text-start">
                                        <span>{{ $book["price"] }}</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row justify-content-between py-2 ">
                                    <div class="col-3">
                                        <span>On Sale date: </span>
                                    </div>
                                    <div class="col text-start">
                                        <span>{{ date_format(date_create($book["sale_date"]),"M d Y") }}</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
