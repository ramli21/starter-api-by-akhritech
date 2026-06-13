@extends('layouts.app')

@section('content')
    <div class="p-4 sm:p-6 lg:p-8 max-w-7xl mx-auto space-y-8 bg-slate-50/50 min-h-screen">

        <!-- HEADER SECTION -->
        <div class="space-y-2 text-center max-w-2xl mx-auto py-4">
            <h1 class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">
                Eksplorasi Fitur <span class="text-blue-600">Starterkit</span>
            </h1>
            <p class="text-sm sm:text-base text-slate-500">
                Pusat kendali dan manajemen modul terintegrasi untuk mempercepat pengembangan aplikasi backend Anda.
            </p>
        </div>

        <!-- CORE FEATURES GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- MODUL 1: LARAVEL 13 + TAILWIND v4 -->
            <div
                class="bg-white p-6 rounded-3xl border border-slate-200/60 shadow-xs flex flex-col justify-between group hover:border-blue-500/40 hover:shadow-md transition-all duration-200">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-blue-50 text-blue-600 rounded-2xl">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                            </svg>
                        </div>
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700 border border-emerald-100">
                            Vite 7 Active
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-lg font-black text-slate-900 group-hover:text-blue-600 transition-colors">API
                            Starterkit Core</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">
                            Arsitektur dasar tangguh menggunakan mesin Laravel 13, dikombinasikan dengan kompilator aset
                            kilat Tailwind CSS v4 untuk UI yang responsif.
                        </p>
                    </div>
                </div>
                <div class="pt-6 mt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                    <span>PHP 8.2+ • JWT Auth ready</span>
                    <a href="#" class="font-bold text-blue-600 hover:underline">Lihat Dokumen &rarr;</a>
                </div>
            </div>

            <!-- MODUL 2: DATABASE MANAGEMENT -->
            <div
                class="bg-white p-6 rounded-3xl border border-slate-200/60 shadow-xs flex flex-col justify-between group hover:border-blue-500/40 hover:shadow-md transition-all duration-200">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-amber-50 text-amber-600 rounded-2xl">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>
                        </div>
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-bold bg-slate-100 text-slate-600 border border-slate-200">
                            SQLite Terenkripsi
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-lg font-black text-slate-900 group-hover:text-blue-600 transition-colors">Manajemen
                            Database</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">
                            Sistem otomasi untuk melakukan pencadangan data (*backup*) berkala dan pemulihan (*restore*)
                            basis data langsung dari aplikasi dengan sekali klik.
                        </p>
                    </div>
                </div>
                <div class="pt-6 mt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                    <span>Terakhir Backup: Hari ini, 12:00</span>
                    <div class="flex gap-3">
                        <button class="font-bold text-amber-600 hover:underline cursor-pointer">Backup Now</button>
                    </div>
                </div>
            </div>

            <!-- MODUL 3: INTEGRATED LOG VIEWER -->
            <div
                class="bg-white p-6 rounded-3xl border border-slate-200/60 shadow-xs flex flex-col justify-between group hover:border-blue-500/40 hover:shadow-md transition-all duration-200">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-rose-50 text-rose-600 rounded-2xl">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-bold bg-rose-50 text-rose-700 border border-rose-100">
                            2 Peringatan Baru
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-lg font-black text-slate-900 group-hover:text-blue-600 transition-colors">Log Viewer
                            Terintegrasi</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">
                            Pantau error aplikasi, kegagalan query, atau jejak audit sistem secara real-time tanpa perlu
                            membuka file manual di folder `storage/logs`.
                        </p>
                    </div>
                </div>
                <div class="pt-6 mt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                    <span>Status file: `laravel.log` (24 MB)</span>
                    <a href="#" class="font-bold text-rose-600 hover:underline">Buka Konsol &rarr;</a>
                </div>
            </div>

            <!-- MODUL 4: THIRDPARTY KEY MANAGEMENT -->
            <div
                class="bg-white p-6 rounded-3xl border border-slate-200/60 shadow-xs flex flex-col justify-between group hover:border-blue-500/40 hover:shadow-md transition-all duration-200">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-purple-50 text-purple-600 rounded-2xl">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.02 5.917l-4.2 4.2a.75.75 0 01-.53.22H5.25a.75.75 0 01-.75-.75V15.75c0-.198.079-.389.22-.53l.53-.53a.75.75 0 011.06 0l.53.53a.75.75 0 001.06 0l.53-.53a.75.75 0 011.06 0l.53.53a.75.75 0 001.06 0l2.21-2.21A6 6 0 0115.75 5.25z" />
                            </svg>
                        </div>
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-bold bg-purple-50 text-purple-700 border border-purple-100">
                            Terdekripsi Aman
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-lg font-black text-slate-900 group-hover:text-blue-600 transition-colors">
                            Third-Party Key Vault</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">
                            Tempat penyimpanan terenkripsi khusus untuk mengelola kredensial dan API Key pihak ketiga
                            (seperti Midtrans, RajaOngkir, AWS, Firebase, dll).
                        </p>
                    </div>
                </div>
                <div class="pt-6 mt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                    <span>4 Kredensial Tersimpan</span>
                    <a href="#" class="font-bold text-purple-600 hover:underline">Kelola Kunci &rarr;</a>
                </div>
            </div>

        </div>

        <!-- QUICK STATUS INFORMATION FOOTPRINT (REVISI) -->
        <div
            class="bg-linear-to-br from-blue-600 to-indigo-700 p-6 sm:p-8 rounded-3xl text-white flex flex-col md:flex-row justify-between items-start md:items-center gap-6 shadow-md relative overflow-hidden">
            <!-- Dekorasi Background Halus -->
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(255,255,255,0.08),transparent)] pointer-events-none">
            </div>

            <div class="space-y-2 max-w-xl z-10">
                <h4 class="font-black text-xl sm:text-2xl tracking-tight">Siap Membuat Proyek Kamu Sekarang?</h4>
                <p class="text-sm text-blue-100 leading-relaxed">
                    Unduh file master starterkit ini secara instan atau pelajari arsitektur kodenya terlebih dahulu melalui
                    panduan integrasi langkah demi langkah di halaman dokumentasi resmi kami.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto z-10 flex-shrink-0">
                <!-- Tombol Baca Dokumentasi -->
                <a href="{{ route('docs') }}"
                    class="inline-flex justify-center items-center gap-2 px-5 py-3 border border-white/30 hover:border-white/60 text-white font-bold text-xs rounded-xl transition-colors shadow-xs cursor-pointer text-center">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                    Baca Dokumentasi
                </a>

                <!-- Tombol Download Starterkit -->
                <a href="/download-starterkit"
                    class="inline-flex justify-center items-center gap-2 px-5 py-3 bg-white hover:bg-blue-50 text-blue-600 font-bold text-xs rounded-xl transition-colors shadow-sm hover:shadow-md cursor-pointer text-center">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    Download Starterkit
                </a>
            </div>
        </div>
    </div>
@endsection
