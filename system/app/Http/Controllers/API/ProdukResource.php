<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukResource extends Controller
{

    public function index()
    {
        return Produk::all();
    }


    public function store()
    {
        if (request('nama') && request('harga') && request('stok') && request('detail')) {

            $produk = new Produk();
            $produk->Nama = request('nama');
            $produk->Harga = request('harga');
            $produk->Stok = request('stok');
            $produk->Detail = request('detail');
            $produk->save();
            return collect([
                'respond' => 200,
                'message' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "field ada yang kosong"
            ]);
        }
    }


    public function show($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            return collect([
                'respond' => 200,
                'message' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "Produk tidak ditemukan"
            ]);
        }
    }



    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->Nama = request('nama') ?? $produk->Nama;
            $produk->Harga = request('harga')?? $produk->Harga;
            $produk->Stok = request('stok') ?? $produk->Stok;
            $produk->Detail = request('detail')?? $produk->Detail;
            $produk->save();
            return collect([
                'respond' => 200,
                'message' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "Produk tidak ditemukan"
            ]);
        }
    }


    public function destroy($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->delete();
            return collect([
                'respond' => 200,
                'message' => "produk berhasil dihapus"
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "Produk tidak ditemukan"
            ]);
        }
    }
}
