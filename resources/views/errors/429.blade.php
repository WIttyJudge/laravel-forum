@extends('layouts.app')

@section('title', __('Too Many Requests'))

@section('content')
  <div class="container mx-auto">
    <div class="flex flex-col items-center mt-4">
      <h1>429</h1>
      <p>Too Many Requests</p>
    </div>
  </div>
@endsection

@section('message', __('Too Many Requests'))
