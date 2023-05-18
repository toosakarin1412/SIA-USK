@extends('Layout.sidebarKRS')

@section('contentKRS')
    <div class="p-5 text-2xl font-semibold h-screen w-screen flex flex-col gap-6">
        <div class="flex bg-gray-200 items-center p-2 rounded-md w-full h-[4rem] md:h-[5rem] shadow-lg">
            <div class="flex bg-gray-200 items-center flex-row gap-2 w-full">
                <div class="flex items-center justify-between bg-white rounded-md w-full">
                    <input type="text" class="rounded-md p-2 border-none" placeholder="Pilih Semester" />
                </div>
                <button class="text-center text-base font-bold bg-emerald-300  w-16 md:w-[5rem] md:h-[2rem] h-9 rounded-md">
                    Pilih
                </button>
                <button class="text-center text-xs font-bold bg-emerald-300 w-16 md:w-[5rem] md:h-[2rem] h-9 rounded-md">
                    Cetak
                </button>
            </div>
        </div>
        <div class="flex flex-col gap-6 md:flex-row w-full h-full">
            <div class="bg-gray-200 rounded-xl h-fit md:h-full p-8 flex flex-col gap-8 
        shadow-2xl w-full">
                <div class="w-full h-36 bg-gray-300 rounded-xl flex items-center justify-center md:h-full">
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
                <div class="w-full h-36 bg-gray-300 rounded-xl flex items-center justify-center md:h-full">
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
                <div class="w-full h-36 bg-gray-300 rounded-xl flex items-center justify-center md:h-full">
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
                <div class="w-full h-36 bg-gray-300 rounded-xl flex items-center justify-center md:h-full">
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
            <div class="flex flex-col gap-2 h-[15rem] bg-gray-200 rounded-xl p-4 md:w-full md:h-full shadow-xl">
                <div class="flex items-center justify-between">
                    <h2 class="text-left font-bold md:text-xl md:font-sans">
                        Transkrip Activity
                    </h2>
                    <button class="bg-emerald-300 text-xl rounded-lg w-fit px-3 py-2 text-center h-fit">
                        Download
                    </button>
                </div>
                <hr class="h-px my-1 md:my-2 w-full bg-gray-500 border-0" />
            </div>
        </div>
    </div>
@endsection
