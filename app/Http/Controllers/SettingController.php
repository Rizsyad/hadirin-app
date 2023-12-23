<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $settings = Setting::all();

        return view('setting.index', compact('settings'));
    }

    /**
     * @param \App\Http\Requests\SettingUpdateRequest $request
     * @param \App\Models\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function update(SettingUpdateRequest $request, Setting $setting)
    {
        $setting->update($request->validated());

        $request->session()->flash('setting.id', $setting->id);

        return redirect()->route('setting.index');
    }
}
