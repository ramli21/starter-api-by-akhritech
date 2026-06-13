@extends('layouts.app')

@section('content')
    <div class="my-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 min-h-screen bg-white rounded-lg shadow shadow-md">

        <!-- HEADER HALAMAN -->
        <div class="border-b border-slate-150 pb-8 space-y-2">
            <h1 class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">Syarat dan Ketentuan</h1>
            <p class="text-sm text-slate-500">Terakhir diperbarui: 12 Juni 2026</p>
        </div>

        <!-- KONTEN UTAMA -->
        <div class="mt-8 space-y-8 text-slate-600 leading-relaxed text-sm sm:text-base">

            <!-- PENGUMUMAN STATUS GRATIS / LISENSI -->
            <div class="bg-blue-50 border border-blue-200 rounded-2xl p-5 flex gap-4 text-blue-900">
                <svg class="h-6 w-6 text-blue-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <div class="space-y-1">
                    <span class="font-black text-base block text-slate-900">Lisensi Open-Source & Gratis</span>
                    <p class="text-sm text-slate-600">
                        Akhritech API Starterkit ini bersifat **100% Free (Gratis)** dan open-source. Anda diizinkan penuh
                        untuk mengunduh, mengubah, menggabungkan, dan mendistribusikannya kembali baik untuk proyek personal
                        maupun komersial.
                    </p>
                </div>
            </div>

            <!-- SYARAT 1 -->
            <div class="space-y-3">
                <h3 class="text-lg font-black text-slate-900">1. Penggunaan yang Diizinkan</h3>
                <p>
                    Dengan mengunduh berkas *starterkit* ini, Anda diberikan hak tanpa batas untuk memodifikasi struktur
                    kode (Laravel 13, Tailwind CSS v4, SQLite, dll.) sesuai dengan kebutuhan arsitektur aplikasi yang sedang
                    Anda bangun.
                </p>
            </div>

            <!-- SYARAT 2 -->
            <div class="space-y-3">
                <h3 class="text-lg font-black text-slate-900">2. Pembatasan Tanggung Jawab (Disclaimer)</h3>
                <p>
                    Kode dalam proyek ini disediakan **"sebagaimana adanya" (as is)**, tanpa jaminan implisit maupun
                    eksplisit dalam bentuk apa pun. Tim pengembang tidak bertanggung jawab atas:
                </p>
                <ul class="list-disc pl-5 space-y-1.5 text-sm text-slate-500">
                    <li>Kebocoran data akibat kelalaian konfigurasi enkripsi API Key pihak ketiga (*Third-party Key Vault*).
                    </li>
                    <li>Kehilangan berkas database lokal SQLite karena kegagalan skrip otomatis *Backup/Restore*.</li>
                    <li>Segala bentuk kerugian material atau operasional server yang disebabkan oleh modifikasi kode
                        pasca-unduhan.</li>
                </ul>
            </div>

            <!-- SYARAT 3 -->
            <div class="space-y-3">
                <h3 class="text-lg font-black text-slate-900">3. Keamanan Environment Variabel</h3>
                <p>
                    Pengguna bertanggung jawab penuh untuk mengamankan kredensial sensitif di dalam file <code
                        class="bg-slate-100 text-rose-600 px-1 py-0.5 rounded font-mono text-xs">.env</code> dan berkas
                    <code class="bg-slate-100 text-rose-600 px-1 py-0.5 rounded font-mono text-xs">database.sqlite</code>.
                    Kami sangat menyarankan agar berkas database lokal tersebut dimasukkan ke dalam pengecualian Git (<code
                        class="bg-slate-100 text-slate-800 px-1 py-0.5 rounded font-mono text-xs">.gitignore</code>) demi
                    menjaga keamanan data di repositori publik.
                </p>
            </div>

            <!-- SYARAT 4 -->
            <div class="space-y-3">
                <h3 class="text-lg font-black text-slate-900">4. Atribusi Berbagi (Opsional)</h3>
                <p>
                    Meskipun *starterkit* ini gratis dan Anda tidak diwajibkan memberikan kredit atau mencantumkan hak cipta
                    Akhritech di aplikasi akhir Anda, kami akan sangat menghargai jika Anda bersedia memberikan kontribusi
                    balik berupa *star* atau umpan balik pada repositori pengembangan kami.
                </p>
            </div>

            <!-- TOMBOL KEMBALI / AKSI -->
            <div class="pt-8 border-t border-slate-150 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-xs text-slate-400 text-center sm:text-left">Dengan mengunduh produk ini, Anda dianggap
                    menyetujui seluruh ketentuan di atas.</p>
                <a href="/explore"
                    class="w-full sm:w-auto text-center bg-slate-900 hover:bg-slate-800 text-white font-bold px-6 py-3 rounded-xl text-xs transition-colors shadow-xs cursor-pointer">
                    Kembali ke Eksplorasi
                </a>
            </div>

        </div>
    </div>
@endsection
