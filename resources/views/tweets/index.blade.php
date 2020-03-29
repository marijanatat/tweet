@extends('layouts.app')

@section('content')
  @include('_panel')
  <div class="border border-gray-300 rounded-lg">
      @foreach ($tweets as $tweet)
      @include('_one_tweet')
          
      @endforeach
  </div>
@endsection