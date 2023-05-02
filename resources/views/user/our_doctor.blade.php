


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

     <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="banner-section">
          <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Doctors</li>
              </ol>
            </nav>
            <h1 class="font-weight-normal">Our Doctors</h1>
          </div> <!-- .container -->
        </div> <!-- .banner-section -->
      </div> <!-- .page-banner -->

<!-- Doctor List -->

@include('user.doctor')

<!-- End Doctor List -->


<!-- Latest News -->



<!-- end Latest News -->

   <!-- Appoinment-section start -->

   @include('user.Appointment')

   <!-- Appoinment-section End-->


 


 <!-- Footer Start -->


@include('user.footer')

 <!-- Footer End -->

<!-- Script Start -->


@include('user.script')


<!-- Script End -->


</body>
</html>