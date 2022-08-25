<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
   <link rel="stylesheet" href="{{asset('css/styles.css') }}"> 
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e489a217bf.js" crossorigin="anonymous"></script>
  <title>Movie App</title>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>
<body>
    {{-- <section class="top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h2>TMDB</h2></a>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="true"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Movie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">TV Shows</a>
              </li>
              <li class="nav-item">
                <a class="nav-link "
                  >People</a
                >
              </li>
            </ul>
            <form class="d-flex input-group w-auto">
              <input
                type="search"
                class="form-control"
                placeholder="Search For A Movie"
                aria-label="Search"
              />
              <button
                class="btn btn-outline-primary"
                type="button"
                data-mdb-ripple-color="dark"
              >
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
    </section> --}}
    @include('components.navbar')

    <main id="main" class="index">
    <section class="inner_content new_index">
        <div id="media_v4" class="container-fluid justify-content-left media discover">
          <div class="column_wrapper">
            <div class="content_wrapper wrap">
              <div class="title2">
                <h2>Welcome.</h2>
                <h3>Millions of movies, TV shows and people to discover. Explore now.</h3>
              </div>
  
              <div class="searching">
                <form id="inner_search_form" action="/search" method="get" accept-charset="utf-8">
                  <label>
                    <input dir="auto" id="inner_search_v4" name="query" type="text" tabindex="1" autocorrect="off" autofill="off" autocomplete="off" spellcheck="false" placeholder="Search for a movie, tv show, person......" value="">
                  </label>
                  <input type="submit" value="Search" class="searchbox">
                </form>
              </div>
  
            </div>
          </div>
        </div>
      </section>

{{-- get popular movies --}}

<section id="popular">
   <h1 class="text-lg">Popular Movies</h1>
   <div class="container ">
    <div class="row">
         @foreach ($popularMovies as $movie )
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
        @endforeach
    </div>
   </div>
</section>
<hr>
{{-- get now playing --}}
<section id="popular">
    <h1 class="text-lg">Now Playing</h1>
    <div class="container ">
     <div class="row">
          @foreach ($nowPlayingMovies as $movie )
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
 
         @endforeach
     </div>
    </div>
 </section>



{{-- <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
     
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="op">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 op">
            <!-- Content -->

            <h3 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>TMDB
            </h3>
            <h3>
              Hey Binge Watcher!
            </h3>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h5 class="text-uppercase fw-bold mb-4">
              The Basics
            </h5>
            <p>
              <a href="#!" class="text-reset">About IMDB</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Contact Us</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Support Forum</a>
            </p>
            <p>
              <a href="#!" class="text-reset">API</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h5 class="text-uppercase fw-bold mb-4">
              Community
            </h5>
            <p>
              <a href="#!" class="text-reset">Guidelines</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Discussions</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Leaderboard</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Twitter</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h5 class="text-uppercase fw-bold mb-4">Legal</h5>
            <p>Terms Of Use</p>
            <p>Api Terms Of Use</p>
            <p>Privacy Policy</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="#">TMDB</a>
    </div>
    <!-- Copyright -->
  </footer> --}}
  @include('components.footer')
  <!-- Footer -->
</body>
</html>