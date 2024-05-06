@extends('layouts.app')

@section('pageTitle', 'Home page')

@section('content')

<div class="container">
    <div class="row">

        @foreach($movies as $movie)
        <div class="col-4">
            <div class="card">

                <img src="https://picsum.photos/400/200" alt="">
                <h3 class="title">{{$movie['title']}}</h3>
                <h6 class="original_title">{{$movie['original_title']}}</h6>
                <div class="details">
                    <span class="nationality">{{$movie['nationality']}}</span>
                    <span class="date">{{$movie['date']}}</span>
                </div>
                <div class="vote">{{$movie['vote']}}</div>                
            
            </div>
        </div>
        @endforeach

        {{-- {{$movies->links()}} --}}
    </div>
</div>

@endsection