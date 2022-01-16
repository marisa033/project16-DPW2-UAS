<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Eflyer</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{url('public')}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('public')}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.min.css">
      <link rel="stylesoeet" href="{{url('public')}}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- Start Top Nav -->
    @include('client.template.section.navbar')
  <!-- Close Header -->


       <!-- Start Content -->
    <div class="container">
      <div class="card mt-3 pt-3">
      <div class="row ml-1 mr-2 mb-3">
         <div class="col-md-12">
           
            <h4><b>Filter</b></h4>
         </div>

         <div class="container">
         <div class="card-body">
            <form action="{{url('shop/filter')}}" method="post">
               @csrf
               <div class="form-group">
                  <label for="" class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
               </div>
                            <br>
                            <button class="btn btn-warning float-right"><i class="fa fa-search"></i> Filter</button>
                        </form>


                    </div>
                    
                    
                </div>
            </div>
            <hr>

             <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">NEW PRODUCT</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                                      @foreach ($list_produk as $produk)
                                     <div class="col-lg-3 col-sm-3">
                              <div class="box_main">
                                             <img src="{{url("public/$produk->foto")}}" style="width:200px;height:250px;">
                                            <a href="{{ url('/produkshop', $produk->uuid) }}"
                                            class="h3 text-decoration-none">{{ $produk->nama }}</a>
                                            <hr>
                                            <p><h4>Stok :{{ $produk->stok }}</h4></p>
                                        <p class="text-center mb-0"><h4>Rp.{{number_format($produk->harga)  }}</h4></p>
                                       <button href="{{url('keranjang')}}" type="submit" class="btn btn-warning btn-block text-uppercase mb-2 rounded-pill shadow-sm">Masukan <br> Keranjang</button>
                                        </div>
                                       </div>
                                       @endforeach
                                    </div>
                                  </div>
                               <div>
                              <nav>
              {{ $list_produk->links() }}
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>       
            </div>
         </div>
        </div>
    </div>
    <!-- End Content -->


      <!-- Start Footer -->
    @include('client.template.section.footer')
    <!-- End Footer -->
    
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2021 All Rights Reserved.</p>
         </div>
      </div>
      <!-- copyright section end -->
     <script src="{{url('public')}}/js/jquery.min.js"></script>
      <script src="{{url('public')}}/js/popper.min.js"></script>
      <script src="{{url('public')}}/js/bootstrap.bundle.min.js"></script>
      <script src="{{url('public')}}/js/jquery-3.0.0.min.js"></script>
      <script src="{{url('public')}}/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="{{url('public')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{url('public')}}/js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>