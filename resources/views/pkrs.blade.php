@extends('Layout.sidebarKRS')

@section('contentKRS')
    <div class="flex h-screen w-screen p-6 flex-col gap-10">
        <div class="flex items-center bg-gray-200 h-fit w-full p-5 rounded-lg shadow-lg justify-between">
            <h1 class=" text-base font-bold">
                Perubahan Mata Kuliah
            </h1>
            <div
                class="flex flex-row gap-2 items-center bg-emerald-300 w-32 justify-center h-10 rounded-lg hover:bg-emerald-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
                <button class="text-base font-bold text-center">
                    Refresh
                </button>
            </div>
        </div>
        <form class="bg-gray-200 rounded-lg shadow-lg p-5 overflow-x-scroll w-full md:overflow-x-visible">
            <table class="table-fixed w-full">
                <thead class="w-fit md:w-full">
                    <tr class="bg-emerald-300">
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
                            Kelas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pengajar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ruang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Batalkan
                        </th>
                    </tr>
                </thead>
                <tbody class="w-fit md:w-full text-center text-xs md:text-lg">
                    <tr>
                        <td class="px-6 py-3">{row.Kode}</td>
                        <td class="px-6 py-3">
                            {row.MataKuliah}
                        </td>
                        <td class="px-6 py-3">{row.SKS}</td>
                        <td class="px-6 py-3">{row.Kelas}</td>
                        <td class="px-6 py-3">
                            {row.Pengajar}
                        </td>
                        <td class="px-6 py-3">{row.Ruang}</td>
                        <td class="px-6 py-3">
                            <button
                                class="text-base font-bold text-center bg-emerald-300 hover:bg-emerald-200 w-28 h-10 rounded-lg">
                                Batal
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection
