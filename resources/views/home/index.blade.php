@extends('layouts.master')

@section('container')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">

            <div class="carousel-item active" style="background-image: url(assets/img/banner/banner1.png)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/banner/banner2.png)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/banner/banner3.png)"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up"">

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/banner/minibanner1.png" class="img-fluid" alt="">
              <a href="/portofolio" class="readmore stretched-link"></a>
            </div>        

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/banner/minibanner2.png" class="img-fluid" alt="">
              <a href="/portofolio" class="readmore stretched-link"></a>
            </div>        

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/banner/minibanner3.png" class="img-fluid" alt="">
              <a href="/portofolio" class="readmore stretched-link"></a>
            </div>        

          </div>
        </div><!-- End post item -->

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->

        <!-- ======= Benefits Section ======= -->
        <section id="benefits" class="benefits">
            <div class="container" data-aos="zoom-in">


              <div class="row">

                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/benefits/benefit-1.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Teknologi Design & Manufacturing 4.0</h3>
                    </div>
        
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/benefits/benefit-2.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Gratis Biaya Pengiriman</h3>
                    </div>
        
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/benefits/benefit-3.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Gratis Biaya Instalasi</h3>
                    </div>
        
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/benefits/benefit-4.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Gratis Biaya Survey</h3>
                    </div>
        
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/benefits/benefit-5.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Garansi</h3>
                    </div>
        
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/benefits/benefit-6.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Layanan Customer Service</h3>
                    </div>
        
                  </div>
                </div>
      
      
              </div>

            </div>
        </section><!-- End Benefits Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">
              
              <div class="section-title">
                <h3>AKSESORIS & FITTING BERSTANDAR INTERNASIONAL</h3>
              </div>

              <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div>
      
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>
      
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>
      
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>
      
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>
      
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                </div>
                
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/client-9.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/client-10.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/client-11.png" class="img-fluid" alt="">
                </div>
      
              </div>

            </div>
        </section><!-- End Clients Section -->


        <section id="kategori" class="kategori">
          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <h2>Kategori</h2>
            </div>

            <div class="carousel slide" data-bs-ride="carousel" id="carouselExample">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="col-md-3">
                    <a href="/portofolio"><img src="assets/img/kategori/apart.png" class="img-fluid" alt="one"></a>
                    <h3 class="post-title">APARTEMEN</h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <a href="/portofolio"><img src="assets/img/kategori/livingroom.png" class="img-fluid" alt="two"></a>
                    <h3 class="post-title">LIVING ROOM</h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <a href="/portofolio"><img src="assets/img/kategori/bedroom.png" class="img-fluid" alt="three"></a>
                    <h3 class="post-title">BEDROOM</h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <a href="/portofolio"><img src="assets/img/kategori/cafe.png" class="img-fluid" alt="four"></a>
                    <h3 class="post-title">STORE & CAFE</h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <a href="/portofolio"><img src="assets/img/kategori/kitchen.png" class="img-fluid" alt="five"></a>
                    <h3 class="post-title">KITCHEN</h3>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="bi bi-chevron-left" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="bi bi-chevron-right" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
    
          </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Workflow Section ======= -->
        <section id="workflow" class="workflow">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Work Flow</h2>
              </div>

              <div class="row">

                <div class="col-lg-1 col-md-3" style="padding: 0 150px 0 0" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/workflow/konsultasi.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Konsultasi</h3>
                    </div>
        
                  </div>
                </div>
      
                <div class="col-lg-1 col-md-3" style="padding: 0 150px 0 0" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/workflow/survey.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Survey</h3>
                    </div>
        
                  </div>
                </div>
      
                <div class="col-lg-1 col-md-3" style="padding: 0 150px 0 0" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/workflow/desain.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Desain</h3>
                    </div>
        
                  </div>
                </div>
      
                <div class="col-lg-1 col-md-3" style="padding: 0 150px 0 0" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/workflow/RAB.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">RAB</h3>
                    </div>
        
                  </div>
                </div>
      
                <div class="col-lg-1 col-md-3" style="padding: 0 150px 0 0" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/workflow/produksi.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Produk</h3>
                    </div>
        
                  </div>
                </div>
      
                <div class="col-lg-1 col-md-3" style="padding: 0 150px 0 0" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/workflow/instalasi.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Instalasi</h3>
                    </div>
        
                  </div>
                </div>
      
                <div class="col-lg-1 col-md-3" style="padding: 0 0 0 0" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">
        
                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/workflow/quality.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="post-content d-flex flex-column">
                      <h3 class="post-title">Quality Control</h3>
                    </div>
        
                  </div>
                </div>
                
                <a href="/detailworkflow">
                <div class="text-center"><button type="submit">Read More</button></div></a>
              </div>

            </div>
        </section><!-- End Workflow Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Estimasi Harga</h2>
                  <p>Hitung Estimasi Interior Anda</p>
              </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
              <div class="col-xl-9 col-lg-12 mt-4">
                <form class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="number" name="panjang" class="form-control" id="panjang" placeholder="Panjang(cm)" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="number" name="tinggi" class="form-control"  id="tinggi" placeholder="Tinggi(cm)" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                      <select name="material" id="material" class="form-select" aria-label="Default select example">
                          <option selected>- Material -</option>
                          <option value="2500000">BLOCKBOARD MELAMIN FINISHING HPL</option>
                          <option value="2800000">BLOCKBOARD MELAMIN FINISHING DUCO</option>
                          <option value="3000000">FINISHING LUAR DALAM FULL HPL</option>
                          <option value="3200000">FINISHING LUAR DALAM FULL DUCO</option>
                        </select>
                  </div>
                  <div class="form-group mt-3">
                      <input disabled type="number" name="hasil" class="form-control"  id="hasil" placeholder="Hasil"> 
                  </div><br>
                  {{-- <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div> --}}
                  <div class="text-center"><button id="submit" type="submit">Hitung</button></div>
                </form>
              </div>

            </div>

          </div>
        </section><!-- End Contact Section -->

        <!-- ======= Subsidiary Section ======= -->
        <section id="subsidiary" class="subsidiary">
            <div class="container" data-aos="zoom-in">

                <div class="section-title">
                    <h2>Subsidiary</h2>
                </div>

              <div class="row rounded-4">

                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/subsidiary/subsidiary1.png" class="img-fluid" alt="">
                </div>
      
                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/subsidiary/subsidiary4.png" class="img-fluid" alt="">
                </div>
      
                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/subsidiary/subsidiary2.png" class="img-fluid" alt="">
                </div>
      
                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/subsidiary/subsidiary3.png" class="img-fluid" alt="">
                </div>
      
                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/subsidiary/subsidiary5.png" class="img-fluid" alt="">
                </div>
      
                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/subsidiary/subsidiary6.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/subsidiary/subsidiary7.png" class="img-fluid" alt="">
                </div>
                
                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/subsidiary/subsidiary8.png" class="img-fluid" alt="">
                </div>
      
              </div>


            </div>
        </section><!-- End Subsidiary Section -->


    </main><!-- End #main -->

  @endsection

