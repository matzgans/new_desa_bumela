<?php

namespace App\Imports;

use App\Models\Resident;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithValidation;

class ResidentImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $villageId = $row['dusun'] ?? null;

        // Pastikan village_id ada di tabel villages
        if ($villageId && !DB::table('villages')->where('id', $villageId)->exists()) {
            $villageId = null;
        }

        // Bersihkan dan cek NIK
        $nik = trim($row['nik'] ?? '');
        if (empty($nik) || !is_numeric($nik)) {
            $nik = null;
        }

        // Cek apakah "nama" kosong
        $name = trim($row['nama'] ?? '');
        if (empty($name)) {
            throw new \Exception("Data tidak valid: Kolom 'nama' kosong pada baris " . json_encode($row));
        }

        return new Resident([
            'uuid' => Str::uuid()->toString(),
            'village_id' => $villageId,
            'nik' => $nik, // Gunakan NIK yang sudah divalidasi
            'name' => $row['nama'],
            'gender' => $row['jenis_kelamin'],
            'birth_date' => $this->convertDate($row['tanggal_lahir']),
            'occupation' => $row['pekerjaan'] ?? null,
            'status_resident' => $row['status'] ?? null,
            'education_level' => $row['tingkat_pendidikan'] ?? null,
        ]);
    }

    public function rules(): array
    {
        return [
            'dusun' => 'nullable|integer|exists:villages,id',
            'nik' => [
                'nullable',
                'numeric', // Minimal 14 digit
                'unique:residents,nik,NULL,id,nik,!0', // Unik, tapi tidak boleh duplikasi '0'
            ],
            'name' => 'nullable|string|max:255|min:3',
            'jenis_kelamin' => 'nullable|in:Perempuan,Laki - Laki',
            'tanggal_lahir' => [
                'nullable',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $value) && !is_numeric($value)) {
                        $fail("Format tanggal tidak valid: $value. Gunakan format YYYY-MM-DD atau angka Excel.");
                    }
                },
                'before:today',
            ],
            'pekerjaan' => 'nullable|string|max:255|min:2',
            'status' => 'nullable|string|max:255|min:2',
            'tingkat_pendidikan' => 'nullable|string|max:255|min:2',
        ];
    }

    /**
     * Konversi tanggal dari format MM/DD/YYYY ke YYYY-MM-DD
     */
    private function convertDate($date)
    {

        if (!$date) {
            return null;
        }

        try {
            // Jika format sudah YYYY-MM-DD, langsung return
            if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
                return $date;
            }

            // Jika format MM/DD/YYYY, ubah ke YYYY-MM-DD
            if (preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $date)) {
                return Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
            }

            // Jika format DD/MM/YYYY, ubah ke YYYY-MM-DD
            if (preg_match('/^\d{2}-\d{2}-\d{4}$/', $date)) {
                return Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
            }

            // Jika angka, maka ini serial number Excel
            if (is_numeric($date)) {
                return Carbon::createFromTimestamp(($date - 25569) * 86400)->format('Y-m-d');
            }
        } catch (Exception $e) {
            throw new Exception("Format tanggal tidak valid: $date. Gunakan format MM/DD/YYYY, YYYY-MM-DD, atau angka Excel.");
        }

        return null; // Jika tidak cocok dengan format apapun
    }
}
