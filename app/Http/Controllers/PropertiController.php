<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;

class PropertiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('properti.index', [
            'propertis' => Properti::latest('id')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('properti.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'alamat' => 'required',
            'tipe' => 'required',
            'jumlah_kamar' => 'required|max:2',
            'kamar_mandi' => 'required|max:2',
            'fasilitas' => 'required',
            'harga' => 'required',
            'status' => 'required',
            'tanggal_listing' => 'required',
        ]);

        $arrayToStr = implode(',', $validated['fasilitas']);
        $validated['fasilitas'] = $arrayToStr;

        $validated['agenId'] = auth()->id();

        Properti::create($validated);
        return redirect()->route('propertis.index')->withSuccess('Properti berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Properti $properti)
    {
        return view('properti.show', [
            'properti' => $properti,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Properti $properti)
    {
        return view ('properti.edit', [
            'properti' => $properti,
            'fasilitas' => explode(',', $properti->fasilitas),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Properti $properti)
    {
        $validated = $request->validate([
            'alamat' => 'required',
            'tipe' => 'required',
            'jumlah_kamar' => 'required|max:2',
            'kamar_mandi' => 'required|max:2',
            'fasilitas' => 'required',
            'harga' => 'required',
            'status' => 'required',
            'tanggal_listing' => 'required',
        ]);

        $arrayToStr = implode(',', $validated['fasilitas']);
        $validated['fasilitas'] = $arrayToStr;

        $validated['agenId'] = auth()->id();

        Properti::where('id', $properti->id)->update($validated);
        return redirect()->route('propertis.index')->withSuccess('Properti berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Properti $properti)
    {
        Properti::destroy($properti->id);
        return redirect()->route('propertis.index')->withSuccess('Properti berhasil dihapus.');
    }
}
