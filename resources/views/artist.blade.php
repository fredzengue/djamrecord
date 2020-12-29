@extends('layout.app')

@section('content')
<section class="player-section set-bg" data-setbg="https://preview.colorlib.com/theme/solmusic/img/player-bg.jpg" style="background-image: url(&quot;https://preview.colorlib.com/theme/solmusic/img/player-bg.jpg&quot;);">
    <div class="player-box">
    <div class="tarck-thumb-warp">
    <div class="tarck-thumb">
    <img src="https://preview.colorlib.com/theme/solmusic/img/wave-thumb.jpg" alt="">
    <button onclick="wavesurfer.playPause();" class="wp-play"></button>
    </div>
    </div>
    <div class="wave-player-warp">
    <div class="row">
    <div class="col-lg-8">
    <div class="wave-player-info">
    <h2>Michael Smith</h2>
    <p>One Night in Ibiza</p>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="songs-links">
    <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-1.png" alt=""></a>
    <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-2.png" alt=""></a>
    <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-3.png" alt=""></a>
    </div>
    </div>
    </div>
    <div id="wavePlayer" class="clierfix">
    <div id="audiowave" data-waveurl="https://preview.colorlib.com/theme/solmusic/music-files/8.mp3"><wave style="display: block; position: relative; user-select: none; height: 80px; overflow: auto hidden;"><wave style="position: absolute; z-index: 3; left: 0px; top: 0px; bottom: 0px; overflow: hidden; width: 0px; display: block; box-sizing: border-box; border-right: 0px solid rgb(51, 51, 51); pointer-events: none;"><canvas width="1213" height="80" style="position: absolute; left: 0px; top: 0px; bottom: 0px; height: 100%; width: 1213px;"></canvas><div id="currentTime"></div></wave><canvas width="1213" height="80" style="position: absolute; z-index: 2; left: 0px; top: 0px; bottom: 0px; height: 100%; pointer-events: none; width: 1213px;"></canvas></wave></div>
    
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
        <h3>Song Details</h3>
        <ul>
        <li><strong>Genre:</strong><span>electro, drum &amp; base, minimal</span></li>
        <li><strong>Tags:</strong><span>quitar, piano, music, electronic music, minimal, chill music, pop, cultural, live, popular</span></li>
        <li><strong>Instruments:</strong><span>quitar, piano, drums, bass</span></li>
        </ul>
        </div>
        </div>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-lg-6">
        <div class="song-details-box">
        <h3>About the Artist</h3>
        <div class="artist-details">
        <img src="https://preview.colorlib.com/theme/solmusic/img/artist.jpg" alt="">
        <div class="ad-text">
        <h5>Michael Smith</h5>
        <span>Artist/ Songwriter</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="song-details-box">
        <h3>Song Details</h3>
        
        <div class="song-item">
        <div class="row">
        <div class="col-xl-5 col-lg-12 col-md-5">
        <div class="song-info-box">
         <img src="https://preview.colorlib.com/theme/solmusic/img/songs/1.jpg" alt="">
        <div class="song-info">
        <h4>Jennifer Brown</h4>
        <p>One Night in Ibiza</p>
        </div>
        </div>
        </div>
        <div class="col-xl-7 col-lg-12 col-md-7">
        <div class="single_player_container">
         <div class="single_player">
        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1" data-url="https://preview.colorlib.com/theme/solmusic/music-files/1.mp3" id="jp_jplayer_0" style="width: 0px; height: 0px;"><img id="jp_poster_0" style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_0" preload="metadata" src="https://preview.colorlib.com/theme/solmusic/music-files/1.mp3" __idm_id__="257596417"></audio></div>
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
        </div>
        </div>
        
        <div class="song-item">
        <div class="row">
        <div class="col-xl-5 col-lg-12 col-md-5">
        <div class="song-info-box">
        <img src="https://preview.colorlib.com/theme/solmusic/img/songs/2.jpg" alt="">
        <div class="song-info">
        <h4>Michael Smith</h4>
        <p>Dream in colors</p>
        </div>
        </div>
        </div>
        <div class="col-xl-7 col-lg-12 col-md-7">
        <div class="single_player_container">
        <div class="single_player">
        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_2" data-url="https://preview.colorlib.com/theme/solmusic/music-files/2.mp3" id="jp_jplayer_1" style="width: 0px; height: 0px;"><img id="jp_poster_1" style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_1" preload="metadata" src="https://preview.colorlib.com/theme/solmusic/music-files/2.mp3" __idm_id__="257596418"></audio></div>
        <div class="jp-audio jp_container_2" role="application" aria-label="media player">
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
            <div class="col-xl-3 col-sm-6">
            <div class="similar-song">
            <img class="ss-thumb" src="https://preview.colorlib.com/theme/solmusic/img/playlist/1.jpg" alt="">
            <h4>Jennifer Brown</h4>
            <p>One Night in Ibiza</p>
            <div class="single_player">
            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_8" data-url="https://preview.colorlib.com/theme/solmusic/music-files/3.mp3" id="jp_jplayer_2" style="width: 0px; height: 0px;"><img id="jp_poster_2" style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_2" preload="metadata" src="https://preview.colorlib.com/theme/solmusic/music-files/3.mp3" __idm_id__="257596419"></audio></div>
            <div class="jp-audio jp_container_8" role="application" aria-label="media player">
            <div class="jp-gui jp-interface">
            
            <div class="ss-controls">
            <div class="songs-links">
            <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-1.png" alt=""></a>
            <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-2.png" alt=""></a>
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
            <div class="col-xl-3 col-sm-6">
            <div class="similar-song">
            <img class="ss-thumb" src="https://preview.colorlib.com/theme/solmusic/img/playlist/2.jpg" alt="">
            <h4>Jennifer Brown</h4>
            <p>One Night in Ibiza</p>
            <div class="single_player">
            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_9" data-url="https://preview.colorlib.com/theme/solmusic/music-files/4.mp3" id="jp_jplayer_3" style="width: 0px; height: 0px;"><img id="jp_poster_3" style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_3" preload="metadata" src="https://preview.colorlib.com/theme/solmusic/music-files/4.mp3" __idm_id__="257596420"></audio></div>
            <div class="jp-audio jp_container_9" role="application" aria-label="media player">
            <div class="jp-gui jp-interface">
            
            <div class="ss-controls">
            <div class="songs-links">
            <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-1.png" alt=""></a>
            <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-2.png" alt=""></a>
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
            <div class="col-xl-3 col-sm-6">
            <div class="similar-song">
            <img class="ss-thumb" src="https://preview.colorlib.com/theme/solmusic/img/playlist/3.jpg" alt="">
            <h4>Jennifer Brown</h4>
            <p>One Night in Ibiza</p>
            <div class="single_player">
            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_10" data-url="https://preview.colorlib.com/theme/solmusic/music-files/5.mp3" id="jp_jplayer_4" style="width: 0px; height: 0px;"><img id="jp_poster_4" style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_4" preload="metadata" src="https://preview.colorlib.com/theme/solmusic/music-files/5.mp3" __idm_id__="257596421"></audio></div>
            <div class="jp-audio jp_container_10" role="application" aria-label="media player">
            <div class="jp-gui jp-interface">
            
            <div class="ss-controls">
            <div class="songs-links">
            <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-1.png" alt=""></a>
            <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-2.png" alt=""></a>
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
            <div class="col-xl-3 col-sm-6">
            <div class="similar-song">
            <img class="ss-thumb" src="https://preview.colorlib.com/theme/solmusic/img/playlist/4.jpg" alt="">
            <h4>Jennifer Brown</h4>
            <p>One Night in Ibiza</p>
            <div class="single_player">
            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_11" data-url="https://preview.colorlib.com/theme/solmusic/music-files/7.mp3" id="jp_jplayer_5" style="width: 0px; height: 0px;"><img id="jp_poster_5" style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_5" preload="metadata" src="https://preview.colorlib.com/theme/solmusic/music-files/7.mp3" __idm_id__="257596422"></audio></div>
            <div class="jp-audio jp_container_11" role="application" aria-label="media player">
            <div class="jp-gui jp-interface">
            
            <div class="ss-controls">
            <div class="songs-links">
            <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-1.png" alt=""></a>
            <a href=""><img src="https://preview.colorlib.com/theme/solmusic/img/icons/p-2.png" alt=""></a>
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