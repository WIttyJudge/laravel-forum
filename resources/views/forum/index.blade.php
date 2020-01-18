@extends('layouts.app')

@section('title', 'Larastack | Forum')

@section('content')
    @include('partials.search-field')

    <div class="h-auto bg-gray-200 pt-6">
        <div class="container mx-auto">

            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-3/4 bg-white rounded">
                    @forelse ($threads as $thread)
                        <div class="thread-card p-4">
                            <a href="{{ route('forum.show', $thread->slug) }}"
                                class="text-gray-800 font-bold hover:underline">{{ show_title($thread->title) }}</a>
                            <p class="text-gray-600">{{ $thread->showExcerpt() }}</p>

                            <div class="flex pt-4 items-center">
                                <div class="flex mr-4">
                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2000&q=80" alt="" class="img-circle w-6 rounded-full mr-3">

                                    <a href="#" class="text-teal-600 text-sm mr-4 hover:underline self-center">
                                        {{ $thread->user->name }}
                                    </a>

                                    <p class="text-gray-700 text-sm self-center">{{ $thread->created_at->diffForHumans() }}</p>
                                </div>

                                <div class="flex">
                                    @foreach ($thread->tags as $tag)
                                        <a href="{{ route('tag.show', $tag->slug) }}" class="px-2 py-1 mr-2 text-sm bg-gray-300 text-gray-700 rounded">
                                            {{ $tag->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <hr>

                        @empty
                            <p class="p-4">Has no threads</p>

                    @endforelse
                </div>

                <div class="w-full md:w-1/4 pl-8">
                    <a href=" {{ route('forum.create') }} " class="block text-center py-2 bg-teal-600 text-white rounded outline-none
                        focus:bg-teal-500 hover:bg-teal-500 mb-4">Create Thread</a>

                    <div class="flex flex-col">
                        <b class="text-gray-500 text-xs font-bold tracking-wide uppercase">Tags</b>
                        <ul>
                            <li class="py-1 px-2 text-gray-700">
                                <a href="{{ route('forum.index') }}">All</a>
                            </li>
                            @foreach ($tags as $tag)
                                <li class="py-1 px-2 text-gray-700">
                                    <a href="{{ route('tag.show', $tag->slug) }}">{{ $tag->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

