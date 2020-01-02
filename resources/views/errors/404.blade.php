@extends('layouts.app')

@section('title', __('Not Found'))

@section('content')
  <div class="container mx-auto">
    <div class="flex flex-col items-center mt-4">
      <h1>Page not found</h1>
      <p>The page you requested cannot be found.</p>
    </div>
  </div>
@endsection

@section('message', __('Not Found'))
