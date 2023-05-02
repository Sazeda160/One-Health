
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

   <base href="/public">

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

   			<form action="{{url('send_email',$data->id)}}" method="POST">
   				
   				@csrf

   				 @if(session()->has('message'))

     		<div class="alert alert-success">

     			<button type="button" class="close" data-dismiss="alert">x</button>

     			{{session()->get('message')}}
     			
     		</div>

     		@endif 


   			<div class="mt-5 text-info" style="font-size: 20px;">
   				
   			</div>
   				<div>
   				<label>Greeting: </label>
   				<input type="text" name="greeting" class="text-black mt-4 center  w-50"  required="">
   				</div>

   				<div>
   				<label>Body: </label>
   				<input type="text" name="body" class="text-black mt-4 center  w-50"  required="">
   				</div>


   				<div>
   				<label>Action Text: </label>
   				<input type="text" name="actiontext" class="text-black mt-4 center  w-50" required="">
   				</div>

                   <div>
                    <label>Action Url: </label>
                    <input type="text" name="actionurl" class="text-black mt-4 center  w-50" required="">
                    </div>


                    <div>
                        <label>End Part: </label>
                        <input type="text" name="endpart" class="text-black mt-4 center  w-50" required="">
                        </div>

   				
   				<div>
   					<input type="submit" name="" class="btn btn-info mt-3">
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