{{--
    Template Name: Front Page
--}}

@extends('layouts.app')

@section('content')
    @include('partials.heropage.heropage')
    @while(have_posts()) @php(the_post())
        @include('partials.page-header')
        @include('partials.content-page')
    @endwhile
@endsection
