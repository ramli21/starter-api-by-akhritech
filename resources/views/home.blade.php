@extends('layouts.app')

@section('content')
    <div class="p-4 sm:p-6 lg:p-8 max-w-7xl mx-auto space-y-8 bg-slate-50/50">

        <!-- 1. GREETING HEADER -->
        <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white p-6 rounded-3xl border border-slate-200/60 shadow-xs">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Sistem Aktif</span>
                </div>
                <h1 class="text-2xl font-black tracking-tight text-slate-900">Halo, {{ Auth::user()->name }}!</h1>
                <p class="text-sm text-slate-500">Pantau performa API dan metrik bisnis Anda dalam satu dasbor terpusat.</p>
            </div>
            <div class="flex items-center gap-3 w-full md:w-auto">
                <button
                    class="flex-1 md:flex-initial inline-flex justify-center items-center gap-2 bg-white border border-slate-200 text-slate-700 font-bold px-4 py-2.5 rounded-xl text-sm hover:bg-slate-50 transition-colors shadow-xs cursor-pointer">
                    <svg class="h-4 w-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    Unduh PDF
                </button>
                <button
                    class="flex-1 md:flex-initial inline-flex justify-center items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold px-4 py-2.5 rounded-xl text-sm transition-all shadow-md hover:shadow-lg cursor-pointer">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Buat Token API
                </button>
            </div>
        </div>

        <!-- 2. HIGH-IMPACT METRICS GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1: Ruang Penyimpanan / DB -->
            <div class="bg-white p-6 rounded-3xl border border-slate-200/60 shadow-xs space-y-4">
                <div class="flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Kapasitas SQLite</span>
                    <span class="text-xs font-bold text-blue-600 bg-blue-50 px-2.5 py-1 rounded-lg">84% Digunakan</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <h3 class="text-3xl font-black text-slate-900">4.2 GB</h3>
                    <span class="text-xs text-slate-400">dari 5.0 GB</span>
                </div>
                <!-- Progress Bar Murni Tailwind -->
                <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                    <div class="bg-blue-600 h-full rounded-full" style="width: 84%"></div>
                </div>
            </div>

            <!-- Card 2: Beban Request Server -->
            <div class="bg-white p-6 rounded-3xl border border-slate-200/60 shadow-xs space-y-4">
                <div class="flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Hits API</span>
                    <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-lg">+28%
                        Mingguan</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <h3 class="text-3xl font-black text-slate-900">142.805</h3>
                    <span class="text-xs text-slate-400">requests</span>
                </div>
                <!-- Mini visual grafik batang -->
                <div class="flex items-end gap-1.5 h-3 pt-1">
                    <div class="bg-slate-200 h-1/2 w-full rounded-xs"></div>
                    <div class="bg-slate-200 h-2/3 w-full rounded-xs"></div>
                    <div class="bg-slate-200 h-1/3 w-full rounded-xs"></div>
                    <div class="bg-blue-500 h-full w-full rounded-xs"></div>
                </div>
            </div>

            <!-- Card 3: Kecepatan Rata-rata -->
            <div
                class="bg-white p-6 rounded-3xl border border-slate-200/60 shadow-xs space-y-4 sm:col-span-2 lg:col-span-1">
                <div class="flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Waktu Respons</span>
                    <span class="text-xs font-bold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded-lg">Sangat Cepat</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <h3 class="text-3xl font-black text-slate-900">45 ms</h3>
                    <span class="text-xs text-slate-400">rata-rata global</span>
                </div>
                <p class="text-xs text-slate-400 flex items-center gap-1">
                    <svg class="h-3.5 w-3.5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    Optimal dioptimasi oleh Vite 7
                </p>
            </div>
        </div>

        <!-- 3. SPLIT WORKSPACE TWO-COLUMNS Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- KOLOM KIRI (Lebar 2/3): TABEL UTAMA -->
            <div class="lg:col-span-2 bg-white rounded-3xl border border-slate-200/60 shadow-xs overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                    <div>
                        <h2 class="text-lg font-black text-slate-900">Pengguna Terdaftar</h2>
                        <p class="text-xs text-slate-400">Daftar entitas user autentikasi aktif.</p>
                    </div>
                    <a href="{{ route('sumin.users.index') }}"
                        class="text-xs font-bold text-blue-600 hover:underline cursor-pointer">Lihat Semua</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr
                                class="bg-slate-50 border-b border-slate-100 text-slate-400 text-xs font-bold uppercase tracking-wider">
                                <th class="px-6 py-4">Profil</th>
                                <th class="px-6 py-4">Hak Akses</th>
                                <th class="px-6 py-4">Bergabung</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            @forelse($users as $user)
                                @php
                                    $parts = preg_split('/\s+/', trim($user->name));
                                    $initials = strtoupper(
                                        collect($parts)->map(fn($p) => substr($p, 0, 1))->take(2)->join(''),
                                    );
                                    $role = $user->role ?? 'user';
                                @endphp
                                <tr class="hover:bg-slate-50/50 transition-colors">
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <div
                                            class="h-9 w-9 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white font-black text-xs flex items-center justify-center shadow-xs">
                                            {{ $initials }}
                                        </div>
                                        <div>
                                            <span class="font-bold text-slate-800 block">{{ $user->name }}</span>
                                            <span class="text-xs text-slate-400">{{ $user->email }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($role === 'superadmin')
                                            <span
                                                class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-700 border border-blue-100">Super
                                                Admin</span>
                                        @elseif($role === 'admin')
                                            <span
                                                class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700 border border-emerald-100">Admin</span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-bold bg-slate-50 text-slate-700 border border-slate-100">User</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-slate-400 text-xs">
                                        {{ optional($user->created_at)->diffForHumans() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-8 text-center text-sm text-slate-400">Belum ada
                                        pengguna.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="p-4 border-t bg-white">
                    {{ $users->onEachSide(1)->links() }}
                </div>
            </div>

            <!-- KOLOM KANAN (Lebar 1/3): TIMELINE AKTIVITAS (LOG) -->
            <div class="bg-white p-6 rounded-3xl border border-slate-200/60 shadow-xs space-y-6">
                <div>
                    <h2 class="text-lg font-black text-slate-900">Log Aktivitas</h2>
                    <p class="text-xs text-slate-400">Riwayat kejadian sistem terakhir.</p>
                </div>

                <!-- Alur Timeline Medis/Modern -->
                <div
                    class="relative pl-6 space-y-6 before:absolute before:left-2 before:top-2 before:bottom-2 before:w-0.5 before:bg-slate-100">
                    <!-- Log item 1 -->
                    <div class="relative">
                        <span
                            class="absolute -left-[22px] top-1.5 h-3 w-3 rounded-full bg-blue-600 ring-4 ring-blue-50"></span>
                        <p class="text-xs font-bold text-slate-800">Database Seeding Berhasil</p>
                        <p class="text-xs text-slate-400 mt-1">Semua seeders selesai tanpa error —
                            {{ now()->subMinutes(5)->diffForHumans() }}</p>
                    </div>

                    <!-- Log item 2 -->
                    <div class="relative">
                        <span
                            class="absolute -left-[22px] top-1.5 h-3 w-3 rounded-full bg-emerald-500 ring-4 ring-emerald-50"></span>
                        <p class="text-xs font-bold text-slate-800">Token API Dibuat</p>
                        <p class="text-xs text-slate-400 mt-1">User <span class="font-medium">mitra@akhritech.com</span>
                            membuat token — {{ now()->subHours(1)->diffForHumans() }}</p>
                    </div>

                    <!-- Log item 3 -->
                    <div class="relative">
                        <span
                            class="absolute -left-[22px] top-1.5 h-3 w-3 rounded-full bg-rose-500 ring-4 ring-rose-50"></span>
                        <p class="text-xs font-bold text-slate-800">Gagal Login Berulang</p>
                        <p class="text-xs text-slate-400 mt-1">IP 192.168.1.23 diblokir sementara —
                            {{ now()->subHours(3)->diffForHumans() }}</p>
                    </div>

                    <!-- Log item 4 -->
                    <div class="relative">
                        <span
                            class="absolute -left-[22px] top-1.5 h-3 w-3 rounded-full bg-indigo-500 ring-4 ring-indigo-50"></span>
                        <p class="text-xs font-bold text-slate-800">Backup Database Selesai</p>
                        <p class="text-xs text-slate-400 mt-1">Backup mingguan berhasil dibuat —
                            {{ now()->subDays(1)->diffForHumans() }}</p>
                    </div>

                    <!-- Log item 5 -->
                    <div class="relative">
                        <span
                            class="absolute -left-[22px] top-1.5 h-3 w-3 rounded-full bg-yellow-500 ring-4 ring-yellow-50"></span>
                        <p class="text-xs font-bold text-slate-800">Pengguna Baru Terdaftar</p>
                        <p class="text-xs text-slate-400 mt-1">User <span class="font-medium">novice@example.com</span>
                            mendaftar — {{ now()->subDays(2)->diffForHumans() }}</p>
                    </div>

                    <!-- Log item 6 -->
                    <div class="relative">
                        <span
                            class="absolute -left-[22px] top-1.5 h-3 w-3 rounded-full bg-slate-500 ring-4 ring-slate-50"></span>
                        <p class="text-xs font-bold text-slate-800">Pembaruan Konfigurasi</p>
                        <p class="text-xs text-slate-400 mt-1">Perubahan rate limit diterapkan oleh admin —
                            {{ now()->subDays(3)->diffForHumans() }}</p>
                    </div>

                    <!-- Log item 7 -->
                    <div class="relative">
                        <span
                            class="absolute -left-[22px] top-1.5 h-3 w-3 rounded-full bg-emerald-500 ring-4 ring-emerald-50"></span>
                        <p class="text-xs font-bold text-slate-800">SSL Certificate Renewed</p>
                        <p class="text-xs text-slate-400 mt-1">Sertifikat diperbarui secara otomatis —
                            {{ now()->subDays(7)->diffForHumans() }}</p>
                    </div>

                    <!-- Log item 8 -->
                    <div class="relative">
                        <span
                            class="absolute -left-[22px] top-1.5 h-3 w-3 rounded-full bg-blue-600 ring-4 ring-blue-50"></span>
                        <p class="text-xs font-bold text-slate-800">Cron Job: Cleanup Cache</p>
                        <p class="text-xs text-slate-400 mt-1">Cache lama dibersihkan —
                            {{ now()->subDays(10)->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
