<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumens = Dokumen::all();
        return view('dashboard.dokumen_kebijakan.index', compact('dokumens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.dokumen_kebijakan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'buku_standart' => 'file|mimes:pdf|max:2048',
            'sk' => 'file|mimes:pdf|max:2048',
            'sop' => 'file|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('buku_standart')) {
            $filePath = $request->file('buku_standart')->store('dokumen_kebijakan', 'public');
            Dokumen::create(['name' => 'Buku Standart', 'file_path' => $filePath]);
        }

        if ($request->hasFile('sk')) {
            $filePath = $request->file('sk')->store('dokumen_kebijakan', 'public');
            Dokumen::create(['name' => 'SK', 'file_path' => $filePath]);
        }

        if ($request->hasFile('sop')) {
            $filePath = $request->file('sop')->store('dokumen_kebijakan', 'public');
            Dokumen::create(['name' => 'SOP', 'file_path' => $filePath]);
        }

        return redirect('/dashboard/dokumen_kebijakan')->with('success', 'Dokumen berhasil ditambahkan');
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
    public function edit(string $id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('dashboard.dokumen_kebijakan.edit', compact('dokumen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dokumen = Dokumen::findOrFail($id);

        $request->validate([
            'file' => 'file|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('dokumen_kebijakan', 'public');
            $dokumen->update(['file_path' => $filePath]);
        }

        return redirect('/dashboard/dokumen_kebijakan')->with('success', 'Dokumen berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokumen $dokumen)
    {
        if ($dokumen->file_path) {
            Storage::disk('public')->delete($dokumen->file_path);
        }
        $dokumen->delete();

        return redirect('/dashboard/dokumen_kebijakan')->with('success', 'Dokumen berhasil dihapus');
    }

    public function showPublic()
    {
        $dokumen = Dokumen::all();
        return view('dokumen-kebijakan', [
            'dokumen' => $dokumen,
            'title' => 'Dokumen Kebijakan'
        ]);
    }
}
