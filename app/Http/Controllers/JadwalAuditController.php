<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalAudit;

class JadwalAuditController extends Controller
{

    public function showPublic()
    {
        return view('/jadwal-audit', [
            'title' => 'Jadwal Audit',
            'jadwal_audit' => JadwalAudit::all()
        ]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.jadwal_audit.index', [
            "title" => "Dashboard Jadwal Audit",
            "jadwal_audit" => JadwalAudit::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jadwal_audit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_audit' => 'required',
            'jam_audit' => 'required',
            'nama_asesor' => 'required',
            'program_studi' => 'required',
            'tempat' => 'required'
        ]);

        JadwalAudit::create($validatedData);

        return redirect('/dashboard/jadwal_audit')->with('success', 'Data Jadwal Audit berhasil ditambahkan');
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
    public function edit(JadwalAudit $jadwal_audit)
    {
        return view('dashboard.jadwal_audit.edit', [
            "jadwal_audit" => $jadwal_audit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JadwalAudit $jadwal_audit)
    {
        $validatedData = $request->validate([
            'tanggal_audit' => 'required',
            'jam_audit' => 'required',
            'nama_asesor' => 'required',
            'program_studi' => 'required',
            'tempat' => 'required'
        ]);

        $jadwal_audit->update($validatedData);

        return redirect('/dashboard/jadwal_audit')->with('success', 'Data Jadwal Audit berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JadwalAudit $jadwal_audit)
    {
        $jadwal_audit->destroy($jadwal_audit->id);

        return redirect('/dashboard/jadwal_audit')->with('success', 'Data akreditasi berhasil dihapus');
    }
}
