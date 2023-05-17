@extends('Layout.sidebarKRS')

@section('contentKRS')
    <div class="flex h-screen w-screen p-4 gap-10 flex-col md:flex-row">
        <div class="w-full h-[40rem] flex flex-col gap-4 md:h-full">
            <div class="flex p-3 flex-col gap-2 w-full h-full bg-gray-200 shadow-lg rounded-lg items-center justify-between">
                <div class="w-full">
                    <h2 class="text-base md:text-xl text-center font-bold">
                        Upload Foto
                    </h2>
                    <hr class="h-px my-1 md:my-2 w-full bg-gray-200 border-0 dark:bg-gray-700" color="black" />
                </div>
                <div class=" w-[15rem] md:w-[20rem] h-[20rem] md:h-[25rem] border-2 border-black"></div>
                <h2 class="clas"></h2>
            </div>
            <div>
                <button class="text-center text-xs md:text-lg font-bold bg-emerald-300 w-full md:h-[3rem] h-9 rounded-md">
                    Upload Foto
                </button>
            </div>
        </div>
        <div class="w-full h-[40rem] flex flex-col gap-4 md:h-full">
            <div class="flex p-3 flex-col gap-2 w-full h-full bg-gray-200 shadow-lg rounded-lg">
                <h2 class="text-base md:text-xl text-center font-bold">
                    Download Ijazah
                </h2>
                <hr class="h-px my-1 md:my-2 w-full bg-gray-200 border-0 dark:bg-gray-700" color="black" />
            </div>
            <div>
                <button class="text-center text-xs md:text-lg font-bold w-full bg-emerald-300 md:h-[3rem] h-9 rounded-md">
                    Download Ijazah
                </button>
            </div>
        </div>
    </div>
@endsection
