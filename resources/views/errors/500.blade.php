@extends('layouts.app')

@section('title', __('Server Error'))

@section('content')
  <div class="container mx-auto">
    <div class="flex flex-col items-center mt-4">
      <h1>500</h1>
      <p>Server Error</p>
    </div>
  </div>
@endsection

@section('message', __('Server Error'))
