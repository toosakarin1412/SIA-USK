@extends('Layout.sidebarDosen')

@section('content')
    <div class="p-7 text-2xl font-semibold h-screen w-screen flex flex-col gap-14 overflow-y-scroll">
        <div class="bg-gray-200 w-full h-20 rounded-lg shadow-2xl flex items-center justify-between">
            <button class="border-r-2 border-gray-300 h-12 flex items-center">
                <HiArrowSmLeft size={30} color="#D4D4D8" class="m-3" />
            </button>
            <div class="flex justify-end">
                <div class="border-l-2 border-gray-300 h-12 flex items-center">
                    <HiChatBubbleLeft size={30} color="#D4D4D8" class="m-3" />
                </div>
                <div class="border-l-2 border-gray-300 h-12 flex items-center">
                    <HiOutlineUserCircle size={30} color="#D4D4D8" class="m-3" />
                </div>
            </div>
        </div>
        <div class="bg-gray-200 rounded-xl shadow-2xl flex p-5">
            <p>Tidak ada info terbaru</p>
        </div>
    </div>
@endsection
