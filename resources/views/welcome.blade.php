@extends('layouts.app')

@section('content')



<div class="container-fluid p-0">
    @include('pages.about')
    @include('pages.experience')
    @include('pages.education')
    @include('pages.skills')
    @include('pages.interests')
    @include('pages.awards')
</div>

@endsection
