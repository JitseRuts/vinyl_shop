@extends('layouts.template')

@section('title', 'Itunes')

@section('main')
    <h1>iTunes <small>{{ $feed['title'] }} - <span class="text-uppercase">{{$feed['country']}}</small></span></h1>
    <p>Last updated: {{date('F d Y', strtotime($feed['updated']))}}</p>
    <div class="row">
        @foreach($feed['results'] as $song)
            <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-stretch">
                <div class="card mb-3 shadow">
                    <img src="{{str_replace("100x100", "500x500", $song['artworkUrl100'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$song['artistName']}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$song['name']}}</h6>
                        <hr>
                        <p>
                            <span class="text-muted">Genre</span>: {{$song['genres'][0]['name']}}<br>
                            <span class="text-muted">Artist URL</span>: <a
                                href={{$song['artistUrl']}} target="_blank">{{$song['artistName']}}</a><br>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

