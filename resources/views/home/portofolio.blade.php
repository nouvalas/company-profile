@extends('layouts.master')

@section('container')

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portofolio</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li  class="filter-active">All</li>
              @foreach ($kategori as $kat )
              <li data-filter=".filter-{{ $kat->id }}">{{ $kat->nama_kategori }}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($portofolio as $port)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $port->kategori_id }}">              
            <div class="portfolio-wrap">
              <img src="image/portofolio/{{ $port->gambar_portofolio }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $port->judul_portofolio }}</h4>
                <p>{{ $port->kategori->nama_kategori }}</p>
                <div class="portfolio-links">
                  <a href="image/portofolio/{{ $port->gambar_portofolio }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

@endsection