<nav class="font- flex flex-wrap items-center justify-between p-3 bg-[#21b92d] sticky top-0 z-10">
        <div class="flex">
                <img src="{{ asset('images/Logo_Jeneponto.png') }}" alt="Logo Kabupaten" width="60" height="60">
                <div class="ml-3">
                        <div class="text-white text-xl font-bold">Desa Bontomanai</div>
                        <div class="text-white text-md">Kabupaten Jeneponto</div>
                </div>
        </div>

        <div class="flex md:hidden">
                <button id="hamburger">
                        <img class="toggle block"
                                src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40"
                                height="40" />
                        <img class="toggle hidden"
                                src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40"
                                height="40" />
                </button>
        </div>
        <div
                class=" toggle hidden w-full md:w-auto md:flex text-center text-lg text-white text-bold mt-5 md:mt-0 md:border-none">
                <a href="{{ route('home') }}"
                        class="block md:inline-block hover:text-black hover:font-bold px-3 py-3 md:border-none">Home</a>
                <a href="{{ route('produkLokal') }}"
                        class="block md:inline-block hover:text-black hover:font-bold px-3 py-3 md:border-none">Produk
                        Lokal</a>
                <a href="{{ route('tentangDesa') }}"
                        class="block md:inline-block hover:text-black hover:font-bold px-3 py-3 md:border-none">Tentang
                        Desa</a>
                <a href="#gallery"
                        class="block md:inline-block hover:text-black hover:font-bold px-3 py-3 md:border-none">Gallery</a>
                <a href="{{ route('petaDigital') }}"
                        class="block md:inline-block hover:text-black hover:font-bold px-3 py-3 md:border-none">Peta
                        Digital</a>
        </div>
</nav>
