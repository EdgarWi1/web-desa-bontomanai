<nav class="font- flex flex-wrap items-center justify-between p-3 bg-[#21b92d] sticky top-0 z-10">
        <div class="flex items-center">
                <img src="{{ asset('images/Logo_Jeneponto.png') }}" alt="Logo Kabupaten" width="60" height="60">
                <div class="ml-3">
                        <div class="text-white text-xl font-bold">Desa Bontomanai</div>
                        <div class="text-white text-md">Kabupaten Jeneponto</div>
                </div>
        </div>

        <div class="flex items-center md:hidden">
                <button id="hamburger">
                        <svg class="toggle block" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40"
                                height="40" viewBox="0 0 128 128">
                                <path fill="#21b92d" d="M64 14A50 50 0 1 0 64 114A50 50 0 1 0 64 14Z"></path>
                                <path fill="#ffffff"
                                        d="M64,117c-29.2,0-53-23.8-53-53s23.8-53,53-53s53,23.8,53,53S93.2,117,64,117z M64,17c-25.9,0-47,21.1-47,47s21.1,47,47,47s47-21.1,47-47S89.9,17,64,17z">
                                </path>
                                <path fill="#ffffff"
                                        d="M86.5 52h-45c-1.7 0-3-1.3-3-3s1.3-3 3-3h45c1.7 0 3 1.3 3 3S88.2 52 86.5 52zM86.5 67h-45c-1.7 0-3-1.3-3-3s1.3-3 3-3h45c1.7 0 3 1.3 3 3S88.2 67 86.5 67z">
                                </path>
                                <g>
                                        <path fill="#ffffff"
                                                d="M86.5,82h-45c-1.7,0-3-1.3-3-3s1.3-3,3-3h45c1.7,0,3,1.3,3,3S88.2,82,86.5,82z">
                                        </path>
                                </g>
                        </svg>
                        <img class="toggle hidden" width="40" height="40"
                                src="https://img.icons8.com/windows/32/FFFFFF/macos-close.png" alt="macos-close" />
                </button>
        </div>
        <div
                class=" toggle hidden w-full md:w-auto md:flex text-center text-lg text-white text-bold mt-5 md:mt-0 md:border-none">
                <a href="{{ route('home') }}"
                        class="block md:inline-block hover:text-black hover:font-medium px-3 py-3 md:border-none">Home</a>
                <a href="{{ route('produkLokal') }}"
                        class="block md:inline-block hover:text-black hover:font-medium px-3 py-3 md:border-none">Produk
                        Lokal</a>
                <a href="{{ route('tentangDesa') }}"
                        class="block md:inline-block hover:text-black hover:font-medium px-3 py-3 md:border-none">Tentang
                        Desa</a>
                <a href="#gallery"
                        class="block md:inline-block hover:text-black hover:font-medium px-3 py-3 md:border-none">Gallery</a>
                <a href="{{ route('petaDigital') }}"
                        class="block md:inline-block hover:text-black hover:font-medium px-3 py-3 md:border-none">Peta
                        Digital</a>
        </div>
</nav>
