@extends('layouts.app')
@section('fumetto-singolo')
    <div class="card">
        <img src="{{ $prodotto_singolo['thumb'] }}" alt="Image">
        <div class="card-content">
            <h3>{{ $prodotto_singolo['title'] }}</h3>
            <p>{{ $prodotto_singolo['description'] }}</p>
        </div>
    </div>
@endsection
