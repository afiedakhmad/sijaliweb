@extends('layout.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col mt-16">
        <main class="w-full flex-grow px-4 md:px-12 py-8 min-h-screen">
            <!-- alert section -->
            {{-- {{ dd('viewmasuk') }} --}}
            {{-- @if(session()->has('success'))
                <div role="alert" class="my-5 w-1/2">
                    <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
                        Sukses
                    </div>
                    <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                        <p>Berhasil membuat laporan!</p>
                    </div>
                </div>
            @endif --}}


            {{-- <p class="text-xl sm:text-2xl md:text-xl  font-semibold text-black pb-2 ">Pertemuan hari ini</p> --}}
            <!-- JANGAN DIHAPUS! INI BUAT KALO ADA PERTEMUAN -->

            {{-- @if ($hariIni->count()) --}}
                {{-- <div class="flex flex-row gap-5"> --}}
                    {{-- @forEach($hariIni as $h) --}}
                        {{-- <div class="text-sm md:text-base box-content max-w-md border-1 p-4 md:p-6 rounded-lg mb-4" style="background-color: #0997BC;">
                            <div class="grid grid-cols-2">
                                <p class="font-medium text-white">Tanggal</p>
                                <p class="font-medium text-white">02 Januari 2023</p>
                            </div>    
                            <div class="grid grid-cols-2">
                                <p class="font-medium text-white">Jam</p>
                                <p class="font-medium text-white">23.59 WIB</p>
                            </div>
                            <div class="grid grid-cols-2">
                                <p class="font-medium text-white">Tempat</p>
                                <p class="font-medium text-white">Kelas</p>
                            </div>
                            <div class="grid grid-cols-2">
                                <p class="font-medium text-white">Nama Konseli</p>
                                <p class="font-medium text-white">Sammy</p>
                            </div> 
                        </div>

                        <div class="text-sm md:text-base box-content max-w-md border-1 p-4 md:p-6 rounded-lg mb-4" style="background-color: #F1F3F5; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start;">
                            <p class="mb-4" style="color: #868E96;">TINDAKAN</p>
                            <button class="rounded-lg p-2 md:p-2" style="background-color: #E7F5FF; border: 1px solid #3498db;">
                                <a class="text-sm md:text-base font-semibold" style="color: #0997BC" href="#" >Isi Laporan Konseling</a>
                            </button>
                        </div> --}}
                    {{-- @endforeach --}}
                {{-- </div> --}}
            {{-- @else --}}
                {{-- <div class="flex flex-row gap-5 justify-center">
                    <div class="text-sm md:text-base box-content max-w-md border-1 p-4 md:p-6 rounded-lg mb-4" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                        <img src="img/empty-box.png" class="h-32 w-34 pb-2">
                        <p class="text-black font-medium">Tidak ada pertemuan hari ini</p>
                    </div>
                </div> --}}
            {{-- @endif --}}


            <div class="flex justify-between items-center pt-6">
                <p class="text-xl md:text-xl font-semibold text-black">Daftar Pemilik Akun</p>
                <div class="relative flex items-center font-bold whitespace-nowrap select-none border border-green-600 text-green-600 py-1 px-2 text-xs rounded-md hover:bg-green-600 hover:text-white">
                    <a href="/form">
                        <button type="button" class="inline-block">
                            <span class="cursor-pointer text-base">Tambah User</span>
                        </button>
                    </a>
            </div>
            </div>
            <div class="p-2 overflow-x-auto">
                    <table class="mt-4 w-full min-w-max table-auto text-left">
                        <thead>
                        <tr>
                            <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                <p class="antialiased   text-base   flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                    <b>No</b>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4"></svg>
                                </p>
                            </th>
                            <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                <p class="antialiased   text-base   flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                    <b>Nama Lengkap</b> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4"></svg>
                                </p>
                            </th>
                            <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                <p class="antialiased   text-base   flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                    <b>Kode</b>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4"></svg>
                                </p>
                            </th>
                            <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                <p class="antialiased   text-base   flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                    <b>Role</b>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4"></svg>
                                </p>
                            </th>
                            <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                <p class="antialiased   text-base   flex items-center justify-between gap-2 font-normal leading-none opacity-70"> 
                                    <b>Action</b>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                    </svg>
                                </p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($users as $user)
                            <tr>
                                <td class="p-4 border-b border-blue-gray-50">
                                <div class="flex items-center gap-3">
                                    <div class="flex flex-col">
                                    <p class="block antialiased   text-base leading-normal   font-normal">{{ $no++ }}</p>
                                    </div>
                                </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                <div class="flex items-center gap-3">
                                <div class="flex flex-col">
                                    <p class="block antialiased   text-base leading-normal   font-normal">{{ $user->nama }}</p>
                                    </div>
                                </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                <div class="flex flex-col">
                                    <p class="block antialiased   text-base leading-normal   font-normal">{{ $user->kode }}</p>
                                </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p class="block antialiased   text-base leading-normal   font-normal">{{ $user->role }}</p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div class="w-max flex">
                                        <div class="relative flex items-center font-bold whitespace-nowrap select-none border border-red-600 text-red-600 py-1 px-2 text-xs rounded-md hover:bg-red-600 hover:text-white">
                                            <a href="/user/{{ $user->id }}/edit">
                                                <button type="button" class="inline-block">
                                                    <span class="cursor-pointer text-base">Update</span>
                                                </button>
                                            </a>
                                        </div>
                                        <form action="{{ route('user.delete', $user->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                            @csrf
                                            @method('DELETE')
                                        
                                            <div class="relative flex items-center font-bold whitespace-nowrap select-none border border-red-600 text-red-600 py-1 px-2 text-xs rounded-md hover:bg-red-600 hover:text-white ml-2">
                                                <button type="submit" class="inline-block">
                                                    <span class="cursor-pointer text-base">Delete</span>
                                                </button>
                                            </div>
                                        </form>
                                </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>

            {{-- <p class="text-xl md:text-xl font-semibold text-black pt-6">Jadwal pertemuan yang akan datang</p>
            <div class="p-2 overflow-x-auto"> --}}
                
                {{-- @if($akanDatang->count()) --}}
                {{-- <table class="mt-4 w-full min-w-max table-auto text-left">
                    <thead>
                    <tr>
                        <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased   text-base   flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                            <b>Tanggal</b>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4"></svg>
                        </p>
                        </th>
                        <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased   text-base   flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                            <b>Waktu</b>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4"></svg>
                        </p>
                        </th>
                        <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased   text-base   flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                            <b>Tempat</b>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4"></svg>
                        </p>
                        </th>
                        <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased   text-base   flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                            <b>Nama Konseli</b>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4"></svg>
                        </p>
                        </th>
                    </tr>
                    </thead>
                    <tbody> --}}
                    {{-- @foreach($akanDatang as $a) --}}
                        {{-- <tr>
                            <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex items-center gap-3">
                                <div class="flex flex-col">
                                <p class="block antialiased   text-base leading-normal opacity-75">{{ \Carbon\Carbon::parse($a->hari)->translatedformat('l, d F Y') }}</p>
                                </div>
                            </div>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex items-center gap-3">
                            <div class="flex flex-col">
                                <p class="block antialiased   text-base leading-normal opacity-75">{{ $a->waktu }}</p>
                                </div>
                            </div>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex flex-col">
                                <p class="block antialiased   text-base leading-normal opacity-75">{{ $a->ruang }}</p>
                            </div>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                            <p class="block antialiased text-base leading-normal opacity-75">{{ $a->nama_konseli }}</p>
                            </td>
                        </tr> --}}
                    {{-- @endforeach --}}
                    {{-- </tbody> --}}
                {{-- </table> --}}
                {{-- @else --}}
                    {{-- <div class="flex flex-row gap-5 justify-center">
                        <div class="text-sm md:text-base box-content max-w-md border-1 p-4 md:p-6 rounded-lg mb-4" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                            <img src="img/empty-konselor.png" class="w-32 h-34 pb-2">
                            <p class="text-black font-medium pt-3">Tidak ada jadwal mendatang</p>
                        </div>
                    </div> --}}
                {{-- @endif --}}
            {{-- </div> --}}
        </main>
    </div>
@endsection