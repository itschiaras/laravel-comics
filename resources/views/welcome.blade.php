@extends('layouts.app')

@section('content')
    <div class="jumbo">
        <button class="text-uppercase border-0 cSeries">current series</button>
    </div>
    <div class="bg-dark">
        <div class="contentContainer container ">
            <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6">
                @foreach ($comics as $comic)
                <div class="col pt-5 pb-5">
                    <div class="text-center">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </div>
                    <h5 class="text-white text-center text-uppercase mt-2">{{ $comic['title'] }}</h5>
                </div>
                @endforeach

                <div class="w-100 d-flex justify-content-center">
                    <button class="text-uppercase border-0">load more</button>
                </div>
            </div>

        </div>
    </div>
@endsection
