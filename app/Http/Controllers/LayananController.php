<?php

namespace App\Http\Controllers;
use App\Models\Layanan;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    //GET SEMUA DATA
    public function index(){
        return Layanan::all();
    }

    //GET DATA YANG DIPILIH
    public function select($id_layanan){
        $layanan = Layanan::find($id_layanan);
        return $layanan;
    }

    //INPUT
    public function create(request $request) {
        $layanan = new Layanan;
        $layanan->id_layanan = $request->id_layanan;
        $layanan->jenis_layanan = $request->jenis_layanan;
        $layanan->jenis_transportasi = $request->jenis_transportasi;
        $layanan->jenis_barang = $request->jenis_barang;
        $layanan->save();

        return "Data Berhasil Masuk";
    }

    //UPDATE
    public function update(request $request, $id_layanan) {
        $layanan->jenis_layanan = $request->jenis_layanan;
        $layanan->jenis_transportasi = $request->jenis_transportasi;
        $layanan->jenis_barang = $request->jenis_barang;

        $layanan = layanan::find($id_layanan);
        $layanan->jenis_layanan = $request->jenis_layanan;
        $layanan->jenis_transportasi = $request->jenis_transportasi;
        $layanan->jenis_barang = $request->jenis_barang;
        $layanan->save();

        return "Data Berhasil Di Update";
    }

    //DELETE
    public function delete($id_layanan){
        $layanan = Layanan::find($id_layanan);
        $layanan->delete();

        return "Data Berhasil Di Hapus";
    }
}
