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
    
    <section class="max-w-7xl mx-4 sm:mx-8 lg:mx-20 my-20 px-6 sm:px-8 lg:px-12 py-8 sm:py-12">
 <!-- Breadcrumb -->
    <nav class="mb-8" data-aos="fade-down">
        <p class="text-red-800 font-semibold">
            <a href="{{ url('/kegiatan') }}" class="hover:underline">Publikasi</a> > Kajian
        </p>
    </nav>
    
    <!-- Article Header -->
    <article>
        <!-- Title -->
        <header class="mb-8" data-aos="fade-up">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight text-gray-900 mb-8">
                {{ $kegiatan->title }}
            </h1>
            
            <!-- Meta Information -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 text-gray-600">
                <div class="space-y-1">
                    @if($kegiatan->department)
                        @if($kegiatan->department->field)
                            <p class="font-semibold text-gray-900">
                                {{ $kegiatan->department->field->name }}
                            </p>
                        @endif
                        
                        <p class="text-sm">
                            {{ $kegiatan->department->name }}
                        </p>
                    @endif
                </div>
                
                <!-- Date -->
                <p class="text-sm sm:text-right">
                    {{ \Carbon\Carbon::parse($kegiatan->start_at)->translatedFormat('d F Y') }}
                </p>
            </div>
        </header>
        
        <!-- Featured Image -->
        <figure class="mb-12" data-aos="fade-up" data-aos-delay="200">
            <img src="/storage/{{ $kegiatan->thumbnail }}" 
                 alt="{{ $kegiatan->title }}" 
                 class="w-full h-auto max-h-[600px] object-cover rounded-lg shadow-lg">
        </figure>
        
        <!-- Content -->
        <div class="p-0" 
             data-aos="fade-up" 
             data-aos-delay="400"
             data-aos-duration="800">
            {!! $kegiatan->content !!}
        </div>
    </section>

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
        });
    </script>
    </x-guest.layout>
</body>
</html>