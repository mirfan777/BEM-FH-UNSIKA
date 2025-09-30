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
