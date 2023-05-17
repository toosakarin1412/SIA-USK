@extends('Layout.sidebarSetting')

@section('contentSetting')
    <div class="flex h-screen w-screen p-10 md:p-20">
        <div class=" bg-gray-200 h-fit w-full rounded-xl shadow-xl p-8 flex flex-col gap-6">
            <div class="flex flex-col gap-4 mx-5">
                <div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-2 w-[14rem] md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-sm md:text-base leading-8">
                                Name
                            </h2>
                            <div class=" flex items-center flex-row gap-10">
                                <h2 class="text-left items-center">
                                    Rama Dhaniansyah
                                </h2>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 w-[14rem] md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-sm md:text-base leading-8">
                                Npm
                            </h2>
                            <div class=" flex items-center flex-row gap-10">
                                <h2 class="text-left items-center">
                                    2108107010057
                                </h2>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 w-[14rem] md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-sm md:text-base leading-8">
                                Email
                            </h2>
                            <div class=" flex items-center flex-row gap-10">
                                <h2 class="text-left items-center">
                                    rama_dh@mhs.unsyiah.ac.id
                                </h2>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 w-[14rem] md:text-xl md:w-full md:leading-[2rem]">
                            <h2 class="text-left font-medium text-sm md:text-base leading-8">
                                Password
                            </h2>
                            {{-- {/* Update Password */} --}}
                            <form class=" flex items-center flex-row gap-10">
                                <h2 class="text-left items-center">
                                    ********
                                </h2>
                                <div>
                                    <button class=" text-blue-500">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
