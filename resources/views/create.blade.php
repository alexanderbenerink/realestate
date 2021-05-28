<?php
use Carbon\Carbon;
?>

<x-app-layout>

    <x-slot name="header">
        @if(session()->has('success'))
        <div class="flex justify-center">
            <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 w-1/3" role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                <p>{{ session()->get('success') }}</p>
            </div>
        </div>
        @endif
    </x-slot>

    <x-crud-card>
        <x-slot name="logo">
            <a href="/">
                <img src="images/logo.png" width="192" height="192">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('houses.store') }}">
            @csrf

            <!-- User ID -->
                <div hidden>
                    <x-label for="user_id" :value="__('User ID (Automatic)')" />

                    <x-input id="user_id" class="block mt-1 w-full" type="text" name="user_id" value="{{ Auth::id() }}" placeholder="E.g. 1" required autofocus />
                </div>

            <!-- Address -->
            <div>
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" placeholder="E.g. Streetname 123" required autofocus />
            </div>

            <!-- City -->
            <div>
                <x-label for="city" :value="__('City')" />

                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" placeholder="E.g. Amsterdam" required autofocus />
            </div>

            <!-- Price -->
            <div>
                <x-label for="price" :value="__('Price')" />

                <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" placeholder="Fill in a price" required autofocus />
            </div>

            <!-- Image -->
            <div>
                <x-label for="image" :value="__('Image')" />

                <x-input id="image" class="block mt-1 w-full" type="text" name="image" :value="old('image')" placeholder="Photo(s) of house" required autofocus />
            </div>

            <!-- House type -->
            <div>
                <x-label for="house_type" :value="__('House type')" />

                <x-input id="house_type" class="block mt-1 w-full" type="text" name="house_type" :value="old('house_type')" placeholder="Type of house" required autofocus />
            </div>

            <!-- Description -->
            <div>
                <x-label for="description" :value="__('Description')" />

{{--                <x-textarea id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />--}}
                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" placeholder="Describe the house" required autofocus />
            </div>

            <!-- Postal code -->
            <div>
                <x-label for="postal_code" :value="__('Postal code')" />

                <x-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')" placeholder="E.g. 1234AB" required autofocus />
            </div>

            <!-- Surface area -->
            <div>
                <x-label for="surface_area" :value="__('Surface area in m²')" />

                <x-input id="surface_area" class="block mt-1 w-full" type="text" name="surface_area" :value="old('surface_area')" placeholder="E.g. 25m²" required autofocus />
            </div>

            <!-- Published at -->
            <div hidden>
                <x-label for="published_at" :value="__('Published at')" />

                <x-input id="published_at" class="block mt-1 w-full" type="text" name="published_at" value="{{ Carbon::now()->format('Y-m-d') }}" placeholder="E.g. Y-M-D" required autofocus />
            </div>

                <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Submit house') }}
                </x-button>
            </div>
        </form>
    </x-crud-card>
</x-app-layout>
