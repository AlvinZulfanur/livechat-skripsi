<div class="row">
  @foreach ($produk as $produks)
      
  <div class="col-lg-12">
    <div id="card-1" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
      <div class="mx-2">
        <img src="{{ asset('storage/' . $produks->photo) }}" width="200" alt="">
      </div>
      <div>
        <h6>{{ $produks->title }}</h6>
        <p class="mb-3">{{ $produks->description }} 
        </p>
        <button class="btn btn-success mb-4">Download</button>
      </div>
    </div>
  </div>
  @endforeach
        {{-- <div class="col-lg-12">
          <div id="card-1" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
            <div>
              <h6>Belanja berbagai
                kebutuhan</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non massa proin imperdiet mattis tincidunt amet. 
              </p>
              <button class="btn btn-success">Download</button>
            </div>
            <div>
              <img src="img/TOKO-NU.png" width="200" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div id="card-1" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
            <div>
              <img src="img/KARTANU-SALDO.png" width="200" alt="">
            </div>
            <div>
              <h6>Pembayaran dan isi
              saldo</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non massa proin imperdiet mattis tincidunt amet. 
              </p>
              <button class="btn btn-success">Download</button>
            </div>
          </div>
        </div> --}}
</div>