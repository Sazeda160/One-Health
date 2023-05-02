
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
     <div class="container-fluid  page-body-wrapper">



   
   	<div class=" container text-center mt-5">

   		<div class="" >

   			<table style="width: 100%">
   				
   				<tr style="background-color: black; color: white;">
   					
   					<th>Customer Name</th>

   					<th>Email</th>

   					<th>Phone</th>

   					<th>Doctor Name</th>

   					<th>Date</th>

   					<th>Message</th>

   					<th>Status</th>

   					<th>Approved</th>

   					<th>Canceled</th>

					<th>Send Mail</th>

   				</tr>


   				@foreach($data as $appoint)

   				<tr style="background-color: skyblue; color: black;" >
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
   						<a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a>
   					</td>

					   <td>
						<a class="btn btn-info" href="{{url('email_view',$appoint->id)}}">Send Email</a>
					</td>


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