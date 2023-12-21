<footer class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t">
    <div class="grid h-full grid-cols-3 mx-auto font-medium mt-1">
        <a href="{{route('views.home')}}" class="inline-flex flex-col items-center justify-center px-5 hover:text-[#44B156]" id="home">
            <i class="fa fa-house mb-1 w-5 h-5"></i>
            <span class="text-sm">Home</span>
        </a>
        <a href="{{route('views.presensi')}}" class="inline-flex flex-col items-center justify-center px-5 hover:text-[#44B156]" id="presensi">
            <i class="fa-solid fa-calendar mb-1 w-5 h-5"></i>
            <span class="text-sm">Presensi</span>
        </a>
        <a href="{{route('views.profile')}}" class="inline-flex flex-col items-center justify-center px-5 hover:text-[#44B156]" id="profile">
            <i class="fa-solid fa-user mb-1 w-5 h-5"></i>
            <span class="text-sm">Profile</span>
        </a>
    </div>
</footer>
