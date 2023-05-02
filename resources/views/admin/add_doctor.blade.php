
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



   
   		<div class="container" align="center">

   			<form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
   				
   				@csrf

   				@if(session()->has('message'))

     		<div class="alert alert-success">

     			<button type="button" class="close" data-dismiss="alert">x</button>

     			{{session()->get('message')}}
     			
     		</div>

     		@endif


   			<div class="mt-5 text-info" style="font-size: 20px;">
   				<h1> <u> <b>Add Doctor</b> </u></h1>
   			</div>
   				<div>
   				<label>Doctor Name: </label>
   				<input type="text" name="name" class="text-black mt-4 center  w-50" placeholder="Write the Name" required="">
   				</div>

   				<div>
   				<label>Phone Number: </label>
   				<input type="number" name="phone" class="text-black mt-4 center  w-50" placeholder="Write the Phone No." required="">
   				</div>


   				<div>
   				<label>Speciality: </label>

   				<select class="text-black mt-4 center w-50" name="speciality" required="">
   					<option>---Select---</option>
   				<option value="General">General</option>
   				<option value="Skin">Skin</option>
   				<option value="Heart">Heart</option>
   				<option value="Eye">Eye</option>
   				<option value="Dental">Dental</option>
   				<option value="cardiology">Cardiology</option>


   				</select>
   				
   				</div>


   				<div>
   				<label>Room No: </label>
   				<input type="text" name="room" class="text-black mt-4 center  w-50" placeholder="Write the Room No" required="">
   				</div>

   				

          <div>
          <label>Doctor Image: </label>
          <input type="file" name="file" class="w-50 mt-4" required="">
          </div>

   				<div>
   					<input type="submit" name="" class="btn btn-success mt-3">
   				</div>

   			</form>
   			
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