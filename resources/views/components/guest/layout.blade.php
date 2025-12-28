<div>    
    <nav class="bg-white border-gray-200 fixed top-0 z-50 w-full shadow-md">
        <div class="w-full flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse lg:ml-20 ml-0">
                <img src="/storage/{{ $siteProfile->logo }}" class="h-8 mr-3" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap">{{ $siteProfile->name }}</span>
            </a>

            <!-- Hamburger Button -->
            <div class="md:hidden flex md:order-2">
                <button id="mobile-menu-button" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 lg:mr-20 mr-0">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="{{ url('/') }}" class="nav-link text-gray-700">Beranda</a>
                    </li>
                    <li class="dropdown relative group">
                        <a href="{{ url('/#') }}" class="nav-link text-gray-700 inline-flex items-center gap-1">
                            Profil
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-4 text-gray-400 transition-transform group-hover:rotate-180 -mr-4">
                                <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </a>
                        <ul class="absolute left-0 top-full mt-2 w-56 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50" style="font-size: 12px;">
                            <li>
                                <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-900 hover:text-white rounded-t-lg">
                                    Visi, Misi, dan Tujuan
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('logo') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-900 hover:text-white rounded-b-lg">
                                    Filosofi Logo
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown relative group">
                        <a href="{{ url('/#') }}" class="nav-link text-gray-700 inline-flex items-center gap-1">
                            Struktur
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-4 text-gray-400 transition-transform group-hover:rotate-180 -mr-4">
                                <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </a>
                        <ul class="absolute left-0 top-full mt-2 w-56 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50" style="font-size: 12px;">
                            @forelse($fields as $field)
                                @if($field->departments->count() > 0)
                                    <li class="relative group/submenu">
                                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-red-900 hover:text-white {{ $loop->first ? 'rounded-t-lg' : '' }} flex items-center justify-between">
                                            {{ $field->name }}
                                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-4 text-gray-400">
                                                <path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <ul class="absolute left-full top-0 ml-1 w-48 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover/submenu:opacity-100 group-hover/submenu:visible transition-all duration-200">
                                            @foreach($field->departments as $department)
                                                <li>
                                                    <a href="{{ route('struktur.show', $department->name) }}" class="block px-4 py-2 text-gray-700 hover:bg-red-900 hover:text-white {{ $loop->first ? 'rounded-t-lg' : '' }} {{ $loop->last ? 'rounded-b-lg' : '' }}">
                                                        {{ $department->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @empty
                                <li>
                                    <span class="block px-4 py-2 text-gray-500">Tidak ada bidang</span>
                                </li>
                            @endforelse
                            
                            @php
                                $departmentsWithoutField = $departments->whereNull('field_id');
                            @endphp
                            @if($departmentsWithoutField->count() > 0)
                                <li class="border-t border-gray-200"></li>
                                @foreach($departmentsWithoutField as $department)
                                    <li>
                                        <a href="{{ route('struktur.show', $department->name) }}" class="block px-4 py-2 text-gray-700 hover:bg-red-900 hover:text-white {{ $loop->last ? 'rounded-b-lg' : '' }}">
                                            {{ $department->name }}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/kegiatan') }}" class="nav-link text-gray-700">Publikasi</a>
                    </li>
                    <li>
                        <a href="{{ url('/#kontak') }}" class="btn-primary text-red-900 px-6 py-2 rounded bg-transparent border-red-700 hover:text-white">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Mobile Sidebar Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 z-[60] hidden transition-opacity duration-300" style="background-color: rgba(0, 0, 0, 0.3);"></div>

    <!-- Mobile Sidebar -->
    <div id="mobile-sidebar" class="fixed top-0 right-0 h-full w-80 bg-white text-red-900 z-[70] transform translate-x-full transition-transform duration-300 overflow-y-auto">
        <div class="p-6">
            <!-- Close Button -->
            <button id="close-sidebar" class="absolute top-4 right-4 text-red-900 hover:text-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Logo Section -->
            <div class="mb-8 mt-8">
                <img src="/storage/{{ $siteProfile->logo }}" class="h-10 mb-2" alt="Logo" />
            </div>

            <!-- Menu Items -->
            <ul class="space-y-2">
                <!-- Beranda -->
                <li>
                    <a href="{{ url('/') }}" class="block px-4 py-3 text-red-900 hover:bg-gray-100 rounded-lg transition-colors">
                        Beranda
                    </a>
                </li>

                <!-- Profil Dropdown -->
                <li>
                    <button class="mobile-dropdown-toggle w-full flex items-center justify-between px-4 py-3 hover:bg-gray-100 rounded-lg transition-colors">
                        <span>Profil</span>
                        <svg class="w-5 h-5 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <ul class="mobile-dropdown-menu hidden pl-4 mt-2 space-y-2">
                        <li>
                            <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-red-900 hover:bg-gray-100 rounded-lg">
                                Visi, Misi, dan Tujuan
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('logo') }}" class="block px-4 py-2 text-sm text-red-900 hover:bg-gray-100 rounded-lg">
                                Filosofi Logo
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Publikasi -->
                <li>
                    <a href="{{ url('/#kegiatan') }}" class="block px-4 py-3 hover:bg-gray-100 rounded-lg transition-colors">
                        Publikasi
                    </a>
                </li>

                <!-- Kelembagaan (if you need it) -->
                <li>
                    <button class="mobile-dropdown-toggle w-full flex items-center justify-between px-4 py-3 hover:bg-gray-100 rounded-lg transition-colors">
                        <span>Struktur</span>
                        <svg class="w-5 h-5 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <ul class="mobile-dropdown-menu hidden pl-4 mt-2 space-y-2">
                        @forelse($fields as $field)
                            @if($field->departments->count() > 0)
                                <li>
                                    <button class="mobile-dropdown-toggle w-full flex items-center justify-between px-4 py-2 text-sm text-red-900 hover:bg-gray-100 rounded-lg">
                                        <span>{{ $field->name }}</span>
                                        <svg class="w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <ul class="mobile-dropdown-menu hidden pl-4 mt-1 space-y-1">
                                        @foreach($field->departments as $department)
                                            <li>
                                                <a href="{{ route('struktur.show', $department->name) }}" class="block px-4 py-2 text-xs text-red-900 hover:bg-gray-100 rounded-lg">
                                                    {{ $department->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @empty
                            <li>
                                <span class="block px-4 py-2 text-sm text-gray-500">Tidak ada bidang</span>
                            </li>
                        @endforelse
                        
                        @php
                            $departmentsWithoutField = $departments->whereNull('field_id');
                        @endphp
                        @if($departmentsWithoutField->count() > 0)
                            <li class="border-t border-gray-200 my-2"></li>
                            @foreach($departmentsWithoutField as $department)
                                <li>
                                    <a href="{{ route('struktur.show', $department->name) }}" class="block px-4 py-2 text-sm text-red-900 hover:bg-gray-100 rounded-lg">
                                        {{ $department->name }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </li>

                <!-- Hubungi Kami -->
                <li class="pt-4">
                    <a href="{{ url('/#kontak') }}" class="block px-4 py-3 bg-red-900 hover:bg-red-800 text-white text-center rounded-lg transition-colors font-semibold">
                        Hubungi Kami
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <main>
        {{ $slot }}
    </main>

   <footer class="footer-bg text-white py-20" id="footer">
    <div class="mx-auto md:px-20 px-6">
        <div class="grid md:grid-cols-4 gap-12 mb-12">

            <!-- Profil -->
            <div>
                <div class="flex items-center space-x-3 mb-4">
                     <img src="/storage/{{ $siteProfile->logo }}" class="h-8 mr-3" alt="Logo" />
                    <span class="font-semibold">BEM-KM FH UNSIKA</span>
                </div>
                <p class="text-white text-sm leading-relaxed">
                    BEM-KM FH Unsika merupakan lembaga eksekutif mahasiswa Fakultas Hukum Universitas Singaperbangsa Karawang yang berperan sebagai wadah aspirasi, penggerak perjuangan, serta pengembang potensi mahasiswa menuju keadilan dan kesejahteraan yang inklusif.
                </p>
            </div>

            <!-- Tautan 
            <div style="margin-top: 5px">
                <h3 class="font-bold mb-4">Tautan</h3>
                <ul class="space-y-2 text-white text-sm">
                    <li><a href="#" class="hover:text-white">Beranda</a></li>
                    <li><a href="#tentang" class="hover:text-white">Profil</a></li>
                    <li><a href="#kegiatan" class="hover:text-white">Struktur</a></li>
                    <li><a href="#visi-misi" class="hover:text-white">Publikasi</a></li>
                </ul>
            </div> -->

            <!-- Alamat -->
            <div>
                <h3 class="font-bold mb-4">Alamat</h3>
                <h4 class="text-white text-sm"> Sekretariat BEM-KM FH Unsika </h4>
                <p class="text-white text-sm leading-relaxed">
                    {{ $siteProfile->alamat }}
                </p>
            </div>

            <!-- Kontak & Sosial Media -->
            <div>
                <h3 class="font-bold mb-4">Kontak</h3>
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded flex items-center justify-center">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                        </div>
                        <a href="https://wa.me/62{{ $siteProfile->whatsapp }}" class="text-sm" target="_blank" rel="noopener noreferrer">
                            (+62) {{ $siteProfile->whatsapp }} (Advocare)
                        </a>
                    </div>

                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded flex items-center justify-center">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </div>
                        <div class="text-sm">
                            {{ $siteProfile->email }}
                        </div>
                    </div>
                </div>
            </div>

                <!-- Sosial Media -->
                <div>
                    <h3 class="font-bold mb-4">Sosial Media</h3>

                    @if($siteProfile)
                        <div class="flex items-center space-x-4">

                            @if(!empty($siteProfile->instagram))
                                <a target="_blank" href="{{ $siteProfile->instagram }}" class="text-white hover:text-gray-300 mr-4">
                                    <svg class="w-5 h-5 fill-white hover:fill-gray-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" ></path> <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" ></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" ></path> </g></svg>
                                </a>
                            @endif

                            @if(!empty($siteProfile->youtube))
                                <a target="_blank" href="{{ $siteProfile->youtube }}" class="text-white hover:text-gray-300 mr-4">
                                    <svg class="w-5 h-5 fill-white hover:fill-gray-300" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.49614 7.13176C9.18664 6.9549 8.80639 6.95617 8.49807 7.13509C8.18976 7.31401 8 7.64353 8 8V16C8 16.3565 8.18976 16.686 8.49807 16.8649C8.80639 17.0438 9.18664 17.0451 9.49614 16.8682L16.4961 12.8682C16.8077 12.6902 17 12.3589 17 12C17 11.6411 16.8077 11.3098 16.4961 11.1318L9.49614 7.13176ZM13.9844 12L10 14.2768V9.72318L13.9844 12Z" ></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 8.25027 0 6.3754 0.954915 5.06107C1.26331 4.6366 1.6366 4.26331 2.06107 3.95491C3.3754 3 5.25027 3 9 3H15C18.7497 3 20.6246 3 21.9389 3.95491C22.3634 4.26331 22.7367 4.6366 23.0451 5.06107C24 6.3754 24 8.25027 24 12C24 15.7497 24 17.6246 23.0451 18.9389C22.7367 19.3634 22.3634 19.7367 21.9389 20.0451C20.6246 21 18.7497 21 15 21H9C5.25027 21 3.3754 21 2.06107 20.0451C1.6366 19.7367 1.26331 19.3634 0.954915 18.9389C0 17.6246 0 15.7497 0 12ZM9 5H15C16.9194 5 18.1983 5.00275 19.1673 5.10773C20.0989 5.20866 20.504 5.38448 20.7634 5.57295C21.018 5.75799 21.242 5.98196 21.4271 6.23664C21.6155 6.49605 21.7913 6.90113 21.8923 7.83269C21.9973 8.80167 22 10.0806 22 12C22 13.9194 21.9973 15.1983 21.8923 16.1673C21.7913 17.0989 21.6155 17.504 21.4271 17.7634C21.242 18.018 21.018 18.242 20.7634 18.4271C20.504 18.6155 20.0989 18.7913 19.1673 18.8923C18.1983 18.9973 16.9194 19 15 19H9C7.08058 19 5.80167 18.9973 4.83269 18.8923C3.90113 18.7913 3.49605 18.6155 3.23664 18.4271C2.98196 18.242 2.75799 18.018 2.57295 17.7634C2.38448 17.504 2.20866 17.0989 2.10773 16.1673C2.00275 15.1983 2 13.9194 2 12C2 10.0806 2.00275 8.80167 2.10773 7.83269C2.20866 6.90113 2.38448 6.49605 2.57295 6.23664C2.75799 5.98196 2.98196 5.75799 3.23664 5.57295C3.49605 5.38448 3.90113 5.20866 4.83269 5.10773C5.80167 5.00275 7.08058 5 9 5Z" ></path> </g></svg>
                                </a>
                            @endif

                            @if(!empty($siteProfile->tiktok))
                                <a target="_blank" href="{{ $siteProfile->tiktok }}" class="text-white hover:text-gray-300">
                                    <svg class="w-5 h-5 fill-white hover:fill-gray-300" fill="white" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>tiktok</title> <path d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z"></path> </g></svg>
                                </a>
                            @endif

                        </div>
                    @endif
                </div>
        </div>

        <!-- Copyright -->
        <hr/>
        <div class="flex w-full justify-center">
            <div class="pt-8 text-center text-white text-sm">
                © 2025 {{ $siteProfile->name }} - All Rights Reserved
            </div>
        </div>
    </div>
</footer>

    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</div>