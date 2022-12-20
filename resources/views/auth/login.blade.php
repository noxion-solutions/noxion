@extends('noxion-layouts.app')
@section('content')
<div id="main-wrapper" class="page-wrapper" style="margin-top: 100px;">
    <div class="dc-signin theme-two">
        <div class="signin-wrapper">
            <div class="intro-box">
                <div class="intro-content style-dark">
                    <img src="{{asset('noxion-resources/images/noxionlogowhite.png')}}" class="logo" alt="DCode">
                    <div class="heading-wrapper">
                        {{-- <h2 class="h1">Welcome to <span>DCode</span></h2> --}}
                    </div>
                    <div class="text-wrapper">
                        <p>This sign in is purposed for Staff Only. Redirect if you are lost.</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="btn btn-primary btn-light" href="{{route('/')}}">Go to Home</a>
                    </div>
                </div>
                <div class="st-tab-btn">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#SignIn" role="tab">Login</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#SignUp" role="tab">Register</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="form-box">
                <div class="st-tab-content">
                    <div class="tab-content">
                        <div class="tab-pane active" id="SignIn" role="tabpanel">
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Enter Password">
                                </div>
                                {{-- <div class="form-group text-center">
                                    <a href="#" class="btn link-btn forgot-link">Forgot Password?</a>
                                </div> --}}
                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary btn-full">Sign In</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header -->
</div>
@endsection
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}