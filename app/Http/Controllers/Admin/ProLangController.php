<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProLangRequest;
use App\Models\Admin\ProLang;
use Illuminate\Http\Request;

class ProLangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $prolang = ProLang::all();
        return view('admin.prolang.index', compact('prolang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.prolang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProLangRequest $request)
    {
        ProLang::create($request->validated());

        return redirect()->route('pro-langs.index')
            ->with('success', 'Language created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProLang $proLang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $proLang = ProLang::findOrFail($id);
        return view('admin.prolang.edit', compact('proLang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProLangRequest $request, ProLang $proLang)
    {
        //
        $proLang->update($request->validated());
        return redirect()->route('pro-langs.index')->with('success', 'Note updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $proLang = ProLang::findOrFail($id);
        $proLang->delete();
        return redirect()->route('pro-langs.index')->with('success', 'Programming language deleted successfully');

    }
}
