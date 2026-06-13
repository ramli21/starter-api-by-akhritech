<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Starter API</title>

    <!-- Memanggil Aset CSS dan JS lewat Vite -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    </link>
</head>

<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Brand / Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-xl font-bold text-blue-600 tracking-wider">
                        <i class="fas fa-rocket"></i> StarterAPI
                    </a>
                </div>

                <!-- Menu Akses / Login -->
                <div class="flex items-center gap-4">
                    <a href="{{ route('explore') }}"
                        class="px-3 py-2 rounded-md text-sm {{ request()->routeIs('explore') ? 'text-blue-600 bg-blue-50 font-semibold' : 'text-slate-700 hover:text-blue-600' }}"
                        @if (request()->routeIs('explore')) aria-current="page" @endif>Explore</a>

                    <a href="{{ route('docs') }}"
                        class="px-3 py-2 rounded-md text-sm {{ request()->routeIs('docs') ? 'text-blue-600 bg-blue-50 font-semibold' : 'text-slate-700 hover:text-blue-600' }}"
                        @if (request()->routeIs('docs')) aria-current="page" @endif>Docs</a>

                    @auth
                        <span class="h-6 w-px bg-gray-700" aria-hidden="true"></span>

                        <a href="{{ route('sumin.home') }}"
                            class="px-3 py-2 rounded-md text-sm {{ request()->routeIs('sumin.home') ? 'text-blue-600 bg-blue-50 font-semibold' : 'text-slate-700 hover:text-blue-600' }}"
                            @if (request()->routeIs('sumin.home')) aria-current="page" @endif>Dashboard</a>

                        <a href="{{ route('sumin.users.index') }}"
                            class="px-3 py-2 rounded-md text-sm {{ request()->routeIs('sumin.users.*') ? 'text-blue-600 bg-blue-50 font-semibold' : 'text-slate-700 hover:text-blue-600' }}"
                            @if (request()->routeIs('sumin.users.*')) aria-current="page" @endif>Users</a>
                    @endauth


                    @guest
                        @if (Route::has('login'))
                            <a class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors border border-slate-200 px-3 py-1 rounded-lg"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif
                    @else
                        <div class="relative inline-block text-left" id="dropdown-wrapper">
                            <!-- Tombol Pemicu Dropdown -->
                            <button type="button"
                                class="inline-flex items-center gap-1.5 px-3 py-2 text-sm font-semibold text-slate-700 hover:text-blue-600 bg-slate-50 hover:bg-slate-100 rounded-xl transition-all cursor-pointer border border-slate-200"
                                id="dropdown-button" aria-expanded="false" aria-haspopup="true">

                                <span>{{ Auth::user()->name }}</span>

                                <!-- Icon Panah (Chevron) -->
                                <svg class="h-4 w-4 text-slate-400 transition-transform duration-200" id="dropdown-arrow"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>

                            <!-- Panel Menu Dropdown -->
                            <div class="absolute right-0 mt-2 w-48 rounded-xl bg-white border border-slate-150 shadow-xl opacity-0 scale-95 pointer-events-none transition-all duration-150 origin-top-right z-50"
                                id="user-menu" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">

                                <div class="py-1 px-1" role="none">
                                    <!-- Pilihan Menu Logout -->
                                    <a class="flex items-center gap-2 w-full px-3 py-2.5 text-sm font-medium text-rose-600 hover:bg-rose-50 rounded-lg transition-colors cursor-pointer"
                                        role="menuitem" href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                        <!-- Icon Keluar (Optional) -->
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6A2.25 2.25 0 0 0 5.25 5.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                                        </svg>

                                        <span>{{ __('Logout') }}</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Form Logout Hidden -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    {{-- Toast notifications (session flashes & validation) --}}
    @if (session('success') || session('error') || (isset($errors) && $errors->any()))
        <div id="toast-container" class="fixed top-5 right-5 z-50 flex flex-col items-end gap-3">
            @if (session('success'))
                <div role="status" aria-live="polite"
                    class="toast inline-flex items-start gap-3 max-w-sm w-full bg-emerald-50 border border-emerald-100 text-emerald-800 px-4 py-3 rounded-lg shadow-lg transition transform duration-200">
                    <div class="flex-shrink-0 mt-0.5">
                        <svg class="h-5 w-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="flex-1 text-sm">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="toast-close text-slate-500 hover:text-slate-700">&times;</button>
                </div>
            @endif

            @if (session('error'))
                <div role="status" aria-live="polite"
                    class="toast inline-flex items-start gap-3 max-w-sm w-full bg-rose-50 border border-rose-100 text-rose-800 px-4 py-3 rounded-lg shadow-lg transition transform duration-200">
                    <div class="flex-shrink-0 mt-0.5">
                        <svg class="h-5 w-5 text-rose-600" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <div class="flex-1 text-sm">
                        {{ session('error') }}
                    </div>
                    <button type="button" class="toast-close text-slate-500 hover:text-slate-700">&times;</button>
                </div>
            @endif

            @if (isset($errors) && $errors->any())
                <div role="status" aria-live="polite"
                    class="toast inline-flex items-start gap-3 max-w-sm w-full bg-rose-50 border border-rose-100 text-rose-800 px-4 py-3 rounded-lg shadow-lg transition transform duration-200">
                    <div class="flex-shrink-0 mt-0.5">
                        <svg class="h-5 w-5 text-rose-600" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <div class="flex-1 text-sm">
                        {{ $errors->first() }}
                    </div>
                    <button type="button" class="toast-close text-slate-500 hover:text-slate-700">&times;</button>
                </div>
            @endif
        </div>
    @endif

    <!-- Konten Utama -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div>
                    <p class="text-sm">&copy; {{ date('Y') }} StarterAPI by <a
                            class="text-blue-500 hover:text-blue-400 transition-colors" target="_blank"
                            href="https://akhritech.com">Akhritech</a>.</p>
                </div>
                <div class="flex gap-6 text-sm">
                    <a href="{{ route('explore') }}" class="hover:text-white transition-colors">Explore</a>
                    <a href="{{ route('docs') }}" class="hover:text-white transition-colors">Docs</a>
                    <a href="https://akhritech.com/#contact" class="hover:text-white transition-colors">Kontak</a>
                    <a href="{{ route('terms') }}" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const wrapper = document.getElementById('dropdown-wrapper');
            const button = document.getElementById('dropdown-button');
            const menu = document.getElementById('user-menu');
            const arrow = document.getElementById('dropdown-arrow');

            function toggleDropdown() {
                const isExpanded = button.getAttribute('aria-expanded') === 'true';

                if (isExpanded) {
                    // Tutup Menu
                    button.setAttribute('aria-expanded', 'false');
                    menu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                    arrow.classList.remove('rotate-180');
                } else {
                    // Buka Menu
                    button.setAttribute('aria-expanded', 'true');
                    menu.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
                    arrow.classList.add('rotate-180');
                }
            }

            // Event saat tombol diklik
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleDropdown();
            });

            // Tutup otomatis jika pengguna mengklik area luar dropdown
            document.addEventListener('click', (e) => {
                if (!wrapper.contains(e.target)) {
                    button.setAttribute('aria-expanded', 'false');
                    menu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                    arrow.classList.remove('rotate-180');
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const openBtn = document.getElementById('sidebar-open');
            const closeBtn = document.getElementById('sidebar-close');
            const sidebar = document.getElementById('sumin-sidebar');

            if (!sidebar) return;

            function openSidebar() {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                // prevent body scroll on mobile when open
                document.body.classList.add('overflow-hidden');
            }

            function closeSidebar() {
                sidebar.classList.remove('translate-x-0');
                sidebar.classList.add('-translate-x-full');
                document.body.classList.remove('overflow-hidden');
            }

            if (openBtn) {
                openBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    openSidebar();
                });
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    closeSidebar();
                });
            }

            // Close when clicking outside on small screens
            document.addEventListener('click', (e) => {
                if (!sidebar.contains(e.target) && !openBtn?.contains(e.target) && window.innerWidth <
                    768) {
                    closeSidebar();
                }
            });
        });
    </script>
    <script>
        // Toast auto-close handling (3 seconds)
        document.addEventListener('DOMContentLoaded', () => {
            const toasts = document.querySelectorAll('#toast-container .toast');
            if (!toasts || toasts.length === 0) return;

            toasts.forEach((t) => {
                // Auto close after 3s
                const timeout = setTimeout(() => {
                    t.classList.add('opacity-0', 'scale-95');
                    setTimeout(() => t.remove(), 250);
                }, 3000);

                // Manual close
                const closeBtn = t.querySelector('.toast-close');
                if (closeBtn) {
                    closeBtn.addEventListener('click', (e) => {
                        e.preventDefault();
                        clearTimeout(timeout);
                        t.classList.add('opacity-0', 'scale-95');
                        setTimeout(() => t.remove(), 150);
                    });
                }
            });
        });
    </script>
</body>

</html>
