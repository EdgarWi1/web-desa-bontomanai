@extends('layouts.app')

@section('Homepage | Bontomanai', 'Bontomanai')

@section('content')
        <!-- hero seciton -->
        <div class="relative w-full min-h-screen" id="home">
                <div class="absolute inset-0 opacity-70">
                        <img src="https://image1.jdomni.in/banner/13062021/0A/52/CC/1AF5FC422867D96E06C4B7BD69_1623557926542.png"
                                alt="Background Image" class="object-cover object-center w-full h-full" />

                </div>
                <div class="absolute inset-9 flex flex-col md:flex-row items-center justify-between">
                        <div class="flex md:w-1/2 items-center mt-56 md:mt-0 md:mb-10">
                                <h1 class="text-grey-700 font-medium text-3xl md:text-5xl leading-tight mb-2">
                                        Desa Bontomanai
                                        Kecamatan Bangkala
                                        Kabupaten Jeneponto
                                </h1>
                        </div>
                </div>
        </div>

        <!-- sambutan -->
        <section class="py-10" id="services">
                <div class="container mx-auto px-4">
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
                                        <img src="{{ asset('images/profil.jpeg') }}" alt="foto kepala desa" alt="foto kades"
                                                class="h-auto w-60 md:w-80 rounded-full object-cover">
                                        <p class="font-bold text-lg mt-2">Radjadeng, S.Pd.I</p>
                                </div>
                        </div>
        </section>

        <!-- about us -->
        <section class="container" id="aboutus">
                <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                                <div class="mt-12 md:mt-0">
                                        <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86"
                                                alt="About Us Image" class="object-cover rounded-lg shadow-md">
                                </div>
                                <div class="max-w-lg">
                                        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Tentang Desa</h2>
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
        <section class="flex-grow p-5 md:p-10 bg-gray-100">
                <div class="flex justify-center text-3xl font-bold text-gray-800 text-center">
                        Administrasi Penduduk
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                        <div class="grid grid-cols-2 shadow-lg">
                                <div class="flex justify-center items-center bg-[#21b92d] rounded-s-md p-3">
                                        <div class="text-2xl md:text-3xl font-bold text-white">
                                                4.078
                                        </div>
                                </div>
                                <div class="flex justify-center items-center bg-gray-200 rounded-e-md">
                                        <div class=" text-lg p-1 md:p-0 md:text-xl font-bold">
                                                Jumlah Penduduk
                                        </div>
                                </div>
                        </div>

                        <div class="grid grid-cols-2 shadow-lg">
                                <div class="flex justify-center items-center bg-[#21b92d] rounded-s-md p-3">
                                        <div class="text-2xl md:text-3xl font-bold text-white">
                                                1.871
                                        </div>
                                </div>
                                <div class="flex justify-center items-center bg-gray-200 rounded-e-md">
                                        <div class="text-lg p-1 md:p-0 md:text-xl font-bold">
                                                Laki-Laki
                                        </div>
                                </div>
                        </div>

                        <div class="grid grid-cols-2 shadow-lg">
                                <div class="flex justify-center items-center bg-[#21b92d] rounded-s-md p-3">
                                        <div class="text-2xl md:text-3xl font-bold text-white">
                                                1.064
                                        </div>
                                </div>
                                <div class="flex justify-center items-center bg-gray-200 rounded-e-md">
                                        <div class="text-lg p-1 md:p-0 md:text-xl font-bold">
                                                Kepala Keluarga
                                        </div>
                                </div>
                        </div>

                        <div class="grid grid-cols-2 shadow-lg">
                                <div class="flex justify-center items-center bg-[#21b92d] rounded-s-md p-3">
                                        <div class="text-2xl md:text-3xl font-bold text-white">
                                                2.217
                                        </div>
                                </div>
                                <div class="flex justify-center items-center bg-gray-200 rounded-e-md">
                                        <div class="text-lg p-1 md:p-0 md:text-xl font-bold">
                                                Perempuan
                                        </div>
                                </div>
                        </div>
                </div>
        </section>

        <!-- produk lokal  -->
        <section class="text-gray-700 body-font mt-10">
                <div class="flex justify-center text-3xl font-bold text-gray-800 text-center">
                        Produk Lokal
                </div>
                <div class="container px-5 py-12 mx-auto">
                        <div class="flex flex-wrap text-center justify-center">
                                <div class="p-4 md:w-1/4 sm:w-1/2">
                                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                                                <div class="flex justify-center">
                                                        <img src="https://image3.jdomni.in/banner/13062021/58/97/7C/E53960D1295621EFCB5B13F335_1623567851299.png?output-format=webp"
                                                                class="w-32 mb-3">
                                                </div>
                                                <h2 class="title-font font-regular text-2xl text-gray-900">Selai Buah
                                                        Lontar</h2>
                                        </div>
                                </div>

                                <div class="p-4 md:w-1/4 sm:w-1/2">
                                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                                                <div class="flex justify-center">
                                                        <img src="https://image2.jdomni.in/banner/13062021/3E/57/E8/1D6E23DD7E12571705CAC761E7_1623567977295.png?output-format=webp"
                                                                class="w-32 mb-3">
                                                </div>
                                                <h2 class="title-font font-regular text-2xl text-gray-900">Pie Buah
                                                        Lontar</h2>
                                        </div>
                                </div>

                                <div class="p-4 md:w-1/4 sm:w-1/2">
                                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                                                <div class="flex justify-center">
                                                        <img src="https://image3.jdomni.in/banner/13062021/16/7E/7E/5A9920439E52EF309F27B43EEB_1623568010437.png?output-format=webp"
                                                                class="w-32 mb-3">
                                                </div>
                                                <h2 class="title-font font-regular text-2xl text-gray-900">Time
                                                        Efficiency</h2>
                                        </div>
                                </div>

                                <div class="p-4 md:w-1/4 sm:w-1/2">
                                        <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                                                <div class="flex justify-center">
                                                        <img src="https://image3.jdomni.in/banner/13062021/EB/99/EE/8B46027500E987A5142ECC1CE1_1623567959360.png?output-format=webp"
                                                                class="w-32 mb-3">
                                                </div>
                                                <h2 class="title-font font-regular text-2xl text-gray-900">Expertise in
                                                        Industry</h2>
                                        </div>
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
        <section class="bg-gray-100">
                <div class="max-w-7xl mx-auto pt-8 px-4 sm:px-6 lg:py-10 lg:px-8">
                        <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
                                <h2 class="text-3xl font-extrabold text-gray-900" id="contactUs">Visit Our Location
                                </h2>
                                <p class="mt-3 text-lg text-gray-500">Let us serve you the best</p>
                        </div>
                        <div class="my-6">
                                {{-- Map View --}}
                                <div id="map"
                                        class="rounded-lg overflow-hidden order-none sm:order-first px-4 md:px-20">
                                        <iframe class="w-full h-60 md:h-96"
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15098.23950983526!2d119.60358719373171!3d-5.560524460717971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbecd5cdc4b9c5f%3A0xde091fd9bdf357c0!2sBontomanai%2C%20Bangkala%2C%20Kabupaten%20Jeneponto%2C%20Sulawesi%20Selatan!5e1!3m2!1sid!2sid!4v1736516579508!5m2!1sid!2sid"
                                                style="border:0;" allowfullscreen="false" loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                        </div>
                </div>
        </section>
@endsection
