@extends('layouts.app')

@section('Tentang Desa | Bontomanai', 'Bontomanai')

@section('content')

        <div class="min-h-screen bg-gray-900 flex flex-col items-center justify-center relative px-4">
                <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center opacity-30 z-0"
                        style="background-image: url('https://images.unsplash.com/photo-1604093882750-3ed498f3178b');">
                </div>

                <div class="flex flex-col bg-slate-300 rounded-xl my-10 mx-2 md:mx-60 p-6 leading-relaxed break-words z-10">

                        <!-- Tab navigation (Desktop) -->
                        <div id="tab-container" class="hidden md:flex justify-evenly space-x-4 border-b">
                                <button id="tab1" class="tab-button py-2 px-4 text-blue-600 hover:text-blue-800">Sejarah
                                        Desa</button>
                                <button id="tab2" class="tab-button py-2 px-4 text-blue-600 hover:text-blue-800">Kondisi
                                        Geografis</button>
                                <button id="tab3" class="tab-button py-2 px-4 text-blue-600 hover:text-blue-800">Sosial
                                        Budaya</button>
                                <button id="tab4"
                                        class="tab-button py-2 px-4 text-blue-600 hover:text-blue-800">Pertanian</button>
                                <button id="tab5"
                                        class="tab-button py-2 px-4 text-blue-600 hover:text-blue-800">Kelembagaan Desa</button>
                        </div>

                        <!-- Accordion (Mobile) -->
                        <div id="accordion-container" class="md:hidden space-y-2">
                                <div class="accordion">
                                        <div class="accordion-header bg-gray-100 p-4 cursor-pointer flex justify-between items-center"
                                                onclick="toggleAccordion(1)">
                                                <h3 class="font-semibold text-lg">Sejarah Desa</h3>
                                                <span id="arrow-icon-1" class="rotate-180">▼</span>
                                        </div>
                                        <div id="accordion-content-1" class="p-4">
                                                @include('partials.tentangDesaText')
                                        </div>
                                </div>

                                <div class="accordion">
                                        <div class="accordion-header bg-gray-100 p-4 cursor-pointer flex justify-between items-center"
                                                onclick="toggleAccordion(2)">
                                                <h3 class="font-semibold text-lg">Kondisi Geografis</h3>
                                                <span id="arrow-icon-2">▼</span>
                                        </div>
                                        <div id="accordion-content-2" class="p-4 hidden">
                                                @include('partials.kondisiGeografis')
                                        </div>
                                </div>

                                <div class="accordion">
                                        <div class="accordion-header bg-gray-100 p-4 cursor-pointer flex justify-between items-center"
                                                onclick="toggleAccordion(3)">
                                                <h3 class="font-semibold text-lg">Sosial Budaya</h3>
                                                <span id="arrow-icon-3">▼</span>
                                        </div>
                                        <div id="accordion-content-3" class="p-4 hidden">
                                                @include('partials.sosialBudaya')
                                        </div>
                                </div>

                                <div class="accordion">
                                        <div class="accordion-header bg-gray-100 p-4 cursor-pointer flex justify-between items-center"
                                                onclick="toggleAccordion(4)">
                                                <h3 class="font-semibold text-lg">Pertanian</h3>
                                                <span id="arrow-icon-4">▼</span>
                                        </div>
                                        <div id="accordion-content-4" class="p-4 hidden">
                                                @include('partials.pertanian')
                                        </div>
                                </div>

                                <div class="accordion">
                                        <div class="accordion-header bg-gray-100 p-4 cursor-pointer flex justify-between items-center"
                                                onclick="toggleAccordion(5)">
                                                <h3 class="font-semibold text-lg">Kelembagaan Desa</h3>
                                                <span id="arrow-icon-5">▼</span>
                                        </div>
                                        <div id="accordion-content-5" class="p-4 hidden">
                                                @include('partials.kelembagaanDesa')
                                        </div>
                                </div>
                        </div>

                        <!-- Tab Content (Desktop) -->
                        <div class="tab-content mt-4 hidden md:block">
                                <div id="tab1-content" class="tab-panel">
                                        <h1 class="text-center text-3xl md:text-5xl text-black font-bold my-4 md:my-8">Sejarah
                                                Desa</h1>
                                        @include('partials.tentangDesaText')
                                </div>

                                <div id="tab2-content" class="tab-panel hidden">
                                        <h1 class="text-center text-3xl md:text-5xl text-black font-bold mb-4 md:mb-8">Kondisi
                                                Geografis</h1>
                                        @include('partials.kondisiGeografis')
                                </div>

                                <div id="tab3-content" class="tab-panel hidden">
                                        <h1 class="text-center text-3xl md:text-5xl text-black font-bold mb-4 md:mb-8">Sosial
                                                Budaya</h1>
                                        @include('partials.sosialBudaya')
                                </div>

                                <div id="tab4-content" class="tab-panel hidden">
                                        <h1 class="text-center text-3xl md:text-5xl text-black font-bold mb-4 md:mb-8">Pertanian
                                        </h1>
                                        @include('partials.pertanian')
                                </div>

                                <div id="tab5-content" class="tab-panel hidden">
                                        <h1 class="text-center text-3xl md:text-5xl text-black font-bold mb-4 md:mb-8">
                                                Kelembagaan Desa</h1>
                                        @include('partials.kelembagaanDesa')
                                </div>
                        </div>
                </div>
        </div>

        <!-- JavaScript -->
        <script>
                document.addEventListener('DOMContentLoaded', function() {
                        // Tab switching
                        const tabButtons = document.querySelectorAll('.tab-button');
                        const tabContents = document.querySelectorAll('.tab-panel');

                        tabButtons.forEach(button => {
                                button.addEventListener('click', function() {
                                        const target = button.id + '-content';

                                        tabContents.forEach(content => content
                                                .classList.add('hidden')
                                        );

                                        document.getElementById(target)
                                                .classList.remove('hidden');
                                });
                        });

                        // Default: Show first tab content
                        document.getElementById('tab1-content').classList.remove('hidden');

                        // Accordion toggling
                        function toggleAccordion(index) {
                                const content = document.getElementById(`accordion-content-${index}`);
                                const arrow = document.getElementById(`arrow-icon-${index}`);

                                content.classList.toggle('hidden');
                                arrow.classList.toggle('rotate-180');
                        }

                        window.toggleAccordion = toggleAccordion;
                });
        </script>

@endsection
