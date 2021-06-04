<?php
use Carbon\Carbon;
?>

<x-app-layout>

{{--    <x-crud-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <img src="images/logo.png" width="192" height="192">--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('houses.store') }}">--}}
{{--            @csrf--}}

{{--            <!-- User ID -->--}}
{{--                <div hidden>--}}
{{--                    <x-label for="user_id" :value="__('User ID (Automatic)')" />--}}

{{--                    <x-input id="user_id" class="block mt-1 w-full" type="text" name="user_id" value="{{ Auth::id() }}" placeholder="E.g. 1" required autofocus />--}}
{{--                </div>--}}

{{--            <!-- Address -->--}}
{{--            <div>--}}
{{--                <x-label for="address" :value="__('Address')" />--}}

{{--                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" placeholder="E.g. Streetname 123" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- City -->--}}
{{--            <div>--}}
{{--                <x-label for="city" :value="__('City')" />--}}

{{--                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" placeholder="E.g. Amsterdam" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Price -->--}}
{{--            <div>--}}
{{--                <x-label for="price" :value="__('Price')" />--}}

{{--                <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" placeholder="Fill in a price" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Image -->--}}
{{--            <div>--}}
{{--                <x-label for="image" :value="__('Image')" />--}}

{{--                <x-input id="image" class="block mt-1 w-full" type="text" name="image" :value="old('image')" placeholder="Photo(s) of house" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- House type -->--}}
{{--            <div>--}}
{{--                <x-label for="house_type" :value="__('House type')" />--}}

{{--                <x-input id="house_type" class="block mt-1 w-full" type="text" name="house_type" :value="old('house_type')" placeholder="Type of house" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Description -->--}}
{{--            <div>--}}
{{--                <x-label for="description" :value="__('Description')" />--}}

{{--                <x-textarea id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />--}}
{{--                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" placeholder="Describe the house" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Postal code -->--}}
{{--            <div>--}}
{{--                <x-label for="postal_code" :value="__('Postal code')" />--}}

{{--                <x-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')" placeholder="E.g. 1234AB" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Surface area -->--}}
{{--            <div>--}}
{{--                <x-label for="surface_area" :value="__('Surface area in m²')" />--}}

{{--                <x-input id="surface_area" class="block mt-1 w-full" type="text" name="surface_area" :value="old('surface_area')" placeholder="E.g. 25m²" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Published at -->--}}
{{--            <div hidden>--}}
{{--                <x-label for="published_at" :value="__('Published at')" />--}}

{{--                <x-input id="published_at" class="block mt-1 w-full" type="text" name="published_at" value="{{ Carbon::now()->format('Y-m-d') }}" placeholder="E.g. Y-M-D" required autofocus />--}}
{{--            </div>--}}

{{--                <div class="flex items-center justify-end mt-4">--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Submit house') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-crud-card>--}}

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

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
    <div class="welcome relative flex items-top justify-center bg-gradient-to-r from-indigo-50 to-red-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Submit a listing.</h2>
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
            <form method="POST" action="{{ route('houses.store') }}">
            @csrf
                <div class="mt-8 bg-gradient-to-r from-red-50 to-yellow-100 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
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

                                    <x-input id="image" class="block mt-1 w-full" type="text" name="image" :value="old('image')" placeholder="Photo(s) of house" required autofocus />
                                </div>
                            </div>

                            <div class="p-6 flex flex-col border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                <div class="">
                                   <!-- Address -->
                                    <div class="p-2">
                                        <x-label for="address" :value="__('Address')" />

                                        <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" placeholder="E.g. Streetname 123" required autofocus />
                                    </div>
                                    <!-- Postal code -->
                                    <div class="p-2">
                                        <x-label for="postal_code" :value="__('Postal code')" />

                                        <x-input id="postal_code" pattern="[1-9][0-9]{3}\s?[a-zA-Z]{2}" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')" placeholder="E.g. 1234AB" required autofocus />
                                    </div>
                                    <!-- City -->
                                    <div class="p-2">
                                        <x-label for="city" :value="__('City')" />

                                        <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" placeholder="E.g. Amsterdam" required autofocus />
                                    </div>
                                    <!-- Price -->
                                    <div class="p-2">
                                        <x-label for="price" :value="__('Price')" />

                                        <x-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" placeholder="Tussen €9.999 - €9.999.999" required autofocus />
                                    </div>
                                </div>

                                <div class="text-sm">
                                    <!-- House type -->
                                    <div class="p-2">
                                        <x-label for="house_type" :value="__('House type')" />

{{--                                        <x-input id="house_type" class="block mt-1 w-full" type="text" name="house_type" :value="old('house_type')" placeholder="Type of house" required autofocus />--}}
                                        <select id="house_type" name="house_type" class="block mt-1 w-full rounded-md border-gray-300 dark:border-gray-700">
                                            <option value="" disabled selected>Please choose a house type</option>
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

                                        <x-input id="surface_area" class="block mt-1 w-full" type="number" name="surface_area" :value="old('surface_area')" placeholder="E.g. 25m²" required autofocus />
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

                                        <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" placeholder="Beschrijf het huis" required autofocus />
                                    </div>
                                    <br />
                                </div>

                                <div class="flex gap-x-4 mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div class="flex items-center justify-end mt-4">
                                        <x-button class="ml-4">
                                            {{ __('Submit house') }}
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
