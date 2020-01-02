@extends('layouts.app')

@section('title', __('Unauthorized'))

@section('content')
  <div class="container mx-auto">
    <div class="flex flex-col items-center mt-4">
      <h1>401</h1>
      <p>Unauthorized.</p>
    </div>
  </div>
@endsection


@section('message', __('Unauthorized'))
