@extends('layouts.app')

@section('Tentang Desa | Bontomanai', 'Bontomanai')

@section('content')

        <div class="min-h-screen bg-gray-900 flex flex-col items-center justify-center relative px-4">
                <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center opacity-30 z-0"
                        style="background-image: url('https://images.unsplash.com/photo-1604093882750-3ed498f3178b');">
                </div>

                <div class="flex flex-col bg-slate-300 rounded-xl my-10 mx-2 md:mx-32 p-6 leading-relaxed break-words z-10">
                        <div class="tabs">
                                <!-- Tab navigation -->
                                <div class="grid grid-cols-2 gap-2 md:flex justify-evenly space-x-4 border-b">
                                        <button id="tab1"
                                                class="tab-button py-2 px-4 text-blue-600 hover:text-blue-800">Sejarah
                                                Desa</button>
                                        <button id="tab2"
                                                class="tab-button py-2 px-4 text-blue-600 hover:text-blue-800">Kondisi
                                                Geografis</button>
                                        <button id="tab3"
                                                class="tab-button py-2 px-4 text-blue-600 hover:text-blue-800">Sosial
                                                Budaya</button>
                                        <button id="tab4"
                                                class="tab-button py-2 px-4 text-blue-600 hover:text-blue-800">Pertanian</button>
                                        <button id="tab5"
                                                class="tab-button py-2 px-4 text-blue-600 hover:text-blue-800">Kelembagaan
                                                Desa</button>
                                </div>

                                <!-- Tab content -->
                                <div class="tab-content mt-4">
                                        <!-- Tab 1 content -->
                                        <div id="tab1-content" class="tab-panel hidden">
                                                <h1 class="text-center text-3xl md:text-5xl text-black font-bold my-4 md:my-8">
                                                        Sejarah Desa</h1>
                                                <p class="text-black text-md md:text-2xl ">
                                                        @include('partials.tentangDesaText')
                                                </p>
                                        </div>

                                        <!-- Tab 2 content -->
                                        <div id="tab2-content" class="tab-panel hidden">
                                                <h1 class="text-center text-3xl md:text-5xl text-black font-bold mb-4 md:mb-8">
                                                        Kondisi Geografis</h1>
                                                <p class="text-black text-sm md:text-2xl ">
                                                        @include('partials.kondisiGeografis')
                                                </p>
                                        </div>

                                        <!-- Tab 3 content -->
                                        <div id="tab3-content" class="tab-panel hidden">
                                                <h1 class="text-center text-3xl md:text-5xl text-black font-bold mb-4 md:mb-8">
                                                        Sosial Budaya</h1>
                                                <p class="text-black text-sm md:text-2xl ">
                                                        @include('partials.sosialBudaya ')
                                                </p>
                                        </div>

                                        <!-- Tab 4 content -->
                                        <div id="tab4-content" class="tab-panel hidden">
                                                <h1 class="text-center text-3xl md:text-5xl text-black font-bold mb-4 md:mb-8">
                                                        Pertanian</h1>
                                                <p class="text-black text-sm md:text-2xl ">
                                                        @include('partials.pertanian')
                                                </p>
                                        </div>

                                        <!-- Tab 5 content -->
                                        <div id="tab5-content" class="tab-panel hidden">
                                                <h1 class="text-center text-3xl md:text-5xl text-black font-bold mb-4 md:mb-8">
                                                        Kelembagaan Desa</h1>
                                                <p class="text-black text-sm md:text-2xl ">
                                                        @include('partials.kelembagaanDesa')
                                                </p>
                                        </div>
                                </div>
                        </div>

                        <!-- JavaScript untuk Tab Switch -->
                        <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                        // Mengambil elemen tab dan konten
                                        const tabButtons = document.querySelectorAll('.tab-button');
                                        const tabContents = document.querySelectorAll('.tab-panel');

                                        // Mengatur event klik pada setiap tab
                                        tabButtons.forEach(button => {
                                                button.addEventListener('click', function() {
                                                        const target = button.id + '-content';

                                                        // Menyembunyikan semua tab content
                                                        tabContents.forEach(content => content
                                                                .classList.add('hidden')
                                                        );

                                                        // Menampilkan konten tab yang dipilih
                                                        document.getElementById(target)
                                                                .classList.remove('hidden');
                                                });
                                        });

                                        // Menampilkan tab pertama secara default
                                        document.getElementById('tab1-content').classList.remove('hidden');
                                });
                        </script>


                </div>
        </div>

@endsection
