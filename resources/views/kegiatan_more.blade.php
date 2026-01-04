<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan - BEM FH UNSIKA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="font-sans bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="mx-auto px-6 py-4" style="padding-left: 100px; padding-right: 100px;">
            <div class="flex items-center justify-between">
                <a href="{{ url('/') }}" class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <span class="text-lg font-semibold">BEM FH UNSIKA</span>
                </a>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ url('/#tentang') }}" class="nav-link text-gray-700">Tentang Kami</a>
                    <a href="{{ url('/#visi-misi') }}" class="nav-link text-gray-700">Visi & Misi</a>
                    <a href="{{ url('/#kegiatan') }}" class="nav-link text-gray-700">Kegiatan</a>
                    <a href="#footer" class="nav-link">Kontak</a>
                    <a href="{{ url('/#kontak') }}">
                        <button class="btn-primary text-white px-6 py-2 rounded">Hubungi Kami</button>
                    </a>
                </div>

                
                <button class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="pt-32 pb-12 bg-white">
        <div class="mx-auto px-6" style="padding-left: 100px; padding-right: 100px;">
            <h1 class="text-4xl font-bold mb-6">Kegiatan BEM KM FH UNSIKA</h1>
            
            <!-- Search and Filter -->
            <div class="flex items-center gap-4 mb-8">
                <div class="flex-1 relative">
                    <svg class="w-5 h-5 absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input 
                        type="text" 
                        id="searchInput"
                        placeholder="Cari kegiatan disini..." 
                        class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg search-input"
                    >
                </div>
                <button class="filter-btn p-3 border border-gray-300 rounded-lg">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                    </svg>
                </button>
            </div>
        </div>

    <!-- Filter Modal (hidden by default) -->
<!-- Tambahkan Modal Filter setelah section search (bisa diletakkan sebelum penutup </body>) -->
<div id="filterModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
    <div id="filterModalContent" class="bg-white rounded-xl shadow-2xl w-full max-w-md max-h-[90vh] overflow-y-auto transform scale-95 transition-transform duration-300">
        <!-- Header Modal -->
        <div class="flex items-center justify-between p-4 sm:p-6 border-b border-gray-200">
            <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Filter Kajian</h3>
            <button id="closeFilterModal" class="text-gray-400 hover:text-gray-600 transition-colors p-1">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Body Modal -->
        <div class="p-4 sm:p-6">
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-700 mb-3">Tanggal Publikasi</label>
                <div class="space-y-2">
                    <!-- Option: Semua Waktu -->
                    <label class="flex items-center p-2.5 sm:p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                        <input type="radio" name="dateFilter" value="all" checked class="w-4 h-4 text-blue-600 focus:ring-2 focus:ring-blue-500">
                        <span class="ml-3 text-sm sm:text-base text-gray-700">Semua Waktu</span>
                    </label>

                    <!-- Option: Hari Ini -->
                    <label class="flex items-center p-2.5 sm:p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                        <input type="radio" name="dateFilter" value="today" class="w-4 h-4 text-blue-600 focus:ring-2 focus:ring-blue-500">
                        <span class="ml-3 text-sm sm:text-base text-gray-700">Hari Ini</span>
                    </label>

                    <!-- Option: 7 Hari Terakhir -->
                    <label class="flex items-center p-2.5 sm:p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                        <input type="radio" name="dateFilter" value="week" class="w-4 h-4 text-blue-600 focus:ring-2 focus:ring-blue-500">
                        <span class="ml-3 text-sm sm:text-base text-gray-700">7 Hari Terakhir</span>
                    </label>

                    <!-- Option: 30 Hari Terakhir -->
                    <label class="flex items-center p-2.5 sm:p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                        <input type="radio" name="dateFilter" value="month" class="w-4 h-4 text-blue-600 focus:ring-2 focus:ring-blue-500">
                        <span class="ml-3 text-sm sm:text-base text-gray-700">30 Hari Terakhir</span>
                    </label>

                    <!-- Option: Tahun Ini -->
                    <label class="flex items-center p-2.5 sm:p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                        <input type="radio" name="dateFilter" value="year" class="w-4 h-4 text-blue-600 focus:ring-2 focus:ring-blue-500">
                        <span class="ml-3 text-sm sm:text-base text-gray-700">Tahun Ini</span>
                    </label>

                    <!-- Option: Rentang Kustom -->
                    <label class="flex items-center p-2.5 sm:p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                        <input type="radio" name="dateFilter" value="custom" class="w-4 h-4 text-blue-600 focus:ring-2 focus:ring-blue-500">
                        <span class="ml-3 text-sm sm:text-base text-gray-700">Rentang Tanggal Kustom</span>
                    </label>
                </div>

                <!-- Custom Date Range Inputs -->
                <div id="customDateRange" class="hidden mt-4 p-3 sm:p-4 bg-gray-50 rounded-lg space-y-3">
                    <div>
                        <label class="block text-xs sm:text-sm text-gray-600 mb-1">Dari Tanggal</label>
                        <input type="date" id="startDate" class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-xs sm:text-sm text-gray-600 mb-1">Sampai Tanggal</label>
                        <input type="date" id="endDate" class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Modal -->
        <div class="flex gap-2 sm:gap-3 p-4 sm:p-6 border-t border-gray-200 bg-gray-50">
            <button id="resetFilterBtn" class="flex-1 px-3 sm:px-4 py-2 sm:py-2.5 text-sm sm:text-base border border-gray-300 rounded-lg font-medium text-gray-700 hover:bg-gray-100 transition-colors">
                Reset
            </button>
            <button id="applyFilterBtn" class="flex-1 px-3 sm:px-4 py-2 sm:py-2.5 text-sm sm:text-base bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                Terapkan Filter
            </button>
        </div>
    </div>
</div>

<!-- Pesan Tidak Ada Hasil - Letakkan SETELAH grid kajian (di luar grid) -->
<div id="noResultsMessage" class="hidden text-center py-16 px-4">
    <svg class="w-16 h-16 sm:w-20 sm:h-20 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    <h3 class="text-lg sm:text-xl font-semibold text-gray-700 mb-2">Tidak Ada Kajian yang Cocok</h3>
    <p class="text-sm sm:text-base text-gray-500">Tidak ada kajian yang sesuai dengan filter yang Anda pilih</p>
    <button id="clearFilterFromMessage" class="mt-4 px-4 py-2 text-sm sm:text-base bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
        Hapus Filter
    </button>
</div>
    </section>

    <!-- Activities Grid -->
    <section class="pb-24 bg-white">
        <div class="mx-auto px-6" style="padding-left: 100px; padding-right: 100px;">
            <div id="activitiesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Card contoh (duplikasi sesuai kebutuhan) -->
                <div class="card bg-white rounded-lg overflow-hidden shadow-lg activity-card" data-title="lorem ipsum dolor">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400" alt="Activity" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula ex. 
                            Pellentesque sollicitudin ex et dictum faucibus...
                        </p>
                        <p class="text-gray-400 text-sm">23/01/2025</p>
                    </div>
                </div>

                               <!-- Card 2 -->
                <div class="card bg-white rounded-lg overflow-hidden shadow-lg activity-card" data-title="lorem ipsum dolor">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400" alt="Activity" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula ex. 
                            Pellentesque sollicitudin ex et dictum faucibus...
                        </p>
                        <p class="text-gray-400 text-sm">23/01/2025</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card bg-white rounded-lg overflow-hidden shadow-lg activity-card" data-title="lorem ipsum dolor">
                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=400" alt="Activity" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula ex. 
                            Pellentesque sollicitudin ex et dictum faucibus...
                        </p>
                        <p class="text-gray-400 text-sm">23/01/2025</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card bg-white rounded-lg overflow-hidden shadow-lg activity-card" data-title="lorem ipsum dolor">
                    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=400" alt="Activity" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula ex. 
                            Pellentesque sollicitudin ex et dictum faucibus...
                        </p>
                        <p class="text-gray-400 text-sm">23/01/2025</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card bg-white rounded-lg overflow-hidden shadow-lg activity-card" data-title="lorem ipsum dolor">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400" alt="Activity" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula ex. 
                            Pellentesque sollicitudin ex et dictum faucibus...
                        </p>
                        <p class="text-gray-400 text-sm">23/01/2025</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="card bg-white rounded-lg overflow-hidden shadow-lg activity-card" data-title="lorem ipsum dolor">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400" alt="Activity" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula ex. 
                            Pellentesque sollicitudin ex et dictum faucibus...
                        </p>
                        <p class="text-gray-400 text-sm">23/01/2025</p>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="card bg-white rounded-lg overflow-hidden shadow-lg activity-card" data-title="lorem ipsum dolor">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400" alt="Activity" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula ex. 
                            Pellentesque sollicitudin ex et dictum faucibus...
                        </p>
                        <p class="text-gray-400 text-sm">23/01/2025</p>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="card bg-white rounded-lg overflow-hidden shadow-lg activity-card" data-title="lorem ipsum dolor">
                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=400" alt="Activity" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">siksa</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula ex. 
                            Pellentesque sollicitudin ex et dictum faucibus...
                        </p>
                        <p class="text-gray-400 text-sm">23/01/2025</p>
                    </div>
                </div>

                <!-- Card 9 -->
                <div class="card bg-white rounded-lg overflow-hidden shadow-lg activity-card" data-title="lorem ipsum dolor">
                    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=400" alt="Activity" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula ex. 
                            Pellentesque sollicitudin ex et dictum faucibus...
                        </p>
                        <p class="text-gray-400 text-sm">23/01/2025</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-bg text-white py-20" id="footer">
        <div class="mx-auto px-6" style="padding-left: 100px; padding-right: 100px;">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <a href="landing_page.html" class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
                        <span class="font-semibold">BEM KM FH UNSIKA</span>
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula est. 
                        Pellentesque quis sodio elit et dictum faucibus. Nam vitae maximus ex.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-bold mb-4">Links</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ url('/') }}" class="hover:text-white">Beranda</a></li>
                        <li><a href="{{ url('/#tentang') }}" class="hover:text-white">Tentang Kami</a></li>
                        <li><a href="{{ url('/kegiatan') }}" class="hover:text-white">Kegiatan</a></li>
                        <li><a href="{{ url('/#visi-misi') }}" class="hover:text-white">Visi & Misi</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-bold mb-4">Alamat</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Ruang Sekre KM FH Unsika<br>
                        Jl. HS. Ronggo Waluyo, Puseurjaya,<br>
                        Kec. Telukjambe Timur, Karawang<br>
                        Jawa Barat, Indonesia
                    </p>
                </div>
                
                <div>
                    <h3 class="font-bold mb-4">Kontak</h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-gray-700 rounded flex items-center justify-center">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <div class="text-sm">
                                <div class="text-gray-400">0811-1111-xxxx</div>
                                <div class="text-gray-400">0811-1111-xxxx</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-gray-700 rounded flex items-center justify-center">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <div class="text-sm text-gray-400">
                                dummy1@gmail.com<br>
                                dummy2@gmail.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400 text-sm">
                Copyright © BEM KM FH UNSIKA - All Rights Reserved
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
