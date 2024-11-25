<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.postingan.index', [
            "postingans" => Postingan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.postingan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:postingans',
            'image' => 'image|file|max:5120',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('gambar-postingan');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Postingan::create($validatedData);

        return redirect('/dashboard/postingan')->with('success', 'Postingan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Postingan $postingan)
    {
        return view('dashboard.postingan.show', [
            "postingan" => $postingan,
            "slug" => $postingan->slug
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Postingan $postingan)
    {
        return view('dashboard.postingan.edit', [
            "postingan" => $postingan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Postingan $postingan)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'body' => 'required'
        ];

        if ($request->slug != $postingan->slug) {
            $rules['slug'] = 'required|unique:postingans';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('gambar-postingan');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Postingan::where('id', $postingan->id)
            ->update($validatedData);

        return redirect('/dashboard/postingan')->with('success', 'Postingan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Postingan $postingan)
    {
        if ($postingan->image) {
            Storage::delete($postingan->image);
        }

        Postingan::destroy($postingan->id);

        return redirect('/dashboard/postingan')->with('success', 'Postingan berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Postingan::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
