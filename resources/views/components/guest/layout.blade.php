<div>
    <nav class="bg-white border-gray-200 fixed top-0 z-50 w-full">
        <div class="w-full flex flex-wrap items-center justify-between mx-auto p-4 ">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse lg:ml-20 ml-0">
                <img src="/storage/{{ $siteProfile->logo }}" class="h-8 mr-3" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap">BEM FH UNSIKA</span>
            </a>
            <div class="md:hidden flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200   " aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between  hidden w-full md:flex md:w-auto md:order-1 lg:mr-20 mr-0" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white   ">
                    <li>
                        <a href="{{ url('/#tentang') }}" class="nav-link text-gray-700">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ url('/#visi-misi') }}" class="nav-link text-gray-700">Visi & Misi</a>
                    </li>
                    <li>
                        <a href="{{ url('/#kegiatan') }}" class="nav-link text-gray-700">Kegiatan</a>
                    </li>
                    <li>
                        <a href="{{ url('/#layanan') }}" class="nav-link text-gray-700">Layanan</a>
                    </li>
                    <li>
                        <a href="{{ url('/#kontak') }}" class="nav-link  btn-primary text-white px-6 py-2 rounded">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main>
        {{ $slot }}
    </main>

    <footer class="footer-bg text-white py-20" id="footer">
        <div class="mx-auto px-6" style="padding-left: 100px; padding-right: 100px;">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
                        <span class="font-semibold">BEM KM FH UNSIKA</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Badan Eksekutif Mahasiswa Keluarga Mahasiswa Fakultas Hukum Universitas Singaperbangsa Karawang
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

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</div>