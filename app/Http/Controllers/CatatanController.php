<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catatan;

class CatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catatans = Catatan::all();
        return view('catatan.index', compact('catatans'));
    }

    public function create()
    {
        return view('catatan.create');
    }
    public function store(Request $request)
    {
        $catatan = Catatan::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'category' => $request->category,
            'photo' => '',
        ]);
        return redirect('/catatan');
        }
    public function show($id)
    {
        
        $catatan = Catatan::FindOrFail($id);

        return view('catatan.detail', compact('catatan'));
    }
    public function edit($id)
    {
        $catatan = Catatan::FindOrFail($id);

        return view('catatan.edit', compact('catatan'));

    }
    public function update(Request $request, $id)
    {
        Catatan::whereId($id)->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'category' => $request->category,
            'photo' => '',
        ]);
        return redirect('/catatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catatan = Catatan::findOrFail($id);
        $catatan->delete();
        return redirect('/catatan');
    }
}
