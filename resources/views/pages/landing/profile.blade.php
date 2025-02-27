<x-landing-layout>
    <!-- Profile. -->
    <div class="mt-28 text-center" data-aos="zoom-in">
        <h1 class="text-darken text-2xl font-semibold">Sejarah Desa <span class="text-gray-500">{{ config('app.name') }}
            </span></h1>
        <p class="my-5 text-justify text-gray-500 lg:px-96">
            {{ $content->sejarah }}
        </p>
    </div>

    <!-- Visi Misi. -->
    <div class="mx-auto mt-24 max-w-xl text-center" id="visi-misi" data-aos="flip-up">
        <h1 class="text-darken my-3 text-2xl font-bold text-yellow-500">Visi Misi Desa <span
                class="text-gray-500">{{ config('app.name') }}
            </span>
        </h1>
        <p class="leading-relaxed text-gray-500">Melalui platform ini, kami juga menyampaikan visi dan misi Desa
            {{ config('app.name') }}
            , yang menjadi landasan utama dalam setiap langkah pembangunan dan pemberdayaan masyarakat. Mari
            bersama-sama mewujudkan desa yang mandiri, maju, dan sejahtera.
        </p>
    </div>
    <!-- card -->
    <div class="mt-20 grid gap-14 bg-gray-100 md:grid-cols-3 md:gap-5 lg:px-52 lg:py-10">
        @foreach ($visionsMissions as $data)
            <div class="rounded-xl bg-white p-6 text-center shadow-xl" data-aos="fade-up">
                <div
                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-gray-600 p-10 shadow-lg">
                    <p class="font-semibold text-white">Visi <br>& <br>Misi</p>
                </div>
                <div class="text-justify">
                    <h1 class="text-darken mb-3 text-xl font-medium text-gray-500 lg:px-14"><span
                            class="text-black">Visi : </span>
                        {{ $data->visi }}</h1>
                    <h1 class="text-darken mb-3 text-xl font-medium text-gray-500 lg:px-14"><span
                            class="text-black">Misi : </span>
                        {{ $data->misi }}</h1>
                </div>
            </div>
        @endforeach

    </div>

    <!-- Program Unggulan. -->
    <div class="mx-auto mt-24 max-w-xl text-center" id="program-unggulan" data-aos="flip-up">
        <h1 class="text-darken my-3 text-2xl font-bold text-yellow-500">Program Unggulan Desa <span
                class="text-gray-500">{{ config('app.name') }}
            </span>
        </h1>
        <p class="leading-relaxed text-gray-500">Melalui platform ini, kami juga menyampaikan program unggulan Desa
            {{ config('app.name') }}
            , yang menjadi fokus utama dalam meningkatkan kesejahteraan dan kualitas hidup masyarakat.
            Program-program ini dirancang untuk mengoptimalkan potensi desa dan mendorong pembangunan yang
            berkelanjutan. Bersama-sama, mari kita wujudkan desa yang tangguh, inovatif, dan berdaya saing.</p>
    </div>
    <div class="mt-20 grid gap-10 bg-gray-100 px-5 py-10 md:grid-cols-2 lg:grid-cols-3 lg:px-32">
        @foreach ($all_programs as $program)
            <div class="rounded-lg bg-white p-6 text-center shadow-xl" data-aos="fade-up">
                <!-- Badge Kategori -->
                <div class="mb-3">
                    <span
                        class="inline-block rounded-full bg-green-100 px-4 py-1 text-xs font-semibold uppercase text-green-800">
                        {{ $program->program_category }}
                    </span>
                </div>

                <!-- Nama Program -->
                <h2 class="text-lg font-semibold text-gray-900">{{ $program->program_name }}</h2>

                <!-- Deskripsi Program -->
                <p class="mt-3 text-gray-600">{{ $program->description }}</p>
            </div>
        @endforeach
    </div>




    <div class="mt-16 text-center" data-aos="zoom-in">
        <h1 class="text-darken text-2xl font-semibold">Aparat Pemerintah Desa <span
                class="text-gray-500">{{ config('app.name') }}
            </span>
        </h1>
        <p class="my-5 text-gray-500 lg:px-96">
            {{ $content->aparat }}
        </p>

        <div class="flex flex-wrap justify-center gap-4">
            @foreach ($currentVillageHead as $currentVillageHead)
                <div
                    class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
                    <div href="#">
                        <img class="h-96 w-full rounded-t-lg object-cover"
                            src="{{ asset($currentVillageHead->staff_photo === 'kepala-desa.png' ? 'landing/images/kepala-desa.png' : 'structure/staff_profile/' . $currentVillageHead->staff_photo) }}"
                            alt="Foto Aparat Desa" />
                    </div>
                    <div class="p-5">
                        <div href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $currentVillageHead->staff_name }}
                            </h5>
                        </div>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Kepala Desa</p>
            @endforeach
        </div>
    </div>

    @foreach ($employees as $employee)
        <div class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
            <div href="#">
                <img class="h-96 w-full rounded-t-lg object-cover"
                    src="{{ asset($employee->staff_photo === 'kepala-desa.png' ? 'landing/images/kepala-desa.png' : 'structure/staff_profile/' . $employee->staff_photo) }}"
                    alt="Foto Aparat Desa" />
            </div>
            <div class="p-5">
                <div href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $employee->staff_name }}
                    </h5>
                </div>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $employee->position }}
                </p>

            </div>
        </div>
    @endforeach

    </div>

    </div>


    <div class="mt-16 text-center" data-aos="zoom-in">
        <h1 class="text-darken text-2xl font-semibold">Daftar Kepala Desa <span
                class="text-gray-500">{{ config('app.name') }}
            </span></h1>
        <p class="my-5 text-gray-500 lg:px-96">Di bawah kepemimpinan yang visioner, Desa {{ config('app.name') }}
            dipimpin oleh kepala
            desa yang berkomitmen untuk membawa perubahan dan kemajuan. Berikut adalah daftar kepala desa yang telah
            memimpin desa kami:</p>

        <div class="flex flex-wrap justify-center gap-4">

            @foreach ($formerVillageHeads as $formerVillageHead)
                <div
                    class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
                    <div href="#">
                        <img class="h-96 w-full rounded-t-lg object-cover"
                            src="{{ asset($formerVillageHead->staff_photo === 'kepala-desa.png' ? 'landing/images/kepala-desa.png' : 'structure/staff_profile/' . $formerVillageHead->staff_photo) }}"
                            alt="Foto Aparat Desa" />
                    </div>
                    <div class="p-5">
                        <div href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $formerVillageHead->staff_name }}
                            </h5>
                        </div>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $formerVillageHead->staff_description }}
                        </p>

                    </div>
                </div>
            @endforeach

        </div>

    </div>


</x-landing-layout>
