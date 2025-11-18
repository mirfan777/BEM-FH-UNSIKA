<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi - Pragya Dharma</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('storage/' . $siteProfile->logo) }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 
</head>
<body class="bg-gray-50">
    <x-guest.layout>
        <!-- Main Content -->
    <main class="container mx-auto px-4 py-8 max-w-7xl">
        <div class="text-sm text-red-700 font-medium mb-6">
            Struktur Organisasi
        </div>

        <!-- Title -->
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">
            {{ $division->name }}
        </h1>

        <!-- Hero Image -->
        <div class="w-full rounded-3xl overflow-hidden mb-8 shadow-lg">
            <img 
                src="{{ asset('storage/' . $division->thumbnail) }}" 
                alt="Students studying together" 
                class="w-full h-64 md:h-96 object-cover"
            >
        </div>

        <!-- Description Text -->
        <div class="text-gray-600 leading-relaxed text-justify mb-16 space-y-4">
            <p>
                {{ $division->description }}
            </p>
        </div>

        <!-- Pengurus Section -->
        <section class="mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
                Pengurus
            </h2>
            
            <!-- Pengurus Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($members->where('position', 'pengurus') as $member)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:scale-105 cursor-pointer">
                    <img 
                        src="{{ asset('storage/' . $member->photo) }}"
                        alt="{{ $member->name }}" 
                        class="w-full h-80 object-cover"
                    >
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold text-gray-900">
                            {{ $member->name }}
                        </h3>
                        <p class="text-gray-600">
                            {{ $member->position_name }}
                        </p>
                    </div>
                </div>
                @endforeach
                
                
                
            </div>
        </section>


        <!-- Staff Section -->
        <section class="mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
                Staff
            </h2>
            
            <!-- Staff Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($members->where('position', 'staff') as $member)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:scale-105 cursor-pointer">
                    <img 
                        src="{{ asset('storage/' . $member->photo) }}"
                        alt="{{ $member->name }}" 
                        class="w-full h-80 object-cover"
                    >
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold text-gray-900">
                            {{ $member->name }}
                        </h3>
                        <p class="text-gray-600">
                            {{ $member->position_name }}
                        </p>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </section>
    </main>
    </x-guest.layout>
</body>
</html>