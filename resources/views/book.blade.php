@extends('layouts.base')

@section('content')
    <div>
        <div class="container" style="padding-top:20px;">
            <div class="row">
                <div class="col-md-4 text-center">
                    @if (isset($book->volumeInfo->imageLinks))
                        <img src="{{ $book->volumeInfo->imageLinks->thumbnail }}" style="height:200px;">
                    @endif
                    
                    <h2>{{ $book->volumeInfo->title }}</h2>

                    <p>
                    @if (isset($book->searchInfo))
                        {!! $book->searchInfo->textSnippet !!}
                    @elseif(isset($book->volumeInfo->description))
                        {!! str_limit($book->volumeInfo->description, 200, '...') !!}
                    @else
                        No description available
                    @endif
                    </p>
                    @auth
                        <div class="alert alert-warning">This book will be sent to: {{ Auth::user()->getSchool()->name }}</div>
                    
                    <form action="/book/register/{{ $book->id }}">
                        <button class="btn btn-link btn-round" type="submit" style="background-color:#2cade3;color:#ffffff;padding-top:18px;padding-bottom:18px;padding-right:36px;padding-left:36px;margin:0;">Checkout </button>
                    </form>
                    @endauth
                </div>
                <div class="col-md-8">
                    <p>Rating: <i class="fa fa-star" style="color:#ffd700;"></i><i class="fa fa-star" style="color:#ffd700;"></i><i class="fa fa-star" style="color:#ffd700;"></i><i class="fa fa-star" style="color:#ffd700;"></i><i class="fa fa-star-half"
                        style="color:#ffd700;"></i></p>
                    
                    @auth
                        @if (Auth::user()->books_remaining > 0)
                            <span class="label label-primary">Books Available: {{ Auth::user()->books_remaining }}</span>
                        @else
                            <span class="label label-danger">Books Available: 0 <span style="text-decoration: underline;">upgrade</span></span>
                        @endif
                        
                    @endauth
                    <h2>Description </h2>
                    <p>{{ $book->volumeInfo->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection