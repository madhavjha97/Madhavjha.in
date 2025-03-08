<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(ProLang $proLang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProLang $proLang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProLang $proLang)
    {
        //
    }
}
