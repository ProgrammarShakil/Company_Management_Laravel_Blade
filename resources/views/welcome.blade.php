@extends('Frontend.master')


@section('frontend-content')

    @include('Frontend.pages.home.home-slider')

    @include('Frontend.pages.home.services')

    @include('Frontend.pages.home.about')

    @include('Frontend.pages.home.product')

    @include('Frontend.pages.home.marketing')

    @include('Frontend.pages.home.team')

    @include('Frontend.pages.home.client')

    {{-- @include('Frontend.pages.home.contact') --}}

    @include('Frontend.pages.home.our_activites')
    
@endsection