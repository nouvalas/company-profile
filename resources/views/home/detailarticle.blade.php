@extends('layouts.master')

@section('container')
    <!-- ======= Blog Single ======= -->
    <section class="detailarticle nav-arrow-b">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>{{ $article->judul_article }}</h2>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="news-img-box">
                        <img src="image/article/{{ $article->gambar_article }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    {{-- <div class="post-information">
            <ul class="list-inline text-center color-a">
              <li class="list-inline-item mr-2">
                <strong>Author: </strong>
                <span class="color-text-a">Morgan Jimenez</span>
              </li>
              <li class="list-inline-item">
                <strong>Date: </strong>
                <span class="color-text-a"> {{ $article->created_at }}</span>
              </li>
            </ul>
          </div> --}}
                    <br>
                    <div class="post-content color-text-a">
                        {!! $article->isi_article !!}
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Blog Single-->
@endsection
