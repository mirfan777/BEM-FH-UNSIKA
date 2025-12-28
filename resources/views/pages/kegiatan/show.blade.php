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
    
    <section class="pt-32 pb-12 bg-white ml-20 mr-20 mb-20">
        <!-- Breadcrumb -->
        <p class="text-red-800 font-semibold mb-10" 
           data-aos="fade-down">
            Publikasi > Kajian
        </p>
        
        <div class="p-2">
            <!-- Title -->
            <h1 class="text-4xl font-bold" 
                data-aos="fade-up" 
                data-aos-delay="100">
                {{ $kegiatan->title }}
            </h1>

            @if($kegiatan->department)
                @if($kegiatan->department->field)
                    <h2 class="text-xl text-gray-700"
                        data-aos="fade-up" 
                        data-aos-delay="150">
                        {{ $kegiatan->department->field->name }}
                    </h2>
                @endif

                <h3 class="text-base text-gray-700"
                    data-aos="fade-up" 
                    data-aos-delay="150">
                    {{ $kegiatan->department->name }}
                </h3>
            @endif
            
            <!-- Date -->
            <p class="text-gray-600" 
               data-aos="fade-up" 
               data-aos-delay="200">
                {{ \Carbon\Carbon::parse($kegiatan->start_at)->format('d F Y') }}
            </p>
            
            <!-- Thumbnail Image -->
            <img src="/storage/{{ $kegiatan->thumbnail }}" 
                 alt="{{ $kegiatan->title }}" 
                 class="w-full max-h-[500px] my-6 object-cover rounded-2xl shadow-lg"
                 data-aos="zoom-in" 
                 data-aos-delay="300"
                 data-aos-duration="1000">
        </div>
        
        <!-- Content -->
        <div class="md:p-10 p-2" 
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