@extends('layouts.app')

@section('Homepage | Bontomanai', 'Bontomanai')

@section('content')
        <!-- hero seciton -->
        <div class="relative w-full h-screen overflow-hidden">
                <!-- Teks di atas carousel -->
                <div class="absolute inset-0 flex flex-col justify-center items-center z-10 text-white text-center">
                        <p class="font-bold text-xl md:text-5xl">SELAMAT DATANG</p>
                        <p class="font-medium text-lg md:text-3xl">Website Desa Bontomanai</p>
                        <p class="font-normal text-md md:text-xl">Kecamatan Bangkala, Kabupaten Jeneponto</p>
                </div>

                <!-- Carousel container -->
                <div class="relative w-full h-full">
                        <div id="manual-carousel" class="relative w-full h-full">
                                <!-- Images -->
                                <div class="carousel-item absolute w-full h-full transition-opacity duration-1000 opacity-0">
                                        <div class="absolute inset-0 bg-black/75"></div>
                                        <img src="{{ asset('images/carousel/carousel-1.jpeg') }}"
                                                class="w-full h-full object-cover" alt="Slide 1">
                                </div>
                                <div class="carousel-item absolute w-full h-full transition-opacity duration-1000 opacity-0">
                                        <div class="absolute inset-0 bg-black/75"></div>
                                        <img src="{{ asset('images/carousel/carousel-2.jpeg') }}"
                                                class="w-full h-full object-cover" alt="Slide 2">
                                </div>
                                <div class="carousel-item absolute w-full h-full transition-opacity duration-1000 opacity-0">
                                        <div class="absolute inset-0 bg-black/75"></div>
                                        <img src="{{ asset('images/carousel/carousel-3.jpeg') }}"
                                                class="w-full h-full object-cover" alt="Slide 3">
                                </div>
                                <div class="carousel-item absolute w-full h-full transition-opacity duration-1000 opacity-0">
                                        <div class="absolute inset-0 bg-black/75"></div>
                                        <img src="{{ asset('images/carousel/carousel-4.jpeg') }}"
                                                class="w-full h-full object-cover" alt="Slide 4">
                                </div>
                        </div>

                        <!-- Navigation buttons -->
                        <button id="prevSlide"
                                class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black/50 text-white p-3 rounded-full z-20 hover:bg-black/70">
                                ❮
                        </button>
                        <button id="nextSlide"
                                class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black/50 text-white p-3 rounded-full z-20 hover:bg-black/70">
                                ❯
                        </button>
                </div>
        </div>

        <!-- sambutan -->
        <section class="flex items-center justify-center py-10 h-screen" id="services">
                <div class="container mx-auto px-28">
                        <h2 class="text-3xl font-bold text-[#21b92d] mb-8 text-center">Sambutan Kepala Desa</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <div class="order-1 flex items-center justify-end md:col-span-2 md:mb-10">
                                        <p class="text-lg md:text-xl">
                                                Website ini hadir sebagai wujud transformasi desa Bontomanai menjadi desa yang
                                                mampu
                                                memanfaatkan teknologi informasi dan komunikasi, terintegrasi kedalam sistem
                                                online.
                                                <br>
                                                Terima kasih kepada semua pihak yang telah banyak memberi dukungan dan
                                                kontribusi baik berupa tenaga, pikiran dan semangat sehingga website ini dapat
                                                terealisasi.
                                        </p>
                                </div>
                                <div class="container flex flex-col justify-center items-center ">
                                        <img src="{{ asset('images/foto-profil-pakde.jpg') }}" alt="foto kepala desa"
                                                alt="foto kades" class="h-auto w-60 md:w-80 rounded-full object-cover"
                                                loading="lazy">
                                        <p class="font-bold text-lg mt-2">Radjadeng, S.Pd.I</p>
                                </div>
                        </div>
        </section>

        <!-- about us -->
        <section class="h-screen" id="aboutus">
                <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                                <div class="mt-12 md:mt-0">
                                        <img src="{{ asset('images/carousel/carousel-1.jpeg') }}" alt="About Us Image"
                                                class="object-cover rounded-lg shadow-md" loading="lazy">
                                </div>
                                <div class="max-w-lg">
                                        <h2 class="text-3xl font-bold text-[#21b92d] mb-8 text-center">Tentang Desa</h2>
                                        <p class="mt-4 text-gray-600 text-lg line-clamp-6">
                                                Desa Bontomanai adalah salah satu Desa yang asal mula kelahirannya adalah hasil
                                                pemekaran dari desa kalimporo ( sebuah Desa yang terletak disebalah barat desa
                                                Bontomani Desa yang asal mula bernama Mangngalero, namun diubah menjadi Desa
                                                Bontomanai yang artinya gunung “menonjol”. Nama ini di ambil karena Desa ini
                                                memiliki gunung yang bermunculan sehingga di namakan Desa Bontomanai. Kepala
                                                Desa yang menjabat pada saat itu adalah bapak Alimajjid. SOS masa hidmad 2005
                                                sampe 2006 dan tidak lama kemudian diangkat menjadi lura. dikarenakan adanya
                                                kekosongan jabatan maka Bapak Abdul Rahman. sos selaku Ketua bpd (badan
                                                permusyawaratan daerah) pada saat itu di tunjuk langsung sebagai pelaksana tugas
                                                oleh kabupaten, 2 tahun kemudian diadakan pemilihan secara langsung untuk memili
                                                keopala desa yang baru dan bapak saat itu adalah bapak saparuddin. setelah
                                                pemilian terjadi maka terpilih bapak abdul. rahman sebagai kepala desa
                                                berikutnya. luas wilayah desa bontomanai di perkirakan mencapai 1,65 m dengan
                                                wilaya pemerintahannya meliputi 8 dusun yakni :</p>
                                        <div class="flex justify-end mt-2">
                                                <a class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500 mt-6"
                                                        href="{{ route('tentangDesa') }}">Lihat Selengkapnya
                                                        <svg class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400"
                                                                width="3" height="6" viewBox="0 0 3 6" fill="none"
                                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round">
                                                                <path d="M0 0L3 3L0 6"></path>
                                                        </svg></a>
                                        </div>
                                </div>

                        </div>
                </div>
        </section>

        <!-- Administrasi -->
        <section class="flex flex-col flex-grow w-screen min-h-screen bg-gray-100 items-center justify-center p-4">
                <div class="container mx-auto">
                        <div class="flex justify-center text-2xl md:text-3xl font-bold text-[#21b92d] text-center">
                                Administrasi Penduduk
                        </div>

                        <div class="grid grid-cols-1 md:gridcol3 gap-6 mt-8">
                                <!-- Kartu Data -->
                                <div class="md:flex md:col-span-3 md:justify-evenly">
                                        <div class="grid grid-cols-1 w-full max-w-xs mx-auto mt-8 md:mt-0 shadow-lg">
                                                <div class="flex justify-center items-center bg-[#21b92d] rounded-t-md h-16">
                                                        <div class="text-lg md:text-xl font-bold text-white p-5 md:p-10">
                                                                Laki-Laki</div>
                                                </div>
                                                <div
                                                        class="flex justify-center items-center bg-gray-200 rounded-b-md p-5 md:p-10">
                                                        <div class="text-2xl md:text-3xl font-bold text-black">1.871</div>
                                                </div>
                                        </div>

                                        <div class="grid grid-cols-1 w-full max-w-xs mx-auto mt-8 md:mt-0 shadow-lg">
                                                <div class="flex justify-center items-center bg-[#21b92d] rounded-t-md h-16">
                                                        <div class="text-lg md:text-xl font-bold text-white p-5 md:p-10">Jumlah
                                                                Penduduk
                                                        </div>
                                                </div>
                                                <div
                                                        class="flex justify-center items-center bg-gray-200 rounded-b-md p-5 md:p-10">
                                                        <div class="text-2xl md:text-3xl font-bold text-black">4.078</div>
                                                </div>
                                        </div>

                                        <div class="grid grid-cols-1 w-full max-w-xs mx-auto mt-8 md:mt-0 shadow-lg">
                                                <div class="flex justify-center items-center bg-[#21b92d] rounded-t-md h-16">
                                                        <div class="text-lg md:text-xl font-bold text-white p-5 md:p-10">
                                                                Perempuan</div>
                                                </div>
                                                <div
                                                        class="flex justify-center items-center bg-gray-200 rounded-b-md p-5 md:p-10">
                                                        <div class="text-2xl md:text-3xl font-bold text-black">2.217</div>
                                                </div>
                                        </div>
                                </div>

                                <div class="md:flex md:col-span-3 md:mx-56">
                                        <div class="grid grid-cols-1 w-full max-w-xs mx-auto shadow-lg">
                                                <div class="flex justify-center items-center bg-[#21b92d] rounded-t-md h-16">
                                                        <div class="text-lg md:text-xl font-bold text-white p-5 md:p-10">Jumlah
                                                                Rumah
                                                        </div>
                                                </div>
                                                <div
                                                        class="flex justify-center items-center bg-gray-200 rounded-b-md p-5 md:p-10">
                                                        <div class="text-2xl md:text-3xl font-bold text-black">1.002</div>
                                                </div>
                                        </div>

                                        <div class="grid grid-cols-1 w-full max-w-xs mx-auto mt-8 md:mt-0 shadow-lg">
                                                <div class="flex justify-center items-center bg-[#21b92d] rounded-t-md h-16">
                                                        <div class="text-lg md:text-xl font-bold text-white p-5 md:p-10">Kepala
                                                                Keluarga
                                                        </div>
                                                </div>
                                                <div
                                                        class="flex justify-center items-center bg-gray-200 rounded-b-md p-5 md:p-10">
                                                        <div class="text-2xl md:text-3xl font-bold text-black">1.064</div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>

        <!-- Produk Lokal -->
        <section class="flex justify-center items-center text-[#21b92d] body-font mt-10 py-16">
                <div class="mx-auto">
                        <div class="flex justify-center text-3xl font-bold  text-center">
                                Produk Lokal
                        </div>
                        <div class="container py-12 ">
                                <div class="flex  text-center justify-evenly gap-y-10">
                                        <div class="p-4 md:w-1/4 sm:w-1/2">
                                                <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                                                        <div class="flex justify-center">
                                                                <img src="https://img.icons8.com/ios/40/stack-of-photos--v1.png"
                                                                        class="w-48 h-40 mb-3 object-cover rounded-2xl"
                                                                        loading="lazy">
                                                        </div>
                                                        <h2 class="title-font font-regular text-2xl text-gray-900">Selai Buah
                                                                Lontar</h2>
                                                </div>
                                        </div>

                                        <div class="p-4 md:w-1/4 sm:w-1/2">
                                                <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                                                        <div class="flex justify-center">
                                                                <img src="{{ asset('images/produkLokal/pie-lontar.jpeg') }}"
                                                                        class="w-48 h-40 mb-3 object-cover rounded-2xl"
                                                                        loading="lazy">
                                                        </div>
                                                        <h2 class="title-font font-regular text-2xl text-gray-900">Pie Buah
                                                                Lontar</h2>
                                                </div>
                                        </div>

                                        <div class="p-4 md:w-1/4 sm:w-1/2">
                                                <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                                                        <div class="flex justify-center">
                                                                <img src="{{ asset('images/produkLokal/nddy.jpeg') }}"
                                                                        class="w-48 h-40 mb-3 object-cover rounded-2xl"
                                                                        loading="lazy">
                                                        </div>
                                                        <h2 class="title-font font-regular text-2xl text-gray-900">NDDY CAKE
                                                        </h2>
                                                </div>
                                        </div>

                                        {{-- <div class="p-4 md:w-1/4 sm:w-1/2">
                                                <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                                                        <div class="flex justify-center">
                                                                <img src="https://image3.jdomni.in/banner/13062021/EB/99/EE/8B46027500E987A5142ECC1CE1_1623567959360.png?output-format=webp"
                                                                        class="w-32 mb-3" loading="lazy">
                                                        </div>
                                                        <h2 class="title-font font-regular text-2xl text-gray-900">Expertise in
                                                                Industry</h2>
                                                </div>
                                        </div> --}}

                                </div>
                        </div>
                </div>
        </section>


        {{-- <section class="text-gray-700 body-font" id="gallery">
    <div class="flex justify-center text-3xl font-bold text-gray-800 text-center py-10">
            Gallery
    </div>

    <div
            class="grid grid-cols-1 place-items-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">

            <div class="group relative">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Image 1"
                            class="aspect-[2/3] h-80 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
            </div>

            <div class="group relative">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Image 1"
                            class="aspect-[2/3] h-80 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
            </div>

            <div class="group relative">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Image 1"
                            class="aspect-[2/3] h-80 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
            </div>
            <div class="group relative">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="Image 1"
                            class="aspect-[2/3] h-80 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
            </div>



            <!-- Repeat this div for each image -->
    </div>

</section> --}}

        <!-- Visit us section -->
        <section class="flex justify-center items-center h-screen bg-gray-100">
                <div class="mx-auto pt-8 px-4 sm:px-6 lg:py-10 lg:px-16 w-full">
                        <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
                                <h2 class="text-3xl font-extrabold text-[#21b92d]" id="contactUs">Visit Our Location</h2>
                        </div>
                        <div class="my-6 w-full">
                                {{-- Map View --}}
                                <div id="map" class="rounded-lg overflow-hidden w-full px-4 md:px-16 lg:px-32">
                                        <iframe class="w-full h-[200px] md:h-[500px] rounded-lg"
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15098.23950983526!2d119.60358719373171!3d-5.560524460717971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbecd5cdc4b9c5f%3A0xde091fd9bdf357c0!2sBontomanai%2C%20Bangkala%2C%20Kabupaten%20Jeneponto%2C%20Sulawesi%20Selatan!5e1!3m2!1sid!2sid!4v1736516579508!5m2!1sid!2sid"
                                                style="border:0;" allowfullscreen="false" loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                        </div>
                </div>
        </section>



        <!-- JavaScript untuk Carousel -->
        <script>
                document.addEventListener("DOMContentLoaded", function() {
                        const slides = document.querySelectorAll('.carousel-item');
                        let currentIndex = 0;
                        const totalSlides = slides.length;
                        const intervalTime = 5000;
                        let autoSlide = setInterval(nextSlide, intervalTime);

                        function showSlide(index) {
                                slides.forEach((slide, i) => {
                                        slide.style.opacity = i === index ? "1" : "0";
                                });
                        }

                        function nextSlide() {
                                currentIndex = (currentIndex + 1) % totalSlides;
                                showSlide(currentIndex);
                        }

                        function prevSlide() {
                                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                                showSlide(currentIndex);
                        }

                        document.getElementById("prevSlide").addEventListener("click", () => {
                                prevSlide();
                                resetAutoSlide();
                        });

                        document.getElementById("nextSlide").addEventListener("click", () => {
                                nextSlide();
                                resetAutoSlide();
                        });

                        function resetAutoSlide() {
                                clearInterval(autoSlide);
                                autoSlide = setInterval(nextSlide, intervalTime);
                        }

                        // Tampilkan slide pertama saat halaman dimuat
                        showSlide(currentIndex);
                });
        </script>
@endsection
