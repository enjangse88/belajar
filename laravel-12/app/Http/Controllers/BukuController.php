<?php

namespace App\Http\Controllers;
use App\Models\BukuModel;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $buku = BukuModel::all();
        //print_r($buku); untuk test output semua buku
         return view('buku.index', compact('buku'));
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
        $validated = $request->validate([
            'judul' => 'required|min:3',
            'pengarang' => 'required|min:3',
            'tahun_terbit' => 'required',
        ]);
        BukuModel::create($validated);
        return redirect()->route('buku.index')->with('success','Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $buku = BukuModel::all();
        $bukuDetail = BukuModel::findOrFail($id);
        return view('buku.index', compact('buku', 'bukuDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
            'judul' => 'required|min:3',
            'pengarang' => 'required|min:3',
            'tahun_terbit' => 'required'
        ]);
        BukuModel::where('id', $id)->update($validated);
        return redirect()->route('buku.index')->with('success','Buku berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $bukuDetail = BukuModel::findOrFail($id);
        $bukuDetail->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil di hapus');
    }


    public function search(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword){
        $search = $request->input('search');
        $buku = BukuModel::where('judul','like', "%$search%")->get();
        #print_r($resultbuku);
        }else{
            $resultbuku = BukuModel::all();
        }
        return view('buku.index', compact('buku','search'));
        //return redirect()->route('buku.index', compact('buku','search'))->with('success','Buku berhasil ditemukan');
    }
}
