<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuratcutiUpdateRequest;
use App\Models\Suratcuti;
use Illuminate\Http\Request;

class SuratcutiController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $suratcutis = Suratcuti::all();

        return view('suratcuti.index', compact('suratcutis'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Suratcuti $suratcuti
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Suratcuti $suratcuti)
    {
        return view('suratcuti.show', compact('suratcuti'));
    }

    /**
     * @param \App\Http\Requests\SuratcutiUpdateRequest $request
     * @param \App\Models\Suratcuti $suratcuti
     * @return \Illuminate\Http\Response
     */
    public function update(SuratcutiUpdateRequest $request, Suratcuti $suratcuti)
    {
        $suratcuti->update($request->validated());

        $request->session()->flash('suratcuti.id', $suratcuti->id);

        return redirect()->route('suratcuti.index');
    }
}
