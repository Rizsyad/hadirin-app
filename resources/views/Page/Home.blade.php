@extends('layouts.app')

@section('head')
    <title>Home</title>
@endsection

@section('content')
    <x-header class="flex h-44">
        <div class="flex-none mt-6 landscape:mt-3">
            <img class="h-14" src="{{ asset('assets/image/logo.png') }}" />
        </div>
        <div class="flex-none mt-6 landscape:mt-3">
            <h2 class="mt-2 landscape:mt-0 font-bold text-sm md:text-base lg:text-lg landscape:text-lg">Selamat Datang, Nama!</h2>
            <p class="italic text-muted text-xs landscape:text-base">'Waktu adalah uang, Selamat bekerja'</p>
        </div>
        <div class="grow">
            <button class="absolute top-0 right-0 text-lg mt-5 mr-5 bg-[#44B156] p-2 text-white drop-shadow-xl rounded-lg">
                <i class="fa-solid fa-right-from-bracket"></i>
            </button>
        </div>
    </x-header>

    <x-content>
        {{-- info hadiran --}}
        <div class="flex justify-center items-center">
            <x-info-header>
                <div class="grid grid-cols-3 text-center text-lg">
                    <div class="flex flex-col items-center">
                        <i class='bx bxs-calendar-check'></i>
                        <span>Hadir</span>
                        <span>0</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class='bx bx-plus-medical'></i>
                        <span>Sakit</span>
                        <span>0</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class='bx bxs-briefcase'></i>
                        <span>Izin</span>
                        <span>0</span>
                    </div>
                </div>
            </x-info-header>

            <div class="mt-20 w-11/12">
                <p class="font-bold text-sm md:text-md">Menu Aktivitas</p>
                <div class="grid grid-cols-2 gap-5">
                  <x-button-menu href="{{route('views.absenmasuk')}}">
                     <span class="flex-auto mr-3 text-sm landscape:text-lg">Absen Masuk</span>
                     <i class='flex-auto bx bxs-user-check text-3xl'></i>                  
                  </x-button-menu>
                  <x-button-menu href="{{route('views.absenpulang')}}">
                     <span class="flex-auto mr-3 text-sm landscape:text-lg">Absen Pulang</span>
                     <i class='flex-auto bx bxs-home-smile text-3xl'></i>
                  </x-button-menu>
                  <x-button-menu href="{{route('views.suratizin')}}">
                        <span class="flex-auto mr-3 text-sm landscape:text-lg">Surat Izin</span>
                        <i class="flex-auto fa-solid fa-clipboard text-2xl"></i>
                  </x-button-menu>
                  <x-button-menu href="{{route('views.pengajuancuti')}}">
                        <span class="flex-auto mr-3 text-sm landscape:text-lg">Surat Cuti</span>
                        <i class="flex-auto fa-solid fa-clipboard text-2xl"></i>
                  </x-button-menu>
                </div>
            </div>
        </div>
    </x-content>

    <x-footer />
@endsection

@section('javascript')
@endsection
