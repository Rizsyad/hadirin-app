@extends('layouts.app')

@section('head')
    <title>Pengajuan Cuti</title>
@endsection

@section('content')
    <x-header class="flex h-20 -mt-6 -ml-8">
        <a href="{{ route('views.home') }}" class="flex-none text-2xl">
            <i class='bx bx-chevron-left'></i>
        </a>
        <div class="grow text-center text-xl">
            <h2>Pengajuan Cuti</h2>
        </div>
    </x-header>

    <x-content class="mb-20">
        <div class="flex flex-col justify-center items-center bg-[#44B156] h-80">
            <div class="h-full w-11/12 md:w-12/12 mt-5">
                <div class="my-4">
                    <label class="text-white" for="keterangan">Keterangan</label>
                    <textarea
                        class= "block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                        placeholder="Masukan Keterangan"></textarea>
                </div>
                <div class="mb-4">
                    <label class="text-white" for="dateawal">Tangga Awal</label>
                    <input type="date" name="dateawal" id="dateawal"
                        class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                        placeholder="Masukan Tanggal" />
                </div>
                <div class="mb-44">
                    <label class="text-white" for="dateakhir">Tanggal Akhir</label>
                    <input type="date" name="dateakhir" id="dateakhir"
                        class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                        placeholder="Masukan Tanggal" />
                </div>
            </div>
        </div>
    </x-content>


    <x-footer-green>
        <p class="text-white text-center text-lg">Tolong Pastikan Anda Telah Cek kembali...</p>
        <x-button-surat>Submit</x-button-surat>
    </x-footer-green>
@endsection

@section('javascript')
@endsection