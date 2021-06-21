@extends('layouts.app')

@section('content')
<div class="background-image grid grid-col-1 m-auto">
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex ">
        <div class="w-full">
            <section class="flex flex-col break-words bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <h1 class="font-semibold bg-white-200 text-black-700 uppercase text-center py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('welcome back ') }}
                </h1>
                <p class="text-semibold text-black-900 text-center">please sign in to acccount</p>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required>

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>

                    <div class="flex flex-wrap justify-center">
                        <button type="submit"
                        class="text-center rounded-xl bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 py-2 px-4 font-bold uppercase">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('register'))
                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __("Don't have an account?") }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                        @endif
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
</div>
@endsection
