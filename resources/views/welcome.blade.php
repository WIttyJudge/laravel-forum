@extends('layouts.app')

@section('title', config('app.name'))

@section('content')
<div class="container mx-auto">
    <h1>{{ $threadCount }}</h1>
</div>
@endsection
