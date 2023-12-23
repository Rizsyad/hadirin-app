@extends('layouts.app')

@section('head')
    <title>Presensi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

@section('content')
    <x-header class="flex justify-center items-center h-44">
        <div class="bg-[#FE976B] text-center p-3 my-3 rounded-full">
            {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}
        </div>
    </x-header>
    <x-content>
        {{-- info rekap presensi / bulan --}}
        <div class="flex flex-col justify-center items-center">
            <x-info-header>
                <div class="grid grid-cols-2 text-center text-lg divide-x divide-gray-400">
                    <div class="flex flex-col items-center">
                        <span class="font-bold">Jam Datang</span>
                        <span class="text-[#44B156] text-3xl">00:00</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="font-bold">Jam Pulang</span>
                        <span class="text-[#44B156] text-3xl">00:00</span>
                    </div>
                </div>
            </x-info-header>

            <div class="mt-20 w-11/12 h-full mb-16">
                <p class="font-bold text-sm md:text-md">Rekap Presensi</p>
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Tanggal</th>
                            <th scope="col" class="px-6 py-3">Datang - Pulang</th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b text-xs landscape:text-base">
                            <td class="px-6 py-4">{{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}</td>
                            <td class="px-6 py-4">00:00 - 00:00</td>
                            <td class="px-6 py-4 detail-presensi">
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </td>
                        </tr>
                        <tr class="bg-white border-b text-xs landscape:text-base">
                            <td class="px-6 py-4">{{ \Carbon\Carbon::now()->addDays()->isoFormat('dddd, D MMMM Y') }}</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4 detail-presensi">
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </td>
                        </tr>
                        <tr class="bg-white border-b text-xs landscape:text-base">
                            <td class="px-6 py-4">{{ \Carbon\Carbon::now()->addDays(2)->isoFormat('dddd, D MMMM Y') }}</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4 detail-presensi">
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </td>
                        </tr>
                        <tr class="bg-white border-b text-xs landscape:text-base">
                            <td class="px-6 py-4">{{ \Carbon\Carbon::now()->addDays(3)->isoFormat('dddd, D MMMM Y') }}</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4 detail-presensi">
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </td>
                        </tr>
                        <tr class="bg-white border-b text-xs landscape:text-base">
                            <td class="px-6 py-4">{{ \Carbon\Carbon::now()->addDays(4)->isoFormat('dddd, D MMMM Y') }}</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4 detail-presensi">
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </td>
                        </tr>
                        <tr class="bg-white border-b text-xs landscape:text-base">
                            <td class="px-6 py-4">{{ \Carbon\Carbon::now()->addDays(4)->isoFormat('dddd, D MMMM Y') }}</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4 detail-presensi">
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </td>
                        </tr>
                        <tr class="bg-white border-b text-xs landscape:text-base">
                            <td class="px-6 py-4">{{ \Carbon\Carbon::now()->addDays(4)->isoFormat('dddd, D MMMM Y') }}</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4 detail-presensi">
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </x-content>

    <x-footer />

    <div id="overlay" class="fixed bottom-0 inset-0 bg-black bg-opacity-70 z-50 hidden">
        <div id="closeOverlay" class="flex items-end justify-center h-full">
            <div id="bodyOverlay" class="bg-white p-4 rounded-md w-full">

                {{-- <div class="mx-auto h-px mb-4 bg-gray-400 border-0 w-20 h-1 rounded-full">
                </div> --}}

                {{-- <p class="text-center text-gray-400 text-[0.6rem] mb-4 h-px">
                    <i class="fa-solid fa-x"></i>
                </p> --}}

                <div class="flex flex-row border-b-2 border-black">
                    <p class="flex-auto font-bold">{{ \Carbon\Carbon::now()->addDays()->isoFormat('dddd, D MMMM Y') }}</p>
                    <span class="flex-none text-[#44B156] mb-2">Hadir</span>
                </div>

                <div class="grid grid-cols-2 border-b-2 border-black">
                    <div class="mx-auto my-2">
                        <div class="flex flex-col mx-auto">
                            <p class="text-gray-400">Jam Datang</p>
                            <span class="flex-auto font-bold text-center">
                                00:00
                            </span>
                        </div>
                    </div>

                    <div class="mx-auto my-2">
                        <div class="flex flex-col mx-auto">
                            <p class="text-gray-400">Jam Pulang</p>
                            <span class="flex-auto font-bold text-center">
                                00:00
                            </span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col border-b-2 border-black">
                    <div class="my-2">
                        <p class="text-gray-400">Lokasi</p>
                        <span class="font-bold">Univeritas Budi Luhur</span>
                    </div>
                </div>

                <div class="flex flex-col border-b-2 border-black">
                    <div class="my-2">
                        <p class="text-gray-400">Keterangan</p>
                        <span class="font-bold text-red-500">Terlambat</span>
                        <span class="font-bold text-green-500">Tepat Waktu</span>
                        <span class="font-bold text-yellow-500">Izin / Cuti</span>
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
        })
    </script>
@endsection
