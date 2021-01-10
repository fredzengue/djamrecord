@extends('layout.app')

@section('content')
<section class="playlist-section spad">
    <header class="text-center mb-5">
        @if (request()->input())
            <h1>
            Recherche de : <span> "{{ request()->photo  }}"</span>
            </h1>
            <p>{{ $photos->total()}} résultat(s) </p>
        @endif
    </header>
    <div class="container-fluid">
        <div class="section-title">
            <h2>Photos</h2>
        </div>
        <div class="clearfix"></div>
        <div class="row playlist-area" id="MixItUp9CB345">
            @foreach ($photos as $photo)
            <div class="mix col-lg-3 col-md-4 col-sm-6 genres">
                <div class="playlist-item">
                    <img src="{{ asset('storage/' . $photo->poster)}}" alt="">
                    <h5>{{$photo->title}}</h5>
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
                    <h2>Besoin d'aide pour chercher une photo ? </h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex h-100 align-items-end">
                    <form class="search-form" action="{{ route('photo.search') }}">
                        <input type="text" name="photo" value="{{ request()->photo ?? ''}}"  placeholder="Tapez votre recherche ici">
                        <button type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
