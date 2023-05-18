@extends('Layout.sidebar')

@section('content')
    <div class="p-7 text-2xl font-semibold h-screen w-screen flex flex-col gap-14 overflow-y-scroll">
        <div class="bg-gray-200 w-full h-20 rounded-lg shadow-2xl flex items-center justify-between p-2">
            <button class="border-r-2 border-gray-300 h-12 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 m-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </button>
            <div class="flex justify-end">
                <div class="border-l-2 border-gray-300 h-12 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10 m-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                </div>
                <div class="border-l-2 border-gray-300 h-12 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10 m-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-gray-200 h-full rounded-xl shadow-2xl flex py-5">
            <div class="mt-8">
                <img src="{{ asset('UserProfile.jpg') }}" class="rounded-full w-[10rem] h-[10rem] mx-10" />
            </div>
            <div class="mt-14 w-full mx-16">
                <h1 class="text-2xl font-medium text-gray-600">
                    Rama Dhaniansyah
                </h1>
                <h1 class="md:text-xl font-normal text-gray-600 mt-6">
                    Fakultas Matematika dan Ilmu Pengetahuan Alam
                </h1>
                <h1 class="text-xs md:text-xl font-normal text-gray-600">
                    S1 - Informatika
                </h1>
                <h1 class="text-xs md:text-xl font-normal text-gray-600 leading-normal">
                    2108107010057
                </h1>
            </div>
        </div>

    </div>
@endsection
