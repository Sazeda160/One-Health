


<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp"> <b style="font-size:30px;"><u>Make an Appointment</u></b></h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST">

        @csrf


          @if(session()->has('message'))

        <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert">x</button>

          {{session()->get('message')}}
          
        </div>

        @endif


        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">
              
              <option>--Select Doctor--</option>
               
                @foreach($doctor as $doctors)

              <option value="{{$doctors->name}}">{{$doctors->name}} --Speciality-- {{$doctors->speciality}}</option>
              
              @endforeach

            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-warning bg-info mt-3  ">Submit Request</button>


      </form>
    </div>
  </div>