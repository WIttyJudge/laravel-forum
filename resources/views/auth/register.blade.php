@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="h-screen bg-gray-200">
    <div class="flex justify-center">
        <div class="md:w-1/2 lg:w-1/3 my-8 md:my-20">

            <div class="text-4xl font-bold text-gray-700 text-center mb-2">{{ __('Register') }}</div>

            <div class="rounded p-8 border-gray-600 shadow-xl bg-white">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-col mb-3">
                        <label for="name" class="text-gray-600 uppercase mb-1">{{ __('Name') }}</label>

                        <input id="name" type="text" class="p-3 rounded border-2 focus:border-teal-600 outline-none"
                            name="name" value="{{ old('name') }}" placeholder="Alex Smith" required autofocus>

                        @error('name')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="email" class="text-gray-600 uppercase mb-1">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="p-3 rounded border-2 focus:border-teal-600 outline-none"
                            name="email" value="{{ old('email') }}" placeholder="e.g. alexsmith@gmail.com" required>

                        @error('email')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="password" class="text-gray-600 uppercase mb-1">{{ __('Password') }}</label>

                        <input id="password" type="password"
                            class="p-3 rounded border-2 focus:border-teal-600 outline-none" name="password" required>

                        @error('password')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="password-confirm"
                            class="text-gray-600 uppercase mb-1">{{ __('Confirm Password') }}</label>

                        <input id="password-confirm" type="password"
                            class="p-3 rounded border-2 focus:border-teal-600 outline-none" name="password_confirmation"
                            required>
                    </div>


                    <button type="submit"
                        class="p-2 bg-teal-600 text-white rounded hover:bg-teal-500 focus:bg-teal-500">
                        {{ __('Register') }}
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
