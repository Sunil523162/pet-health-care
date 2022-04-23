
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
        <table>
            <tr style="background-color:black;">
                       <th style="padding:20px">Doctor Name:</th>
                       <th style="padding:20px">Phone No:</th>
                       <th style="padding:20px">Speciality :</th>
                        <th style="padding:20px">Room</th>
                        <th style="padding:20px">Delete</th>
                        <th style="padding:20px">Update</th>
            </tr>
            @foreach($data as $doctor)
            <tr  align="center" style="background-color:skyblue;">
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->speciality}}</td>
                <td>{{$doctor->room}}</td>
                <td>
                    <a class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a>
                </td>
               <td>
                 <a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a>
              </td>
            </tr>
            @endforeach
        </table>
        </div>            
        </div>
        <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>