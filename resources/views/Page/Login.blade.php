@extends('layouts.app')

@section('head')
    <title>Login</title>
@endsection

@section('content')
   <x-header class="flex justify-center items-center">
      <img src="{{asset('assets/image/logo.png')}}" />
   </x-header>

   <x-content>
      <p class="text-gray-500 text-center my-2 text-sm md:text-lg lg:text-xl xl:text-2xl">
         Silahkan login menggunakan akun karyawan atau perusahaan
      </p>
      <div class="flex flex-col mx-auto w-10/12 md:w-12/12">
         <div class="mb-4">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="Masukan email atau NIP" />
         </div>
         <div class="mb-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="Masukan Password" />
         </div>
         <a href="#" class="text-sm">Lupa Password ?</a>
         <x-button class="bg-[#44B156] text-white">Login</x-button>
      </div>
   </x-content>

   {{-- <x-footer /> --}}

@endsection

@section('javascript')
    
@endsection