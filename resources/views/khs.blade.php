@extends('Layout.sidebarKRS')

@section('contentKRS')
    <div class="flex h-screen w-screen p-6 flex-col gap-10 items-end">
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
        <div class="bg-gray-200 rounded-lg shadow-lg p-5 overflow-x-scroll w-full h-full md:overflow-x-visible">
            <table class="table-fixed w-[40rem] md:w-full">
                <thead class="w-fit md:w-full">
                    <tr class="bg-emerald-300">
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Mata Kuliah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SKS
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai Huruf
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bobot SKS
                        </th>
                    </tr>
                </thead>
                <tbody class="w-fit md:w-full text-center text-sm">
                    <tr>
                        <td class="px-6 py-3">1</td>
                        <td class="px-6 py-3">INF206</td>
                        <td class="px-6 py-3">
                            Rekayasa Perangkat Lunak
                        </td>
                        <td class="px-6 py-3">3</td>
                        <td class="px-6 py-3">AB</td>
                        <td class="px-6 py-3">3</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="bg-gray-200 rounded-lg shadow-lg p-5 overflow-x-scroll w-full h-fit md:overflow-x-visible">
            <table class="table-fixed w-[40rem] md:w-full">
                <thead class="w-fit md:w-full">
                    <tr class="bg-emerald-300">
                        <th scope="col" class="px-6 py-3"></th>
                        <th scope="col" class="px-6 py-3">
                            Kredit Beban
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kredit Dicapai
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Bobot SKS
                        </th>
                        <th scope="col" class="px-6 py-3">
                            IP
                        </th>
                    </tr>
                </thead>
                <tbody class="w-fit md:w-full text-center text-sm">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Semester Ini
                        </th>
                        <td class="px-6 py-3">20</td>
                        <td class="px-6 py-3">10</td>
                        <td class="px-6 py-3">3</td>
                        <td class="px-6 py-3">2.5</td>
                    </tr>
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Semester Kumulatif
                        </th>
                        <td class="px-6 py-3">20</td>
                        <td class="px-6 py-3">10</td>
                        <td class="px-6 py-3">3</td>
                        <td class="px-6 py-3">2.5</td>
                    </tr>
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Maks SKS YAD
                        </th>
                        <td class="px-6 py-3">20</td>
                        <td class="px-6 py-3">10</td>
                        <td class="px-6 py-3">3</td>
                        <td class="px-6 py-3">2.5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
