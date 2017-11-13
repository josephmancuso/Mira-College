@extends('layouts.base')

@section('content')
    <section style="padding-top:20px;">
        <div class="container">
        <h2>Showing Results For: {{ $_GET['search'] }}</h2>
        <hr>
            <div class="row">

                @foreach($results as $bookChunk)
                
                <div class="row">
                    @foreach ($bookChunk as $book)
                    
                    <div class="col-xs-12 col-sm-4 text-center">
                        @if (isset($book->volumeInfo->imageLinks))
                            <img src="{{ $book->volumeInfo->imageLinks->smallThumbnail }}" style="height:200px;">
                        @endif
                        
                        <h4>{{ $book->volumeInfo->title }}</h4>
                        @if (isset($book->volumeInfo->authors))
                            <h3>Author: {{$book->volumeInfo->authors[0]}}</h3>
                        @else
                            No Author Available
                        @endif
                        
                        <h3></h3>

                        <p>
                        @if (isset($book->searchInfo))
                            {!! $book->searchInfo->textSnippet !!}
                        @elseif(isset($book->volumeInfo->description))
                            {!! $book->volumeInfo->description !!}
                        @else
                            No Description Available
                        @endif
                        </p>
                        <a href="/book/{{ $book->id }}">
                            <button class="btn btn-link btn-round" type="button" style="background-color:#2cade3;color:#ffffff;padding-top:18px;padding-bottom:18px;padding-right:36px;padding-left:36px;margin:0;">View </button>
                        </a>
                    </div>
                    @endforeach
                </div>

                @endforeach
                
            </div>
        </div>
    </section>
@endsection