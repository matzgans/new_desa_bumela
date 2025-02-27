<x-landing-layout>
    <div class="relative mb-10 mt-0 w-full" id="controls-carousel" data-carousel="dynamic">
        <!-- Carousel wrapper -->
        <div class="relative h-[500px] overflow-hidden rounded-lg bg-gray-200 md:h-[700px] lg:h-[900px]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="flex h-full flex-col items-center md:flex-row">
                    <!-- Image -->
                    {{-- <img class="block h-1/2 w-full object-contain md:h-full md:w-1/2 md:object-cover"
                        src="{{ asset('landing/images/kepala-desa.png') }}" alt="..."> --}}
                    @if ($kepala_desa->staff_photo == 'kepala-desa.png')
                        <img class="block h-1/2 w-full object-contain md:h-full md:w-1/2 md:object-cover"
                            src="{{ asset('landing/images/kepala-desa.png') }}" alt="Kepala Desa">
                    @else
                        <img class="block h-1/2 w-full object-contain md:h-full md:w-1/2 md:object-cover"
                            src="{{ asset('structure/staff_profile/' . $kepala_desa->staff_photo) }}" alt="Kepala Desa">
                    @endif


                    <!-- Text Content -->
                    <div class="w-full bg-gray-200/50 p-4 md:w-1/2 md:p-8">
                        <h1
                            class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-black md:text-5xl lg:text-6xl">
                            Selamat Datang Di Website Resmi Desa {{ config('app.name') }}
                        </h1>
                        <p class="mb-6 text-justify text-sm font-normal text-black md:text-lg lg:text-xl">
                            {{ $content->sambutan_pertama }}
                        </p>
                        <a class="inline-flex items-center justify-center rounded-lg bg-black px-4 py-2 text-center text-sm font-medium text-white hover:bg-gray-500 focus:ring-4 focus:ring-blue-300 md:px-5 md:py-3 md:text-base dark:focus:ring-blue-900"
                            href="/profiles">
                            Visi Misi
                            <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            @foreach ($recomendationArticles as $article)
                <div class="hidden duration-700 ease-in-out" data-carousel-item = "active">
                    <div class="relative h-full w-full overflow-hidden">
                        <!-- Image with continuous zoom animation -->
                        <img class="block h-full w-full transform animate-zoomInOut object-cover"
                            src="{{ asset('article/thumb/' . $article->thumbnail) }}" alt="..." loading="lazy">

                        <!-- Text Content (Positioned bottom-left) -->
                        <div
                            class="absolute bottom-0 left-0 w-full bg-gray-800/60 p-4 text-white md:w-auto md:p-8 lg:bottom-10 lg:left-10">
                            <h1 class="mb-2 text-lg font-extrabold leading-none tracking-tight md:text-4xl lg:text-7xl">
                                {{ $article->title }}
                            </h1>
                            <p class="mb-4 text-sm font-normal md:text-lg">
                                {{ Str::limit($article->content, 100) }}
                            </p>
                            <a class="inline-flex items-center justify-center rounded-lg bg-black px-4 py-2 text-sm font-medium hover:bg-gray-500 md:text-base"
                                href="{{ route('article.detail', ['slug' => $article->slug]) }}">
                                Baca Selengkapnya
                                <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>
        <!-- Slider controls -->
        <button
            class="group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
            data-carousel-prev type="button">
            <span
                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                <svg class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button
            class="group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
            data-carousel-next type="button">
            <span
                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                <svg class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="container mx-auto max-w-screen-xl overflow-x-hidden px-4 text-gray-700 lg:px-8">
        <!-- trusted by -->
        <div class="mx-auto max-w-4xl">
            <h1 class="mb-3 text-center font-medium text-gray-400">Bekerja Sama Dengan</h1>
            <div class="flex justify-center gap-20 overflow-auto pt-10">
                <img class="h-32" src="{{ asset('landing/images/logo-gorut.png') }}">
            </div>
        </div>
    </div>


    <div class="mx-auto max-w-7xl px-4 py-12">
        <div class="flex flex-col items-center gap-8 md:flex-row">
            <!-- Image Section -->
            <div class="w-full md:w-1/3">
                {{-- {{ $kepala_desa }} --}}
                @if ($kepala_desa->staff_photo == 'kepala-desa.png')
                    <img class="w-full rounded-lg object-cover shadow-lg"
                        src="{{ asset('landing/images/' . $kepala_desa->staff_photo) }}" alt="Kepala Desa">
                @else
                    <img class="w-full rounded-lg object-cover shadow-lg"
                        src="{{ asset('structure/staff_profile/' . $kepala_desa->staff_photo) }}" alt="Kepala Desa">
                @endif
            </div>

            <!-- Content Section -->
            <div class="w-full space-y-6 md:w-2/3">
                <!-- Quote Mark -->
                <div class="font-serif text-8xl leading-none text-gray-300">"</div>

                <!-- Welcome Text -->
                <div class="text-justify text-lg leading-relaxed text-gray-700">
                    {{ $content->sambutan_kedua }}
                </div>

                <!-- Signature -->
                <div class="space-y-2">
                    @foreach ($currentVillageHead as $head)
                        <div class="font-script text-2xl text-gray-800"> {{ $head->staff_name }}
                        </div>
                        <div class="text-sm font-semibold uppercase tracking-wider text-gray-600">KEPALA DESA
                            {{ config('app.name') }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- data --}}

    <div class="bg-black px-20 pb-20 pt-5">
        <div class="mt-16 text-center" data-aos="zoom-in">
            <h1 class="text-darken text-2xl font-semibold text-white">Data Desa <span
                    class="text-white">{{ config('app.name') }}</span>
            </h1>
            <p class="my-5 text-gray-100 lg:px-96">
                {{ $content->deskripsi_data_desa }}
            </p>
        </div>
        <div class="mx-10 mb-8 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="shadow-xs min-w-0 overflow-hidden rounded-lg bg-gray-200 dark:bg-gray-800">
                <div class="flex items-center p-4">
                    <div
                        class="mr-4 rounded-full bg-orange-100 p-3 text-orange-500 dark:bg-orange-500 dark:text-orange-100">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Penduduk
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $residentCount }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="shadow-xs min-w-0 overflow-hidden rounded-lg bg-gray-200 dark:bg-gray-800">
                <div class="flex items-center p-4">
                    <div class="mr-4 rounded-full bg-blue-100 p-3 text-blue-500 dark:bg-blue-500 dark:text-blue-100">
                        <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Dusun
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $villageCount }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="shadow-xs min-w-0 overflow-hidden rounded-lg bg-gray-200 dark:bg-gray-800">
                <div class="flex items-center p-4">
                    <div
                        class="mr-4 rounded-full bg-green-100 p-3 text-green-500 dark:bg-green-500 dark:text-green-100">
                        <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Laki Laki
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $manCount }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="shadow-xs min-w-0 overflow-hidden rounded-lg bg-gray-200 dark:bg-gray-800">
                <div class="flex items-center p-4">
                    <div class="mr-4 rounded-full bg-pink-100 p-3 text-pink-500 dark:bg-pink-500 dark:text-pink-100">
                        <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Perempuan
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $womanCount }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="mt-16 text-center" data-aos="zoom-in">
            <a class="text-darken text-2xl font-semibold text-white underline"
                href="{{ route('landing.data') }}">Selengkapnya >
            </a>

        </div>
    </div>



    <div class="mt-16 text-center" data-aos="zoom-in">
        <h1 class="text-darken text-2xl font-semibold">SOTK</h1>
        <p class="my-5 text-gray-500 lg:px-96">
            Struktur Organisasi dan Tata Kerja Pemerintah Desa {{ config('app.name') }} kecamatan Bilato, Kabupaten
            Gorontalo Utara, Gorontalo, Indonesia.
        </p>

        <!-- Card Wrapper -->
        <div class="flex flex-wrap justify-center gap-6">
            <!-- Kepala Desa Card -->
            @foreach ($currentVillageHead as $head)
                <div
                    class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
                    <img class="h-96 w-full rounded-t-lg object-cover"
                        src="{{ asset($head->staff_photo === 'kepala-desa.png' ? 'landing/images/kepala-desa.png' : 'structure/staff_profile/' . $head->staff_photo) }}"
                        alt="Foto Kepala Desa" />

                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $head->staff_name }}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kepala Desa</p>
                    </div>
                </div>
            @endforeach


            <!-- Karyawan Lainnya Card -->
            @foreach ($employees as $employee)
                <div
                    class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
                    <img class="h-96 w-full rounded-t-lg object-cover"
                        src="{{ asset($employee->staff_photo === 'kepala-desa.png' ? 'landing/images/kepala-desa.png' : 'structure/staff_profile/' . $employee->staff_photo) }}"
                        alt="Foto Aparat Desa" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $employee->staff_name }}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $employee->position }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    {{-- artikel --}}
    @if ($articles->count() > 0)
        <div class="mt-16 text-center" data-aos="zoom-in">
            <h1 class="text-darken text-2xl font-semibold">Artikel</h1>
            <p class="my-5 text-justify text-gray-500 lg:px-96">
                {{ $content->artikel }}
            </p>
        </div>
    @endif
    <div class="mx-auto max-w-screen-xl p-5 sm:p-10 md:p-16">
        @if ($articles->count() > 0)
            <div class="mb-5 flex justify-between border-b text-sm">
                <div class="flex items-center border-b-2 border-indigo-600 pb-2 pr-2 uppercase text-indigo-600">
                    <svg class="mr-3 h-6" id="Capa_1" style="enable-background:new 0 0 455.005 455.005;"
                        version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 455.005 455.005" xml:space="preserve">
                        <g>
                            <path
                                d="M446.158,267.615c-5.622-3.103-12.756-2.421-19.574,1.871l-125.947,79.309c-3.505,2.208-4.557,6.838-2.35,10.343 c2.208,3.505,6.838,4.557,10.343,2.35l125.947-79.309c2.66-1.675,4.116-1.552,4.331-1.432c0.218,0.12,1.096,1.285,1.096,4.428 c0,8.449-6.271,19.809-13.42,24.311l-122.099,76.885c-6.492,4.088-12.427,5.212-16.284,3.084c-3.856-2.129-6.067-7.75-6.067-15.423 c0-19.438,13.896-44.61,30.345-54.967l139.023-87.542c2.181-1.373,3.503-3.77,3.503-6.347s-1.323-4.974-3.503-6.347L184.368,50.615 c-2.442-1.538-5.551-1.538-7.993,0L35.66,139.223C15.664,151.815,0,180.188,0,203.818v4c0,23.63,15.664,52.004,35.66,64.595 l209.292,131.791c3.505,2.207,8.136,1.154,10.343-2.35c2.207-3.505,1.155-8.136-2.35-10.343L43.653,259.72 C28.121,249.941,15,226.172,15,207.818v-4c0-18.354,13.121-42.122,28.653-51.902l136.718-86.091l253.059,159.35l-128.944,81.196 c-20.945,13.189-37.352,42.909-37.352,67.661c0,13.495,4.907,23.636,13.818,28.555c3.579,1.976,7.526,2.956,11.709,2.956 c6.231,0,12.985-2.176,19.817-6.479l122.099-76.885c11.455-7.213,20.427-23.467,20.427-37.004 C455.004,277.119,451.78,270.719,446.158,267.615z">
                            </path>
                            <path
                                d="M353.664,232.676c2.492,0,4.928-1.241,6.354-3.504c2.207-3.505,1.155-8.136-2.35-10.343l-173.3-109.126 c-3.506-2.207-8.136-1.154-10.343,2.35c-2.207,3.505-1.155,8.136,2.35,10.343l173.3,109.126 C350.916,232.303,352.298,232.676,353.664,232.676z">
                            </path>
                            <path
                                d="M323.68,252.58c2.497,0,4.938-1.246,6.361-3.517c2.201-3.509,1.14-8.138-2.37-10.338L254.46,192.82 c-3.511-2.202-8.139-1.139-10.338,2.37c-2.201,3.51-1.14,8.138,2.37,10.338l73.211,45.905 C320.941,252.21,322.318,252.58,323.68,252.58z">
                            </path>
                            <path
                                d="M223.903,212.559c-3.513-2.194-8.14-1.124-10.334,2.39c-2.194,3.514-1.124,8.14,2.39,10.334l73.773,46.062 c1.236,0.771,2.608,1.139,3.965,1.139c2.501,0,4.947-1.251,6.369-3.529c2.194-3.514,1.124-8.14-2.39-10.334L223.903,212.559z">
                            </path>
                            <path
                                d="M145.209,129.33l-62.33,39.254c-2.187,1.377-3.511,3.783-3.503,6.368s1.345,4.983,3.54,6.348l74.335,46.219 c1.213,0.754,2.586,1.131,3.96,1.131c1.417,0,2.833-0.401,4.071-1.201l16.556-10.7c3.479-2.249,4.476-6.891,2.228-10.37 c-2.248-3.479-6.891-4.475-10.37-2.228l-12.562,8.119l-60.119-37.38l48.2-30.355l59.244,37.147l-6.907,4.464 c-3.479,2.249-4.476,6.891-2.228,10.37c2.249,3.479,6.894,4.476,10.37,2.228l16.8-10.859c2.153-1.392,3.446-3.787,3.429-6.351 c-0.018-2.563-1.344-4.94-3.516-6.302l-73.218-45.909C150.749,127.792,147.647,127.795,145.209,129.33z">
                            </path>
                            <path
                                d="M270.089,288.846c2.187-3.518,1.109-8.142-2.409-10.329l-74.337-46.221c-3.518-2.188-8.143-1.109-10.329,2.409 c-2.187,3.518-1.109,8.142,2.409,10.329l74.337,46.221c1.232,0.767,2.601,1.132,3.953,1.132 C266.219,292.387,268.669,291.131,270.089,288.846z">
                            </path>
                            <path
                                d="M53.527,192.864c-2.187,3.518-1.109,8.142,2.409,10.329l183.478,114.081c1.232,0.767,2.601,1.132,3.953,1.132 c2.506,0,4.956-1.256,6.376-3.541c2.187-3.518,1.109-8.142-2.409-10.329L63.856,190.455 C60.338,188.266,55.714,189.346,53.527,192.864z">
                            </path>
                        </g>
                    </svg>
                    <a class="inline-block font-semibold" href="#">Artikel Berita</a>
                </div>
                <a href="{{ route('landing.article') }}">Lihat Semua</a>
            </div>
            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 md:grid-cols-3">
        @endif

        @foreach ($articles as $article)
            <div class="flex flex-col overflow-hidden rounded shadow-lg">
                <a href="{{ route('article.detail', ['slug' => $article->slug]) }}"></a>
                <div class="relative"><a href="{{ route('article.detail', ['slug' => $article->slug]) }}">
                        <img class="w-full" src="{{ asset('article/thumb/' . $article->thumbnail) }}"
                            alt="Sunset in the mountains">
                        <div
                            class="absolute bottom-0 left-0 right-0 top-0 bg-gray-900 opacity-25 transition duration-300 hover:bg-transparent">
                        </div>
                    </a>

                </div>
                <div class="mb-auto px-6 py-4">
                    <a class="mb-2 inline-block text-lg font-medium transition duration-500 ease-in-out hover:text-indigo-600"
                        href="{{ route('article.detail', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                    <p class="text-sm text-gray-500">
                        {{ Str::limit($article->content, 30) }}
                    </p>
                </div>
                <div class="flex flex-row items-center justify-between bg-gray-100 px-6 py-3">
                    <span class="font-regular mr-1 flex flex-row items-center py-1 text-xs text-gray-900"
                        href="#">
                        <svg id="Layer_1" style="enable-background:new 0 0 512 512;" height="13px" width="13px"
                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">{{ $article->created_at->diffForHumans() }}</span>
                    </span>

                    <span class="font-regular mr-1 flex flex-row items-center py-1 text-xs text-gray-900"
                        href="#">
                        <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                        </svg>

                        <span class="ml-1">Admin</span>
                    </span>
                </div>
            </div>
        @endforeach
    </div>

    </div>


    <div class="mt-16 text-center" data-aos="zoom-in">
        <h1 class="text-darken text-2xl font-semibold">Galery Desa <span
                class="text-black">{{ config('app.name') }}</span></h1>
        <p class="my-5 text-gray-500 lg:px-96">Galeri ini juga menampilkan momen-momen penting, seperti tradisi budaya,
            aktivitas masyarakat, dan pemandangan desa yang memikat. Jelajahi lebih dalam dan temukan keunikan Desa
            {{ config('app.name') }} yang tak terlupakan!
        </p>
    </div>

    <!-- component -->
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
            @foreach ($galleries as $i)
                <div>
                    <img class="h-auto max-w-full rounded-lg border" src="{{ asset('gallery/thumb/' . $i->image) }}"
                        alt="" loading="lazy" />
                </div>
            @endforeach
        </div>
    </div>


    {{-- lokasi --}}
    <div class="mt-16 text-center" data-aos="zoom-in">
        <h1 class="text-darken text-2xl font-semibold">Lokasi Desa <span
                class="text-black">{{ config('app.name') }}</span></h1>
        <p class="my-5 text-gray-500 lg:px-96">
            {{ $content->deskripsi_lokasi }}
        </p>
    </div>

    <div class="flex justify-center">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29065.621012042582!2d122.63414570350814!3d0.6083543846493171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327919a38ef11033%3A0xc2b671aa1ef3b962!2sBumela%2C%20Boliyohuto%2C%20Gorontalo%20Regency%2C%20Gorontalo!5e0!3m2!1sen!2sid!4v1740635504335!5m2!1sen!2sid"
            style="border:0;" width="600" height="450" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</x-landing-layout>
