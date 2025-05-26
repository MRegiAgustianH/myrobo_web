<aside class="lg:flex flex-wrap justify-center items-center content-start w-72 bg-[#73C7C7] border-r border-grayy-200">
    <!-- Logo -->
    <div class="border-b border-white w-full h-32">
        <div class="flex justify-center items-center">
            <img src="{{ asset('images/applogo.png') }}" alt="" class="w-1/2 h-1/2">
        </div>
    </div>
    <!-- endLogo -->
    <!-- navigation -->
    <div class="flex flex-wrap gap-2 px-4 py-6">
        <h2 class="text-xl">Utama</h2>
        <a href="{{ route('dashboard-admin') }}" class="flex items-center p-2 bg-white text-gray-700 hover:bg-gray-200 rounded-lg w-full">
            <img src="{{ asset('images/home.png') }}" alt="" class="w-6 h-6 mr-2">
            <span>Dashboard</span>
        </a>
        <a href="{{ route('sekolah.index') }}" class="flex items-center p-2 bg-white text-gray-700 hover:bg-gray-200 rounded-lg w-full">
            <img src="{{ asset('images/office.png') }}" alt="" class="w-6 h-6 mr-2">
            <span>Manajemen Sekolah</span>
        </a>
        <a href="" class="flex items-center p-2 bg-white text-gray-700 hover:bg-gray-200 rounded-lg w-full">
            <img src="{{ asset('images/office.png') }}" alt="" class="w-6 h-6 mr-2">
            <span>Manajemen Home Private</span>
        </a>
        <a href="" class="flex items-center p-2 bg-white text-gray-700 hover:bg-gray-200 rounded-lg w-full">
            <img src="{{ asset('images/office.png') }}" alt="" class="w-6 h-6 mr-2">
            <span>Manajemen Instruktur</span>
        </a>
        <h2 class="text-xl">Penjadwalan</h2>
        <a href="" class="flex items-center p-2 bg-white text-gray-700 hover:bg-gray-200 rounded-lg w-full">
            <img src="{{ asset('images/office.png') }}" alt="" class="w-6 h-6 mr-2">
            <span>Sekolah</span>
        </a>
        <a href="" class="flex items-center p-2 bg-white text-gray-700 hover:bg-gray-200 rounded-lg w-full">
            <img src="{{ asset('images/office.png') }}" alt="" class="w-6 h-6 mr-2">
            <span>Home Private</span>
        </a>
        <h2 class="text-xl">Laporan</h2>
        <a href="" class="flex items-center p-2 bg-white text-gray-700 hover:bg-gray-200 rounded-lg w-full">
            <img src="{{ asset('images/office.png') }}" alt="" class="w-6 h-6 mr-2">
            <span>Laporan</span>
        </a>
        <a href="" class="flex items-center p-2 bg-white text-gray-700 hover:bg-gray-200 rounded-lg w-full">
            <img src="{{ asset('images/office.png') }}" alt="" class="w-6 h-6 mr-2">
            <span>Rekap Absensi</span>
        </a>
        <h2 class="text-xl">Pengaturan</h2>
        <a href="" class="flex items-center p-2 bg-white text-gray-700 hover:bg-gray-200 rounded-lg w-full">
            <img src="{{ asset('images/office.png') }}" alt="" class="w-6 h-6 mr-2">
            <span>Taun Ajaran</span>
        </a>
        <a href="" class="flex items-center p-2 bg-white text-gray-700 hover:bg-gray-200 rounded-lg w-full">
            <img src="{{ asset('images/office.png') }}" alt="" class="w-6 h-6 mr-2">
            <span>Super Admin</span>
        </a>

        
    </div>
    <!-- endNavigation -->
</aside>