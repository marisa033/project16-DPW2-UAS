<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Checkout;
use App\Models\Cart;

class ClientController extends Controller
{



  function showshop()
  {
    
    $data['list_produk'] = Product::paginate(4);
    return view('client.shop', $data);
  }

  //  function showCheckout()
  // {
    
  //   $data['list_produk'] = Product::paginate(1);
  //   return view('client.checkout', $data);
  // }

  // function showkeranjang()
  // {
    
  //   $data['list_produk'] = Product::paginate(1);
  //   return view('client.keranjang', $data);
  // }

  function filter()
  {
    $nama = request('nama');
    $data['nama'] = $nama;
    $data['list_produk'] = Product::where('nama', 'like', "%$nama%")->paginate(4);

    return view('client.shop', $data);
  }


  // function filter2()
  // {
  //   $harga_min = request('harga_min');
  //   $harga_max = request('harga_max');
  //   $data['harga_min'] = $harga_min;
  //   $data['harga_max'] = $harga_max;

  //   $data['list_produk'] = Product::whereBetween('harga', [$harga_min, $harga_max])->get();
  //   return view('client.shop', $data);
  // }

  //  function showCheckout()
  // {
  //   return view('client.checkout');
  // }


  function showhome()
  {
    return view('client.home');
  }
  function showcontact()
  {
    return view('client.contact');
  }
  function showabout()
  {
    return view('client.about');
  }

  function showprodukshop(Product $produk)
  {

    $data['produk'] = $produk;
    return view('client.produkshop', $data);
  }


  function checkout(){
    return view('client.checkout');
  }

  function postcheckout(){
    $produk = new Checkout;
    $produk->firtname = request('firtname');
    $produk->lastname = request('lastname');
    $produk->address = request('address');
    $produk->phone = request('phone');
    $produk->email = request('email');
    // dd(request()->all());
    $produk->save();

    return redirect('shop');
  }

  function cart(){
    return view('client.cart');
  }

  function postcart(){
    $produk = new Cart;
    $produk->nama_produk = request('nama_produk');
    $produk->quantity = request('quantity');
    // dd(request()->all());
    $produk->save();

    return redirect('checkout');
  }
}
