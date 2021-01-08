@extends('layout.app')

@section('content')

<section class="category-section spad">
    <div class="container-fluid">
        <div class="section-title">
            <h2>Nouveaux</h2>
        </div>
        <div class="container">
            <div class="category-links">
                <a href="/piste" class="active">Piste</a>
                <a href="/artiste">Artiste</a>
                <a href="/album">Album</a>
            </div>
        </div>
        <div class="category-items">
            <div class="row">
                @foreach ($news as $new)
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="{{ asset('storage/' . $new->poster)}}" alt="">
                        <div class="ci-text">
                            <h4>{{$new->title}}</h4>
                            <p>{{$new->artist->name}}</p>
                            <p>Date de sortie: {{ $new->release_date}}</p>
                        </div>
                        <a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="songs-section">
    <div class="container">
        <div class="section-title">
            <h2>Music</h2>
            <hr>
        </div>
        @foreach ($musics as $music)
        <div class="song-item">
            <div class="row">
                <div class="col-lg-4">
                    <div class="song-info-box">
                        <img src="{{ asset('storage/' . $music->poster)}}" alt="">
                        <div class="song-info">
                            <h4>{{$music->artist->name}}</h4>
                            <p>{{$music->title}}</p>
                            <p>{{$music->gender->title}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="single_player_container">
                <div class="single_player">
                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1" data-url="{{ asset('storage/' . $music->url)}}" id="jp_jplayer_0" style="width: 0px; height: 0px;">
                    <img id="jp_poster_0" style="width: 0px; height: 0px; display: none;">
                    <audio id="jp_audio_0" preload="metadata" src="{{ asset('storage/' . $music->url)}}" __idm_id__="118136833"></audio>
                </div>
                <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                <div class="jp-gui jp-interface">

                <div class="player_controls_box">
                <button class="jp-prev player_button" tabindex="0"></button>
                <button class="jp-play player_button" tabindex="0"></button>
                <button class="jp-next player_button" tabindex="0"></button>
                <button class="jp-stop player_button" tabindex="0"></button>
                </div>

                <div class="player_bars">
                <div class="jp-progress">
                <div class="jp-seek-bar" style="width: 100%;">
                <div>
                <div class="jp-play-bar" style="width: 0%;"><div class="jp-current-time" role="timer" aria-label="time">00:00</div></div>
                </div>
                </div>
                </div>
                <div class="jp-duration ml-auto" role="timer" aria-label="duration">01:30</div>
                </div>
                </div>
                <div class="jp-no-solution" style="display: none;">
                <span>Update Required</span>
                To play the media you will need to either update your browser to a recent version or update your <a href="https://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-lg-2">
                <div class="songs-links">
                <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-1.png" alt=""></a>
                <a href="{{ asset('storage/' . $music->poster)}}" download><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-2.png" alt=""></a>
                <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-3.png" alt=""></a>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="site-pagination pt-5 mt-5">{{$musics->links()}}
        </div>
        </div>
        </section>
        <section class="help-section spad pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title mb-0 pb-4">
                            <h2>Besoin d'aide pour chercher une piste? </h2>
                        </div>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex h-100 align-items-end">
                            <form class="search-form">
                                <input type="text" placeholder="piste">
                                <button>Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('extra-js')
<script src="https://preview.colorlib.com/theme/solmusic/js/jquery.jplayer.min.js"></script>
<script src="https://preview.colorlib.com/theme/solmusic/js/jplayerInit.js"></script>
@endsection
