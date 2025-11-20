<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>{{ $siteProfile->name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('storage/' . $siteProfile->logo) }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="font-sans bg-white">
    <!-- Navbar -->
    <x-guest.layout>
    <!-- Page Header -->
    <section class="pt-32 pb-12 bg-white">
        <div class="md:p-20 p-2">
            <h1 class="text-4xl font-bold">{{ $kegiatan->title }}</h1>
            <p class="text-gray-600">{{ $kegiatan->created_at->format('d/m/Y') }}</p>
            <img src="/storage/{{ $kegiatan->thumbnail }}" alt="{{ $kegiatan->title }}" class="w-full max-h-[500px] my-6 object-cover">
        </div>
        <div class="md:p-20 p-2">
            {!! $kegiatan->content !!}
        </div>
    </section>

    <script src="{{ asset('js/script.js') }}"></script>
    </x-guest.layout>
</body>
</html>
