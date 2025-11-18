<div>
    <nav class="bg-white border-gray-200 fixed top-0 z-50 w-full shadow-md">
        <div class="w-full flex flex-wrap items-center justify-between mx-auto p-4 ">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse lg:ml-20 ml-0">
                <img src="/storage/{{ $siteProfile->logo }}" class="h-8 mr-3" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap">PRAGYA DHARMA</span>
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
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="{{ url('/#tentang') }}" class="nav-link text-gray-700">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ url('/#tentang') }}" class="nav-link text-gray-700">Profil</a>
                    </li>
                    <li class="dropdown relative group">
                        <a href="{{ url('/#') }}" class="nav-link text-gray-700 inline-flex items-center gap-1">
                            Struktur
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-4 text-gray-400 transition-transform group-hover:rotate-180 -mr-4">
                                <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </a>
                        
                        <!-- Dropdown Menu -->
                        <ul class="absolute left-0 top-full mt-2 w-48 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50" style="font-size: 12px;">
                            @forelse($divisions as $division)
                                <li>
                                    <a href="{{ route('struktur.show', $division->name) }}" class="block px-4 py-2 text-gray-700 hover:bg-red-900 hover:text-white {{ $loop->first ? 'rounded-t-lg' : '' }} {{ $loop->last ? 'rounded-b-lg' : '' }}">
                                        {{ $division->name }}
                                    </a>
                                </li>
                            @empty
                                <li>
                                    <span class="block px-4 py-2 text-gray-500">Tidak ada divisi</span>
                                </li>
                            @endforelse
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/#kegiatan') }}" class="nav-link text-gray-700">Publikasi</a>
                    </li>
                    <li>
                        <a href="{{ url('/#kontak') }}" class="btn-primary text-red-900 px-6 py-2 rounded bg-transparent border-red-700 hover:text-white">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main>
        {{ $slot }}
    </main>

    <footer class="footer-bg text-white py-20" id="footer" style="background-color: #;">
        <div class="mx-auto md:px-40 px-6">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
                        <span class="font-semibold">BEM KM FH UNSIKA</span>
                    </div>
                    <p class="text-white text-sm leading-relaxed">
                        BEM-KM FH Unsika merupakan lembaga eksekutif mahasiswa Fakultas Hukum Universitas Singaperbangsa Karawang yang berperan sebagai wadah aspirasi, penggerak perjuangan, serta pengembang potensi mahasiswa menuju keadilan dan kesejahteraan yang inklusif.
                    </p>
                </div>
                
                <div class="" style="margin-top: 5px">
                    <h3 class="font-bold mb-4">Tautan</h3>
                    <ul class="space-y-2 text-white text-sm">
                        <li><a href="#" class="hover:text-white">Beranda</a></li>
                        <li><a href="#tentang" class="hover:text-blue">Tentang Kami</a></li>
                        <li><a href="#kegiatan" class="hover:text-white">Kegiatan</a></li>
                        <li><a href="#visi-misi" class="hover:text-white">Visi & Misi</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-bold mb-4">Alamat</h3>
                    <p class="text-white text-sm leading-relaxed">
                        {{ $siteProfile->alamat }}
                    </p>
                </div>
                
                <div>
                    <h3 class="font-bold mb-4">Kontak</h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-white rounded flex items-center justify-center">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <div class="text-sm">
                                {{ $siteProfile->whatsapp }}
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-white rounded flex items-center justify-center">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <div class="text-sm text-white">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-white pt-8 text-center text-white text-sm">
                Copyright © 2024 KM FH UNSIKA - All Rights Reserved
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</div>