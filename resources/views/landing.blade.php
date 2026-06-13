@extends('layouts.app')

@section('content')
    <!-- Hero Section (Full Width) -->
    <section class="relative bg-white overflow-hidden py-20 lg:py-32 flex items-center min-h-[calc(100vh-10rem)]">
        <!-- Dekorasai Background (Opsional Tailwind v4) -->
        <div class="absolute inset-0 bg-linear-to-tr from-blue-50 to-transparent -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Teks Hero -->
                <div class="space-y-6 text-center lg:text-left">
                    <span
                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        Versi Terbaru v1.0 Active
                    </span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-none">
                        Mulai Aplikasi Anda Bersama <span class="text-blue-600">StarterAPI</span>
                    </h1>
                    <p class="text-lg text-slate-600 max-w-2xl mx-auto lg:mx-0">
                        Template starter pack premium menggunakan Laravel, Tailwind v4, Ready API, Auth Integration dan
                        Sistem Super Admin Monitoring. Siap
                        pakai untuk kebutuhan pengembangan API skala besar.
                    </p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-4 pt-2">
                        <a href="{{ route('explore') }}"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-xl shadow-md hover:shadow-lg transition-all">
                            Mulai Sekarang
                        </a>
                        <a href="{{ route('docs') }}"
                            class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold px-6 py-3 rounded-xl transition-all border border-slate-200">
                            Pelajari Dokumen
                        </a>
                    </div>
                </div>

                <!-- Area Visual / Gambar Hero -->
                <div class="relative flex justify-center lg:justify-end">
                    <!-- Box representasi visual, bisa diganti dengan tag <img> -->
                    <div
                        class="w-full max-w-md aspect-video lg:aspect-square bg-linear-to-br from-blue-600 to-indigo-700 rounded-3xl shadow-2xl flex items-center justify-center p-8 text-white transform hover:rotate-1 transition-transform">
                        <div class="text-center space-y-2">
                            <code class="text-sm bg-black/20 px-3 py-1 rounded-md text-blue-200 block">php artisan
                                serve</code>
                            <p class="font-medium text-lg">Laravel 13 + Tailwind CSS v4</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
