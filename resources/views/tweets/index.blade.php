@extends('layouts.app')

@section('content')
    @include('components._publishing_tweet-panel')
    @include('components._timeline',['tweets'=>current_user()->timeline()])
@endsection
