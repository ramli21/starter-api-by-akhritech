@extends('layouts.app')

@section('content')
    <div class="w-full min-h-[calc(100vh-9.4rem)] grid grid-cols-1 lg:grid-cols-2 ">

        <!-- SISI KIRI: Formulir Login -->
        <div class="flex flex-col justify-center px-6 py-12 sm:px-16 lg:px-24 bg-white relative">
            <!-- Tombol Kembali ke Beranda -->
            <div class="absolute top-8 left-6 sm:left-16 lg:left-24">
                <a href="/"
                    class="inline-flex items-center text-sm font-medium text-slate-500 hover:text-blue-600 transition-colors gap-2">
                    &larr; Kembali ke Beranda
                </a>
            </div>

            <div class="mx-auto w-full max-w-md space-y-8">
                <!-- Header Form -->
                <div class="space-y-2">
                    <h2 class="text-3xl font-black tracking-tight text-slate-900">Selamat datang kembali</h2>
                    <p class="text-sm text-slate-500">Silakan masukkan detail akun Anda untuk mengakses sistem.</p>
                </div>

                <!-- Form Masuk -->
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Input Email -->
                    <div class="space-y-1.5">
                        <label for="email" class="text-sm font-semibold text-slate-700">Alamat Email</label>
                        <input type="email" id="email" name="email" required autocomplete="email"
                            value="{{ old('email') }}" placeholder="nama@perusahaan.com"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-hidden focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10 transition-all text-sm @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Input Password -->
                    <div class="space-y-1.5">
                        <div class="flex justify-between items-center">
                            <label for="password" class="text-sm font-semibold text-slate-700">Kata Sandi</label>
                            {{-- <a href="#"
                                class="text-xs font-semibold text-blue-600 hover:text-blue-700 transition-colors">Lupa
                                Password?</a> --}}
                        </div>
                        <input type="password" id="password" name="password" required placeholder="••••••••"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-hidden focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10 transition-all text-sm @error('password') border-red-500 @enderror">
                        @error('password')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Opsi Ingat Saya -->
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember"
                            class="h-4 w-4 rounded-sm border-slate-300 text-blue-600 focus:ring-blue-500">
                        <label for="remember" class="ml-2 text-sm text-slate-600 select-none">Ingat perangkat ini</label>
                        {{-- @if (Route::has('password.request'))
                            <a class="text-sm text-blue-600 hover:underline"
                                href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                        @endif --}}
                    </div>

                    <!-- Tombol Submit -->
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-xl shadow-md hover:shadow-lg transition-all focus:outline-hidden focus:ring-4 focus:ring-blue-500/30 cursor-pointer text-sm">
                        Masuk Sekarang
                    </button>
                </form>
            </div>
        </div>

        <!-- SISI KANAN: Dekorasi Visual (Hanya muncul di layar Komputer / Large Screen) -->
        <div
            class="hidden lg:flex flex-col justify-between bg-linear-to-br from-blue-600 to-indigo-800 p-16 text-white relative overflow-hidden">
            <!-- Pola Dekoratif Abstrak Tailwind v4 -->
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.12),transparent)] -z-0">
            </div>

            <!-- Logo / Brand di sisi kanan -->
            <div class="z-10">
                <span class="text-2xl font-black tracking-wider">StarterAPI by <a href="https://akhritech.com"
                        target="_blank">Akhritech</a></span>
            </div>

            <!-- Teks Promosi / Kutipan -->
            <div class="space-y-4 z-10 max-w-lg">
                <h3 class="text-3xl font-bold leading-tight">Kelola infrastruktur API Anda dalam satu dasbor terintegrasi.
                </h3>
                <p class="text-blue-100/80 text-sm leading-relaxed">
                    Dilengkapi dengan sistem autentikasi JWT multi-role, enkripsi SQLite mutakhir, dan bundler super cepat
                    berbasis Vite 7.
                </p>
            </div>

            <!-- Info Versi Sistem -->
            <div class="z-10 flex gap-4 text-xs text-blue-200/60">
                <span>Starter Pack v2.1</span>
                <span>&bull;</span>
                <span>Laravel 11 / 12 Supported</span>
            </div>
        </div>

    </div>
@endsection
