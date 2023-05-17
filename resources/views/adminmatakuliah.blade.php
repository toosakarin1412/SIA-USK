@extends('Layout.sidebarAdmin')

@section('content')
    <div class="flex h-full w-screen p-6 flex-col gap-10 items-end">
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
                    </tr>
                </thead>
                <tbody class="w-fit md:w-full text-center text-xs md:text-lg">
                    <tr>
                        <td class="px-6 py-3">{row.Kode}</td>
                        <td class="px-6 py-3">{row.MataKuliah}</td>
                        <td class="px-6 py-3">{row.SKS}</td>
                        <td class="px-6 py-3">{row.Kelas}</td>
                        <td class="px-6 py-3">{row.Pengajar}</td>
                        <td class="px-6 py-3">{row.Ruang}</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection
