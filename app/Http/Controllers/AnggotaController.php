<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // Menampilkan daftar data anggota
    public function index()
    {
        $anggotas = Anggota::with('user')->get();
        return view('anggotas.index', compact('anggotas'));
    }

    // Menampilkan form tambah anggota
    public function create()
    {
        $users = User::all();
        return view('anggotas.create', compact('users'));
    }

    // Menyimpan data anggota baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'nomor_anggota' => 'required|unique:anggotas',
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggotas.index')->with('success', 'Data anggota berhasil ditambahkan.');
    }

    // Menampilkan detail anggota (opsional)
    public function show(Anggota $anggota)
    {
        return view('anggotas.show', compact('anggota'));
    }

    // Menampilkan form edit data anggota
    public function edit(Anggota $anggota)
    {
        $users = User::all();
        return view('anggotas.edit', compact('anggota', 'users'));
    }

    // Memperbarui data anggota di database
    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
            'user_id' => 'required',
            'nomor_anggota' => 'required|unique:anggotas,nomor_anggota,' . $anggota->id,
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $anggota->update($request->all());

        return redirect()->route('anggotas.index')->with('success', 'Data anggota berhasil diperbarui.');
    }

    // Menghapus data anggota
    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return redirect()->route('anggotas.index')->with('success', 'Data anggota berhasil dihapus.');
    }
}