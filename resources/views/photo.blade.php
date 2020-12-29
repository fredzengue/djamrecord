@extends('layout.app')

@section('content')
<section class="playlist-section spad">
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
        <h2>Besoin d'aide pour chercher une photo? </h2>
        </div>
        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
        </div>
        <div class="col-lg-6">
        <div class="d-flex h-100 align-items-end">
        <form class="search-form">
        <input type="text" placeholder="Titre">
        <button>Search</button>
        </form>
        </div>
        </div>
        </div>
        </div>
        </section>
@endsection
