@extends('layout.app')

@section('content')
<section class="player-section set-bg" data-setbg="https://preview.colorlib.com/theme/solmusic/img/player-bg.jpg" style="background-image: url(&quot;https://preview.colorlib.com/theme/solmusic/img/player-bg.jpg&quot;);">
    <div class="player-box">
    <div class="tarck-thumb-warp">
    <div class="tarck-thumb">
    <img src="{{ asset('storage/' . $piste->poster)}}" alt="">
    <button onclick="wavesurfer.playPause();" class="wp-play"></button>
    </div>
    </div>
    <div class="wave-player-warp">
    <div class="row">
    <div class="col-lg-8">
    <div class="wave-player-info">
    <h2>{{getArtist($piste->artist_id)->name}}</h2>
    <p>{{$piste->title}}</p>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="songs-links">
    <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-1.png" alt=""></a>
    <a href="{{ asset('storage/' . $piste->url)}}" download><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-2.png" alt=""></a>
    <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-3.png" alt=""></a>
    </div>
    </div>
    </div>
    <div id="wavePlayer" class="clierfix">
    <div id="audiowave" data-waveurl="{{ asset('storage/' . $piste->url)}}"><wave style="display: block; position: relative; user-select: none; height: 80px; overflow: auto hidden;"><wave style="position: absolute; z-index: 3; left: 0px; top: 0px; bottom: 0px; overflow: hidden; width: 0px; display: block; box-sizing: border-box; border-right: 0px solid rgb(51, 51, 51); pointer-events: none;"><canvas width="1213" height="80" style="position: absolute; left: 0px; top: 0px; bottom: 0px; height: 100%; width: 1213px;"></canvas><div id="currentTime"></div></wave><canvas width="1213" height="80" style="position: absolute; z-index: 2; left: 0px; top: 0px; bottom: 0px; height: 100%; pointer-events: none; width: 1213px;"></canvas></wave></div>

    <div id="clipTime">02:20</div>

    <div class="wavePlayer_controls">
    <button class="jp-prev player_button" onclick="wavesurfer.skipBackward();"></button>
    <button class="jp-play player_button" onclick="wavesurfer.playPause();"></button>
    <button class="jp-next player_button" onclick="wavesurfer.skipForward();"></button>
    <button class="jp-stop player_button" onclick="wavesurfer.stop();"></button>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section class="songs-details-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="song-details-box">
                        <h3>Détails du song</h3>
                        <ul>
                            <li><strong>Titre:</strong><span>{{$piste->title}}</span></li>
                            <li><strong>Genre:</strong><span>{{getGenre($piste->gender_id)->title}}</span></li>
                            <li><strong>Album:</strong><span>{{getAlbum($piste->album_id)->title}}</span></li>
                            <li><strong>Date de sortie:</strong><span>{{$piste->release_date}}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="song-details-box">
                                <h3>Apropos de l'artiste</h3>
                                <div class="artist-details">
                                    <img src="{{ asset('storage/' . getArtist($piste->artist_id)->image)}}" alt="">
                                    <div class="ad-text">
                                        <h5>{{getArtist($piste->artist_id)->name}}</h5>
                                        <p>{!! getArtist($piste->artist_id)->biography !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="song-details-box">
                                <h3>Nouveautés</h3>

                                @foreach ($news as $i => $new)
                                <div class="song-item">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="song-info-box">
                                                <img src="{{ asset('storage/' . $new->poster)}}" alt="">
                                                <div class="song-info">
                                                    <h4>{{$new->artist->name}}</h4>
                                                    <p>{{$new->title}}</p>
                                                    <p>{{$new->gender->title}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single_player_container">
                                                <div class="single_player">
                                                    <div class="jp-jplayer jplayer" data-ancestor=".jp_container_{{$i+1}}" data-url="{{ asset('storage/' . $new->url)}}" id="jp_jplayer_{{$i}}" style="width: 0px; height: 0px;">
                                                        <img id="jp_poster_{{$i}}" style="width: 0px; height: 0px; display: none;">
                                                        <audio id="jp_audio_{{$i}}" preload="metadata" src="{{ asset('storage/' . $new->url)}}" __idm_id__="118136833"></audio>
                                                    </div>
                                                    <div class="jp-audio jp_container_{{$i+1}}" role="application" aria-label="media player">
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
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="similar-songs-section">
        <div class="container-fluid">
            <h3>Similar Songs</h3>
            <div class="row">
                @foreach (similars($piste->gender_id) as $a=> $similar)
                    <div class="col-xl-3 col-sm-6">
                        <div class="similar-song">
                            <img class="ss-thumb" src="{{ asset('storage/' .$similar->poster )}}" alt="">
                            <h4>{{getArtist($similar->artist_id)->name}}</h4>
                            <p>{{$similar->title}}</p>
                            <div class="single_player">
                                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_{{$news->total() + $a+1}}" data-url="{{ asset('storage/' . $similar->url)}}" id="jp_jplayer_{{$news->total() + $a}}" style="width: 0px; height: 0px;">
                                    <img id="jp_poster_{{$news->total() + $a}}" style="width: 0px; height: 0px; display: none;">
                                    <audio id="jp_audio_{{$news->total() + $a}}" preload="metadata" src="{{ asset('storage/' . $similar->url)}}" __idm_id__="257596422"></audio>
                                </div>
                                <div class="jp-audio jp_container_{{$news->total() + $a+1}}" role="application" aria-label="media player">
                                    <div class="jp-gui jp-interface">

                                        <div class="ss-controls">
                                            <div class="songs-links">
                                                <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-1.png" alt=""></a>
                                                <a href="{{ asset('storage/' . $similar->url)}}" download><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-2.png" alt=""></a>
                                                <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-3.png" alt=""></a>
                                            </div>
                                            <div class="player_controls_box">
                                                <button class="jp-prev player_button" tabindex="0"></button>
                                                <button class="jp-play player_button" tabindex="0"></button>
                                                <button class="jp-next player_button" tabindex="0"></button>
                                                <button class="jp-stop player_button" tabindex="0"></button>
                                            </div>
                                        </div>

                                        <div class="player_bars">
                                            <div class="jp-progress">
                                                <div class="jp-seek-bar" style="width: 100%;">
                                                    <div>
                                                        <div class="jp-play-bar" style="width: 0%;"><div class="jp-current-time" role="timer" aria-label="time">00:00</div></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp-duration ml-auto" role="timer" aria-label="duration">02:04</div>
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
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('extra-js')

    <script src="https://preview.colorlib.com/theme/solmusic/js/jquery.jplayer.min.js"></script>
    <script src="https://preview.colorlib.com/theme/solmusic/js/wavesurfer.min.js"></script>
    <script src="https://preview.colorlib.com/theme/solmusic/js/WaveSurferInit.js"></script>
    <script src="https://preview.colorlib.com/theme/solmusic/js/jplayerInit.js"></script>

@endsection
