
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
                       <th style="padding:20px">Customer Name:</th>
                       <th style="padding:20px">Email</th>
                       <th style="padding:20px">Phone No:</th>
                       <th style="padding:20px">Doctor Name:</th>
                       <th style="padding:20px">Date</th>
                       <th style="padding:20px">Message</th>
                       <th style="padding:20px">Status</th>
                       <th style="padding:20px">Approve</th>
                       <th style="padding:20px">Cancle</th>
                    </tr>
@foreach ($data as $appoint)
                    <tr align="center" style="background-color:skyblue;">
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('canlced',$appoint->id)}}">Cancled</a>
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