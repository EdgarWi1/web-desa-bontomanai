@extends('layouts.app')

@section('Produk Lokal | Bontomanai', 'Bontomanai')

@section('content')

        <!-- inspired by tailwindcss.com -->
        <ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-6 items-start p-8">
                <li class="relative flex flex-col sm:flex-row xl:flex-col items-center">
                        <div class="flex flex-col order-1 sm:ml-6 xl:ml-0">
                                <h3 class="mb-1 text-slate-900 font-semibold">
                                        <span>Selai Lontar</span>
                                </h3>
                                <div class="prose-lg text-slate-600">
                                        <p>Inovasi dari buah lontar. Diambil dari buah lontar muda dan dimasak menjadi selai</p>
                                </div>
                        </div>
                        <img src="https://tailwindcss.com/_next/static/media/headlessui@75.c1d50bc1.jpg" alt=""
                                class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full"
                                width="1216" height="640">
                </li>

                <li class="relative flex flex-col sm:flex-row xl:flex-col items-center">
                        <div class="order-1 sm:ml-6 xl:ml-0">
                                <h3 class="flex flex-col mb-1 text-slate-900 font-semibold">
                                        <span>Pie Lontar</span>
                                </h3>
                                <div class="prose-lg text-slate-600">
                                        <p>Inovasi dari buah lontar. Diambil dari campuran buah lontar muda dan lontar masak
                                                lalu dimasukkan ke adonan pie, sehingga membuat pie memiliki aroma unik dari
                                                buah lontar</p>
                                </div>
                        </div>
                        <img src="https://tailwindcss.com/_next/static/media/headlessui@75.c1d50bc1.jpg" alt=""
                                class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full"
                                width="1216" height="640">
                </li>

                {{-- <li class="relative flex flex-col sm:flex-row xl:flex-col items-center">
                        <div class="flex flex-col order-1 sm:ml-6 xl:ml-0">
                                <h3 class="mb-1 text-slate-900 font-semibold">
                                        <span>Selai Lontar</span>
                                </h3>
                                <div class="prose prose-slate prose-sm text-slate-600">
                                        <p>Inovasi dari buah lontar. Diambil dari buah lontar muda dan dimasak menjadi selai</p>
                                </div>
                        </div>
                        <img src="https://tailwindcss.com/_next/static/media/headlessui@75.c1d50bc1.jpg" alt=""
                                class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full"
                                width="1216" height="640">
                </li>

                <li class="relative flex flex-col sm:flex-row xl:flex-col items-center">
                        <div class="order-1 sm:ml-6 xl:ml-0">
                                <h3 class="flex flex-col mb-1 text-slate-900 font-semibold">
                                        <span>Pie Lontar</span>
                                </h3>
                                <div class="prose prose-slate prose-sm text-slate-600">
                                        <p>Inovasi dari buah lontar. Diambil dari campuran buah lontar muda dan lontar masak
                                                lalu dimasukkan ke adonan pie, sehingga membuat pie memiliki aroma unik dari
                                                buah lontar</p>
                                </div>
                        </div>
                        <img src="https://tailwindcss.com/_next/static/media/headlessui@75.c1d50bc1.jpg" alt=""
                                class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full"
                                width="1216" height="640">
                </li> --}}
        </ul>

@endsection
