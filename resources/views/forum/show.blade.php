@extends('layouts.app')

@section('title', "{$thread->title} | Forum")

@section('content')
<div class="h-screen bg-gray-200">
    <div class="container mx-auto pt-4">

        <div class="flex mb-4">
            <div class="w-full md:w-3/4">
                <div class="mb-4 p-4 bg-white rounded">
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
                        <h2 class="font-bold mb-4">{{ $thread->title }}</h2>
                        <p>{{ $thread->body }}</p>
                    </div>
                </div>

                @foreach ($thread->comments as $comment)
                <div class="comments bg-white p-4 rounded mb-4">
                    <div class="flex mb-4">
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop
                        w=2000&q=80" alt="" class="img-circle w-6 rounded-full mr-3 self-start">

                        <a href="#" class="mr-4 text-teal-600 text-sm hover:underline">{{ $comment->user->name }}</a>

                        <p class="text-gray-700 text-sm">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>
                    <p>{{ $comment->body }}</p>
                </div>
                @endforeach

                @guest
                <p class="text-center text-gray-800"><a class="text-teal-600 hover:underline"
                        href="{{route('login')}}">Sign
                        in</a> to participate in this thread!</p>
                @endguest
            </div>

            <h1 class="w-full md:w-1/4 pl-8">something</h1>
        </div>



    </div>
</div>
@endsection