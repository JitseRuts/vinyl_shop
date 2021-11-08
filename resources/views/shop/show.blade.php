@extends('layouts.template')

@section('title', $record->title)

@section('main')
    <h1>{{ $record->title }}</h1>
    <div class="row">
        <div class="col-sm-4 text-center">
            <img class="img-thumbnail" id="cover" src="/assets/vinyl.png" data-src="{{ $record->cover }}"
                 alt="{{ $record->title }}">
            <p>
                <a href="#!" class="btn {{ $record->btnClass }} btn-sm btn-block mt-3
                 {{ $record->stock == 0 ? 'disabled' : '' }}">
                    <i class="fas fa-cart-plus mr-3"></i>Add to cart
                </a>
            </p>
            <p class="text-left">Genre: {{ $record->genreName }}<br>
                Stock: {{ $record->stock }}<br>
                Price: € {{ number_format($record->price,2) }}</p>
        </div>
        <div class="col-sm-8">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Track</th>
                    <th>Length</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tracks as $track)
                    <tr>
                        <td>{{ $track['position'] }}</td>
                        <td>{{ $track['title'] }}</td>
                        <td>{{ $track['length'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script_after')
    <script>
        $(function () {
            // Replace vinyl.png with real cover
            $('#cover').attr('src', $('#cover').data('src'));
        });
    </script>
@endsection
