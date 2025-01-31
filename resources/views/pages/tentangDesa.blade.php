@extends('layouts.app')

@section('Tentang Desa | Bontomanai', 'Bontomanai')

@section('content')

        <div class="min-h-screen bg-gray-900 flex flex-col items-center justify-center relative px-4">
                <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center opacity-30"
                        style="background-image: url('https://images.unsplash.com/photo-1604093882750-3ed498f3178b');">
                </div>
                <div class="flex flex-col bg-slate-400 rounded-xl my-10 mx-2 md:mx-32 p-6 leading-relaxed break-words">
                        <h1 class="text-center text-5xl md:text-7xl text-black font-bold mb-8">Tentang Desa</h1>
                        <p class="text-black text-xl md:text-2xl prose">
                                @include('partials.tentangDesaText')
                        </p>
                </div>
        </div>

@endsection
