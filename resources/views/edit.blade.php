<?php
use Carbon\Carbon;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Real Estate</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/supp.js') }}"></script>
    {{--        <style>--}}
    {{--            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}--}}
    {{--        </style>--}}

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<x-app-layout>
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="welcome relative flex items-top justify-center bg-gradient-to-r from-indigo-50 to-red-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit your listing</h2>
                @if(session()->has('success'))
                    <div class="flex justify-center">
                        <div class="flex items-center bg-green-500 text-white text-sm font-bold px-3 py-2 w-1/3" role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                            <p>{{ session()->get('success') }}</p>
                        </div>
                    </div>
                @elseif(session()->has('error'))
                    <div class="flex justify-center">
                        <div class="flex items-center bg-red-500 text-white text-sm font-bold px-3 py-2 w-1/3" role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                            <p>{{ session()->get('error') }}</p>
                        </div>
                    </div>
                @endif
            </x-slot>

            <!-- container -->
            <form method="POST" action="{{ route('houses.update', $houses->id) }}">
            @method('PATCH')
            @csrf
                <div class="mt-8 bg-gradient-to-r from-red-50 to-yellow-100 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-2 md:grid-cols-2">
                        <!-- User ID -->
                        <div hidden>
                            <x-label for="user_id" :value="__('User ID (Automatic)')" />

                            <x-input id="user_id" class="block mt-1 w-full" type="text" name="user_id" value="{{ Auth::id() }}" placeholder="E.g. 1" required autofocus />
                        </div>
                        <div class="p-6 m-auto">
                            <div class="flex-1">
                                {{--                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>--}}
                                {{--                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{url('/index')}}" class="underline text-gray-900 dark:text-white">Buy a home</a></div>--}}
                                <!-- Image -->
                                <x-label for="image" :value="__('Image')" />

                                <x-input id="image" class="block mt-1 w-full" type="text" name="image" value="{{ $houses->image }}" placeholder="Photo(s) of house" required autofocus />
                            </div>
                        </div>

                        <div class="p-6 flex flex-col border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="">
                               <!-- Address -->
                                <div class="p-2">
                                    <x-label for="address" :value="__('Address')" />

                                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ $houses->address }}" placeholder="E.g. Streetname 123" required autofocus />
                                </div>
                                <!-- Postal code -->
                                <div class="p-2">
                                    <x-label for="postal_code" :value="__('Postal code')" />

                                    <x-input id="postal_code" pattern="[1-9][0-9]{3}\s?[a-zA-Z]{2}" class="block mt-1 w-full" type="text" name="postal_code" value="{{ $houses->postal_code }}" placeholder="E.g. 1234AB" required autofocus />
                                </div>
                                <!-- City -->
                                <div class="p-2">
                                    <x-label for="city" :value="__('City')" />

                                    <x-input id="city" class="block mt-1 w-full" type="text" name="city" value="{{ $houses->city }}" placeholder="E.g. Amsterdam" required autofocus />
                                </div>
                                <!-- Price -->
                                <div class="p-2">
                                    <x-label for="price" :value="__('Price')" />
                                    <div class="flex">
{{--                                        <p class="flex m-auto px-2">€</p>--}}
                                        <x-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{ $houses->price }}" placeholder="Tussen €9.999 - €9.999.999" required autofocus />
                                    </div>

                                </div>
                            </div>

                            <div class="text-sm">
                                <!-- House type -->
                                <div class="p-2">
                                    <x-label for="house_type" :value="__('House type')" />

{{--                                        <x-input id="house_type" class="block mt-1 w-full" type="text" name="house_type" value="{{ $houses->house_type }}" placeholder="Type of house" required autofocus />--}}
                                    <select id="house_type" name="house_type" class="block mt-1 w-full rounded-md border-gray-300 dark:border-gray-700">
                                        <option value="" disabled>Please choose a house type</option>
                                        <option value="{{ $houses->house_type }}" selected>{{ $houses->house_type }}</option>
                                        <option value="Aanleunwoning">Aanleunwoning</option>
                                        <option value="Appartement">Appartement</option>
                                        <option value="Blokhut">Blokhut</option>
                                        <option value="Bungalow">Bungalow</option>
                                        <option value="Grachtenpand">Grachtenpand</option>
                                        <option value="Landhuis">Landhuis</option>
                                        <option value="Rijtjeshuis">Rijtjeshuis</option>
                                        <option value="Twee-onder-een-kap">Twee-onder-een-kap</option>
                                        <option value="Vrijstaand huis">Vrijstaand huis</option>
                                        <option value="Woonboerderij">Woonboerderij</option>
                                    </select>
                                </div>
                                <!-- Surface area -->
                                <div class="p-2">
                                    <x-label for="surface_area" :value="__('Surface area in m²')" />

                                    <x-input id="surface_area" class="block mt-1 w-full" type="number" name="surface_area" value="{{ $houses->surface_area }}" placeholder="E.g. 25m²" required autofocus />
                                </div>
                                <!-- Published at -->
                                <div hidden>
                                    <x-label for="published_at" :value="__('Published at')" />

                                    <x-input id="published_at" class="block mt-1 w-full" type="text" name="published_at" value="{{ Carbon::now()->format('Y-m-d') }}" placeholder="E.g. Y-M-D" required autofocus />
                                </div>
                                <br />
                            </div>

                            <div class="">
                                <!-- Description -->
                                <div class="p-2">
                                    <x-label for="description" :value="__('Description')" />

                                    <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{ $houses->description }}" placeholder="Describe the house" required autofocus />
                                </div>
                                <br />
                            </div>

                            <div class="flex gap-x-4 mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <div class="flex items-center justify-end mt-4">
                                    <x-button class="ml-4" type="submit" value="update">
                                        {{ __('Edit listing') }}
                                    </x-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
