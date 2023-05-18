@extends('Layout.sidebarKRS')

@section('contentKRS')
    <div class="w-full p-8 flex flex-col md:flex md:flex-row md:gap-4 gap-10">
        <div class="flex flex-col gap-4 md:w-full md:h-full">
            <div>
                <div class="w-full p-4 bg-gray-200 rounded-xl h-[20rem]">
                    <h2 class="text-left font-semibold text-xl">
                        Informasi
                    </h2>
                    <hr class="h-px md:my-2 w-full bg-gray-500 border-0" />
                </div>
            </div>
            <div class="bg-gray-200 rounded-lg shadow-lg p-5 w-full h-full md:overflow-x-visible">
                <table class="table-fixed w-full overflow-x-scroll">
                    <thead class="w-fit md:w-full text-sm">
                        <tr class="bg-emerald-300">
                            <th scope="col" class="px-6 py-3">
                                Kode
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Mata Kuliah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kelas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ruang
                            </th>
                        </tr>
                    </thead>
                    <tbody class="w-fit md:w-full text-center">
                        <tr>
                            <td class="px-6 py-3">INF104</td>
                            <td class="px-6 py-3">
                                Struktur Data dan Algoritma
                            </td>
                            <td class="px-6 py-3">21 Agusturs 2023</td>
                            <td class="px-6 py-3">A</td>
                            <td class="px-6 py-3">E.03.01</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="md:w-[36rem] h-full">
            <div class="w-full h-full p-6 bg-gray-200 rounded-xl">
                <h2 class="text-center text-xl font-semibold">
                    Time Line Activity
                </h2>
                <hr class="h-px md:my-2 w-full bg-gray-500 border-0" />
            </div>
        </div>
    </div>
@endsection
