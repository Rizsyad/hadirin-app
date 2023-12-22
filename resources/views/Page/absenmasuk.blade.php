@extends('layouts.app')

@section('head')
    <title>Absen Masuk</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endsection

@section('content')
    <x-header class="flex h-20 -mt-6 z-10">
        <a href="{{ route('views.home') }}" class="flex-none text-2xl">
            <i class='bx bx-chevron-left'></i>
        </a>
        <div class="grow text-center text-xl">
            <h2>Absen Masuk</h2>
        </div>
    </x-header>

    <x-content class="!-mt-20 z-0 !mx-0">
        <div class="h-full w-screen absolute" id="map"></div>
    </x-content>

    <x-footer-green>
        <p class="text-white text-center text-lg">Tolong Pastikan Anda dalam radius...</p>
        <x-button-surat>Konfirmasi Lokasi</x-button-surat>
    </x-footer-green>
@endsection

@section('javascript')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(document).ready(async () => {
            var permissionStatus = await navigator?.permissions?.query({
                name: 'geolocation'
            })
            var hasPermission = permissionStatus?.state // Dynamic value

            if (hasPermission == "denied") {
                Swal.fire('Geolocation denied', 'Location must be enabled.', 'error')
                return;
            }

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(setPosition);
            } else {
                Swal.fire('Geolocation denied', 'Geolocation is not supported by this browser.', 'error')
            }

            var codinateBL = [-6.234524486140895, 106.74744433993867];
            var map = L.map('map').setView(codinateBL, 17);
            L.circle(codinateBL, 140).addTo(map);
            // L.circle(codinateBL, {
            //    // color: '',
            //    // fillColor: '',
            //    fillOpacity: 0.5,
            //    radius: 140
            // }).addTo(map)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

            function setPosition(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
               //   var latitude = -6.2359007;
               //   var longitude = 106.7472317;

                var BLLocation = new L.LatLng(codinateBL[0], codinateBL[1]);
                var myLocation = new L.LatLng(latitude, longitude);

                // Create a marker using the obtained latitude and longitude
                L.marker([latitude, longitude]).addTo(map).bindPopup('Your Here');
                //  L.marker([-6.2359007, 106.7472317]).addTo(map).bindPopup('Test');

                // //  134.2986715010271
                // //  -6.2357007 106.7472317 // lokasi DTI

                // // 154.82259284917632
                // // -6.2359007, 106.7472317 // depan bl mungkin

                // Calculate the distance between the two points
                var distance = BLLocation.distanceTo(myLocation);

                // Compare the distance with the radius (140 meters in this case) berada dalam jangkauan
                if (distance >= 140) {
                  Swal.fire('Oooops...', 'Anda berada di luar jangkauan peta', 'error');
                }

            }
        })
    </script>
@endsection