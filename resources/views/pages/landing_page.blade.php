<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM FH UNSIKA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="font-sans">

    <!-- Navigation -->
   <x-guest.layout>

    <!-- Hero Section -->
    <section class="hero-section flex items-center mt-16" style="min-height: 600px;">
        <div class="w-full px-6 lg:px-24">
            <div class="max-w-2xl" data-aos="fade-up">
                <h1 class="text-5xl font-bold text-white mb-4">BEM-KM FH UNSIKA</h1>
                <p class="text-white text-lg mb-8">Mengabdi, berinovasi, dan berkontribusi demi kemajuan Fakultas Hukum Unsika.</p>
                <div class="flex gap-4">
                    <!--<a href="#kontak">
                        <button class="btn-primary text-white px-8 py-3 rounded font-medium">Hubungi Kami</button>
                    </a> -->
                    <a href="#tentang">
                        <button class="btn-secondary text-white px-8 py-3 rounded font-medium">Selengkapnya</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-white" id="tentang">
        <div class="mx-auto md:px-20 px-6" >
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative" data-aos="fade-right">
                    <img src="{{ asset('images/landing_image.png') }}" alt="Students" class="rounded-3xl">
                </div>
                
                <div data-aos="fade-left">
                    <p class="text-red-800 font-semibold mb-2">Tentang Kami</p>
                    <h2 class="text-4xl font-bold mb-6">BEM-KM FH UNSIKA</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Badan Eksekutif Mahasiswa - Keluarga Mahasiswa Fakultas Hukum Universitas Singaperbangsa Karawang (BEM-KM FH Unsika) merupakan organisasi mahasiswa yang berperan sebagai wadah aspirasi, penggerak perjuangan, serta sarana pengembangan diri bagi seluruh mahasiswa Fakultas Hukum. Dengan semangat kebersamaan dan profesionalitas, BEM-KM FH Unsika hadir untuk memperjuangkan keadilan yang inklusif serta kesejahteraan mahasiswa dalam ranah akademik maupun nonakademik. Kami berkomitmen untuk mewujudkan lingkungan yang progresif, adaptif, dan berorientasi pada kemajuan bersama seluruh elemen mahasiswa.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Dalam menjalankan perannya, BEM-KM FH Unsika berlandaskan visi untuk menjadi organisasi yang unggul dalam memperjuangkan keadilan inklusif demi kesejahteraan dan pengembangan mahasiswa. Misi kami mencakup pembangunan internal yang berdaya saing, komunikasi yang efektif, peran aktif dalam isu sosial politik, serta kolaborasi lintas bidang dan lembaga. Melalui berbagai program kerja dan kegiatan kolaboratif, kami berupaya menciptakan budaya kesejahteraan yang merata dan lingkungan kampus yang harmonis, tanpa memandang latar belakang atau kepentingan apa pun.
                    </p>
                </div>
            </div>
        </div>
    </section>
    

        <!-- Activities Section -->
    <section class="py-24 bg-white" id="kegiatan">
        <div class="mx-auto md:px-20 px-6">
            <div class="grid md:grid-cols-2 gap-8 items-start mb-12">
                <div data-aos="fade-up">
                    <p class="text-red-800 font-semibold mb-2">Publikasi</p>
                    <h2 class="text-4xl font-bold">Kajian Aksi dan Strategi BEM-KM FH Unsika</h2>
                </div>
                <div>
                    <p class="text-gray-600 mb-6" data-aos="fade-up" data-aos-delay="100">
                       Temukan berbagai publikasi berisi gagasan, hasil riset, dan analisis kritis BEM-KM FH Unsika terhadap isu-isu hukum, sosial, dan kemahasiswaan!
                    </p>
                    <a href="{{ url('/kegiatan') }}" >
                    <button class="text-red-900 border-2 border-red-900 px-6 py-2 rounded hover:bg-red-900 hover:text-white" data-aos="fade-up" data-aos-delay="200" style="transition: all 0.3s ease-in-out;">
                        Lebih Banyak
                    </button></a>
                </div>
            </div>
            
            <div class="relative" data-aos="fade-up" data-aos-delay="200">
                <!-- Navigation Buttons -->
                <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-12 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-red-800 transition hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-12 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-red-800 transition hover:text-white">
                    <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Slider Container -->
                <div class="overflow-hidden pb-8">
                    <div id="slider" class="flex gap-6 transition-transform duration-500 ease-out" style="margin: 10px;">
                        @foreach($latestBlogs as $blog)
                        <a href="{{ route('blog.show', $blog->slug) }}" class="min-w-[300px] max-w-[300px] bg-white rounded-lg overflow-hidden shadow-lg duration-300 hover:scale-105 transition-all">
                            <img src="/storage/{{ $blog->thumbnail }}" alt="Activity" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-xl mb-3">{{ $blog->title }}</h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    {{ Str::limit($blog->description, 100) }}
                                </p>
                                <p class="text-gray-400 text-sm">{{ $blog->start_at }}</p>
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
        <div class="mx-auto md:px-20 px-6" >
            <div class="grid md:grid-cols-2 gap-16">
                <div data-aos="fade-right">
                    <p class="text-red-800 font-semibold mb-2">Hubungi Kami</p>
                    <h2 class="text-4xl font-bold mb-6">Kirimkan pesan Anda melalui formulir ini!</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Pesan yang Anda kirimkan akan kami terima melalui email kami. Kami akan segera menghubungi untuk tindak lanjut.
                    </p>
                </div>
                
                <div data-aos="fade-left">
                    <form id="contactForm" action="{{ route('submit.form') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm font-semibold mb-2">Nama</label>
                            <input type="text" id="nama" name="name" placeholder="Masukkan nama Anda..." required class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-red-800">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold mb-2">Email</label>
                            <input type="email" id="email" name="email" placeholder="Masukkan e-mail Anda…" required class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-red-800">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold mb-2">Pesan</label>
                            <textarea id="pesan" name="message" rows="5" placeholder="Masukkan pesan Anda..." required class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-red-800" maxlength="500"></textarea>
                        </div>
                        
                        <button type="submit" class="btn-pesan text-white px-8 py-3 rounded font-medium w-full bg-red-900 hover:bg-red-800 transition">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('notification-modal');
            const backdrop = document.createElement('div');
            backdrop.className = 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40';
            
            if (modal) {
                // Add backdrop
                document.body.appendChild(backdrop);
                
                // Show modal
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                modal.setAttribute('aria-hidden', 'false');
                
                // Close modal functionality
                const closeButton = modal.querySelector('[data-modal-hide="notification-modal"]');
                if (closeButton) {
                    closeButton.addEventListener('click', function() {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                        modal.setAttribute('aria-hidden', 'true');
                        document.body.removeChild(backdrop);
                    });
                }
                
                // Close on backdrop click
                backdrop.addEventListener('click', function() {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    modal.setAttribute('aria-hidden', 'true');
                    document.body.removeChild(backdrop);
                });
            }
        });
    </script>

    <div id="notification-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[999] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full z-[9999999]">
        <div class="relative bg-white rounded-lg shadow-sm ">
            <div class="p-4 md:p-5 space-y-4 text-center">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-4 checkmark-container">
                    <svg class="h-8 w-8 text-green-600 checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Pesan Berhasil Dikirim</h3>
                <p class="text-gray-600 mb-6">Terima kasih telah menghubungi kami. Kami akan segera merespon pesan Anda.</p>
                <button data-modal-hide="notification-modal" type="button" class="btn-primary text-red-900 px-6 py-3 rounded font-medium w-full hover:text-white transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
@endif

    <!-- AOS JS Local -->
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
  
</x-guest.layout>
</body>
</html>
