<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    //GET SEMUA DATA
    public function index(){
        return Customer::all();
    }

    //GET DATA YANG DIPILIH
    public function select($id_customer){
        $customer = Customer::find($id_customer);
        return $customer;
    }

    //INPUT
    public function create(request $request) {
        $customer = new Customer;
        $customer->id_customer = $request->id_customer;
        $customer->nama_pengirim = $request->nama_pengirim;
        $customer->jenis_barang = $request->jenis_barang;
        $customer->alamat_pengirim = $request->alamat_pengirim;
        $customer->nohp_pengirim = $request->nohp_pengirim;
        $customer->jenis_layanan = $request->jenis_layanan;
        $customer->save();

        return "Data Berhasil Masuk";
    }

    //UPDATE
    public function update(request $request, $id_customer) {
        $customer->nama_pengirim = $request->nama_pengirim;
        $customer->jenis_barang = $request->jenis_barang;
        $customer->alamat_pengirim = $request->alamat_pengirim;
        $customer->nohp_pengirim = $request->nohp_pengirim;
        $customer->jenis_layanan = $request->jenis_layanan;

        $customer = Customer::find($id_customer);
        $customer->nama_pengirim = $request->nama_pengirim;
        $customer->jenis_barang = $request->jenis_barang;
        $customer->alamat_pengirim = $request->alamat_pengirim;
        $customer->nohp_pengirim = $request->nohp_pengirim;
        $customer->jenis_layanan = $request->jenis_layanan;
        $customer->save();

        return "Data Berhasil Di Update";
    }

    //DELETE
    public function delete($id_customer){
        $customer = Customer::find($id_customer);
        $customer->delete();

        return "Data Berhasil Di Hapus";
    }
}
