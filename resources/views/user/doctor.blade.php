<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach($doctor as $doctor)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300px" src="../assets/img/doctors/sunil.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body" align="center">
              <p class="text-xl mb-0"><b>{{$doctor->name}}</b></p>
              <span class="text-sm text-grey">{{$doctor->speciality}}</span><br>
               <span class="text-sm text-grey">{{$doctor->room}}</span>
            </div>
          </div>
        </div>
          @endforeach
      
      </div>
    </div>
  </div>