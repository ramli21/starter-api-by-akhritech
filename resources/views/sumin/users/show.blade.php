@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-8 px-4">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold">Detail Pengguna</h1>
            <a href="{{ route('sumin.users.index') }}" class="text-sm text-slate-600 hover:text-slate-800">&larr; Kembali ke
                daftar</a>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 p-6 shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <div class="flex items-center gap-4">
                    @php
                        $parts = preg_split('/\s+/', trim($user->name));
                        $initials = strtoupper(collect($parts)->map(fn($p) => substr($p, 0, 1))->take(2)->join(''));
                    @endphp
                    <div
                        class="h-16 w-16 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white flex items-center justify-center text-xl font-black shadow-xs">
                        {{ $initials }}</div>
                    <div>
                        <div class="text-lg font-bold text-slate-900">{{ $user->name }}</div>
                        <div class="text-sm text-slate-500">{{ $user->email }}</div>
                    </div>
                </div>

                <div class="md:col-span-2 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex items-center gap-3">
                        @if ($user->role === 'superadmin')
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-sm font-semibold border border-blue-100">Super
                                Admin</span>
                        @elseif($user->role === 'admin')
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-sm font-semibold border border-emerald-100">Admin</span>
                        @else
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full bg-slate-50 text-slate-700 text-sm font-semibold border border-slate-100">User</span>
                        @endif

                        <div class="text-sm text-slate-500">ID: <span
                                class="font-mono text-xs text-slate-600">{{ $user->getKey() }}</span></div>
                    </div>

                    <div class="flex items-center gap-3">
                        <a href="{{ route('sumin.users.edit', $user) }}"
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 text-sm font-semibold">Edit</a>

                        <form action="{{ route('sumin.users.destroy', $user) }}" method="POST"
                            onsubmit="return confirm('Hapus pengguna ini? Aksi tidak dapat dibatalkan.');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-rose-50 text-rose-600 border border-rose-100 text-sm font-semibold">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="p-4 bg-slate-50 rounded-lg">
                    <div class="text-xs text-slate-400">Bergabung</div>
                    <div class="text-sm font-semibold text-slate-800">
                        {{ optional($user->created_at)->format('d M Y, H:i') }}</div>
                    <div class="text-xs text-slate-400">({{ optional($user->created_at)->diffForHumans() }})</div>
                </div>

                <div class="p-4 bg-slate-50 rounded-lg">
                    <div class="text-xs text-slate-400">Terakhir Diupdate</div>
                    <div class="text-sm font-semibold text-slate-800">
                        {{ optional($user->updated_at)->format('d M Y, H:i') }}</div>
                    <div class="text-xs text-slate-400">({{ optional($user->updated_at)->diffForHumans() }})</div>
                </div>
            </div>

            @if ($user->email_verified_at)
                <div
                    class="mt-6 text-sm text-emerald-700 bg-emerald-50 inline-block px-3 py-2 rounded-lg border border-emerald-100">
                    Email Terverifikasi pada {{ $user->email_verified_at->format('d M Y, H:i') }}</div>
            @endif
        </div>
    </div>
@endsection
