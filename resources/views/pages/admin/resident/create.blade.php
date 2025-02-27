<x-app-layout>
    <div class="pt-4">
        <div class="max-w-7xl px-0 sm:px-6 lg:px-8">
            <div class="mb-3 flex justify-between rounded-lg bg-secondary p-4 text-white shadow-lg">

                <h2>Tambah Penduduk</h2>
                <a class="flex items-center hover:underline" href="{{ route('admin.resident.index') }}">
                    <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12l4-4m-4 4 4 4" />
                    </svg>
                    <span class="ml-3">Kembali</span>
                </a>
            </div>
            <div class="rounded-lg bg-white p-4 text-white shadow-lg">
                @if (Session::has('success'))
                    <div class="mb-4 flex w-full max-w-full items-center rounded-lg bg-white p-4 text-gray-500 shadow dark:bg-gray-800 dark:text-gray-400"
                        id="toast-success" role="alert">
                        <div
                            class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="sr-only">Check icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal">{{ Session::get('success') }}</div>
                        <button
                            class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-dismiss-target="#toast-success" type="button" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @elseif(Session::has('error'))
                    <div class="mb-4 flex w-full max-w-full items-center rounded-lg bg-white p-4 text-gray-500 shadow dark:bg-gray-800 dark:text-gray-400"
                        id="toast-danger" role="alert">
                        <div
                            class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-red-100 text-red-500 dark:bg-red-800 dark:text-red-200">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                            </svg>
                            <span class="sr-only">Error icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal">{{ Session::get('error') }}</div>
                        <button
                            class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-dismiss-target="#toast-danger" type="button" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @elseif($errors->any())
                    <div class="mb-4 flex w-full max-w-full items-center rounded-lg bg-white p-4 text-gray-500 shadow dark:bg-gray-800 dark:text-gray-400"
                        id="toast-danger" role="alert">
                        <div
                            class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-red-100 text-red-500 dark:bg-red-800 dark:text-red-200">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                            </svg>
                            <span class="sr-only">Error icon</span>
                        </div>
                        @foreach ($errors->all() as $error)
                            <div class="ms-3 text-sm font-normal">{{ $error }}</div>
                        @endforeach
                        <button
                            class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-dismiss-target="#toast-danger" type="button" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif

                <form class="mx-auto max-w-full" action="{{ route('admin.resident.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid w-full grid-cols-2 gap-4">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="name">Nama</label>
                            <input
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="name" name="name" type="text" value="{{ old('name') }}"
                                placeholder="John Anderson...." required />
                            @error('name')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nik">NIK</label>
                            <input
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="nik" name="nik" type="number" value="{{ old('nik') }}"
                                placeholder="NIK...." />
                            @error('nik')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="gender">Gender</label>
                            <select
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="gender" name="gender" required>
                                <option value="">Pilih Gender</option>
                                <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan
                                </option>
                                <option value="Laki - Laki" {{ old('gender') == 'Laki - Laki' ? 'selected' : '' }}>
                                    Laki-laki
                                </option>
                            </select>
                            @error('gender')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="birth_date">Tanggal Lahir</label>
                            <input
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="birth_date" name="birth_date" type="date" value="{{ old('birth_date') }}"
                                required />
                            @error('birth_date')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="occupation">Pekerjaan</label>
                            <select
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="occupation" name="occupation" required>
                                <option value="">Pilih Pekerjaan</option>
                                <option value="Nelayan" {{ old('occupation') == 'Nelayan' ? 'selected' : '' }}>Nelayan
                                </option>
                                <option value="Petani" {{ old('occupation') == 'Petani' ? 'selected' : '' }}>
                                    Petani</option>
                                <option value="Swasta" {{ old('occupation') == 'Swasta' ? 'selected' : '' }}>Swasta
                                </option>
                                <option value="Honorer" {{ old('occupation') == 'Honorer' ? 'selected' : '' }}>Honorer
                                </option>
                                <option value="PNS" {{ old('occupation') == 'PNS' ? 'selected' : '' }}>PNS
                                </option>
                                <option value="Tukang Bangunan"
                                    {{ old('occupation') == 'Tukang Bangunan' ? 'selected' : '' }}>Tukang Bangunan
                                </option>
                                <option value="Buruh Harian"
                                    {{ old('occupation') == 'Buruh Harian' ? 'selected' : '' }}>Buruh Harian
                                </option>
                                <option value="Asisten RT" {{ old('occupation') == 'Asisten RT' ? 'selected' : '' }}>
                                    Asisten RT
                                </option>
                                <option value="Lainnya" {{ old('occupation') == 'Lainnya' ? 'selected' : '' }}>Lainnya
                                </option>
                            </select>
                            @error('occupation')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="education_level">Tingkat Pendidikan</label>
                            <select
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="education_level" name="education_level" required>
                                <option value="">Pilih Tingkat Pendidikan</option>
                                <option value="Tidak / Belum Sekolah"
                                    {{ old('education_level') == 'Tidak / Belum Sekolah' ? 'selected' : '' }}>Tidak /
                                    Belum Sekolah</option>
                                <option value="Tamat SD / Sederajat"
                                    {{ old('education_level') == 'Tamat SD / Sederajat' ? 'selected' : '' }}>Tamat SD /
                                    Sederajat</option>
                                <option value="Tamat SMP / Sederajat"
                                    {{ old('education_level') == 'Tamat SMP / Sederajat' ? 'selected' : '' }}>Tamat SMP
                                    / Sederajat</option>
                                <option value="Tamat SMA / Sederajat"
                                    {{ old('education_level') == 'Tamat SMA / Sederajat' ? 'selected' : '' }}>
                                    Tamat SMA / Sederajat</option>
                                <option value="Tamat PT" {{ old('education_level') == 'Tamat PT' ? 'selected' : '' }}>
                                    Tamat PT</option>
                            </select>
                            @error('education_level')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="status_resident">Status Penduduk</label>
                            <select
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="status_resident" name="status_resident" required>
                                <option value="">Pilih Status</option>
                                <option value="Pelajar" {{ old('Pelajar') == 'Pelajar' ? 'selected' : '' }}>
                                    Pelajar</option>
                                <option value="Menikah" {{ old('Menikah') == 'Menikah' ? 'selected' : '' }}>
                                    Menikah</option>
                                <option value="Belum Menikah"
                                    {{ old('status_resident') == 'Belum Menikah' ? 'Belum Menikah' : '' }}>Belum
                                    Menikah
                                </option>
                                <option value="Janda" {{ old('status_resident') == 'Janda' ? 'Janda' : '' }}>Janda
                                </option>
                                <option value="Duda" {{ old('status_resident') == 'Duda' ? 'Duda' : '' }}>Duda
                                </option>
                            </select>
                            @error('status_resident')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="gender">Nama Dusun</label>
                            <select
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="village_name" name="village_id" required>
                                <option value="">Pilih Dusun</option>
                                @foreach ($villages as $village)
                                    <option value="{{ $village->id }}" {{ old('village_id') }}>
                                        {{ $village->village_name }}
                                    </option>
                                @endforeach

                            </select>
                            @error('village_id')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-span-2 mb-6 grid grid-cols-2 gap-4">
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                    for="photo_profile">Foto Profil</label>
                                <label
                                    class="flex h-64 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:border-gray-500 dark:hover:bg-gray-800"
                                    for="dropzone-file">
                                    <div class="flex flex-col items-center justify-center pb-6 pt-5">
                                        <svg class="mb-4 h-8 w-8 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                            800x400px)</p>
                                    </div>
                                    <input class="hidden" id="dropzone-file" name="photo_profile" type="file"
                                        accept="image/*" onchange="previewImage(event)" />


                                    @error('photo_profile')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </label>
                            </div>

                            <!-- Preview Image -->
                            <div class="relative h-64 w-full rounded-lg border-2 border-gray-300">
                                <img class="h-60 w-full rounded-lg object-contain" id="preview" src="#"
                                    alt="Image preview" style="display: none;" />
                            </div>
                        </div>
                    </div>

                    <button class="mt-4 w-full rounded-lg bg-primary px-3 py-2 text-white hover:bg-secondary"
                        type="submit">
                        Simpan
                    </button>
                </form>

            </div>
        </div>



    </div>
    @push('after-scripts')
        <script>
            function previewImage(event) {
                const preview = document.getElementById('preview');
                const file = event.target.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.style.display = 'none';
                }
            }
        </script>
    @endpush
</x-app-layout>
