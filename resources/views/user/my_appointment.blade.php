


<!DOCTYPE html>
<html lang="en">
<head>
  

  	@include('user.css')

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>


  <!-- Start Header -->
 	@include('user.header')

 	<!-- End Header -->

   
 	<div class="container" align="center">

 		<div class="table mt-5" >
 			

 			<table class="text-center">
 			<tr style="background-color: black; color: white;">
 				<th>Doctor Name</th>

 				<th>Date</th>

 				<th>Message</th>

 				<th>Status</th>

 				<th>Cancel Appointment</th>

 			</tr>
 					@foreach($appoint as $appoints)

 				<tr>

 					<td>{{$appoints->doctor}}</td>

 					<td>{{$appoints->date}}</td>

 					<td>{{$appoints->message}}</td>

 					<td>{{$appoints->status}}</td>

 					<td> <a  href="{{url('cancel_appointment',$appoints->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure to Delete It?')">Cancel</a> </td>


 				</tr>

 					@endforeach

 			</table>

 		</div>
 		

 	</div>

<!-- Script Start -->


@include('user.script')


<!-- Script End -->


</body>
</html>