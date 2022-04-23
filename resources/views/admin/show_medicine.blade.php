
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.mainbody')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top:100px;">
        <h1>Heading Here</h1>
</div>
</div>

    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>