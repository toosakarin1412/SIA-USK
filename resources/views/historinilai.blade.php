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
        <div class="bg-gray-200 rounded-lg shadow-lg p-5 overflow-x-scroll w-full h-full md:overflow-x-visible">
            <table class="table-fixed w-[40rem] md:w-full">
                <thead class="w-full md:w-full">
                    <tr class="bg-emerald-300 text-center text-sm md:text-xl">
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Mata Kuliah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SKS
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai Decimal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Semester
                        </th>
                    </tr>
                </thead>
                <tbody class="w-fit md:w-full text-center text-sm md:text-xl">
                    <tr>
                        <td class="px-6 py-3">row.No</td>
                        <td class="px-6 py-3">row.Kode</td>
                        <td class="px-6 py-3">row.MataKuliah</td>
                        <td class="px-6 py-3">row.SKS</td>
                        <td class="px-6 py-3">row.Nilai</td>
                        <td class="px-6 py-3">row.NilaiDesimal</td>
                        <td class="px-6 py-3">row.Semester</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
