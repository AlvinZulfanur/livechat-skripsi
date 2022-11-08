{{-- statistik --}}
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="statistik">
            <div>
              <h5>Sudah diunduh</h5>
              @foreach ($statistik as $statistiks)   
              <p>{{ $statistiks->download }}</p>
              @endforeach
            </div>
            <div>
              <h5>Rating Pengguna</h5>
               @foreach ($statistik as $statistiks)   
              <p>{{ $statistiks->rating }}</p>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>