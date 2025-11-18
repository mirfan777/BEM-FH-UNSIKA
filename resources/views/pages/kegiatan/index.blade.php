<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan - BEM FH UNSIKA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('storage/' . $siteProfile->logo) }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="font-sans bg-white">
    <!-- Navbar -->
    <x-guest.layout>
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
                
                @foreach($kegiatan as $kegiatan)
                <a href="{{ route('blog.show', $kegiatan->slug) }}" class="card bg-white rounded-lg overflow-hidden shadow-lg activity-card" data-title="lorem ipsum dolor">
                    <img src="/storage/{{ $kegiatan->thumbnail }}" alt="Activity" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">{{ $kegiatan->title }}</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            {{ $kegiatan->description }}
                        </p>
                        <p class="text-gray-400 text-sm">{{ $kegiatan->created_at->format('d/m/Y') }}</p>
                    </div>
                </a>
                @endforeach



            </div>
        </div>
    </section>

    <script src="{{ asset('js/script.js') }}"></script>
    </x-guest.layout>
</body>
</html>
