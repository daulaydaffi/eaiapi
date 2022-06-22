<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\statuspaket;
class StatuspaketController extends Controller
{
    //GET SEMUA DATA
    public function index(){
        return statuspaket::all();
    }

    //GET DATA YANG DIPILIH
    public function select($no_resi){
        $statuspaket = statuspaket::find($no_resi);
        return $statuspaket;
    }

    //INPUT
    public function create(request $request) {
        $statuspaket = new statuspaket;
        $statuspaket->no_resi = $request->no_resi;
        $statuspaket->tanggal_pengiriman = $request->tanggal_pengiriman;
        $statuspaket->jenis_layanan = $request->jenis_layanan;
        $statuspaket->berat_barang = $request->berat_barang;
        $statuspaket->status_paket = $request->status_paket;
        $statuspaket->save();

        return "Data Berhasil Masuk";
    }

    //UPDATE
    public function update(request $request, $no_resi) {
        $statuspaket->tanggal_pengiriman = $request->tanggal_pengiriman;
        $statuspaket->jenis_layanan = $request->jenis_layanan;
        $statuspaket->berat_barang = $request->berat_barang;
        $statuspaket->status_paket = $request->status_paket;

        $statuspaket = statuspaket::find($no_resi);
        $statuspaket->tanggal_pengiriman = $request->tanggal_pengiriman;
        $statuspaket->jenis_layanan = $request->jenis_layanan;
        $statuspaket->berat_barang = $request->berat_barang;
        $statuspaket->status_paket = $request->status_paket;
        $statuspaket->save();

        return "Data Berhasil Di Update";
    }

    //DELETE
    public function delete($no_resi){
        $statuspaket = statuspaket::find($no_resi);
        $statuspaket->delete();

        return "Data Berhasil Di Hapus";
    }
}
