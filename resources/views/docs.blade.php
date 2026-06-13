@extends('layouts.app')

@section('content')
@section('content')
    <div class="max-w-7xl mx-auto my-10 px-4 sm:px-6 lg:px-8 py-8 min-h-screen bg-white shadow-xl rounded-lg">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- KOLOM 1: NAVIGASI INTERNAL (STICKY SIDEBAR) -->
            <aside class="hidden lg:block lg:col-span-1">
                <div class="sticky top-24 space-y-6 text-sm">
                    <!-- Grup Navigasi 1 -->
                    <div class="space-y-2">
                        <h4 class="font-black text-slate-900 uppercase tracking-wider text-xs">Memulai</h4>
                        <ul class="space-y-1.5 border-l border-slate-100 pl-3 text-slate-500 font-medium">
                            <li><a href="#pengantar"
                                    class="block text-blue-600 font-semibold border-l -ml-[13px] pl-3 border-blue-600">Pengantar</a>
                            </li>
                            <li><a href="#persyaratan" class="block hover:text-slate-900 transition-colors">Persyaratan
                                    Sistem</a></li>
                            <li><a href="#instalasi" class="block hover:text-slate-900 transition-colors">Instalasi
                                    Dasar</a></li>
                        </ul>
                    </div>
                    <!-- Grup Navigasi 2 -->
                    <div class="space-y-2">
                        <h4 class="font-black text-slate-900 uppercase tracking-wider text-xs">Arsitektur Fitur</h4>
                        <ul class="space-y-1.5 border-l border-slate-100 pl-3 text-slate-500 font-medium">
                            <li><a href="#manajemen-db" class="block hover:text-slate-900 transition-colors">Manajemen
                                    Database</a></li>
                            <li><a href="#log-viewer" class="block hover:text-slate-900 transition-colors">Log Viewer
                                    Konsol</a></li>
                            <li><a href="#thirdparty-vault" class="block hover:text-slate-900 transition-colors">Thirdparty
                                    Key Vault</a></li>
                        </ul>
                    </div>
                </div>
            </aside>

            <!-- KOLOM 2: AREA KONTEN UTAMA (LEBAR 3/4) -->
            <main class="col-span-1 lg:col-span-3 space-y-12 max-w-3xl">

                <!-- SEKSI 1: PENGANTAR -->
                <section id="pengantar" class="space-y-4 scroll-mt-24">
                    <div class="space-y-1">
                        <span class="text-xs font-bold text-blue-600 tracking-wider uppercase">Dokumentasi Resmi</span>
                        <h2 class="text-3xl font-black text-slate-900 tracking-tight">Pengantar Starterkit</h2>
                    </div>
                    <p class="text-slate-600 leading-relaxed">
                        Selamat datang di panduan resmi **Akhritech API Starterkit**. Boilerplate ini dirancang khusus untuk
                        memotong waktu setup awal proyek berskala enterprise menggunakan ekosistem terbaru **Laravel 13**,
                        kompiler kilat **Vite 7**, dan utilitas gaya **Tailwind CSS v4**.
                    </p>
                </section>

                <!-- SEKSI 2: PERSYARATAN -->
                <section id="persyaratan" class="space-y-4 scroll-mt-24">
                    <h3 class="text-xl font-bold text-slate-900">Persyaratan Sistem</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Sebelum menjalankan framework, pastikan mesin lokal atau server produksi Anda memenuhi kriteria
                        dependensi berikut:
                    </p>
                    <div class="bg-slate-50 border border-slate-200/60 rounded-2xl p-4">
                        <ul class="space-y-2 text-sm text-slate-600 font-medium">
                            <li class="flex items-center gap-2">
                                <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span> PHP versi 8.2 atau yang lebih
                                baru
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span> Node.js versi 20.19+ atau 22.12+
                                (Wajib untuk Vite 7)
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span> Ekstensi SQLite terinstal pada
                                PHP
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- SEKSI 3: INSTALASI -->
                <section id="instalasi" class="space-y-4 scroll-mt-24">
                    <h3 class="text-xl font-bold text-slate-900">Instalasi Dasar</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Buka terminal Anda di direktori proyek, lalu jalankan rangkaian perintah berikut untuk memasang
                        dependensi dan menyalakan server lokal:
                    </p>

                    <!-- Blok Kode / Terminal Emulator Style -->
                    <div
                        class="bg-slate-900 rounded-2xl p-5 text-slate-200 font-mono text-xs space-y-3 shadow-lg relative overflow-hidden">
                        <div
                            class="absolute top-0 left-0 right-0 bg-slate-800/50 px-4 py-2 flex gap-1.5 items-center border-b border-slate-800">
                            <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                            <span class="text-[10px] text-slate-500 ml-2">Terminal</span>
                        </div>
                        <div class="pt-6 space-y-2">
                            <p class="text-slate-500"># 1. Pasang paket composer php</p>
                            <p><span class="text-emerald-400">composer</span> install</p>
                            <p class="text-slate-500"># 2. Pasang paket node module & jalankan Vite</p>
                            <p><span class="text-emerald-400">npm</span> install</p>
                            <p><span class="text-emerald-400">npm</span> run dev</p>
                        </div>
                    </div>
                </section>

                <!-- SEKSI 4: THIRD PARTY KEY VAULT -->
                <section id="thirdparty-vault" class="space-y-4 scroll-mt-24">
                    <h3 class="text-xl font-bold text-slate-900">Third-Party Key Vault</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Sistem ini mengisolasi variabel pihak ketiga di dalam database SQLite menggunakan enkripsi bawaan
                        Laravel. Anda tidak perlu menaruh rahasia produksi seperti API Key Midtrans atau AWS di file <code
                            class="bg-slate-100 text-rose-600 px-1.5 py-0.5 rounded text-xs font-mono">.env</code> mentah.
                    </p>
                    <!-- Alert/Callout Box -->
                    <div class="bg-amber-50 border border-amber-200 rounded-2xl p-4 flex gap-3 text-sm text-amber-800">
                        <svg class="h-5 w-5 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <div>
                            <span class="font-bold block">Peringatan Keamanan</span>
                            Jangan pernah membagikan atau memasukkan berkas <code
                                class="font-mono bg-amber-100 px-1 rounded">database.sqlite</code> ke dalam pelacakan
                            repositori Git publik.
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>

@endsection
