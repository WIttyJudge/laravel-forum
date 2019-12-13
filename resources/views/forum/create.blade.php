@extends('layouts.app')

@section('title', 'Create Thread')

@section('content')
    @include('partials.search-field')

    <div class="h-screen bg-gray-200 pt-8">
	    <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="md:w-1/2 lg:w-1/3 my-8 md:my-20">

                    <div class="p-4 bg-gray-100 border-2 rounded">
                        <h1>create</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

