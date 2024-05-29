<?php

namespace App\Http\Controllers;

use App\Models\Agen;
use App\Models\User;
use Illuminate\Http\Request;

class AgenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agens = Agen::latest('id')->paginate(5);
        return view('agens.index', compact('agens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        Agen::create($validated);
        $user = User::create($validated);

        $user->assignRole('agen');

        return redirect()->route('agens.index')
            ->with('success', 'Agen created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agen $agen)
    {
        return view('agens.show', compact('agen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agen $agen)
    {
        return view('agens.edit', compact('agen'));
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agen $agen)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::where('name', $agen->name)->update($validated);
        Agen::where('id', $agen->id)->update($validated);

        return redirect()->route('agens.index')
            ->with('success', 'Agen updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agen $agen)
    {
        $user = User::where('name', $agen->name)->first();
        if ($user) {
            $user->delete();
        }
        $agen->delete();
        return redirect()->route('agens.index')
            ->with('success', 'Agen deleted successfully');
    }
}

