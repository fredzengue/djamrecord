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
                <a href="/artiste">Artiste</a>
                <a href="/playlist" class="active">Album</a>
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
                                <p>Date de sortie {{ $new->release_date}}</p>
                            </div>
                            <a href="{{route('piste.play', $new->id)}}" class="ci-link"><i class="fa fa-play"></i></a>
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
            <h2>Album</h2>
            <hr>
        </div>
        <div class="song-item">
            <div class="row">
                @foreach ($albums as $album)
                <div class="col-lg-6">
                    <div class="song-info-box">
                        <img src="{{ asset('storage/' . $album->poster)}}" alt="">
                        <div class="song-info">
                            <a href="{{route('album.play', $album->id)}}"><h4>{{$album->title}}</h4></a>
                            <p>{{ nbrePiste($album->id)}} Piste(s)</p>
                            <p>date de sortie {{ $album->release_date}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="site-pagination pt-5 mt-5">
            {{$albums->links()}}
        </div>
    </div>
</section>
<section class="help-section spad pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mb-0 pb-4">
                    <h2>Besoin d'aide pour chercher un album ? </h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex h-100 align-items-end">
                    <form class="search-form" action="{{ route('album.search') }}">
                        <input type="text" name="album" value="{{ request()->album ?? ''}}"  placeholder="Tapez votre recherche ici">
                        <button type="submit">Rechercher</button>
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
