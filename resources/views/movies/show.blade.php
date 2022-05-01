@extends('layouts.master')
@section('title', 'Movie')
@section('content')
    <!-- SECTIONS -->
    <div class="progress-bar" id="progress-bar">
        <a href="#" id="progress-val">
            <ion-icon name="logo-foursquare"></ion-icon>
        </a>
    </div>

    <div class="container">
        <div class="nav bg-color">
            <a href="/" class="logo">
                <i style="margin-right: 10px;" class='bx bx-movie-play bx-tada main-color'></i>Fl<span
                    class="main-color">i</span>x
            </a>

            <form action="" class="search-box">
                <input type="text" name="search" placeholder="Search Your Movie ....." class="nav-search">
                <button type="password">
                    <i class='bx bx-search-alt'></i>
                </button>
            </form>

            <div class="nav-sign">
                <a href="#" class="btn btn-hover">
                    <span>Sign in</span>
                </a>

            </div>
            <div class="menu-toggle">
                <ion-icon name="menu-outline" class="open"></ion-icon>
                <ion-icon name="close-outline" class="close"></ion-icon>
            </div>
        </div>
    </div>
    <section class="movie-banner">
        <div class="hero-wrapper">
            <div class="movie-banner-item">
                <img src="{{ $movieDetails['thumb_url'] }}" alt="">
            </div>

            <div class="movie-card">
                <img src="{{ $movieDetails['thumb_url'] }}" alt="raya">

                <div class="movie-card-content">
                    <h2>{{ $movieDetails['name'] }}</h2>


                    <ul class="movie-card-btns">
                        <li class="movie-card-btn">
                            {{ $movieDetails['category'][0]['name'] }}
                        </li>

                    </ul>

                    <p class="movie-card-description">
                        {!! $movieDetails['content'] !!}
                    </p>

                    <h3>Tập :</h3>
                    <div class="movie-casts">
                        <div class="movie-cast-item">
                            @for ($i = 0; $i < count($slot); $i++)
                                <a href="{{ $slot[$i]['link_embed'] }}">
                                    <button>Tập {{ $i + 1 }}</button>
                                </a>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="international-trailer">
        <div class="trailer-title">
            <h3>international trailer</h3>
        </div>
    </section>

@endsection
