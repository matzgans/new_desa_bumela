<header class="sticky inset-0 z-50 my-0 h-16 border-b border-slate-100 bg-primary backdrop-blur-lg sm:fixed">
    <nav class="mx-auto flex max-w-6xl gap-8 px-6 py-3 transition-all duration-200 ease-in-out lg:px-12">
        <div class="relative flex items-center">
            <a href="/">
                <img class="transition-transform duration-200 hover:scale-105"
                    src="{{ asset('landing/images/logo-kabgor.png') }}" style="color:transparent" loading="lazy"
                    width="32" height="32">
            </a>
        </div>
        <!-- Menu untuk Desktop -->
        <ul class="hidden items-center justify-center gap-6 md:flex">
            <li
                class="font-dm pt-1.5 text-sm font-medium text-white transition-colors duration-200 hover:text-secondary">
                <a href="{{ route('landing.profile') }}">Profil Desa</a>
            </li>
            <li
                class="font-dm pt-1.5 text-sm font-medium text-white transition-colors duration-200 hover:text-secondary">
                <a href="{{ route('landing.article') }}">Artikel Desa</a>
            </li>
            <li
                class="font-dm pt-1.5 text-sm font-medium text-white transition-colors duration-200 hover:text-secondary">
                <a href="{{ route('landing.data') }}">Data Statistik Desa</a>
            </li>
            <li
                class="font-dm pt-1.5 text-sm font-medium text-white transition-colors duration-200 hover:text-secondary">
                <a href="{{ route('documents.index') }}">Penyuratan</a>
            </li>
        </ul>
        <div class="flex-grow"></div>
        <!-- Tombol Login untuk Desktop -->
        <div class="hidden items-center justify-center gap-6 md:flex">
            <a class="font-dm rounded-md bg-secondary bg-gradient-to-br px-3 py-1.5 text-sm font-medium text-white shadow-md transition-transform duration-200 ease-in-out hover:scale-105 hover:shadow-lg"
                href="{{ route('login') }}">
                Login
            </a>
        </div>
        <!-- Tombol Menu untuk Mobile -->
        <div class="relative flex items-center justify-center md:hidden">
            <button class="transition-transform duration-200 hover:scale-105" id="mobile-menu-toggle" type="button">
                <svg class="h-6 w-auto text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </button>
        </div>
    </nav>
    <!-- Menu Dropdown untuk Mobile -->
    <div class="absolute left-0 top-full hidden w-full bg-gray-800 text-white md:hidden" id="mobile-menu">
        <ul class="flex flex-col gap-4 p-4">
            <li class="font-dm pt-1.5 text-sm font-medium transition-colors duration-200 hover:text-secondary">
                <a href="{{ route('landing.profile') }}">Profil Desa</a>
            </li>
            <li class="font-dm pt-1.5 text-sm font-medium transition-colors duration-200 hover:text-secondary">
                <a href="{{ route('landing.article') }}">Artikel Desa</a>
            </li>
            <li class="font-dm pt-1.5 text-sm font-medium transition-colors duration-200 hover:text-secondary">
                <a href="{{ route('landing.data') }}">Data Statistik Desa</a>
            </li>
            <li class="font-dm pt-1.5 text-sm font-medium transition-colors duration-200 hover:text-secondary">
                <a href="{{ route('documents.index') }}">Penyuratan</a>
            </li>
            <li class="font-dm pt-1.5 text-sm font-medium transition-colors duration-200 hover:text-secondary">
                <a href="{{ route('login') }}">Login</a>
            </li>
        </ul>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.getElementById("mobile-menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");

        toggleButton.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });
    });
</script>
