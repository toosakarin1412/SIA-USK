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
                        {{-- Icon --}}
                        <HiOutlineAcademicCap size={40} class="m-4" color={`#52525B`} />
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
                        {{-- Icon --}}
                        <FiFileText size={40} class="m-4" color={`#52525B`} />
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
                        {{-- icon --}}
                        <HiChartBar size={40} class="m-4" color={`#52525B`} />
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
                        {{-- Icon --}}
                        <HiCollection size={40} class="m-4" color="#52525B" />
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
                <hr class="w-full h-px" color="black" />
            </div>
        </div>
    </div>
@endsection
