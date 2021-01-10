@extends('layout.app')

@section('content')
<section class="playlist-section spad">
    <div class="container-fluid">
        <div class="section-title">
        <h2>Vidéo</h2>
        </div>
        <div class="clearfix"></div>
        <div class="row playlist-area" id="MixItUp9CB345">
            @foreach ($videos as $video)
            <div class="mix col-lg-3 col-md-4 col-sm-6 genres">
                <div class="category-item playlist-item">
                    <img src="{{ asset('storage/' . $video->poster)}}" alt="">
                    <div class="ci-text">
                        <h4>{{$video->title}}</h4>
                        <p>{!! $video->description !!}</p>
                        <p>{{$video->release_date}}</p>
                    </div>
                    <a href="{{route('video.play', $video->id)}}" class="ci-link"><i class="fa fa-play"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="help-section spad pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mb-0 pb-4">
                    <h2>Besoin d'aide pour chercher une video ? </h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex h-100 align-items-end">
                    <form class="search-form" action="{{ route('video.search') }}">
                        <input type="text" name="video" value="{{ request()->video ?? ''}}"  placeholder="Tapez votre recherche ici">
                        <button type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
