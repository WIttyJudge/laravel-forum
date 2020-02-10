@extends('layouts.app')

@section('title', 'Create Thread')

@section('content')
<div class="bg-white border-b">
    <div class="container mx-auto">
        <div class="flex justify-between py-2">
            <h1 class="text-xl text-gray-800 self-center">Forum</h1>
            <form action="{{ route('forum.search.thread') }}" method="POST">
                @csrf
                <input type="search" name="search" placeholder="Search for threads..."
                    class="py-3 px-2 border-2 border-gray-300 rounded outline-none focus:border-teal-600">
            </form>
        </div>
    </div>
</div>F

<div class="h-screen bg-gray-200 pt-8">
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="md:w-1/3 lg:w-1/2 my-8 md:my-20">

                <div class="flex flex-col p-4 shadow-xl bg-white rounded">
                    <form action="{{ route('forum.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="title" class="mb-1 text-sm text-gray-700 uppercase">Title</label>
                            <input type="text" name="title" id="title" class="w-full p-3 rounded border-2"
                                maxlength="60" required>
                            <span class="text-gray-600 text-sm">Maximum 60 characters.</span>

                            @error('title')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="flex flex-col mb-4">
                            <label for="body" class="mb-1 text-sm text-gray-700 uppercase">Body</label>
                            <textarea name="body" id="body" class="resize-none border-2 p-3" required
                                rows="10"></textarea>

                            @error('title')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="tag-select"></label>

                            <select name="tags[]" id="tag-select" multiple>
                                @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="submit" value="Create Thread"
                            class="py-2 px-4 mr-4 text-white bg-teal-600 rounded cursor-pointer hover:bg-teal-500 focus:bg-teal-500">
                        <a href="{{ route('forum.index') }}" class="text-teal-500 hover:">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection