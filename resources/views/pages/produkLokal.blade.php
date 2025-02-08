@extends('layouts.app')

@section('Produk Lokal | Bontomanai', 'Bontomanai')

@section('content')

        <!-- inspired by tailwindcss.com -->
        <ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-6 items-start p-8">

                <li class="relative flex flex-col sm:flex-row xl:flex-col items-center w-full max-w-[17rem] xl:max-w-full">
                        <div class="order-1 sm:ml-6 xl:ml-0">
                                <h3 class="flex flex-col mb-1 text-slate-900 font-semibold">
                                        <span>Selai Lontar</span>
                                </h3>
                                <div class="prose-lg text-slate-600">
                                        <p>Inovasi dari buah lontar. Diambil dari buah lontar muda dan dimasak menjadi selai</p>
                                </div>
                        </div>
                        <img src="https://img.icons8.com/ios/40/stack-of-photos--v1.png" alt="Selai Lontar"
                                class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full h-60 object-cover"
                                width="1216" height="640">
                </li>

                <li class="relative flex flex-col sm:flex-row xl:flex-col items-center w-full max-w-[17rem] xl:max-w-full">
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
                        <img src="{{ asset('images/produkLokal/pie-lontar.jpeg') }}" alt="Pie Lontar"
                                class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full h-60 object-cover"
                                width="1216" height="640">
                </li>

                <li class="relative flex flex-col sm:flex-row xl:flex-col items-center w-full max-w-[17rem] xl:max-w-full">
                        <div class="order-1 sm:ml-6 xl:ml-0">
                                <h3 class="flex flex-col mb-1 text-slate-900 font-semibold">
                                        <span> NDDY Cake </span>
                                </h3>
                                <div class="prose-lg text-slate-600">
                                        <p>Menerima pesanan Custom Cake untuk segala acara. Ulang tahun, anniversary,
                                                baby shower, wedding cake, graduation cake dll. Pemesanan bisa H-1 tergantung
                                                jenis pesanan. </p>
                                </div>
                        </div>
                        <img src="{{ asset('images/produkLokal/nddy-1.jpeg') }}" alt="Image"
                                class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full h-60 object-cover"
                                width="1216" height="640">
                </li>
        </ul>

@endsection
