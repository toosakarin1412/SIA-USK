@extends('Layout.sidebarKRS')

@section('contentKRS')
    <form class="flex h-screen w-screen p-6 flex-col gap-10 items-end" action="/krs/add" method="post">
        @csrf
        <div class="bg-gray-200 rounded-lg shadow-lg p-5 overflow-x-scroll w-full h-full md:overflow-x-visible">
            <table class="table-fixed w-[40rem] md:w-full">
                <thead class="w-fit md:w-full">
                    <tr class="bg-emerald-300">
                        <th scope="col" class="px-6 py-3">
                            Ambil
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
                <tbody class="w-fit md:w-full text-center text-sm">
                    @foreach($data as $item)
                        <tr>
                            <td class="px-6 py-3">
                                <input type="checkbox" name="ambil[{{$item->kodemk}}]" />
                            </td>
                            <td class="px-6 py-3">{{ $item->kodemk }}</td>
                            <td class="px-6 py-3">{{ $item->namamk }}</td>
                            <td class="px-6 py-3">{{ $item->sks }}</td>
                            <td class="px-6 py-3">{{ $item->kelas }}</td>
                            <td class="px-6 py-3">{{ $item->pengajar }}</td>
                            <td class="px-6 py-3">{{ $item->ruang }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="bg-emerald-300 hover:bg-emerald-400 text-white font-bold py-2 px-4 rounded-xl w-[10rem]">
            Ajukan
        </button>
    </form>
@endsection
