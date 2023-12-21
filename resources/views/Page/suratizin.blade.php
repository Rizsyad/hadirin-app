@extends('layouts.app')

@section('head')
    <title>Login</title>
@endsection

@section('content')
   <x-header class="flex justify-center items-center">
   <p class="text-3xl">Pengajuan Izin</p>
   </x-header>

   <x-content class="bg-[#44B156] mt-8">
      <div class="flex flex-col mx-auto w-10/12 md:w-12/12">
         <div class="my-4">
            <label class="text-white" for="keterangan">Keterangan</label>
            <textarea class= "block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="Masukan Keterangan"></textarea>
        </div>
         <div class="mb-4">
            <label class="text-white" for="surat">Surat Izin</label>
            <input type="file" name="surat" id="file" class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="Masukan File Anda" />
         </div>
         <div class="mb-8">
                <label class="text-white" for="date">Tanggal Izin</label>
                <input type="date" name="date" id="date"
                    class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                    placeholder="Masukan Tanggal" />
            </div>
      </div>
   </x-content>
   <footer class="fixed bottom-0 left-0 z-50 w-full h-24 bg-[#44B156] border-t">
    <div class="flex flex-col mt-2">
        <p class="text-white text-center">Tolong Pastikan Anda Cek Kembali</p>
        <button class="text-white bg-[#FE976B] text-center p-3 my-3 rounded-full">
            {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}
</button>
    </div>
   </footer>

   {{-- <x-footer /> --}}

@endsection

@section('javascript')
    
@endsection