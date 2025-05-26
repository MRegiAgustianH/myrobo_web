<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\ActivityLog;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $sekolahs = Sekolah::all();
        return view('sekolah.index', compact('sekolahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        Sekolah::create($validated);

        ActivityLog::create([
            'user_id' => auth()->id(), 
            'action' => 'created', 
            'model' => 'App\Models\Sekolah', 
            'description' => 'Menambahkan sekolah baru: ' . $validated['nama'],
            'new_data' => json_encode($validated), 
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('sekolah.index')
                         ->with('success', 'Data sekolah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('sekolah.show', compact('sekolah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $sekolah = Sekolah::findOrFail($id);
        return view('sekolah.edit', compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sekolah = Sekolah::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);
        // Simpan data lama untuk log
        $oldData = $sekolah->getAttributes();
    
        // Update data sekolah
        $sekolah->update($validatedData);

        // Catat log aktivitas
        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'updated',
            'model' => 'App\Models\Sekolah',
            'description' => 'Memperbarui data sekolah: ' . $oldData['nama'],
            'old_data' => json_encode($oldData),
            'new_data' => json_encode($validatedData),
            'created_at' => now(),
            'updated_at' => now()
        ]);


    return redirect()->route('sekolah.index')
                     ->with('success', 'Data sekolah berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $sekolah = Sekolah::findOrFail($id);
        $deletedData = $sekolah->getAttributes();
    
        // Hapus data sekolah
        $sekolah->delete();

        // Catat log aktivitas
        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'deleted',
            'model' => 'App\Models\Sekolah',
            'description' => 'Menghapus sekolah: ' . $deletedData['nama'],
            'old_data' => json_encode($deletedData),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        return redirect()->route('sekolah.index')
                         ->with('success', 'Data sekolah berhasil dihapus');
    }
}
