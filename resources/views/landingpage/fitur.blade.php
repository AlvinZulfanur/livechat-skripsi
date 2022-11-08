<div class="row">
        <h3 class="text-center my-3"><span>Kenapa Harus #PunyaKARTANU</span></h3>
        @foreach ($fitur as $fiturs)
        <div class="col-lg-4 my-2 text-center">
          <div class="card rounded-1" data-aos="zoom-in" data-aos-duration="1700" data-offset="500" >
            <div class="card-body">
              <h5 class="card-title"><img src="{{ asset('storage/' . $fiturs->photo) }}" ></i></h5>
              <h6 class="card-subtitle mb-2">{{ $fiturs->title }}</h6>
              <p class="card-text">{{ $fiturs->description }}</p>
            </div>
          </div>
        </div>
          @endforeach
        </div>