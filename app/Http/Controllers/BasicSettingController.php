<?php

namespace App\Http\Controllers;

use App\Models\Admin\BasicSetting;
use App\Models\Setting;
use Illuminate\Http\Request;

class BasicSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $settings = BasicSetting::first();
        return view('Admin.settings.index', compact('settings'));
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
    public function show(BasicSetting $basicSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BasicSetting $basicSetting)
    {
        //
        $settings = BasicSetting::first();
        return view('Admin.settings.update', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'mobile' => 'nullable|string|max:20',
            'social_link' => 'nullable|url',
            'about_me' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'nullable|email',
            'total_exp' => 'nullable|numeric',
            'current_company' => 'nullable|string|max:255',
        ]);

        // Fetch existing settings (assuming only one row exists)
        $settings = BasicSetting::first();

        if (!$settings) {
            return redirect()->back()->with('error', 'Settings not found.');
        }

        // Update settings
        $settings->title = $request->title;
        $settings->mobile = $request->mobile;
        $settings->social_link = $request->social_link;
        $settings->about_me = $request->about_me;
        $settings->email = $request->email;
        $settings->total_exp = $request->total_exp;
        $settings->current_company = $request->current_company;

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $settings->logo = $logoPath;
        }

        // Save the changes
        $settings->save();

        return redirect()->route('admin.settings')->with('success', 'Basic settings updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BasicSetting $basicSetting)
    {
        //
    }
}
