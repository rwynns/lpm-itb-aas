<?php

namespace App\Http\Controllers;

use App\Models\Akreditasi;
use Illuminate\Http\Request;

class AkreditasiController extends Controller
{
    // For public view
    public function showPublic()
    {
        return view('akreditasi', [
            'title' => 'Akreditasi',
            'akreditasi' => Akreditasi::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.akreditasi.index', [
            'akreditasi' => Akreditasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.akreditasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'status_peringkat' => 'required|max:255',
            'doktor_jumlah' => 'required',
            'doktor_persentase' => 'required',
            'magister_jumlah' => 'required',
            'magister_persentase' => 'required',
            'sarjana_jumlah' => 'required',
            'sarjana_persentase' => 'required',
            'profesi_jumlah' => 'required',
            'profesi_persentase' => 'required',
            'total_jumlah' => 'required',
            'total_persentase' => 'required',
        ]);

        Akreditasi::create($validatedData);

        return redirect('/dashboard/akreditasi')->with('success', 'Data akreditasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Akreditasi $akreditasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akreditasi $akreditasi)
    {
        return view('dashboard.akreditasi.edit', [
            'akreditasi' => $akreditasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Akreditasi $akreditasi)
    {
        $validatedData = $request->validate([
            'status_peringkat' => 'required|max:255',
            'doktor_jumlah' => 'required',
            'doktor_persentase' => 'required',
            'magister_jumlah' => 'required',
            'magister_persentase' => 'required',
            'sarjana_jumlah' => 'required',
            'sarjana_persentase' => 'required',
            'profesi_jumlah' => 'required',
            'profesi_persentase' => 'required',
            'total_jumlah' => 'required',
            'total_persentase' => 'required',
        ]);

        $akreditasi->update($validatedData);

        return redirect('/dashboard/akreditasi')->with('success', 'Data Akreditasi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akreditasi $akreditasi)
    {
        $akreditasi->destroy($akreditasi->id);

        return redirect('/dashboard/akreditasi')->with('success', 'Data akreditasi berhasil dihapus');
    }
}
