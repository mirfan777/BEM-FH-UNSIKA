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
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="mx-auto px-6 py-4 lg:px-24">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <span class="text-lg font-semibold">BEM FH UNSIKA</span>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#tentang" class="nav-link text-gray-700">Tentang Kami</a>
                    <a href="#visi-misi" class="nav-link text-gray-700">Visi & Misi</a>
                    <a href="#kegiatan" class="nav-link text-gray-700">Kegiatan</a>
                    <a href="#footer" class="nav-link text-gray-700">Kontak</a>
                    <a href="#kontak">
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
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600" alt="Students" class="rounded-lg shadow-xl">
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
                    <ol class="space-y-4">
                        <li class="flex">
                            <span class="font-bold mr-3">1.</span>
                            <span class="text-gray-700">Lorem ipsum dolor sit amet dolor sit</span>
                        </li>
                        <li class="flex">
                            <span class="font-bold mr-3">2.</span>
                            <span class="text-gray-700">Lorem ipsum dolor sit amet dolor sit</span>
                        </li>
                        <li class="flex">
                            <span class="font-bold mr-3">3.</span>
                            <span class="text-gray-700">Lorem ipsum dolor sit amet dolor sit</span>
                        </li>
                        <li class="flex">
                            <span class="font-bold mr-3">4.</span>
                            <span class="text-gray-700">Lorem ipsum dolor sit amet dolor sit</span>
                        </li>
                    </ol>
                </div>
                
                <div class="flex flex-col items-center">
                    <h2 class="text-3xl font-bold text-red-800 mb-8 text-center">Misi</h2>
                    <ol class="space-y-4">
                        <li class="flex">
                            <span class="font-bold mr-3">1.</span>
                            <span class="text-gray-700">Lorem ipsum dolor sit amet dolor sit</span>
                        </li>
                        <li class="flex">
                            <span class="font-bold mr-3">2.</span>
                            <span class="text-gray-700">Lorem ipsum dolor sit amet dolor sit</span>
                        </li>
                        <li class="flex">
                            <span class="font-bold mr-3">3.</span>
                            <span class="text-gray-700">Lorem ipsum dolor sit amet dolor sit</span>
                        </li>
                        <li class="flex">
                            <span class="font-bold mr-3">4.</span>
                            <span class="text-gray-700">Lorem ipsum dolor sit amet dolor sit</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Company Profile Section -->
    <section class="py-24 bg-gradient-to-br from-red-50 to-white relative overflow-hidden" id="video-profile">
        <!-- Background decoration -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-red-100 rounded-full blur-3xl opacity-30 -z-10"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-red-200 rounded-full blur-3xl opacity-20 -z-10"></div>
    
        <div class="mx-auto md:px-20 px-6">
            <div class="text-center mb-12" data-aos="fade-up">
                <p class="text-red-800 font-semibold mb-2">Video Company Profile</p>
                <h2 class="text-4xl font-bold mb-4">Kenali Lebih Dekat BEM-KM FH UNSIKA</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                Saksikan perjalanan dan kiprah kami dalam melayani dan memberdayakan mahasiswa Fakultas Hukum UNSIKA
                </p>
            </div>

            <div class="max-w-5xl mx-auto" data-aos="zoom-in">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl group">
                    <div class="relative aspect-video bg-gray-900">
                        <iframe 
                            class="w-full h-full"
                            src="https://www.youtube.com/embed/jX2Tw5qFAGo?si=I3zIIhO_Yk7m2KdZ" 
                            title="BEM-KM FH UNSIKA Company Profile" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                
                    <!-- Overlay decoration on hover -->
                    <div class="absolute inset-0 bg-gradient-to-t from-red-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
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
                        <div class="card bg-white rounded-lg overflow-hidden shadow-lg flex-shrink-0 w-80 mb-4">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400" alt="Activity" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula est. 
                                    Pellentesque sollicitudin ex et dictum faucibus...
                                </p>
                                <p class="text-gray-400 text-xs">23/01/2025</p>
                            </div>
                        </div>
                        
                        <div class="card bg-white rounded-lg overflow-hidden shadow-lg flex-shrink-0 w-80">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400" alt="Activity" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula est. 
                                    Pellentesque sollicitudin ex et dictum faucibus...
                                </p>
                                <p class="text-gray-400 text-xs">23/01/2025</p>
                            </div>
                        </div>
                        
                        <div class="card bg-white rounded-lg overflow-hidden shadow-lg flex-shrink-0 w-80">
                            <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=400" alt="Activity" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula est. 
                                    Pellentesque sollicitudin ex et dictum faucibus...
                                </p>
                                <p class="text-gray-400 text-xs">23/01/2025</p>
                            </div>
                        </div>
                        
                        <div class="card bg-white rounded-lg overflow-hidden shadow-lg flex-shrink-0 w-80">
                            <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=400" alt="Activity" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula est. 
                                    Pellentesque sollicitudin ex et dictum faucibus...
                                </p>
                                <p class="text-gray-400 text-xs">23/01/2025</p>
                            </div>
                        </div>
                        
                        <div class="card bg-white rounded-lg overflow-hidden shadow-lg flex-shrink-0 w-80">
                            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400" alt="Activity" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-xl mb-3">Lorem Ipsum Dolor...</h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula est. 
                                    Pellentesque sollicitudin ex et dictum faucibus...
                                </p>
                                <p class="text-gray-400 text-xs">23/01/2025</p>
                            </div>
                        </div>
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

       <!-- Footer -->
    <footer class="footer-bg text-white py-20" id="footer">
        <div class="mx-auto px-6" style="padding-left: 100px; padding-right: 100px;">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
                        <span class="font-semibold">BEM KM FH UNSIKA</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in vehicula est. 
                        Pellentesque quis sodio elit et dictum faucibus. Nam vitae maximus ex.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-bold mb-4">Links</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white">Beranda</a></li>
                        <li><a href="#tentang" class="hover:text-white">Tentang Kami</a></li>
                        <li><a href="#kegiatan" class="hover:text-white">Kegiatan</a></li>
                        <li><a href="#visi-misi" class="hover:text-white">Visi & Misi</a></li>
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
                                <div class="text-gray-400">+6221-1471-9435</div>
                                <div class="text-gray-400">+6221-1471-9435</div>
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
                                bemkm.fh@mail.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400 text-sm">
                Copyright © 2024 KM FH UNSIKA - All Rights Reserved
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
