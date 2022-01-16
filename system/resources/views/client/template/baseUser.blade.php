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

      @include('client.template.section.link')
    
      @stack('style')
   </head>
   <body>

      <!-- Start Top Nav -->
    @include('client.template.section.navbar')
    <!-- Close Header -->


    @yield('content')


    <!-- Start Footer -->
  @include('client.template.section.footer')
    <!-- End Footer -->

    
      @include('client.template.section.script')

</body>

</html>