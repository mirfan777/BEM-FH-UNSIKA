<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>{{ $siteProfile->name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('storage/' . $siteProfile->logo) }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- AOS CSS -->
    <link href="{{ asset('aos/aos.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-white">
    <!-- Navbar -->
    <x-guest.layout>
    <!-- Page Header -->
    <main class="max-w-7xl mx-4 sm:mx-8 lg:mx-20 my-20 px-6 sm:px-8 lg:px-12 py-8 sm:py-12">
    <section class="bg-white">
        <div class="mx-auto">
            <p class="text-red-800 font-semibold mb-10" data-aos="fade-down">
                Publikasi > Kajian
            </p>
            <h1 class="text-4xl font-bold mb-6" data-aos="fade-up" data-aos-delay="100">
                Kajian Aksi dan Strategi BEM-KM FH Unsika
            </h1>
            
            <!-- Search and Filter -->
            <div class="flex items-center gap-4 mb-8" data-aos="fade-up" data-aos-delay="200">
                <!-- Search Input -->
                <div class="flex-1 relative">
                    <svg class="w-5 h-5 absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input 
                        type="text" 
                        id="searchInput"
                        placeholder="Cari kajian yang ingin Anda lihat di sini…" 
                        class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg search-input"
                    >
                </div>
                <!-- Filter Button -->
                <button class="filter-btn p-3 border border-gray-300 rounded-lg">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                    </svg>
                </button>
    </section>

    <!-- Activities Grid -->
    <section class="pb-24 bg-white">
        <div class="mx-auto">
            <div id="activitiesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
                
                @foreach($kegiatan as $index => $item)
                <div class="w-full" 
                     data-aos="fade-up"
                     data-aos-delay="{{ $index * 100 }}"
                     data-aos-duration="800">
                    <a href="{{ route('blog.show', $item->slug) }}" 
                       class="card block bg-white rounded-lg overflow-hidden shadow-lg activity-card 
                              hover:shadow-2xl transition-all duration-500 ease-out
                              group" 
                       data-title="{{ $item->title }}">
                        <div class="overflow-hidden rounded-t-lg">
                            <img src="/storage/{{ $item->thumbnail }}" 
                                 alt="{{ $item->title }}" 
                                 class="w-full h-48 object-cover transition-transform duration-500 ease-out 
                                        group-hover:scale-110">
                        </div>
                        <div class="p-6 bg-white rounded-b-lg">
                            <h3 class="font-bold text-xl mb-3 transition-colors duration-300 
                                       group-hover:text-red-800">{{ $item->title }}</h3>
                            <p class="text-gray-600 text-sm mb-4">
                                {{ $item->description }}
                            </p>
                            <p class="text-gray-400 text-sm">{{ \Carbon\Carbon::parse($item->start_at)->format('d/m/Y') }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
               <!-- Pesan Tidak Ada Hasil - Letakkan SETELAH grid kajian (di luar grid) -->
           <div id="noResultsMessage" class="hidden text-center py-16 px-4">
               <svg class="w-16 h-16 sm:w-20 sm:h-20 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="00 24 24">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M910h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
               </svg>
               <h3 class="text-lg sm:text-xl font-semibold text-gray-700 mb-2">Tidak Ada Kajian yang Cocok</h3>
               <p class="text-sm sm:text-base text-gray-500">Tidak ada kajian yang sesuai dengan filter yang Anda pilih</p>
               <button id="clearFilterFromMessage" class="mt-4 px-4 py-2 text-sm sm:text-base bg-red-800 text-white rounded-lg hover:bg-red-900 transition-colors">
                   Hapus Filter
               </button>
           </div>
        </div>
    </div>
    </main>

    <!-- filter modal -->             
    <div id="filterModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div id="filterModalContent" class="bg-white rounded-xl shadow-2xl w-full max-w-md max-h-[90vh] overflow-y-auto transform  scale-95 transition-transform duration-300">
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
                                   <input type="radio" name="dateFilter" value="all" checked class="w-4 h-4 text-red-800 focus:ring-2 focus:ring-red-800">
                                   <span class="ml-3 text-sm sm:text-base text-gray-700">Semua Waktu</span>
                               </label>
        
                               <!-- Option: Hari Ini -->
                               <label class="flex items-center p-2.5 sm:p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                   <input type="radio" name="dateFilter" value="today" class="w-4 h-4 text-red-800 focus:ring-2 focus:ring-red-800">
                                   <span class="ml-3 text-sm sm:text-base text-gray-700">Hari Ini</span>
                               </label>
        
                               <!-- Option: 7 Hari Terakhir -->
                               <label class="flex items-center p-2.5 sm:p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                   <input type="radio" name="dateFilter" value="week" class="w-4 h-4 text-red-800 focus:ring-2 focus:ring-red-800">
                                   <span class="ml-3 text-sm sm:text-base text-gray-700">7 Hari Terakhir</span>
                               </label>
        
                               <!-- Option: 30 Hari Terakhir -->
                               <label class="flex items-center p-2.5 sm:p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                   <input type="radio" name="dateFilter" value="month" class="w-4 h-4 text-red-800 focus:ring-2 focus:ring-red-800">
                                   <span class="ml-3 text-sm sm:text-base text-gray-700">30 Hari Terakhir</span>
                               </label>
        
                               <!-- Option: Tahun Ini -->
                               <label class="flex items-center p-2.5 sm:p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                   <input type="radio" name="dateFilter" value="year" class="w-4 h-4 text-red-800 focus:ring-2 focus:ring-red-800">
                                   <span class="ml-3 text-sm sm:text-base text-gray-700">Tahun Ini</span>
                               </label>
        
                               <!-- Option: Rentang Kustom -->
                               <label class="flex items-center p-2.5 sm:p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                   <input type="radio" name="dateFilter" value="custom" class="w-4 h-4 text-red-800 focus:ring-2 focus:ring-red-800">
                                   <span class="ml-3 text-sm sm:text-base text-gray-700">Rentang Tanggal Kustom</span>
                               </label>
                           </div>
        
                           <!-- Custom Date Range Inputs -->
                           <div id="customDateRange" class="hidden mt-4 p-3 sm:p-4 bg-gray-50 rounded-lg space-y-3">
                               <div>
                                   <label class="block text-xs sm:text-sm text-gray-600 mb-1">Dari Tanggal</label>
                                   <input type="date" id="startDate" class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-800 focus:border-red-800">
                               </div>
                               <div>
                                   <label class="block text-xs sm:text-sm text-gray-600 mb-1">Sampai Tanggal</label>
                                   <input type="date" id="endDate" class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-800 focus:border-red-800">
                               </div>
                           </div>
                       </div>
                   </div>
        
                   <!-- Footer Modal -->
                   <div class="flex gap-2 sm:gap-3 p-4 sm:p-6 border-t border-gray-200 bg-gray-50">
                       <button id="resetFilterBtn" class="flex-1 px-3 sm:px-4 py-2 sm:py-2.5 text-sm sm:text-base border border-gray-300 rounded-lg font-medium text-gray-700 hover:bg-gray-100 transition-colors">
                           Reset
                       </button>
                       <button id="applyFilterBtn" class="flex-1 px-3 sm:px-4 py-2 sm:py-2.5 text-sm sm:text-base bg-red-800 text-white rounded-lg font-medium hover:bg-red-900 transition-colors">
                           Terapkan Filter
                       </button>
                   </div>
               </div>
           </div>
        

    
    <!-- AOS JS -->
    <script src="{{ asset('aos/aos.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    
    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100,
            delay: 100,
        });
    </script>
    
    <!-- Custom CSS for smooth hover -->
    <style>
        .card {
            will-change: transform;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
        }
        
        .card:hover {
            transform: scale(1.03) translateY(-8px);
        }
        
        .card img {
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
        }
    </style>
    </x-guest.layout>
</body>
</html>