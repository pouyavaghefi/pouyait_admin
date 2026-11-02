<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        return view('panel.page', [
            'title' => 'Website Settings',
            'partial' => 'panel.main',
            'settings' => SiteSetting::orderBy('group')
                ->orderBy('key')
                ->get(),
        ]);
    }

    public function update(Request $request)
    {
        $settings = SiteSetting::all();

        $validated = $request->validate([
            'settings' => ['nullable', 'array'],
            'settings.*' => ['boolean'],
        ]);

        $submitted = $validated['settings'] ?? [];

        foreach ($settings as $setting) {
            $setting->update([
                'value' => array_key_exists($setting->key, $submitted),
            ]);
        }

        return redirect()
            ->route('settings')
            ->with('success', 'Settings saved successfully.');
    }
}
