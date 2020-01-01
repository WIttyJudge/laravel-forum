@extends('layouts.app')

@section('title', __('Service Unavailable'))

@section('content')
  <div class="container mx-auto">
    <div class="flex flex-col items-center mt-4">
      <h1>403</h1>
      <p>Service Unavailable</p>
    </div>
  </div>
@endsection

@section('message', __($exception->getMessage() ?: 'Service Unavailable'))
