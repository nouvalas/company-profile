@extends('layouts.master')

@section('container')

<!-- ======= Blog Grid ======= -->
<div id="journal-blog" class="text-left  paddsections">

    <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Article</h2>
      </div>

      <div class="journal-block">
        <div class="row">
          @foreach ($article as $art )
          <div class="col-lg-4 col-md-6">
            <div class="journal-info mb-30">
              
                
              <a href="/detail{{ $art->id }}article">
                <img src="image/article/{{ $art->cover_article }}" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="/detail{{ $art->id }}article">{{ $art->judul_article }}</a></h4>
                <p class="separator">
                  {!! substr($art->isi_article, 0, 300) !!}...
                </p>

              </div>

            </div>
          </div>
          @endforeach

          {{-- <div class="col-lg-4 col-md-6">
            <div class="journal-info mb-30">

              <a href="/detailarticle"><img src="assets/img/article/article-1.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="/detailarticle">WE'RE GONA MAKE DREAMS COMES</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info mb-30">

              <a href="/detailarticle"><img src="assets/img/article/article-1.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="/detailarticle">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info mb-30">

              <a href="/detailarticle"><img src="assets/img/article/article-1.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="/detailarticle">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info mb-30">

              <a href="/detailarticle"><img src="assets/img/article/article-1.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="/detailarticle">WE'RE GONA MAKE DREAMS COMES</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info mb-30">

              <a href="/detailarticle"><img src="assets/img/article/article-1.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="/detailarticle">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div> --}}

        </div>
      </div>
    </div>
  </div><!-- End Blog Grid -->

@endsection