@extends('partials.layout')
@section('content')
    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="form-control w-full">
            <lable class="lable" for="name">
                <span class="lable-text">{{__('Name')}}</span>
            </lable>
            <x-text-input id="name" class="input input-bordered w-full @error('name') input-error @enderror" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

        </div>

        <!-- Email Address -->
        <div class="mt-4 form-control w-full">
            <lable class="lable" for="email">
                <span class="lable-text">{{__('Email')}}</span>
            </lable>
            <x-text-input id="email" class="input input-bordered w-full @error('email') input-error @enderror" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 form-control w-full">
            <lable class="lable" for="password">
                <span class="lable-text">{{__('Password')}}</span>
            </lable>

            <x-text-input id="password" class="input input-bordered w-full @error('password') input-error @enderror"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 form-control w-full">
            <lable class="lable" for="password_conformation">
                <span class="lable-text">{{__('Password')}}</span>
            </lable>

            <x-text-input id="password_confirmation" class="input input-bordered w-full @error('password_confirmation') input-error @enderror"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
@endsection

