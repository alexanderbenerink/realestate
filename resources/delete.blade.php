{{--<?php--}}
{{--use Illuminate\Support\Facades\Auth;--}}
{{--use App\Models\Houses;--}}
{{--?>--}}

{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Real Estate</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
{{--        <style>--}}
{{--            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}--}}
{{--        </style>--}}

{{--        <style>--}}
{{--            body {--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body class="antialiased">--}}
{{--        <x-guest-layout>--}}
{{--            <x-slot name="header">--}}
{{--                <a href="{{ url()->previous() }}">--}}
{{--                    <h2 class="text-2xl font-bold mb-4 text-center">🠔 Return to search</h2>--}}
{{--                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">🠔 Return to {{ ltrim(parse_url(url()->previous(), PHP_URL_PATH), '/') }}</h2>--}}
{{--                </a>--}}
{{--                <h2>Confirm deleting this listing.</h2>--}}
{{--            </x-slot>--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-6 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">{{ Auth::user()->name }}'s dashboard</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Sign in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            bg-gray-100--}}
{{--            <div class="welcome relative flex items-top justify-center bg-gradient-to-r from-indigo-50 to-indigo-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}
{{--                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">--}}
{{--                    <!-- container -->--}}
{{--                    <div class="mt-8 bg-blue-50 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">--}}
{{--                        <div class="grid grid-cols-1 md:grid-cols-2">--}}
{{--                            <div class="p-6">--}}
{{--                                <div class="flex justify-center">--}}
{{--                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>--}}
{{--                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{url('/index')}}" class="underline text-gray-900 dark:text-white">Buy a home</a></div>--}}
{{--                                    <img src="{{ url('./'.$houses->image) }}" class="rounded" width="360">--}}
{{--                                </div>--}}

{{--                                <div class="ml-12">--}}
{{--                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                                        Find your dream house by browsing the available listings in your area.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="p-6 flex flex-col border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">--}}
{{--                            <div class="p-6 flex flex-col">--}}
{{--                                <div class="">--}}
{{--                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>--}}
{{--                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{url('/create')}}" class="underline text-gray-900 dark:text-white">Sell a home</a></div>--}}
{{--                                    <h1 class="text-2xl font-bold mb-2">{{ $houses->address }}</h1>--}}
{{--                                    <p class="text-black font-bold mb-1">{{ $houses->postal_code }}, {{ $houses->city }}</p>--}}
{{--                                    <p class="text-black font-bold mb-4">€{{ number_format($houses->price, 0, '.', ',') }}.-</p>--}}
{{--                                </div>--}}

{{--                                <div class="text-sm">--}}
{{--                                    <p class="text-grey-dark text-sm">{{ $houses->house_type }}</p>--}}
{{--                                    <p class="text-grey-dark text-sm">{{ $houses->surface_area }} m²</p>--}}
{{--                                    <p class="text-grey-dark text-sm">Ingeschreven op {{ $houses->published_at }}</p>--}}
{{--                                    <br />--}}
{{--                                </div>--}}

{{--                                <div class="">--}}
{{--                                    <h3>Beschrijving:</h3>--}}
{{--                                    <p class="text-grey-dark text-sm">{{ $houses->description }}</p>--}}
{{--                                    <br />--}}
{{--                                </div>--}}

{{--                                <div class="flex gap-x-4 mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                                    @if(Auth::id() == $houses->user_id)--}}
{{--                                        <x-button class="py-3 px-5 cursor-not-allowed" title="Delete this listing." type="submit" value="destroy">--}}
{{--                                            {{ __('Delete listing') }}--}}
{{--                                        </x-button>--}}
{{--                                    @else--}}
{{--                                    <a href="#" title="Buy this listing">--}}
{{--                                        <x-button class="py-3 px-5">--}}
{{--                                            {{ __('Log in to delete this') }}--}}
{{--                                        </x-button>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="place-self-center" title="Add this listing to your wishlist">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>--}}
{{--                                        </svg>--}}
{{--                                        --}}{{--                                            Red heart when added.--}}
{{--                                        --}}{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                        --}}{{--                                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>--}}
{{--                                        --}}{{--                                            </svg>--}}
{{--                                    </a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">--}}
{{--                        <div class="text-center text-sm text-gray-500 sm:text-left">--}}
{{--                            <div class="flex items-center">--}}

{{--                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">--}}
{{--                                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>--}}
{{--                                </svg>--}}

{{--                                <a href="https://benerink.online/" class="ml-1" target="_blank">--}}
{{--                                    Made by Alexander Benerink--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">--}}
{{--                            Running on Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </x-guest-layout>--}}
{{--    </body>--}}
{{--</html>--}}
