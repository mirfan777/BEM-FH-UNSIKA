<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM-KM FH UNSIKA - Filosofi Logo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <x-guest.layout>
    <main class="bg-white mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 my-20 md:mx-20">
        <p class="text-red-800 font-semibold mb-10" data-aos="fade-up">Profil > Filosofi Logo</p>
      <div class="">
        <h1 class="text-4xl font-bold text-gray-900 mb-12" data-aos="fade-up">Filosofi Logo</h1>

        <div class="flex justify-center mb-8" data-aos="fade-up" data-aos-delay="100">
          <img 
            src="{{ asset('images/logo/logo_hero.png') }}" 
            alt="Logo Pragya Dharma" 
            class="w-96 h-auto"
          >
        </div>

        <p class="text-gray-600 text-justify leading-relaxed mb-16" data-aos="fade-up" data-aos-delay="200">
          Burung hantu melambangkan kebijaksanaan, kecerdasan, pendidikan, dan pengamatan yang tajam. Dalam konteks organisasi mahasiswa hukum, burung hantu menjadi simbol kemampuan untuk memahami kompleksitas hukum dengan bijak dan kritis, serta menjadi pelopor dalam memberikan solusi atas permasalahan hukum yang dihadapi masyarakat.
        </p>

        <div class="grid md:grid-cols-3 gap-8 mb-1" data-aos="fade-up" data-aos-delay="300">
          <div class="flex justify-center items-start">
            <img 
              src="{{ asset('images/logo/head_logo_photo.png') }}" 
              alt="Mata Tajam" 
              class="w-55 h-auto"
            >
          </div>
          <div class="md:col-span-2">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Mata Tajam</h2>
            <p class="text-gray-600 text-justify leading-relaxed">
              Mata burung hantu yang tajam menggambarkan fokus dan ketelitian. Ini mencerminkan semangat mahasiswa Fakultas Hukum Unsika yang selalu mengedepankan analisis mendalam dalam setiap tindakan, terutama dalam pengambilan keputusan hukum yang adil dan berintegritas.
            </p>
          </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-16" data-aos="fade-up" data-aos-delay="350">
          <div class="flex justify-center items-start">
            <!-- Empty space for alignment -->
          </div>
          <div class="md:col-span-2">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Kepala Bermahkota</h2>
            <p class="text-gray-600 text-justify leading-relaxed">
              Bagian atas kepala burung hantu menyerupai mahkota atau simbol kemenangan. Elemen ini melambangkan kepemimpinan yang kuat, keberanian untuk menghadapi tantangan, serta tekad untuk membawa nama baik Fakultas Hukum Unsika ke tingkat yang lebih tinggi.
            </p>
          </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-1" data-aos="fade-up" data-aos-delay="400">
          <div class="flex justify-center items-start">
            <img 
              src="{{ asset('images/logo/wing_logo_photo.png') }}" 
              alt="Elemen Garis Vertikal" 
              class="w-55 h-auto"
            >
          </div>
          <div class="md:col-span-2">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Elemen Garis Vertikal pada Sayap</h2>
            <p class="text-gray-600 text-justify leading-relaxed">
              Garis-garis vertikal pada sayap memberikan kesan kokoh dan terstruktur, mencerminkan prinsip organisasi yang berlandaskan sistem yang kuat serta tata kelola yang profesional.
            </p>
          </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-16" data-aos="fade-up" data-aos-delay="450">
          <div class="flex justify-center items-start">
            <!-- Empty space for alignment -->
          </div>
          <div class="md:col-span-2">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Sayap Berbentuk Simetris</h2>
            <p class="text-gray-600 text-justify leading-relaxed">
              Sayap burung hantu yang simetris menunjukkan keseimbangan dan keadilan yang merupakan dua prinsip utama dalam dunia hukum. Desain sayap ini juga menandakan perlindungan dan dukungan terhadap seluruh anggota BEM-KM FH Unsika dan masyarakat sekitar.
            </p>
          </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-16" data-aos="fade-up" data-aos-delay="500">
          <div class="flex justify-center items-start">
            <img 
              src="{{ asset('images/logo/simetris_photo (1).png') }}" 
              alt="Posisi Simetris Logo" 
              class="w-55 h-auto"
            >
          </div>
          <div class="md:col-span-2">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Posisi Simetris Logo</h2>
            <p class="text-gray-600 text-justify leading-relaxed">
              Keseluruhan desain logo yang simetris memberikan pesan harmoni, keteraturan, dan stabilitas yang merupakan nilai-nilai penting dalam menjaga keseimbangan antara aspirasi anggota organisasi dengan kebutuhan masyarakat.
            </p>
          </div>
        </div>

        <div class="mb-12" data-aos="fade-up" data-aos-delay="550">
          <h2 class="text-3xl font-bold text-gray-900 mb-6">Warna yang Digunakan</h2>
          <ol class="list-decimal list-inside space-y-3 text-gray-600">
            <li data-aos="fade-up" data-aos-delay="600">
              <span class="font-semibold">Merah Keunguan:</span> Warna merah keunguan menggambarkan perubahan dan pertumbuhan.
            </li>
            <li data-aos="fade-up" data-aos-delay="650">
              <span class="font-semibold">Cokelat Keemasan:</span> Warna cokelat keemasan memiliki makna kesuksesan dan keunggulan dalam organisasi.
            </li>
            <li data-aos="fade-up" data-aos-delay="700">
              <span class="font-semibold">Gradasi Warna:</span> Gradasi warna merah keunguan dan cokelat keemasan memberikan makna keberanian dan kebijaksanaan.
            </li>
          </ol>
        </div>
      </div>
    </main>

    <script src="{{ asset('aos/aos.js') }}"></script>
    <script>
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
      });
    </script>
    </x-guest.layout>
</body>
</html>