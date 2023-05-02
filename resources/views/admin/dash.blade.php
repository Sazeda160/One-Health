
<!DOCTYPE html>
<html lang="en">
  <head>
   

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
     
       


        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              <div class="col-xl-4 col-sm-6 grid-margin stretch-card offset-2">
                <div class="card">
                  <div class="card-body">

                    
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                       
                          <h3 style="text-align: center;">{{$total_doctor}}</h3>
                        
                       
                      </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-info ">
                          <span class="mdi mdi-account-circle icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">

                    <h6 class=" text-center font-weight-bold">All Doctors</h6>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$total_appointment}}</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-calendar-check icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-center font-weight-bold">All Appointment</h6>
                  </div>
                </div>
              </div>
             
             
            </div>


            
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
         	@include('admin.footer')
          <!-- partial -->
        </div>
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