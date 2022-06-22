<?php

namespace App\Http\Controllers;
use App\Models\Pengiriman;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
     //GET SEMUA DATA
     public function index(){
        return Pengiriman::all();
    }

    //GET DATA YANG DIPILIH
    public function select($id_order){
        $pengiriman = Pengiriman::find($id_order);
        return $pengiriman;
    }

    //INPUT
    public function create(request $request) {
        $pengiriman = new Pengiriman;
        $pengiriman->id_order = $request->id_order;
        $pengiriman->nama_pengirim = $request->nama_pengirim;
        $pengiriman->jenis_barang = $request->jenis_barang;
        $pengiriman->alamat_pengirim = $request->alamat_pengirim;
        $pengiriman->nohp_pengirim = $request->nohp_pengirim;
        $pengiriman->jenis_layanan = $request->jenis_layanan;
        $pengiriman->save();

        return "Data Berhasil Masuk";
    }

    //UPDATE
    public function update(request $request, $id_order) {
        $pengiriman->nama_pengirim = $request->nama_pengirim;
        $pengiriman->jenis_barang = $request->jenis_barang;
        $pengiriman->alamat_pengirim = $request->alamat_pengirim;
        $pengiriman->nohp_pengirim = $request->nohp_pengirim;
        $pengiriman->jenis_layanan = $request->jenis_layanan;

        $pengiriman = Pengiriman::find($id_order);
        $pengiriman->nama_pengirim = $request->nama_pengirim;
        $pengiriman->jenis_barang = $request->jenis_barang;
        $pengiriman->alamat_pengirim = $request->alamat_pengirim;
        $pengiriman->nohp_pengirim = $request->nohp_pengirim;
        $pengiriman->jenis_layanan = $request->jenis_layanan;
        $pengiriman->save();

        return "Data Berhasil Di Update";
    }

    //DELETE
    public function delete($id_order){
        $pengiriman = Pengiriman::find($id_order);
        $pengiriman->delete();

        return "Data Berhasil Di Hapus";
    }
}
