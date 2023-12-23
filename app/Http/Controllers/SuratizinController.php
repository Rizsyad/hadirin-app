<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuratizinUpdateRequest;
use App\Models\Suratizin;
use Illuminate\Http\Request;

class SuratizinController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $suratizins = Suratizin::all();

        return view('suratizin.index', compact('suratizins'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Suratizin $suratizin
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Suratizin $suratizin)
    {
        return view('suratizin.show', compact('suratizin'));
    }

    /**
     * @param \App\Http\Requests\SuratizinUpdateRequest $request
     * @param \App\Models\Suratizin $suratizin
     * @return \Illuminate\Http\Response
     */
    public function update(SuratizinUpdateRequest $request, Suratizin $suratizin)
    {
        $suratizin->update($request->validated());

        $request->session()->flash('suratizin.id', $suratizin->id);

        return redirect()->route('suratizin.index');
    }
}
