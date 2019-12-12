@extends('layouts.app')

@section('title', 'Forum')

@section('content')
        <div class="bg-white border-b">
            <div class="container mx-auto">
                <div class="flex justify-between py-2">
                    <h1 class="text-xl text-gray-800 self-center">Forum</h1>
                    <form action="" method="">
                        <input type="search" placeholder="Search for threads..." class="py-3 px-2 border-2 border-gray-300 rounded outline-none focus:border-teal-600">
                    </form>
                </div>
            </div>
        </div>

        <div class="h-full bg-gray-200 pt-6">
            <div class="container mx-auto">

                <div class="flex flex-wrap justify-between">
                    <div class="w-full md:w-3/4 bg-white rounded">
                        @foreach ($threads as $thread)
                            <div class="thread-card p-4">
                                <b class="text-gray-800">{{ $thread->title }}</b>
                                <p class="text-gray-600">{{ substr($thread->body, 0, 100)  }}..</p>

                                <div class="flex pt-4">
                                    <div class="flex">
                                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2000&q=80" alt="" class="img-circle w-6 rounded-full mr-3">

                                        <a href="#">
                                            <span class="text-teal-600 text-sm mr-4 hover:underline">{{ $thread->user->name }}</span>
                                        </a>

                                        <p class="text-gray-700 text-sm self-center">{{ $thread->created_at->diffForHumans() }}</p>
                                    </div>

                                    <div class="flex">

                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>

                    <div class="w-full md:w-1/4 pl-8">
                        <a href="" class="block text-center py-2 bg-teal-600 text-white rounded outline-none
                            focus:bg-teal-500 hover:bg-teal-500">Create Thread</a>
                    </div>

                </div>
            </div>
        </div>
@endsection

