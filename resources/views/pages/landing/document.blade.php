<x-landing-layout>
    <div class="mt-28 text-center" data-aos="zoom-in">
        <h1 class="text-darken text-2xl font-semibold">Penyuratan Desa <span
                class="text-gray-600">{{ config('app.name') }}
            </span>
        </h1>
        <p class="my-5 text-gray-500 lg:px-96">
            {{ $content->penyuratan }}
        </p>
    </div>
    @if (session('success'))
        <div class="mx-20 mb-4 flex items-center rounded-lg bg-green-200 p-4 text-center text-green-800 dark:bg-gray-800 dark:text-green-400"
            id="alert-3" role="alert">
            <svg class="h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                Berhasil! {{ session('success') }}
            </div>
            <button
                class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-green-50 p-1.5 text-green-500 hover:bg-green-200 focus:ring-2 focus:ring-green-400 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" type="button" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="mb-4 flex items-center rounded-lg bg-red-200 p-4 text-red-800 dark:bg-gray-800 dark:text-red-400"
            id="alert-2" role="alert">
            <svg class="h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                Gagal! {{ session('error') }}
            </div>
            <button
                class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-red-50 p-1.5 text-red-500 hover:bg-red-200 focus:ring-2 focus:ring-red-400 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" type="button" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    <div class="relative mx-20 mb-4">
        <button
            class="w-full rounded-lg border border-gray-300 bg-white p-4 text-left text-gray-700 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700"
            id="dropdown-button" data-name="Surat Keterangan Beda
                        Tanggal Lahir" type="button"
            aria-haspopup="true" aria-expanded="false">
            <span id="selected-item">Pilih Surat Keterangan</span>
            <span class="float-right">&#x25BC;</span> <!-- Arrow down icon -->
        </button>
        <div class="absolute hidden w-full rounded-lg bg-white shadow-lg dark:bg-gray-800" id="dropdown-menu">
            <ul class="text-sm font-medium text-gray-700 dark:text-gray-200" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block rounded-t-lg border-b-2 p-4" id="profile-tab"
                        data-tabs-target="#ket-default" data-name="Pilih Jenis Surat" type="button" role="tab"
                        aria-controls="profile" aria-selected="true">-</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block rounded-t-lg border-b-2 p-4" id="profile-tab"
                        data-tabs-target="#ket-beda-tanggal"
                        data-name="Surat Keterangan Beda
                        Tanggal Lahir" type="button"
                        role="tab" aria-controls="profile" aria-selected="false">Surat Keterangan Beda
                        Tanggal Lahir</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block rounded-t-lg border-b-2 p-4" id="profile-tab"
                        data-tabs-target="#ket-beda-nama" data-name="Surat Keterangan Beda
                        Nama"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Surat
                        Keterangan Beda
                        Nama</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#ket-kelakukan-baik"
                        data-name="Surat Keterangan
                        Kelakuan Baik" type="button"
                        role="tab" aria-controls="dashboard" aria-selected="false">Surat Keterangan
                        Kelakuan Baik</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-tidak-mampu"
                        data-name="Surat Keterangan Tidak
                        Mampu" type="button"
                        role="tab" aria-controls="contacts" aria-selected="false">Surat Keterangan Tidak
                        Mampu</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-domisili"
                        data-name="Surat Keterangan
                        Domisili" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Surat Keterangan
                        Domisili</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-kematian"
                        data-name="Surat Keterangan
                        Kematian" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Surat Keterangan
                        Kematian</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-hilang"
                        data-name="Surat Keterangan
                        Hilang" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Surat Keterangan
                        Hilang</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-usaha"
                        data-name="Surat Keterangan
                        Usaha" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Surat Keterangan
                        Usaha</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-kelahiran"
                        data-name="SuSurat Keterangan
                        Kelahiran" type="button"
                        role="tab" aria-controls="contacts" aria-selected="false">Surat Keterangan
                        Kelahiran</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-ekonomi-lemah"
                        data-name="Surat Keterangan
                        Kondisi Sosial Ekonomi Orang
                        Tua/Wali"
                        type="button" role="tab" aria-controls="contacts" aria-selected="false">Surat
                        Keterangan
                        Kondisi Sosial Ekonomi Orang
                        Tua/Wali</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="mx-20" id="default-tab-content">
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-default" role="tabpanel"
            aria-labelledby="profile-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di {{ config('app.name') }}
                dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa {{ config('app.name') }}
            </p>

        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-beda-tanggal" role="tabpanel"
            aria-labelledby="profile-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di {{ config('app.name') }}
                dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa {{ config('app.name') }}
            </p>
            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="name">Nama
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Tanggal Lahir
                                Salah
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="wrong_birth" type="date" placeholder="John" required />
                        </div>
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Tanggal Lahir
                                Benar :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="birth" type="date" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Dokumen Yang Salah
                                : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="wrong_document" type="text" placeholder="Sertifikat Tanah"
                                required />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="place">NIK
                            : </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="place" name="NIK" type="place" value="" placeholder="NIK KTP" />
                        <div class="hidden">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="type">Tipe Surat
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="type" name="type" type="text" value="ket_beda_tanggal"
                                placeholder="" required />
                        </div>
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-beda-nama" role="tabpanel"
            aria-labelledby="profile-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di {{ config('app.name') }}
                dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa {{ config('app.name') }}
            </p>
            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Salah
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="wrong_name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Dokumen Yang Salah
                                : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="wrong_document" type="text" placeholder="Sertifikat Tanah"
                                required />
                        </div>
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Benar
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="place">NIK
                            : </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="place" name="NIK" type="text" value="" placeholder="NIK KTP" />
                        <div class="hidden">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="type">Tipe Surat
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="type" name="type" type="text" value="ket_beda_nama" placeholder=""
                                required />
                        </div>
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-kelakukan-baik" role="tabpanel"
            aria-labelledby="dashboard-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di {{ config('app.name') }}
                dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa {{ config('app.name') }}
            </p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_kelakuan_baik" placeholder=""
                            required />
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Umur : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="age" type="number" placeholder="21" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Alamat :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="address" type="text" placeholder="Jl. Manado" required />
                        </div>
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-tidak-mampu" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di {{ config('app.name') }}
                dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa {{ config('app.name') }}
            </p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_tidak_mampu" placeholder=""
                            required />
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="birth">Tempat/Tanggal
                                Lahir : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="birth" name="birth" type="text"
                                placeholder="Gorontalo, 17 Agustus 1945" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Alamat :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="address" type="text" placeholder="Jl. Manado" required />
                        </div>
                    </div>



                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-domisili" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di {{ config('app.name') }}
                dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa {{ config('app.name') }}
            </p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_domisili" placeholder=""
                            required />
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Tempat/Tanggal
                                Lahir : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="birth" type="text"
                                placeholder="Gorontalo, 17 Agustus 1945" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Alamat KTP:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="ktp_address" type="text" placeholder="Jl. Manado"
                                required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Domisili :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="address" type="text" placeholder="Jl. Manado" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Agama :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="religion" type="text" placeholder="Islam" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Jenis Kelamin
                                :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="gender">
                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="place">NIK
                            : </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="place" name="NIK" type="place" placeholder="" />
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-kematian" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di {{ config('app.name') }}
                dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa {{ config('app.name') }}
            </p>

            <div class="my-10">
                <div class="hidden">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="type">Tipe
                        Surat
                        :</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="type" name="type" type="text" value="ket_kematian" placeholder=""
                        required />
                </div>
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_kematian" placeholder=""
                            required />
                    </div>

                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Tempat/Tanggal
                                Lahir : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="birth" type="text"
                                placeholder="Gorontalo, 17 Agustus 1945" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Alamat Terakhir:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="address" type="text" placeholder="Jl. Manado" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Agama :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="religion" type="text" placeholder="Islam" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Jenis Kelamin
                                :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Status
                                Perkawinan :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="married_status">

                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Sudah Pernah Kawin">Sudah Pernah Kawin</option>
                            </select>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Hari Meninggal:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="day_death" type="text" placeholder="Senin" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Tanggal Meninggal:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="date_death" type="date" placeholder="01, November"
                                required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Jam Meninggal:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="time_death" type="text" placeholder="15:00 WITA" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Meninggal Karena:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="cause_death" type="text" placeholder="Sakit" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Meninggal Di:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="place_death" type="text" placeholder="Rumah Sakit"
                                required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama_ayah">
                                Nama Ayah / NIK:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama_ayah" name="name_ayah" type="text" placeholder="John Doe" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan_ayah">
                                Pekerjaan Ayah:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan_ayah" name="job_ayah" type="text" placeholder="Petani" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat_ayah">
                                Alamat Ayah:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="alamat_ayah" name="address_ayah" type="text"
                                placeholder="Desa {{ config('app.name') }}
. Kecamatan Kwandang" />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama_ibu">
                                Nama Ibu / NIK:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama_ibu" name="name_ibu" type="text" placeholder="Jane Doe" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan_ibu">
                                Pekerjaan Ibu:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan_ibu" name="job_ibu" type="text"
                                placeholder="Mengurus Rumah Tangga" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat_ibu">
                                Alamat Ibu:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="alamat_ibu" name="address_ibu" type="text"
                                placeholder="Desa {{ config('app.name') }}
 Kecamatan Kwandang" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama_saksi1">
                                Nama Saksi I / NIK:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama_saksi1" name="name_saksi1" type="text" placeholder="Jack Doe/75xxxx" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="ttl_saksi1">
                                Tempat/Tanggal Lahir Saksi I:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="ttl_saksi1" name="birth_saksi1" type="text"
                                placeholder="Gorontalo, 17 Agustus 1946" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan_saksi1">
                                Pekerjaan Saksi I:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan_saksi1" name="job_saksi1" type="text"
                                placeholder="Perangkat Desa" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat_saksi1">
                                Alamat Saksi I:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="alamat_saksi1" name="address_saksi1" type="text"
                                placeholder="Desa {{ config('app.name') }}
 Kec. Bilato" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama_saksi2">
                                Nama Saksi II / NIK:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama_saksi2" name="name_saksi2" type="text" placeholder="John Doe/75xxx" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="ttl_saksi2">
                                Tempat/Tanggal Lahir Saksi II:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="ttl_saksi2" name="birth_saksi2" type="text"
                                placeholder="{{ config('app.name') }}
, 17 Agustus 2004" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan_saksi2">
                                Pekerjaan Saksi II:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan_saksi2" name="job_saksi2" type="text"
                                placeholder="Perangkat Desa" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat_saksi2">
                                Alamat Saksi II:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="alamat_saksi2" name="address_saksi2" type="text"
                                placeholder="Desa {{ config('app.name') }}
 Kec. Bilato" />
                        </div>

                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-hilang" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di {{ config('app.name') }}
                dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa {{ config('app.name') }}
            </p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_hilang" placeholder=""
                            required />
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Tempat/Tanggal
                                Lahir : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="birth" type="text"
                                placeholder="Gorontalo, 17 Agustus 1945" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Alamat:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="address" type="text" placeholder="Jl. Manado" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Dokumen Hilang :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="document_name" type="text" placeholder="KTP" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Jenis Kelamin
                                :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-usaha" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di {{ config('app.name') }}
                dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa {{ config('app.name') }}
            </p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_usaha" placeholder=""
                            required />
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="birth">Tempat/Tanggal
                                Lahir : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="birth" name="birth" type="text"
                                placeholder="Gorontalo, 17 Agustus 1945" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Alamat :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="address" type="text" placeholder="Jl. Manado" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Alamat Usaha:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="address_business" type="text" placeholder="Jl. Jakarta"
                                required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Agama :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="religion" type="text" placeholder="Islam" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Jenis Kelamin
                                :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="business_name">Nama Usaha :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="business_name" name="business_name" type="text" placeholder="Butik"
                                required />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="place">Nama Usaha
                            : </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="place" name="business_name" type="place"
                            placeholder="Usaha  Dagang Pakaian Jadi" />
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-kelahiran" role="tabpanel"
            aria-labelledby="profile-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di {{ config('app.name') }}
                dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa {{ config('app.name') }}
            </p>
            <div class="my-10">
                <form class="mx-20" method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_lahir" placeholder=""
                            required />
                    </div>
                    <div class="mb-4">
                        <h2 class="mb-2 text-lg font-semibold">Dengan Ini Menerangkan Bahwa</h2>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div class="mb-2">
                                <label class="block text-sm font-medium text-gray-700">Hari:</label>
                                <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                    name="day" type="text" placeholder="Kamis" />
                            </div>
                            <div class="mb-2">
                                <label class="block text-sm font-medium text-gray-700">Tanggal:</label>
                                <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                    name="date" type="text" placeholder="26 Agustus 1945" />
                            </div>
                            <div class="col-span-2 mb-2">
                                <label class="block text-sm font-medium text-gray-700">Di:</label>
                                <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                    name="place" type="text"
                                    placeholder="Desa {{ config('app.name') }}
 Kec. Bilato, Kabupaten Gorontalo Utara" />
                            </div>
                        </div>

                        <h2 class="my-4 text-lg font-semibold">Telah lahir seorang anak Laki-Laki yang diberi nama:
                        </h2>
                        <div class="mb-2">
                            <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                name="kid_name" type="text" placeholder="John Doe" />
                        </div>

                        <h2 class="my-4 text-lg font-semibold">Orang Tua:</h2>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div class="mb-2">
                                <label class="block text-sm font-medium text-gray-700">Ibu:</label>
                                <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                    name="mothers_name" type="text" placeholder="Jane Doe" />
                            </div>
                            <div class="mb-2">
                                <label class="block text-sm font-medium text-gray-700">Ayah:</label>
                                <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                    name="fathers_name" type="text" placeholder="Jack Doe" />
                            </div>
                        </div>

                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700">Alamat:</label>
                            <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                name="address" type="text"
                                placeholder="Desa {{ config('app.name') }}
, Kecamatan Kwandang, Kabupaten Gorontalo Utara" />
                        </div>

                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700">Anak Ke:</label>
                            <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                name="kid_no" type="number" placeholder="1" />
                        </div>
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-ekonomi-lemah" role="tabpanel"
            aria-labelledby="profile-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di {{ config('app.name') }}
                dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa {{ config('app.name') }}
            </p>
            <div class="my-10">
                <form class="mx-20" method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_kondisiorangtua" placeholder=""
                            required />
                    </div>
                    <h2 class="mb-4 text-lg font-semibold">Menerangkan Bahwa:</h2>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nama:</label>
                        <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500" name="name"
                            type="text" required placeholder="Masukkan Nama" />
                    </div>

                    <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Tempat/Tanggal Lahir:</label>
                            <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                name="birth" type="text" required placeholder="Gorontalo, 27-02-1973" />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Jenis Kelamin
                                :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="gender">
                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Agama:</label>
                            <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                name="religion" type="text" required placeholder="Islam" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Pekerjaan:</label>
                            <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                name="job" type="text" required placeholder="IRT" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Alamat:</label>
                        <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500" name="address"
                            type="text" required
                            placeholder="Desa {{ config('app.name') }}
, Kecamatan Kwandang, Kabupaten Gorontalo Utara" />
                    </div>

                    <h2 class="mb-4 text-lg font-semibold">Orang Tua/Wali dari Calon Mahasiswa Baru:</h2>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nama:</label>
                        <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                            name="kids_name" type="text" required placeholder="Masukkan Nama" />
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Prodi:</label>
                        <textarea class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500" name="prodi"
                            placeholder="Prodi dan Fakultas"></textarea>
                    </div>

                    <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">No HP/Email:</label>
                            <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                                name="contact" type="text" required
                                placeholder="085394441603 / email@example.com" />
                        </div>
                    </div>

                    <h2 class="mb-4 text-lg font-semibold">Mengalami Penurunan Kondisi Sosial Ekonomi Karena:</h2>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Sebutkan Alasan:</label>
                        <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500" name="reason"
                            type="text" required placeholder="Terdampak Covid " />
                    </div>

                    <h2 class="mb-4 text-lg font-semibold">Detail Pendapatan:</h2>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Pendapatan Sebelum Kejadian:</label>
                        <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                            name="pendapatan_sebelum" type="text" required placeholder="Rp. 500.000/Bulan" />
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Pendapatan Setelah Kejadian:</label>
                        <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                            name="pendapatan_setelah" type="text" required placeholder="Rp. 200.000/Bulan" />
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Rerata Penurunan Pendapatan:</label>
                        <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                            name="penurunan_pendapatan" type="text" required placeholder="Rp. 250.000" />
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Jumlah Tanggungan Keluarga:</label>
                        <input class="mt-1 w-full rounded-md border p-2 focus:ring focus:ring-blue-500"
                            name="tanggungan" type="text" required placeholder="2 Orang (1 Kuliah 1 Sekolah)" />
                    </div>
                    <button class="rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
                        type="submit">Submit</button>
                </form>

            </div>
        </div>
    </div>

    <script>
        // Toggle the dropdown menu
        document.getElementById("dropdown-button").addEventListener("click", function() {
            var menu = document.getElementById("dropdown-menu");
            menu.classList.toggle("hidden");
        });

        // Hide dropdown menu on clicking outside
        document.addEventListener("click", function(e) {
            var button = document.getElementById("dropdown-button");
            var menu = document.getElementById("dropdown-menu");
            if (!button.contains(e.target)) {
                menu.classList.add("hidden");
            }
        });

        // Change button text to selected item
        document.querySelectorAll('#dropdown-menu button').forEach(function(item) {
            item.addEventListener("click", function() {
                // Update the button text
                document.getElementById("selected-item").innerText = this.getAttribute("data-name");
                // Close the dropdown
                document.getElementById("dropdown-menu").classList.add("hidden");
            });
        });
    </script>
</x-landing-layout>
