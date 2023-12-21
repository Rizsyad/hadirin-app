@extends('layouts.app')

@section('head')
    <title>Home</title>
@endsection

@section('content')
    <x-header class="flex justify-center items-center">
        <p class="text-3xl">Edit Profile</p>
    </x-header>

    <x-content>
        <div
            class="boreder absolute left-1/2 top-44 transform -translate-x-1/2 -translate-y-1/2 p-5 items-center justify-center">
            <img src="{{ asset('assets/image/luffy pp.jpg') }}" class="rounded-full w-24 h-24" />
        </div>
        <div class="flex flex-col mx-auto w-10/12 md:w-12/12 mt-6">
            <div class="mb-4">
                <label for="nama">Name</label>
                <input type="text" name="nama" id="nama"
                    class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                    placeholder="Masukan Nama Anda" />
            </div>
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" id="email"
                    class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                    placeholder="Masukan email atau NIP" />
            </div>
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                    placeholder="Masukan Password" />
            </div>
            <div class="mb-4">
                <label for="date">Date of Birth</label>
                <input type="date" name="date" id="date"
                    class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                    placeholder="Masukan Tanggal" />
            </div>
            <x-button class="bg-[#44B156] text-white">Save Changes</x-button>
        </div>
    </x-content>

    <x-footer />
@endsection

@section('javascript')
@endsection
