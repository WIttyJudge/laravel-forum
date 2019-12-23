@extends('layouts.app')

@section('title', "{$thread->title} | Forum")

@section('content')
    <div class="h-screen bg-gray-200">
        <div class="container mx-auto pt-4">

            <div class="flex">
                <div class="w-full md:w-3/4 p-4 rounded bg-white">
                    <div class="flex mb-4">
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop
                        w=2000&q=80" alt="" class="img-circle w-6 rounded-full mr-3 self-start">

                        <a href="#" class="text-teal-600 text-sm mr-4 hover:underline">
                            {{ $thread->user->name }}
                        </a>

                        <p class="text-gray-700 text-sm mr-4">{{ $thread->created_at->diffForHumans() }}</p>

                        @foreach ($thread->tags as $tag)
                            <span class="text-sm px-2 py-1 bg-gray-300 text-gray-700 rounded mr-2">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>

                    <div>
                        <h2>{{ $thread->title }}</h2>
                        <p>{{ $thread->body }}</p>
                    </div>
                </div>

                <h1 class="w-full md:w-1/4 pl-8">something</h1>
            </div>
        </div>
    </div>
@endsection

