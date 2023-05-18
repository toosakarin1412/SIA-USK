@extends('Layout.sidebarKRS')

@section('contentKRS')
    <div class="flex h-screen w-screen p-6 flex-col gap-10">
        <div class="flex items-center bg-gray-200 h-fit w-full p-5 rounded-lg shadow-lg justify-between">
            <h1 class=" text-base font-bold">
                Perubahan Mata Kuliah
            </h1>
            <div class="flex items-center bg-emerald-300 w-32 justify-center h-10 rounded-lg">
                <BiRefresh size={20} />
                <button class="text-base font-bold text-center">
                    Refresh
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg shadow-lg p-5 overflow-x-scroll w-full md:overflow-x-visible">
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
                    @foreach($data as $item)
                    <tr>
                        <td class="px-6 py-3">{{$item->kodemk}}</td>
                        <td class="px-6 py-3">{{$item->namamk}}</td>
                        <td class="px-6 py-3">{{$item->sks}}</td>
                        <td class="px-6 py-3">{{$item->kelas}}</td>
                        <td class="px-6 py-3">{{$item->pengajar}}</td>
                        <td class="px-6 py-3">{{$item->ruang}}</td>
                        <td class="px-6 py-3">
                            <form action="/pkrs/delete/" method="post">
                                @csrf
                                <input type="hidden" name="kodemk" value="{{$item->kodemk}}">
                                <button type="submit"
                                    class="text-base font-bold text-center bg-emerald-300 hover:bg-emerald-200 w-28 h-10 rounded-lg">
                                    Batal
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
