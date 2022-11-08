{{-- Jumbotron --}}
<div id="jumbotron" class="d-flex align-items-center">
      <div class="col-lg-6">
        <div class="ms-5">
          @foreach($hero as $heroes)
          <h1 id="H-1" class="heading">{{ $heroes->title }}</h1>
          <p>{{ $heroes->description }}</p>
          @endforeach
        </div>
        <div class="ms-5">
          <a href="https://play.google.com/store/apps/details?id=org.pbnu.ekartanu&hl=in&gl=US
          "><img src="img/download-google-play.png" alt="" width="150"></a>
          <a href="https://apps.apple.com/id/app/kartanu-nahdlatul-ulama/id1511658723?l=id"><img src="img/download-app-store.png" alt="" width="160"></a>
        </div>
      </div>
      @foreach($hero as $heroes)
      <div class="row d-flex" data-aos="fade-left" data-aos-duration="1700">
        <div class="col-lg-6">
          <div class="image">
            <img width="450" src="{{ asset('storage/' . $heroes->photo) }}"  alt="Tampilan depan kartanu">
          </div>
        </div>
      </div>
      @endforeach
    </div>