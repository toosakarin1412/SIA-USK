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
        <div class="bg-gray-200 h-fit rounded-xl shadow-2xl flex py-5">
            <div class="mt-16">
                <img src="{{ asset('UserProfile.jpg') }}" class="rounded-full w-[10rem] h-[10rem] mx-10" />
            </div>
            <div class="mt-14 w-full mx-16">
                <h1 class="text-2xl font-medium text-gray-600">
                    Nama Mahasiswa
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
                <hr class="h-px my-1 md:my-2 w-full bg-gray-500 border-0" />
                <h1 class="text-xs md:text-xl font-normal text-gray-600 leading-normal">
                    Dosen Wali
                </h1>
                <hr class="h-px my-1 md:my-2 bg-gray-500 border-0" />
                <h1 class="text-xs md:text-xl font-normal text-gray-600 leading-normal">
                    Nama Dosen Wali
                </h1>
            </div>
        </div>
        <div class="bg-gray-200 rounded-xl h-max p-8 flex flex-col gap-8 md:grid md:grid-cols-2 md:grid-rows-2 shadow-2xl">
            <div class="w-full h-36 bg-gray-300 rounded-xl flex items-center justify-center md:h-56">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-12 h-12 m-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                </div>
                <div>
                    <p class="text-2xl md:text-4xl font-extraligh text-center text-gray-600">
                        00.00
                    </p>
                    <p class="text-xl md:text-2xl font-light text-center text-gray-600">
                        IP
                    </p>
                </div>
            </div>
            <div class="w-full h-36 bg-gray-300 rounded-xl flex items-center justify-center md:h-56">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-12 h-12 m-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </div>
                <div>
                    <p class="text-2xl md:text-4xl font-extraligh text-center text-gray-600">
                        00.00
                    </p>
                    <p class="text-xl md:text-2xl font-light text-center text-gray-600">
                        IPK
                    </p>
                </div>
            </div>
            <div class="w-full h-36 bg-gray-300 rounded-xl flex items-center justify-center md:h-56">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-12 h-12 m-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                </div>
                <div>
                    <p class="text-2xl md:text-4xl font-extraligh text-center text-gray-600">
                        00
                    </p>
                    <p class="text-xl md:text-2xl font-light text-center text-gray-600">
                        Semester
                    </p>
                </div>
            </div>
            <div class="w-full h-36 bg-gray-300 rounded-xl flex items-center justify-center md:h-56">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-12 h-12 m-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                    </svg>
                </div>
                <div>
                    <p class="text-2xl md:text-4xl font-extraligh text-center text-gray-600">
                        00
                    </p>
                    <p class="text-xl md:text-2xl font-light text-center text-gray-600">
                        SKS
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
