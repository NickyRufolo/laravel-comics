{{-- Con questa direttiva blade estendiamo il layout della pagina --}}
@extends('layouts.app')

@section('page-title', 'Welcome to DC Comics')

@section('name')
    @include('components.comics')
@endsection
