<button
    class="ms-3 mt-2 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 sm:hidden dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
    data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" type="button"
    aria-controls="sidebar-multi-level-sidebar">
    <span class="sr-only">Open sidebar</span>
    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full transition-transform sm:translate-x-0"
    id="sidebar-multi-level-sidebar" aria-label="Sidebar">
    <div class="h-full overflow-y-auto bg-primary px-3 py-4 dark:bg-gray-800">
        <div class="my-4 w-full">

            <div class="grid max-w-full items-center justify-center gap-2">
                <img class="h-auto w-32" src="{{ asset('landing/images/logo-kabgor.png') }}" alt="Logo">
            </div>
            <div class="text-center text-3xl text-white">{{ config('app.name') }}</div>
        </div>

        <ul class="space-y-2 font-medium">
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <svg class="{{ request()->routeIs('dashboard') ? 'h-5 w-5 text-secondary' : 'h-5 w-5 text-white' }} transition duration-75 group-hover:text-secondary dark:text-white dark:group-hover:text-secondary"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </x-nav-link>



            </li>
            <li>
                <button
                    class="group flex w-full items-center rounded-lg p-2 text-base text-white transition duration-75 hover:bg-gray-100 hover:text-secondary dark:text-white dark:hover:bg-gray-700"
                    data-collapse-toggle="data_desa" type="button" aria-controls="data_desa">
                    <svg class="h-6 w-6 hover:text-secondary dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 6H5m2 3H5m2 3H5m2 3H5m2 3H5m11-1a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2M7 3h11a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm8 7a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                    </svg>

                    <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Data Desa</span>
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul class="{{ request()->routeIs('admin.visionmision.*') || request()->routeIs('admin.structure.*') || request()->routeIs('admin.villageprogram.*') ? 'block' : 'hidden' }} space-y-2 py-2"
                    id="data_desa">
                    <li>
                        <x-drop-nav-link :href="route('admin.visionmision.index')" :active="request()->routeIs('admin.visionmision.*')">
                            <span class="ms-3">Visi Misi Desa</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.structure.index')" :active="request()->routeIs('admin.structure.*')">
                            <span class="ms-3">Struktur Aparat Desa</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.villageprogram.index')" :active="request()->routeIs('admin.villageprogram.*')">
                            <span class="ms-3">Program Desa</span>
                        </x-drop-nav-link>
                    </li>
                </ul>
            </li>
            <li>
                <button
                    class="group flex w-full items-center rounded-lg p-2 text-base text-white transition duration-75 hover:bg-gray-100 hover:text-secondary dark:text-white dark:hover:bg-gray-700"
                    data-collapse-toggle="master_penduduk" type="button" aria-controls="master_penduduk">
                    <svg class="h-6 w-6 hover:text-secondary dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                    </svg>


                    <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Data Master Penduduk</span>
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul class="{{ request()->routeIs('admin.resident.*') || request()->routeIs('admin.staffcategory.*') || request()->routeIs('admin.village.*') ? 'block' : 'hidden' }} space-y-2 py-2"
                    id="master_penduduk">
                    <li>
                        <x-drop-nav-link :href="route('admin.village.index')" :active="request()->routeIs('admin.village.*')">
                            <span class="ms-3">Dusun</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.resident.index')" :active="request()->routeIs('admin.resident.*')">
                            <span class="ms-3">Penduduk</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.staffcategory.index')" :active="request()->routeIs('admin.staffcategory.*')">
                            <span class="ms-3">Kategori Staff</span>
                        </x-drop-nav-link>
                    </li>
                </ul>
            </li>
            <li>
                <button
                    class="group flex w-full items-center rounded-lg p-2 text-base text-white transition duration-75 hover:bg-gray-100 hover:text-secondary dark:text-white dark:hover:bg-gray-700"
                    data-collapse-toggle="kependudukan" type="button" aria-controls="kependudukan">

                    <svg class="h-6 w-6 hover:text-secondary dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M17 10v1.126c.367.095.714.24 1.032.428l.796-.797 1.415 1.415-.797.796c.188.318.333.665.428 1.032H21v2h-1.126c-.095.367-.24.714-.428 1.032l.797.796-1.415 1.415-.796-.797a3.979 3.979 0 0 1-1.032.428V20h-2v-1.126a3.977 3.977 0 0 1-1.032-.428l-.796.797-1.415-1.415.797-.796A3.975 3.975 0 0 1 12.126 16H11v-2h1.126c.095-.367.24-.714.428-1.032l-.797-.796 1.415-1.415.796.797A3.977 3.977 0 0 1 15 11.126V10h2Zm.406 3.578.016.016c.354.358.574.85.578 1.392v.028a2 2 0 0 1-3.409 1.406l-.01-.012a2 2 0 0 1 2.826-2.83ZM5 8a4 4 0 1 1 7.938.703 7.029 7.029 0 0 0-3.235 3.235A4 4 0 0 1 5 8Zm4.29 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h6.101A6.979 6.979 0 0 1 9 15c0-.695.101-1.366.29-2Z"
                            clip-rule="evenodd" />
                    </svg>


                    <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Kependudukan</span>
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul class="{{ request()->routeIs('admin.education.level.*') || request()->routeIs('admin.transportation.*') || request()->routeIs('admin.comunity.economy.*') || request()->routeIs('admin.living.conditional.*') || request()->routeIs('admin.farm.*') || request()->routeIs('admin.comunication_device.*') ? 'block' : 'hidden' }} space-y-2 py-2"
                    id="kependudukan">
                    <li>
                        <x-drop-nav-link :href="route('admin.education.level.index')" :active="request()->routeIs('admin.education.level.*')">
                            <span class="ms-3">Tingkat Pendidikan</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.transportation.index')" :active="request()->routeIs('admin.transportation.*')">
                            <span class="ms-3">Alat Transportasi</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.comunity.economy.index')" :active="request()->routeIs('admin.comunity.economy.*')">
                            <span class="ms-3">Usaha Ekonomi Masyarakat</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.living.conditional.index')" :active="request()->routeIs('admin.living.conditional.*')">
                            <span class="ms-3">Kondisi Tempat Tinggal</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.farm.index')" :active="request()->routeIs('admin.farm.*')">
                            <span class="ms-3">Peternakan</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.comunication_device.index')" :active="request()->routeIs('admin.comunication_device.*')">
                            <span class="ms-3">Alat Komunikasi</span>
                        </x-drop-nav-link>
                    </li>

                </ul>
            </li>

            <li>
                <button
                    class="group flex w-full items-center rounded-lg p-2 text-base text-white transition duration-75 hover:bg-gray-100 hover:text-secondary dark:text-white dark:hover:bg-gray-700"
                    data-collapse-toggle="penyuratan" type="button" aria-controls="penyuratan">

                    <svg class="h-6 w-6 hover:text-secondary dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M7.111 20A3.111 3.111 0 0 1 4 16.889v-12C4 4.398 4.398 4 4.889 4h4.444a.89.89 0 0 1 .89.889v12A3.111 3.111 0 0 1 7.11 20Zm0 0h12a.889.889 0 0 0 .889-.889v-4.444a.889.889 0 0 0-.889-.89h-4.389a.889.889 0 0 0-.62.253l-3.767 3.665a.933.933 0 0 0-.146.185c-.868 1.433-1.581 1.858-3.078 2.12Zm0-3.556h.009m7.933-10.927 3.143 3.143a.889.889 0 0 1 0 1.257l-7.974 7.974v-8.8l3.574-3.574a.889.889 0 0 1 1.257 0Z" />
                    </svg>



                    <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Penyuratan</span>
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul class="{{ request()->routeIs('admin.document.kondisi_sosial.*') || request()->routeIs('admin.document.hilang.*') || request()->routeIs('admin.document.beda-nama.*') || request()->routeIs('admin.document.beda-tanggal.*') || request()->routeIs('admin.document.domisili.*') || request()->routeIs('admin.document.kematian.*') || request()->routeIs('admin.document.lahir.*') || request()->routeIs('admin.document.kelbaik.*') || request()->routeIs('admin.document.usaha.*') || request()->routeIs('admin.document.tidakmampu.*') ? 'block' : 'hidden' }} space-y-2 py-2"
                    id="penyuratan">
                    <li>
                        <x-drop-nav-link :href="route('admin.document.kelbaik.index')" :active="request()->routeIs('admin.document.kelbaik.*')">
                            <span class="ms-3">Ket Kelakuan Baik</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.document.usaha.index')" :active="request()->routeIs('admin.document.usaha.*')">
                            <span class="ms-3">Ket Keterangan Usaha</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.document.beda-nama.index')" :active="request()->routeIs('admin.document.beda-nama.*')">
                            <span class="ms-3">Ket Keterangan Beda Nama</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.document.tidakmampu.index')" :active="request()->routeIs('admin.document.tidakmampu.*')">
                            <span class="ms-3">Ket Keterangan Tidak Mampu</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.document.lahir.index')" :active="request()->routeIs('admin.document.lahir.*')">
                            <span class="ms-3">Ket Keterangan Kelahiran</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.document.kematian.index')" :active="request()->routeIs('admin.document.kematian.*')">
                            <span class="ms-3">Ket Keterangan Kematian</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.document.domisili.index')" :active="request()->routeIs('admin.document.domisili.*')">
                            <span class="ms-3">Ket Keterangan Domisili</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.document.beda-tanggal.index')" :active="request()->routeIs('admin.document.beda-tanggal.*')">
                            <span class="ms-3">Ket Keterangan Beda Tanggal Lahir</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.document.hilang.index')" :active="request()->routeIs('admin.document.hilang.*')">
                            <span class="ms-3">Ket Keterangan Hilang</span>
                        </x-drop-nav-link>
                    </li>
                    <li>
                        <x-drop-nav-link :href="route('admin.document.kondisi_sosial.index')" :active="request()->routeIs('admin.document.kondisi_sosial.*')">
                            <span class="ms-3">Ket Keterangan Kondisi Sosial Orang Tua</span>
                        </x-drop-nav-link>
                    </li>

                </ul>
            </li>
            <li>
                <x-nav-link :href="route('admin.article.index')" :active="request()->routeIs('admin.article.*')">

                    <svg class="{{ request()->routeIs('admin.article.*') ? 'h-5 w-5 text-secondary' : 'h-5 w-5 text-white' }} transition duration-75 group-hover:text-secondary dark:text-white dark:group-hover:text-secondary"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z" />
                    </svg>
                    <span class="ms-3">Article</span>
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('admin.gallery.index')" :active="request()->routeIs('admin.gallery.*')">

                    <svg class="{{ request()->routeIs('admin.gallery.*') ? 'h-5 w-5 text-secondary' : 'h-5 w-5 text-white' }} transition duration-75 group-hover:text-secondary dark:text-white dark:group-hover:text-secondary"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z" />
                    </svg>
                    <span class="ms-3">Galeri</span>
                </x-nav-link>
            </li>

            <li>
                <x-nav-link :href="route('admin.theme.index')" :active="request()->routeIs('admin.theme.*')">
                    <svg class="{{ request()->routeIs('admin.theme.*') ? 'h-5 w-5 text-secondary' : 'h-5 w-5 text-white' }} transition duration-75 group-hover:text-secondary dark:text-white dark:group-hover:text-secondary"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16v12H4z" />
                    </svg>
                    <span class="ms-3">Tema</span>
                </x-nav-link>
            </li>


            <li>
                <x-nav-link :href="route('admin.content.index')" :active="request()->routeIs('admin.content.*')">
                    <svg class="{{ request()->routeIs('admin.content.*') ? 'h-5 w-5 text-secondary' : 'h-5 w-5 text-white' }} transition duration-75 group-hover:text-secondary dark:text-white dark:group-hover:text-secondary"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4h18v16H3z" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 9h8M8 13h8" />
                    </svg>
                    <span class="ms-3">Konten</span>
                </x-nav-link>
            </li>


            <li class="md:hidden">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        <svg class="{{ request()->routeIs('logout') ? 'h-5 w-5 text-secondary' : 'h-5 w-5 text-white' }} transition duration-75 group-hover:text-secondary dark:text-white dark:group-hover:text-secondary"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                        </svg>

                        <span class="ms-3">Logout</span>
                    </x-nav-link>
                </form>
            </li>


        </ul>
    </div>
</aside>
