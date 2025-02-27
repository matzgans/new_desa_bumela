<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryStaff;
use App\Models\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            # code...
            $structures = Structure::where('staff_name', 'like', '%' . $search . '%')->orderBy('staff_name', 'DESC')->paginate(4)->appends(['search' => $search]);
        } else {

            $structures = Structure::orderBy('staff_name', 'DESC')->paginate(4); // Ganti 10 dengan jumlah item per halaman yang diinginkan
        }
        return view('pages.admin.structure.index', compact('structures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryStaff::pluck('category')->toArray();
        return view('pages.admin.structure.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('aku ganteng');
        // Validasi input
        $validator = Validator::make($request->all(), [
            'staff_name' => 'required|string|max:255',
            'staff_description' => 'required|string|max:255|min:1',
            'position' => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    // Daftar posisi yang hanya boleh ada satu
                    $restrictedPositions = ['Sekretaris', 'Kepala Desa', 'Bendahara'];

                    // Jika posisi adalah salah satu dari posisi yang dibatasi
                    if (in_array($value, $restrictedPositions)) {
                        // Periksa apakah posisi ini sudah ada di database
                        if (Structure::where('position', $value)->exists()) {
                            $fail("Posisi $value sudah ada dan tidak dapat ditambahkan lagi.");
                        }
                    }
                },
            ],
            // 'staff_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nip' => 'nullable|numeric|unique:residents,nik,' // Mendukung file PNG dengan maksimal ukuran 2MB
        ]);

        // Jika validasi gagal, kembali dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $fileName = "kepala-desa.png";
        // dd($request->hasFile('staff_photo'));
        // Cek jika ada gambar dengan nama yang sama dan hapus jika ada
        if ($request->hasFile('staff_photo')) {
            $imageName = $request->file('staff_photo')->getClientOriginalName();
            $imagePath = public_path('structure/staff_profile/' . $imageName);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Hapus gambar yang ada
            }
        }

        // Generate UUID untuk penduduk baru
        $uuid = Str::uuid()->toString();

        // // Simpan gambar di folder publik dengan nama file yang sesuai
        // $fileExtension = $request->file('staff_photo')->getClientOriginalExtension();
        // $fileName = $uuid . '.' . $fileExtension; // Path tanpa prefix folder
        // $request->file('staff_photo')->move(public_path('structure/staff_profile'), $fileName); // Simpan gambar ke folder

        // Membuat instance model dan menyimpan data
        $structure = new Structure();
        $structure->uuid = $uuid; // Menyimpan UUID
        $structure->staff_name = $request->staff_name;
        $structure->staff_description = $request->staff_description;
        $structure->position = $request->position;
        $structure->staff_photo = $fileName;
        $structure->nip = $request->nip;

        // Simpan data ke database
        $structure->save();

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data Pegawai berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $uuid)
    {
        $categories = CategoryStaff::pluck('category')->toArray();
        $structure = Structure::where('uuid', $uuid)->first();
        return view('pages.admin.structure.edit', compact('structure', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {

        // Cari data berdasarkan UUID
        $structure = Structure::where('uuid', $uuid)->firstOrFail();
        // dd($structure);

        // Validasi input
        $validator = Validator::make($request->all(), [
            'staff_name' => 'required|string|max:255|min:6',
            'staff_description' => 'required|string|max:255|min:6',
            'position' => [
                'required',
                'string',
                'max:255',
                // function ($attribute, $value, $fail) use ($structure) {
                //     // Daftar posisi yang hanya boleh ada satu
                //     $restrictedPositions = ['Sekretaris', 'Kepala Desa', 'Bendahara'];

                //     // Jika posisi adalah salah satu dari posisi yang dibatasi
                //     if (in_array($value, $restrictedPositions)) {
                //         // Periksa apakah posisi ini sudah ada di database selain data yang sedang diupdate
                //         $exists = Structure::where('position', $value)
                //             ->where('uuid', '!=', $structure->uuid) // Pastikan tidak mengecek dirinya sendiri
                //             ->exists();
                //         if ($exists) {
                //             $fail("Posisi $value sudah ada dan tidak dapat ditambahkan lagi.");
                //         }
                //     }
                // },
            ],
            'staff_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Foto bersifat opsional saat update
            'nip' => 'nullable|numeric|digits:18|unique:structures,nip,' . $structure->id,
        ]);

        // Jika validasi gagal, kembali dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Jika ada file foto baru yang di-upload, proses file-nya
        if ($request->hasFile('staff_photo')) {
            // Cek jika ada gambar lama dan hapus jika ada
            $oldImagePath = public_path('structure/staff_profile/' . $structure->staff_photo);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Hapus gambar lama
            }

            // Simpan gambar baru di folder publik dengan nama file yang sesuai
            $fileExtension = $request->file('staff_photo')->getClientOriginalExtension();
            $fileName = $uuid . '.' . $fileExtension;
            $request->file('staff_photo')->move(public_path('structure/staff_profile'), $fileName);

            // Update nama file di database
            $structure->staff_photo = $fileName;
        }

        // Update field lainnya
        $structure->staff_name = $request->staff_name;
        $structure->staff_description = $request->staff_description;
        $structure->position = $request->position;
        $structure->nip = $request->nip;

        // Simpan perubahan ke database
        $structure->save();

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data Pegawai berhasil diupdate!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        // Temukan resident berdasarkan UUID
        $structure = Structure::where('uuid', $uuid)->first();

        // Tentukan path gambar
        $photoPath = public_path('strcture/staff_profile/' . $structure->staff_photo);

        // Cek apakah file gambar ada
        if (file_exists($photoPath)) {
            // Hapus gambar
            unlink($photoPath);
        }

        // Hapus data structure dari database   
        $structure->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
