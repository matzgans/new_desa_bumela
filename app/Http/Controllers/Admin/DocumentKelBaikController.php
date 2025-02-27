<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Structure;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DocumentKelBaikController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Document::where('type', 'ket_kelakuan_baik');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->whereRaw("LOWER(JSON_EXTRACT(data, '$.name')) LIKE ?", ['%' . strtolower($search) . '%'])
                    ->orWhereRaw("LOWER(JSON_EXTRACT(data, '$.NIK')) LIKE ?", ['%' . strtolower($search) . '%']);
            });
        }

        $documents = $query->latest()->paginate(10);

        $documents->through(function ($document, $index) {
            $data = json_decode($document->data, true);
            return [
                'no' => $index + 1,
                'name' => $data['name'] ?? '-',
                'job' => $data['job'] ?? '-',
                'age' => $data['age'] ?? '-',
                "address" => $data['address'] ?? "-",
                'id' => $document->id,
                'no_surat' => $document->no_surat ?? '-',
                'is_status' => $document['is_status'],
            ];
        });

        if ($search) {
            $documents->appends(['search' => $search]);
        }

        return view("pages.admin.document_kelbaik.index", compact('documents'));
    }

    public function edit($id)
    {
        $document = Document::where('id', $id)->firstOrFail();
        $no_surat = $document->no_surat;

        $data = json_decode($document->data, true);

        return view("pages.admin.document_kelbaik.edit", compact("data", "id", "no_surat"));
    }

    public function update(Request $request, $id)
    {
        try {

            // Mengambil semua data kecuali yang tidak diperlukan
            $data = $request->except([
                '_token',
                '_method',
                'type'
            ]);

            // Update document
            Document::where('id', $id)->update([
                'type' => $request->type,
                'no_surat' => $request->no_surat,
                'data' => json_encode($data),
                'updated_at' => now()
            ]);

            return redirect()
                ->route("admin.document.kelbaik.index")
                ->with('success', 'Data berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage())
                ->withInput();
        }
    }


    public function destroy($id)
    {
        try {
            // Mencari item berdasarkan ID
            $item = Document::findOrFail($id); // Menggunakan findOrFail untuk langsung memunculkan exception jika tidak ditemukan
            // Menghapus item
            $item->delete();

            return redirect()
                ->back()
                ->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function print($id, Request $request)
    {
        $document = Document::where('id', $id)->firstOrFail();
        $kepala_desa = Structure::where('position', "Kepala Desa")->first();
        $sekretaris_desa = Structure::where('position', "Sekretaris")->first();
        $tandatangan = $request->query('tandatangan');


        if ($document->no_surat) {
            $data = json_decode($document->data, true);
            if ($tandatangan == "kades") {
                # code...
                $data['kepala_desa'] = $kepala_desa->staff_name;
                $data['kepala_desa_position'] = $kepala_desa->position;
                $data['nip'] = $kepala_desa->nip;
            } else {
                $data['kepala_desa'] = $kepala_desa->staff_name;
                $data['kepala_desa_position'] = $kepala_desa->position;
                $data['nip'] = $kepala_desa->nip;
                $data['sekretaris_desa'] = $sekretaris_desa->staff_name;
                $data['sekretaris_desa_position'] = $sekretaris_desa->position;
            }
            # code...
            $data['tandatangan'] = $tandatangan;
            $pdf = Pdf::loadView('pdf.surat-keterangan-kelbaik', $data);
            $fileName = 'surat_keterangan_kelbaik_' . htmlspecialchars($data['name']) . '.pdf';
            $document->update(['is_status' => 1]);
            return $pdf->stream($fileName);
        } else {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: Perhatikan Nomor Surat');
        }
    }
}
