@extends('Layout.sidebarSetting')

@section('contentSetting')
    <div class="w-full h-full flex flex-col gap-12 px-6 py-10 overflow-y-scroll">
        <div class="bg-gray-200 flex flex-col gap-4 pt-4 pb-4 rounded-lg w-full shadow-xl">
            <div class="flex flex-col gap-2 mx-5">
                <p class="text-base md:text-2xl font-semibold text-left mx-1">
                    Data Pribadi
                </p>
                <hr class="h-px my-1 md:my-2 w-full bg-gray-200 border-0 dark:bg-gray-700" color="black" />
                <div>
                    <div class="flex flex-row gap-4">
                        <div class="flex flex-col w-[14rem] leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-base">
                                Name
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] text-base leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="flex flex-col w-[14rem] leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-base">
                                NPM
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] text-base leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="flex flex-col w-[14rem] leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-base">
                                NISN
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] text-base leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="flex flex-col w-[14rem] text-base leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left">
                                Email
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] text-base leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="flex flex-col w-[14rem] leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-base">
                                Telepon
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] text-base leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="flex flex-col w-[14rem] leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-base">
                                Tempat Tanggal Lahir
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] text-base leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="flex flex-col w-[14rem] leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-base">
                                Status Perkawinan
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] text-base leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="flex flex-col w-[14rem] leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-base">
                                Agama
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] text-base leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="flex flex-col w-[14rem] leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-base">
                                Alamat
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] text-base leading-10 md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-200 flex flex-col gap-4 pt-4 pb-4 rounded-lg w-full shadow-xl">
            <div class="flex flex-col gap-2 mx-5">
                <p class="text-base md:text-2xl text-left mx-1 font-semibold">
                    Data Orang Tua
                </p>
                <hr class="h-px my-1 md:my-2 w-full bg-gray-200 border-0 dark:bg-gray-700" color="black" />
                <div>
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left font-medium text-base">
                                Nama Ayah
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left font-medium text-base">
                                Nama Ibu
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left font-medium text-base">
                                Tempat, Tanggal Lahir Ayah
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left font-medium text-base">
                                Status Hidup Ayah
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left font-medium text-base">
                                Status Hidup Ibu
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left font-medium text-base">
                                Pekerjaan Ayah
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">

                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left font-medium text-base">
                                Pekerjaan Ibu
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left font-medium text-base">
                                Pendapatan Orang Tua
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left">
                                Value
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left font-medium text-base">
                                No. Hp Orang Tua
                            </h2>
                        </div>
                        <div class="flex flex-col w-[14rem] leading-10 md:w-full md:leading-[2rem] md:text-xl">
                            <h2 class="text-left font-medium text-base">
                                Value
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
