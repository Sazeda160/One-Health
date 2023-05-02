
<!DOCTYPE html>
<html lang="en">
  <head>
   
   <style type="text/css">
   	
   	label
   	{

   		display: inline-block;
   		width: 200px;
   	}
   </style>

   	@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      

      <!-- Navbar Start -->


      @include('admin.sidebar')


      @include('admin.navbar')



      <!-- Navbar End -->
      <!-- partial -->
     <div class="container-fluid page-body-wrapper">



   
   		<div class="container text-center mt-5" align="center">

   		<div class="table">

   			<table>
   				
   				<tr style="background-color: black; color: white;">
   					
   					<th>Doctor Name</th>

   					<th>Phone</th>

   					<th>Speciality</th>

   					<th>Room No</th>

   					<th>Image</th>

   					<th>Delete</th>

   					<th>Update</th>
   					

   				</tr>

   				@foreach($data as $data)


   				<tr style="background-color: skyblue; color: black;">
   					<td>{{$data->name}}</td>
   					<td>{{$data->phone}}</td>
   					<td>{{$data->speciality}}</td>
   					<td>{{$data->room}}</td>
   					<td><img height="100" width="100" src="doctorimage/{{$data->image}}" ></td>

   					<td><a onclick="return confirm('Are You Sure to Delete It?')" class="btn btn-danger" href="{{url('doctor_delete',$data->id)}}">Delete</a></td>

   					<td><a class="btn btn-warning" href="{{url('update_doctor',$data->id)}}">Update</a></td>
   				</tr>

   				@endforeach
   				

   			</table>
   				
   			
   		</div>



   	</div>





	</div>
        <!-- partial -->
   
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   			@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>