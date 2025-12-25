<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $siteProfile->name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('aos/aos.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <x-guest.layout>
        <main class="container mx-auto px-5 py-8 max-w-7xl mt-20 md:mt-32">
            <!-- Breadcrumb -->
            <div class="mb-8">
                <p class="text-red-800 font-semibold" data-aos="fade-down">Struktur Organisasi</p>
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8" data-aos="fade-up">
                {{ $division->name }}
            </h1>

            <!-- Hero Image -->
            <div class="w-full rounded-lg overflow-hidden mb-8 shadow-lg" data-aos="zoom-in">
                <img 
                    src="{{ asset('storage/' . $division->thumbnail) }}" 
                    alt="{{ $division->name }}" 
                    class="w-full h-64 md:h-96 object-cover"
                >
            </div>

            <!-- Description Text -->
            <div class="text-gray-600 leading-relaxed text-justify mb-16 space-y-4" data-aos="fade-up" data-aos-delay="100">
                <p>
                    {{ $division->description }}
                </p>
            </div>

            <!-- Pengurus Section -->
            <section class="mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12" data-aos="fade-up">
                    Pengurus
                </h2>

                <div class="relative px-4 md:px-16 max-w-7xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper mySwiper w-full py-8 !overflow-hidden">
                        <div class="swiper-wrapper pb-12">
                    
                            @foreach ($members->where('position', 'pengurus') as $member)
                                <div class="swiper-slide">
                                    <div class="relative bg-white rounded-2xl overflow-hidden shadow-xl 
                                                transition-all duration-500 mx-auto group">
                                        <!-- Member Photo -->
                                        <div class="relative w-full h-[420px] overflow-hidden">
                                            <img 
                                                src="{{ asset('storage/' . $member->photo) }}"
                                                alt="{{ $member->name }}"
                                                class="w-full h-full object-cover transition-transform duration-300 
                                                       group-hover:scale-110"
                                            >
                                            
                                            <!-- Gradient Overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                                        </div>
                    
                                        <!-- Member Info - Hidden on side slides -->
                                        <div class="member-info absolute bottom-0 left-0 right-0 p-6 text-white z-10
                                                    opacity-0 transition-opacity duration-500">
                                            <h3 class="text-xl font-bold mb-1 text-white uppercase tracking-wide">
                                                {{ $member->name }}
                                            </h3>
                                            <p class="text-sm md:text-2xl leading-tight">
                                                {{ $member->position_name }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    
                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination !bottom-0"></div>
                    </div>
                    
                    <!-- Navigation Buttons with AOS -->
                    <div class="swiper-button-prev !text-black !w-14 !h-14 
                                    after:!text-base !-left-2 md:!-left-6 
                                    bg-white rounded-full shadow-lg 
                                    hover:bg-red-800 hover:!text-white transition-bg duration-300
                                    !p-4 flex items-center justify-center"
                            style="transition: all 0.3s ease-in-out;"
                            data-aos="fade-right" data-aos-delay="300">
                    </div>
                    <div class="swiper-button-next !text-black !w-14 !h-14 
                                    after:!text-base !-right-2 md:!-right-6 
                                    bg-white rounded-full shadow-lg 
                                    hover:bg-red-800 hover:!text-white transition-bg duration-300
                                    !p-4 flex items-center justify-center"
                            style="transition: all 0.3s ease-in-out;"
                            data-aos="fade-left" data-aos-delay="300">
                    </div>
                </div>
            </section>


            
        </main>
    </x-guest.layout>
    
    <script src="{{ asset('aos/aos.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100,
        });
    </script>
        
</body>
</html>