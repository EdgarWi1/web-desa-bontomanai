@extends('layouts.app')

@section('Peta Digital | Bontomanai', 'Bontomanai')

@section('content')

        <div class="max-w-screen-lg mx-auto p-5 sm:p-10 md:p-16">

                <div class="mb-10 rounded overflow-hidden flex flex-col mx-auto">
                        <a href="#"
                                class="text-xl sm:text-4xl font-semibold hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                                Peta Desa Bontomanai</a>

                        <div class="relative">
                                <img class="w-full" src="{{ asset('images/petaDesa/peta_desa.png') }}" alt="Peta Desa">
                        </div>
                        <p class="text-gray-700 py-5 text-lg leading-8">
                        </p>
                </div>

        @endsection
