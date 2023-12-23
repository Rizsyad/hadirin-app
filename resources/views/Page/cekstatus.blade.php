@extends('layouts.app')

@section('head')
    <title>Cek Status</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

@section('content')
    <x-header class="flex h-20 -mt-6 -ml-8">
        <a href="{{ route('views.home') }}" class="flex-none text-2xl">
            <i class='bx bx-chevron-left'></i>
        </a>
        <div class="grow text-center text-xl">
            <h2>Cek Status</h2>
        </div>
    </x-header>

    <x-content class="!mt-0">
        {{-- info status --}}
        <div class="flex flex-col justify-center items-center">
            <div class="mt-8 w-11/12 h-full mb-16">
                <div class="flex flex-row">
                    <div class="flex-auto">
                        <p class="font-bold text-sm md:text-md">Rekap Status</p>
                    </div>
                    <p class="text-sm md:text-md" id="filter">
                        <i class='bx bx-filter-alt'></i>
                    </p>
                </div>
                <div class="bg-gray-300 p-3 hidden mb-5" id="infofilter">
                    <div class="mb-4">
                        <label class="font-bold" for="nama">Tahun</label>
                        <select name="tahun" id="tahun"
                            class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                            <option value="">Pilih Tahun</option>
                            @for ($i = 2023; $i >= 2013; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="font-bold" for="nama">Kategori</label>
                        <select name="tahun" id="tahun"
                            class="block mt-1 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                            <option value="">Pilih Kategori</option>
                            <option value="izin">Izin</option>
                            <option value="cuti">Cuti</option>
                        </select>
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Tanggal</th>
                            <th scope="col" class="px-6 py-3">Keterangan</th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b text-xs landscape:text-base">
                            <td class="px-6 py-4">{{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}</td>
                            <td class="px-6 py-4">
                                Izin -
                                <span class="font-bold text-yellow-500">Diproses</span>
                                <span class="font-bold text-green-500">Diterima</span>
                                <span class="font-bold text-red-500">Ditolak</span>
                            </td>
                            <td class="px-6 py-4 detail-presensi">
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </x-content>
    <div id="overlay" class="fixed bottom-0 inset-0 bg-black bg-opacity-70 z-50 hidden">
        <div id="closeOverlay" class="flex items-end justify-center h-full">
            <div id="bodyOverlay" class="bg-white p-4 rounded-md w-full">
                <div class="flex flex-row border-b-2 border-black">
                    <p class="flex-auto font-bold">{{ \Carbon\Carbon::now()->addDays()->isoFormat('dddd, D MMMM Y') }}</p>
                    <span class="flex-none text-yellow-500 mb-2">Izin</span>
                </div>

                <div class="flex flex-col border-b-2 border-black">
                    <div class="my-2">
                        <p class="text-gray-400">Status</p>
                        <span class="font-bold text-yellow-500">Diproses</span>
                        <span class="font-bold text-green-500">Diterima</span>
                        <span class="font-bold text-red-500">Ditolak</span>
                    </div>
                </div>

                <div class="flex flex-col border-b-2 border-black">
                    <div class="my-2">
                        <p class="text-gray-400">Keterangan</p>
                        <span class="font-bold">
                            Surat izin tidak terlampir
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {
            function showOverlay() {
                $("#overlay").removeClass("hidden");
                $("#bodyOverlay").addClass("animate__animated animate__fadeInUp");
                $("body").addClass("!overflow-hidden");
            }

            function hideOverlay() {
                $("#bodyOverlay").addClass("animate__animated animate__fadeOutDown");

                // Add a delay to match the animation duration
                setTimeout(function() {
                    $("#overlay").addClass("hidden");
                    $("#bodyOverlay").removeClass("animate__fadeOutDown");
                    $("body").removeClass("!overflow-hidden");
                }, 500);
            }

            $("#overlay").click(function(e) {
                if (e.target.id === "closeOverlay") {
                    hideOverlay();
                    // $("#overlay").addClass("hidden");
                    // $("body").removeClass("overflow-hidden");
                }
            });

            $("#bodyOverlay").click(function(e) {
                e.stopPropagation(); // Prevent the click event from reaching the #overlay element
            });

            $(".detail-presensi").click(function() {
                // $("#overlay").removeClass("hidden");
                // $("body").addClass("overflow-hidden");
                showOverlay();

            });

            $("#filter").on("click", function() {
                // if($("#infofilter[class='hidden']")) {
                //    return $("#infofilter").removeClass("hidden");
                // }

                $("#infofilter").toggle();

            });
        })
    </script>
@endsection
