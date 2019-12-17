@extends('layouts.app')

@section('title', 'Create Thread')

@section('content')
    @include('partials.search-field')

    <div class="h-screen bg-gray-200 pt-8">
	    <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="md:w-1/3 lg:w-1/2 my-8 md:my-20">

                    <div class="flex flex-col p-4 bg-gray-100 border-2 rounded">
                        <form action="{{ route('forum.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="title" class="mb-1 text-sm text-gray-700 uppercase">Title</label>
                                <input type="text" name="title" id="title" class="w-full p-3 rounded border-2" maxlength="60" required>
                                <span class="text-gray-600 text-sm">Maximum 60 characters.</span>

                                @error('title')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="flex flex-col mb-4">
                                <label for="body" class="mb-1 text-sm text-gray-700 uppercase">Body</label>
                                <textarea name="body" id="body" class="resize-none border-2 p-3" required rows="10"></textarea>

                                @error('title')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- <div class="flex">
                                <select id="pet-select">
                                    @foreach ($ta as $item)

                                    @endforeach
                                    <option value="">--Please choose an option--</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                    <option value="hamster">Hamster</option>
                                    <option value="parrot">Parrot</option>
                                    <option value="spider">Spider</option>
                                    <option value="goldfish">Goldfish</option>
                                </select>
                            </div> --}}

                            <input type="submit" value="Create Thread" class="py-2 px-4 mr-4 text-white bg-teal-600 rounded cursor-pointer hover:bg-teal-500 focus:bg-teal-500">
                            <a href="{{ route('forum.index') }}" class="text-teal-500 hover:">Cancel</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

