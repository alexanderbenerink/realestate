<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Houses;
use Symfony\Component\Console\Input\Input;
?>

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <title>Dashboard</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/supp.css') }}">--}}
{{--    --}}{{--        <style>--}}
{{--    --}}{{--            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}--}}
{{--    --}}{{--        </style>--}}

{{--    <style>--}}
{{--        body {--}}
{{--            font-family: 'Nunito', sans-serif;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
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

{{--    <div class="flex justify-center items-center h-screen">--}}
    <div class="flex justify-center items-center">
        <!--actual component start-->
        <div x-data="setup()">
            <ul class="flex justify-center items-center my-4">
                <template x-for="(tab, index) in tabs" :key="index">
                    <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-4"
                        :class="activeTab===index ? 'text-yellow-700 border-yellow-700' : ''" @click="activeTab = index"
                        x-text="tab"></li>
                </template>
            </ul>

{{--            <div class="w-80 bg-white p-16 text-center mx-auto border">--}}
{{--            <div class="w-full mx-auto bg-gradient-to-r from-blue-50 to-red-100 p-16 text-center shadow">--}}
            <div class="w-full mx-auto bg-gradient-to-r from-red-50 to-yellow-100 p-16 shadow">
                <!-- My Listings TAB -->
                <div x-show="activeTab===0" class="justify-center">
                    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                        <div class="flex justify-center">
                            {{ $houses->links() }}
                        </div>
                        {{--                    <div class="grid grid-cols-2 gap-1">--}}
                        {{--                    <div class="flex-1 flex-wrap gap-1 justify-center">--}}
                        <div class="flex flex-wrap gap-1 justify-center">
                            <!-- Search listings here -->
                            @if((count($houses) >= 1))
                            @foreach($houses as $houseitem)
{{--                                @if(Houses::find($houseitem->user_id))--}}
{{--                                @if(Houses::where('user_id', 'like', $houseitem->user_id)->first()->random()->id ? false : '')--}}
{{--                                @if(Houses::where('id', $houseitem->user_id )->exists())--}}
{{--                                @if(Houses::where('user_id', 'like', 2)->first())--}}
                            <div class="flex-1 py-3 listing">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                        <div class="p-3 bg-white border-b border-gray-200">
                                            <div class="flex justify-end">
                                                <a href="{{ url('houses/'.$houseitem->id).'/delete' }}" onclick="return confirm('\nAre you sure you want to delete this listing?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="max-w-md w-full lg:flex">
                                                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
                                                    {{--                                                <img src="{{url('/images/house.jpg')}}" height="480" width="480">--}}
                                                    <img src="{{ $houseitem->image }}" height="192" width="192">
                                                </div>
                                                <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-2 flex flex-col justify-between leading-normal">
                                                    <div class="mb-8">
                                                        <p class="text-black font-bold text-xl mb-2">€{{ number_format($houseitem->price, 0, '.', ',') }}.-</p>
                                                        <p class="text-grey-darker text-base">{{ $houseitem->house_type }}</p>
                                                        <p class="text-grey-darker text-xs">{{ $houseitem->address }}</p>
                                                        <p class="text-grey-darker text-xs">{{ $houseitem->city }}</p>
                                                    </div>
                                                    <div class="flex items-center">
                                                        {{--                                <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">--}}
                                                        <div class="text-sm">
                                                            <p class="text-black text-xs">{{ $houseitem->surface_area }} m²</p>
                                                            <p class="text-grey-dark text-xs">{{ $houseitem->published_at }}</p>
                                                        </div>
                                                        @if(Auth::id() == $houseitem->user_id)
                                                            <a href="{{ url('houses/'.$houseitem->id).'/edit' }}">
                                                                <x-button class="ml-4" title="Edit this listing.">
                                                                    {{ __('Edit') }}
                                                                </x-button>
                                                            </a>
                                                            <a href="{{ url('house/'.$houseitem->id) }}">
                                                                <x-button class="ml-4">
                                                                    {{ __('Details') }}
                                                                </x-button>
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        @elseif(count($houses) === 0)

                        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                            <div class="flex flex-wrap gap-1 justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                                </svg>
                                <br />
                                <p>You haven't created any listings yet!</p>
                            </div>
                        </div>

                        @endif

                        <!-- pagination links -->
                            {{ $houses->links() }}
                        </div>
                    </div>
                </div>
                <!-- My Wishlist TAB -->
                <div x-show="activeTab===1">
                    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                        <div class="flex flex-wrap gap-1 justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                            </svg>
                            <br />
                            <p>You haven't added anything to your wishlist yet!</p>
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="flex gap-4 justify-center p-4">--}}
{{--                <button--}}
{{--                    class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"--}}
{{--                    @click="activeTab--" x-show="activeTab>0"--}}
{{--                >Back</button>--}}
{{--                <button--}}
{{--                    class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"--}}
{{--                    @click="activeTab++" x-show="activeTab<tabs.length-1"--}}
{{--                >Next</button>--}}
{{--            </div>--}}
        </div>
        <!--actual component end-->
    </div>

</x-app-layout>

<script>
    function setup() {
        return {
            activeTab: 0,
            tabs: [
                "My Listings",
                "My Wishlist",
            ]
        };
    };
</script>
