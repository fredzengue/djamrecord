@extends('layout.app')

@section('content')

<section class="category-section spad">
    <div class="container-fluid">
        <div class="section-title">
            <h2>Nouveaux</h2>
        </div>
        <div class="container">
            <div class="category-links">
                <a href="/piste">Piste</a>
                <a href="/artiste" class="active">Artiste</a>
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
            <h2>Artist</h2>
            <hr>
        </div>
        <div class="song-item">
            <div class="row">
                @foreach ($artists as $artist)
                <div class="col-lg-6">
                    <div class="song-info-box">
                        <img src="{{ asset('storage/' . $artist->image)}}" alt="">
                        <div class="song-info">
                            <h4>{{$artist->name}}</h4>
                            <p>{{ nbreAlbum($artist->id)}} Album(s)</p>
                            <p>{{$artist->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="site-pagination pt-5 mt-5">
            {{$artists->links()}}
        </div>
    </div>
</section>
<section class="help-section spad pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mb-0 pb-4">
                    <h2>Besoin d'aide pour chercher une artiste? </h2>
                </div>
                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            </div>
            <div class="col-lg-6">
                <div class="d-flex h-100 align-items-end">
                    <form class="search-form">
                        <input type="text" placeholder="nom">
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