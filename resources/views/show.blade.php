@extends('layouts.main')

@section('content')
<div class="col col-lg-3 col-md-6 col-sm-12">
    <a href="#">
      <img src="{{ 'https://image.tmdb.org/t/p/w300/'.$movie['poster_path']}}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
      <div class="mt-2">
         <a href="#" class="title">{{$movie['title']}}</a>
        <div class="">
          <span class="ml-1">{{$movie['vote_average']*10 .'%'}}</span>
          <span class="mx-2">|</span>
          <span >{{$movie['release_date']}}</span>
      </div>
  <div class="genre">
     @foreach ($movie['genre_ids'] as $genre)
          {{$genres->get($genre) }}@if (!$loop->last), @endif
     @endforeach
  </div>
</div>
</div>