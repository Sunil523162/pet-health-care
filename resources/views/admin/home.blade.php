
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
     @include('admin.body')
    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>