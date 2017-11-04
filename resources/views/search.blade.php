@extends('layouts.base')

@section('content')
    <section class="header-section">
        <div class="container" style="margin-top:0px;z-index:100">
            <div style="margin-top:30vh;">
                <h1 class="text-center" data-aos="fade-up" style="margin-top:20px;color:#ffffff;font-size:51px;">Find Your Book</h1></div>
        </div>
    </section>
    <section style="padding-top:20px;">
        <div class="container">
            <div class="row">

                @foreach($results as $book)
                
                <div class="col-xs-12 col-sm-4 text-center">
                    @if ($book->imageLinks)
                        <img src="{{ $book->imageLinks->smallThumbnail }}" style="height:200px;">
                    @endif
                    
                    <h4>{{ $book->title }}</h4>
                    <h3>Author: {{$book->authors[0]}}</h3>
                    <h3></h3>

                    <p>
                    @if ($book->searchInfo)
                        {!! $book->searchInfo->textSnippet !!}
                    @else
                        @unless($book->description)
                            No Description Available
                        @endunless
                        {!! $book->description !!}
                    @endif
                    </p>
                    <a href="/book/{{ $book->id }}">
                        <button class="btn btn-link btn-round" type="button" style="background-color:#2cade3;color:#ffffff;padding-top:18px;padding-bottom:18px;padding-right:36px;padding-left:36px;margin:0;">View </button>
                    </a>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
@endsection