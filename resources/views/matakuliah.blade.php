@extends('Layout.sidebarKRS')

@section('contentKRS')
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
                @foreach($data as $item)
                    <tr>
                        <td class="px-6 py-3">{{$item->kodemk}}</td>
                        <td class="px-6 py-3">{{$item->namamk}}</td>
                        <td class="px-6 py-3">{{$item->sks}}</td>
                        <td class="px-6 py-3">{{$item->kelas}}</td>
                        <td class="px-6 py-3">{{$item->pengajar}}</td>
                        <td class="px-6 py-3">{{$item->ruang}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>
@endsection
