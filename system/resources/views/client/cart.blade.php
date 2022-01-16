@extends('client.template.baseUser')

@section('content')

<!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
            <div class="col-lg-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <a href="{{asset('public')}}/images/anmol.png" class="image-popup"><img src="{{asset('public')}}/images/anmol.png" class="img-fluid" alt="Colorlib Template" style="width:350px;height:320px;"></a>   
                    </div>
                </div>
            </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">


                        <div class="card-body">
                            <h1 class="h1">Gelang</h1>
                            <p class="h3 py-2">Rp. 3.000.000</p>

                            <h4> Seller : Marisa</h4>
                             <h5> stok : 5 </h5>
                            
                            <h4>Detail  :</h4>
                            <p id="detail">bagus
                            </p>

                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

<div class="w-100"></div>
  </div>
  
  <div class="row"></div>
    <div class="col-md-12 ">
      <div class="card">
        <div class="card-header">
          <b>Detail Pengiriman<b> 
        </div> <br>
              <form action="{{url('cart')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="row align-items-end">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                  <div class="form-group">
                <div class="w-100"></div>
                <div class="col-md-12">
                  <div class="form-group mt-4">
                    <div class="radio">
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary py-3 px-4">Checkout</button>
            </form><!-- END -->
          </div>
          <div class="col-xl-5">
    
                </div>
              </div>
              <br>
              <hr>
    </section>
     <!-- .section -->

@endsection