
<!DOCTYPE html>
<html lang="en">
  <head>
      <style>
          label{
             display: inline-block;
             width:200px; 
          }
      </style>
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
           
            <div class="container" align="center" style="padding-top:50px;">
                 @if (session()->has('message'))

            <button type="button" class="data-dismiss">
                x
            </button>
                <div class="alert alert-success">
                    {{session()->get('message')}}
                    
                </div>
            @endif
                <form action="{{url('upload_doctor')}}" method="GET" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px;">
                        <label>Doctor Name:</label>
                        <input type="text" style="color:black;" name="name" placeholder="Write a name" required=""></input>
                    </div>
                    <div style="padding:15px;">
                        <label>Phone</label>
                        <input type="number" style="color:black;" name="number" placeholder="Write a Number" required=""></input>
                    </div>
                    <div style="padding:15px;">
                        <label>Speciality</label>
                       <select name="speciality" style="color:black; width:215px;" >
                           <option>--Select--</option>
                           <option value="cat">Cat</option>
                           <option value="dog">Dog</option>
                           <option value="rabbit">Rabbbit</option>
                           <option value="bird">Bird</option>
                       </select>
                    </div>
                    <div style="padding:15px;">
                        <label>Room</label>
                        <input type="text" style="color:black;" name="room" placeholder="Write the room number" required=""></input>
                    </div>
                   <!--  <div style="padding:15px;">
                        <label>Image</label>
                        <input type="file" name="file">
                    </div> -->
                    <div style="padding:15px;">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>