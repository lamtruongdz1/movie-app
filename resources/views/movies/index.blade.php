{{-- @foreach ($getMovie as $movie)
    <input type="hidden" {{ $movie['_id'] }}>
    <a href="/phim/{{ $movie['slug'] }}"><h3>Name :{{ $movie['name'] }}</h3></a>
@endforeach --}}
@extends('layouts.master', ['title' => 'Trang chủ'])
@section('content')
    <!-- SLIDE SECTION -->
    <div class="big-section" id="big-section">
        <!-- BIG SLIDES -->
        <div class="slide-container" id="big-slider">

            @foreach ($getMovie as $movie)
            <div class="big-slide-item">
                <img src="./assets/img/Images/transformer-banner.jpg" alt="Poster">

                <div class="big-slide-item-content">
                    <div class="item-content-wrapper">
                        <div class="item-content-title">
                            {{ $movie['name'] }}
                        </div>

                        <div class="movies-infors ">
                            <div class="movies-infor">
                                <ion-icon name="bookmark-outline"></ion-icon>
                                <span>9.5</span>
                            </div>
                            <div class="movies-infor">
                                <ion-icon name="time-outline"></ion-icon>
                                <span>120 mins</span>
                            </div>
                            <div class="movies-infor">
                                <ion-icon name="cube-outline"></ion-icon>
                                <span>FHD</span>
                            </div>
                        </div>

                        <div class="item-content-description  ">
                            {{ $movie['content'] }}
                        </div>
                    </div>
                </div>

                <div class="play-movies ">
                    <div class="ring"></div>
                    <a href="https://www.youtube.com/watch?v=Q3VKie4pChs">
                        <i class='bx bxs-right-arrow'></i>
                    </a>
                    <div class="btn-watch">
                        <span>watch trailer</span>
                    </div>
                </div>
            </div>


@endforeach
        </div>

        <!--END SLIDE SECTION -->
    @endsection
