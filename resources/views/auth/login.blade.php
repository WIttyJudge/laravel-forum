@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="h-screen bg-gray-200">
    <div class="flex justify-center">
        <div class="md:w-1/2 lg:w-1/3 my-8 md:my-20">

            <h1 class="text-4xl font-bold text-gray-700 text-center mb-2">{{ __('Login') }}</h1>

            <div class="rounded p-8 border-gray-600 shadow-xl bg-white">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-col mb-3">
                        <label for="email" class="text-gray-600 uppercase mb-1">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="p-3 rounded border-2 focus:border-teal-600 outline-none"
                            name="email" vrealue="{{ old('email') }}" required autofocus>

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

                    <div class="mb-3">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="text-gray-600 uppercase" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="w-full py-2 mb-3 text-white bg-teal-600 hover:bg-teal-500 focus:bg-teal-500 rounded">
                            {{ __('Login') }}
                        </button>

                        <a class="text-teal-600 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>

                    </div>

                </form>
            </div>

        </div>


    </div>

</div>
@endsection
