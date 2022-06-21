<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendapatan;
class PendapatanController extends Controller
{
    //GET SEMUA DATA
    public function index(){
        return Pendapatan::all();
    }

    //GET DATA YANG DIPILIH
    public function select($no_resi){
        $pendapatan = Pendapatan::find($no_resi);
        return $pendapatan;
    }

    //INPUT
    public function create(request $request) {
        $pendapatan = new Pendapatan;
        $pendapatan->no_resi = $request->no_resi;
        $pendapatan->jenis_layanan = $request->jenis_layanan;
        $pendapatan->total_harga = $request->total_harga;
        $pendapatan->save();

        return "Data Berhasil Masuk";
    }

    //UPDATE
    public function update(request $request, $no_resi) {
        $pendapatan->jenis_layanan = $request->jenis_layanan;
        $pendapatan->total_harga = $request->total_harga;

        $pendapatan = Pendapatan::find($no_resi);
        $pendapatan->jenis_layanan = $request->jenis_layanan;
        $pendapatan->total_harga = $request->total_harga;
        $pendapatan->save();

        return "Data Berhasil Di Update";
    }

    //DELETE
    public function delete($no_resi){
        $pendapatan = Pendapatan::find($no_resi);
        $pendapatan->delete();

        return "Data Berhasil Di Hapus";
    }
}
