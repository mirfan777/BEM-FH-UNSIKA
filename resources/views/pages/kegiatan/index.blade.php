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
                            <p class="text-gray-400 text-sm">{{ $item->start_at }}</p>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    </main>
    
    <!-- AOS JS -->
    <script src="{{ asset('aos/aos.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    
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