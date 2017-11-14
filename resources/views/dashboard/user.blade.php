@extends('layouts.base')

@section('content')
    <h2 class="text-center">Dashboard</div>

    <h3>Orders</h3><hr>

    @foreach ($orders as $order) 
        <?php $order->fetchBookInformation() ?>
        
        <div class="col-xs-12 col-sm-4 text-center">
            @if (isset($order->book_information->volumeInfo->imageLinks))
                <img src="{{ $order->book_information->volumeInfo->imageLinks->smallThumbnail }}" style="height:200px;">
            @endif

            <h4>{{ $order->book_information->volumeInfo->title }}</h4>
            @if (isset($order->book_information->volumeInfo->authors))
                <h3>Author: {{$order->book_information->volumeInfo->authors[0]}}</h3>
            @else
                No Author Available
            @endif


            <h3></h3>

            <p>
            @if (isset($order->book_information->searchInfo))
                {!! str_limit($order->book_information->searchInfo->textSnippet, 200) !!}
            @elseif(isset($order->book_information->volumeInfo->description))
                {!! str_limit($order->book_information->volumeInfo->description , 200) !!}
            @else
                No Description Available
            @endif
            </p>
            {{--  <div class="progress">
                <div class="progress-bar progress-bar-striped active progress-bar-warning active" role="progressbar"
                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    {{ dd($orderModel::where('book_id', $book->id)) }}
                    {{ $orderModel::where('book_id', $book->id)->first()->status }}
                </div>
            </div>  --}}
        </div>
    @endforeach
@endsection