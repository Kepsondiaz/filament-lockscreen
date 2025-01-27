<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Vite -->
    @vite(['resources/css/app.css'])
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <x-authentication-card-logo/>
            </a>
        </div>

        <div class="pt-2 text-center">
            <a class="underline text-sm text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-gray-800"
               href="{{ route('locked.create') }}">
                {{ __('Create new PIN code') }}
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Your account has been locked due to inactivity. Please enter your PIN code to continue.') }}
            </div>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="mb-4">
                    <div class="font-medium text-red-600">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('message'))
                <div class="mt-3 font-medium text-green-600">
                    {{ session('message') }}
                </div>
            @endif

            @if (session('havePin'))
                <div class="mt-3 font-medium text-green-600">
                    {{ session('havePin') }}
                </div>
            @endif

            <form method="POST" action="{{ route('locked.submit') }}">
                @csrf
                <div>
                    <label class="block font-medium text-sm text-gray-700" for="pin">{{ __('PIN code') }}</label>

                    <input
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                        id="pin" type="text" maxlength="4" pattern="\d{4}" name="pin" required="required"
                        autocomplete="pin-code">
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-gray-800 px-4"
                       href="{{ route('locked.update') }}">
                        {{ __('Reset your PIN code') }}
                    </a>
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                        {{ __('Unlock') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
