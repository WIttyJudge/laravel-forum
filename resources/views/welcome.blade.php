@extends('layouts.app')

@section('title', config('app.name'))

@section('content')
<div class="container mx-auto">
    <div class="flex flex-col items-center">
        <h1 class="mb-4 text-2xl text-gray-700">You are welcome!</h1>
        <div class="flex">
            <a href="{{route('register')}}"
                class="mr-4 py-4 px-8 text-lg text-white bg-teal-600 hover:bg-teal-500 rounded">Join to
                us</a>
            <a href="{{route('forum.index')}}"
                class="py-4 px-8 text-lg text-white bg-gray-600 hover:bg-gray-500 rounded">Visit the
                Forum</a>
        </div>
    </div>
</div>
@endsection