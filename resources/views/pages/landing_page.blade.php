<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM FH UNSIKA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="font-sans">

    <!-- Navigation -->
   <x-guest.layout>

    <!-- Hero Section -->
    <section class="hero-section flex items-center mt-16" style="min-height: 600px;">
        <div class="w-full px-6 lg:px-24">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold text-white mb-4">Selamat Datang</h1>
                <p class="text-white text-lg mb-8">Lorem ipsum dolor sit amet</p>
                <div class="flex gap-4">
                    <a href="#kontak">
                        <button class="btn-primary text-white px-8 py-3 rounded font-medium">Hubungi Kami</button>
                    </a>
                    <a href="#tentang">
                        <button class="btn-secondary text-white px-8 py-3 rounded font-medium">Selengkapnya</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-white" id="tentang">
        <div class="mx-auto px-6" style="padding-left: 100px; padding-right: 100px;">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <img src="{{ asset('images/landing_image.png') }}" alt="Students" class="">
                </div>
                
                <div>
                    <p class="text-red-800 font-semibold mb-2">Tentang Kami</p>
                    <h2 class="text-4xl font-bold mb-6">BEM KM Fakultas Hukum UNSIKA</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula est. 
                        Pellentesque quis sodio elit et dictum faucibus. Nam vitae maximus ex. 
                        Pellentesque laoreet elit tellus, id fringilla nunc tincidunt vel.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Quisque molestie risus. Praesent nec diam in arcu facilisis laoreet. Integer 
                        pharetra nunc vel elit dignissim, sed iaculis libero cursus. Cras sed id dapibus 
                        libero. Sed est amet, consectetur adipiscing elit. Etiam nec pretium nibh. Praesent 
                        nisi cursus magna, id amet tincidunt risus mi lacus. Suspendisse sed id mi nec.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section class="py-24 bg-gray-50" id="visi-misi">
        <div class="mx-auto px-6" style="padding-left: 100px; padding-right: 100px">
            <div class="grid md:grid-cols-2 gap-16">
                <div class="flex flex-col items-center">
                    <h2 class="text-3xl font-bold text-red-800 mb-8 text-center">Visi</h2>
                    <p class="text-gray-600 text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, enim.
                    </p>
                </div>
            </div>
        </div>
    </section>

        <!-- Activities Section -->
    <section class="py-24 bg-white" id="kegiatan">
        <div class="mx-auto px-6" style="padding-left: 100px; padding-right: 100px;">
            <div class="grid md:grid-cols-2 gap-8 items-start mb-12">
                <div>
                    <p class="text-red-800 font-semibold mb-2">Kegiatan Kami</p>
                    <h2 class="text-4xl font-bold">Kegiatan BEM KM FH UNSIKA</h2>
                </div>
                <div>
                    <p class="text-gray-600 mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula ex. 
                        Pellentesque sollicitudin ex et dictum faucibus. Nunc vitae massa et arcu varius ultrices ut et lectus.
                    </p>
                    <a href="{{ url('/kegiatan') }}" >
                    <button class="text-blue-600 border-2 border-blue-600 px-6 py-2 rounded hover:bg-blue-600 hover:text-white transition">
                        Lebih Banyak
                    </button></a>
                </div>
            </div>
            
            <div class="relative">
                <!-- Navigation Buttons -->
                <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-12 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-12 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Slider Container -->
                <div class="overflow-hidden pb-8">
                    <div id="slider" class="flex gap-6 transition-transform duration-500 ease-out">
                        @foreach($latestBlogs as $blog)
                        <a href="{{ route('blog.show', $blog->slug) }}" class="min-w-[300px] max-w-[300px] bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <img src="/storage/{{ $blog->thumbnail }}" alt="Activity" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-xl mb-3">{{ $blog->title }}</h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    {{ Str::limit($blog->description, 100) }}
                                </p>
                                <p class="text-gray-400 text-sm">{{ $blog->created_at->format('d/m/Y') }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Contact Section -->
    <section class="py-24 bg-gray-50" id="kontak" style="margin-bottom: 80px">
        <div class="mx-auto px-6" style="padding-left: 100px; padding-right: 100px">
            <div class="grid md:grid-cols-2 gap-16">
                <div>
                    <p class="text-red-800 font-semibold mb-2">Hubungi Kami</p>
                    <h2 class="text-4xl font-bold mb-6">Kirimkan pesanmu melalui form di samping</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Pesan yang kamu kirim akan kami terima dan kami akan segera melakukan tindak lanjut.
                    </p>
                </div>
                
                <div>
                    <form id="contactForm" class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold mb-2">Nama</label>
                            <input type="text" id="nama" placeholder="Nama lengkap anda" required class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-red-800">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold mb-2">Email</label>
                            <input type="email" id="email" placeholder="Email anda" required class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-red-800">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold mb-2">Pesan</label>
                            <textarea id="pesan" rows="5" placeholder="Tulis pesan anda" required class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-red-800" maxlength="5"></textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary text-white px-8 py-3 rounded font-medium w-full">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

        <!-- Success Modal -->
    <div id="successModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center modal-overlay">
        <div id="modalContent" class="bg-white rounded-lg p-8 max-w-md mx-4 transform transition-all modal-content">
            <div class="text-center">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-4 checkmark-container">
                    <svg class="h-8 w-8 text-green-600 checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Pesan Berhasil Dikirim!</h3>
                <p class="text-gray-600 mb-6">Terima kasih telah menghubungi kami. Kami akan segera merespon pesan Anda.</p>
                <button onclick="closeModal()" class="btn-primary text-white px-6 py-3 rounded font-medium w-full">
                    Tutup
                </button>
            </div>
        </div>
    </div>


    <!-- Script -->
    <script src="{{ asset('js/script.js') }}"></script>
</x-guest.layout>
</body>
</html>
