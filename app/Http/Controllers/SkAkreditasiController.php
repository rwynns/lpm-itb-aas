<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkAkreditasi;

class SkAkreditasiController extends Controller
{
    public function index()
    {
        $sk = SkAkreditasi::first();
        return view('dashboard.sk_akreditasi.index', compact('sk'));
    }

    // Method upload tetap sama seperti sebelumnya

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:10240',
        ]);

        $sk = SkAkreditasi::findOrFail($id);

        // Hapus file lama
        if ($sk->file_path && file_exists(storage_path('app/' . $sk->file_path))) {
            unlink(storage_path('app/' . $sk->file_path));
        }

        // Simpan file baru
        $filePath = $request->file('file')->store('sk_akreditasi');
        $sk->update([
            'file_path' => $filePath,
        ]);

        return redirect()->route('sk-akreditasi.index')->with('success', 'File SK Akreditasi berhasil diperbarui.');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:10240',
        ]);

        $filePath = $request->file('file')->store('sk_akreditasi');

        SkAkreditasi::create([
            'file_path' => $filePath,
        ]);

        return redirect()->route('sk-akreditasi.index')->with('success', 'File SK Akreditasi berhasil diunggah.');
    }
}
