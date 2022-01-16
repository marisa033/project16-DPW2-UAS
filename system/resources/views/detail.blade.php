@extends('customer.template.baseUser')
@section('content')

      <div class="card">
          <div class="container">
              <div class="row mt-5 mb-5">
                  <div class="col-md-6">
                      <div class="card-body shadow">
                      <div class="tshirt_img"><img src="{{url('public')}}/images/tshirt-img.png"></div>
                      </div>
                  
                  </div>

                  <div class="col-md-6">
                  <h4 class="shirt_text" style="text-align:left">Man T -shirt</h4>
                  <h4 class="shirt_text" style="text-align:left">Start Price : Rp. 65.000</h4>
                  <h4 class="shirt_text" style="text-align:left">Stok   : 20pcs</h4> <hr>
                    <label for=""> Detail</label>
                    <p> - Branded fashion <br>
                        - Cocok untuk pria dan wanita (casual) <br>
                        - Nice quality, Adem dan nyaman Saat Di kenakan <br>
 
                        - Size : <br>
                        - S. 41 x 60 CM <br>
                        - M. 45 x 63 CM <br>
                        - L. 48 x 67 CM <br>
                        - XL. 51 x 71 CM <br>
                        - Bahan catton 100% <br>
                        - Kelebihanya : <br>
                        - Bahan mudah menyerap keringat. <br>
                        - Bahan tebal & sisi jahitan <br>
                        - Samping + bawah sangat rapih. <br>
                        - ( dijamin sensasinya beda banget dengan dengan kaos kami - Buktikan Sendiri Sensasinya ) <br>
                        - Sablon : <br>
                        - Halus & Lembut,Warna Solid <br>
                        - Tidak Pudar (Tajam),Tahan Lama <br>
                        - Disablon dengan heat press sistem bukan manual (tangan) <br>
                        - Happy shopping Guys :-) <br></p>
                    <button class="btn btn-primary btn-block">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>  add cart
                    </button>
                  </div>
              </div>
          </div>
      </div>
      <!-- banner bg main end -->
      @endsection

