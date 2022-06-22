<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;

class TransaksiController extends Controller
{
        //GET SEMUA DATA
        public function index(){
            return transaksi::all();
        }
    
        //GET DATA YANG DIPILIH
        public function select($id_order){
            $transaksi = transaksi::find($id_order);
            return $transaksi;
        }
    
        //INPUT
        public function create(request $request) {
            $transaksi = new transaksi;
            $transaksi->id_order = $request->id_order;
            $transaksi->jenis_layanan = $request->jenis_layanan;
            $transaksi->jenis_barang = $request->jenis_barang;
            $transaksi->berat_barang = $request->berat_barang;
            $transaksi->total_harga = $request->total_harga;
            $transaksi->save();
    
            return "Data Berhasil Masuk";
        }
    
        //UPDATE
        public function update(request $request, $id_order) {
            $transaksi->jenis_layanan = $request->jenis_layanan;
            $transaksi->jenis_barang = $request->jenis_barang;
            $transaksi->berat_barang = $request->berat_barang;
            $transaksi->total_harga = $request->total_harga;
    
            $transaksi = transaksi::find($id_order);
            $transaksi->jenis_layanan = $request->jenis_layanan;
            $transaksi->jenis_barang = $request->jenis_barang;
            $transaksi->berat_barang = $request->berat_barang;
            $transaksi->total_harga = $request->total_harga;
            $transaksi->save();
    
            return "Data Berhasil Di Update";
        }
    
        //DELETE
        public function delete($id_order){
            $transaksi = transaksi::find($id_order);
            $transaksi->delete();
    
            return "Data Berhasil Di Hapus";
        }
}
