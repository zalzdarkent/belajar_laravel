<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku', compact('buku'));
    }

    public function create(){
        return view('tambah-buku');
    }

    public function store(Request $request){
        $validasiData = $request->validate([
            'judul' => 'required|max:255',
            'pengarang' => 'required|max:255',
            'penerbit' => 'required|max:255',
        ]);

        Buku::create($validasiData);
        return redirect('buku');
    }
}
