@extends('dashboard.layouts.master')
@section('container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data Article</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item"><a href="/adminarticle">Article</a></li>
          <li class="breadcrumb-item active">Edit Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Edit Data Article</h5>

              <!-- General Form Elements -->
              <form action="/update{{ $article->id }}article" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul_article" value="{{ old('judul_article', $article->judul_article) }}" autofocus>
                    
                    @error('judul_article')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                    <img src="image/article/{{ $article->cover_article }}" alt="img_fluid">
                </div>
                <div class="row mb-3">
                  <label for="cover" class="col-sm-2 col-form-label">Cover</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="cover_article">
                  
                    @error('cover_article')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                    <img src="image/article/{{ $article->gambar_article }}" alt="img_fluid">
                </div>
                <div class="row mb-3">
                  <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="gambar_article">
                    
                    @error('gambar_article')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
                
                <div class="row mb-3">
                    <label for="isi" class="col-sm-2 col-form-label">Isi Artikel</label>
                    <div class="col-sm-10">
                        <div id="article">
                          {!! old('isi_article', $article->isi_article) !!}
                        </div>
                        <textarea name="isi_article" class="form-control" id="textarea_isi_article" type="textarea" style="display: none">{!! old('isi_article', $article->isi_article) !!}</textarea>

                        @error('isi_article')
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <br>
                <br><br>

                
                <div class="col-sm-10">
                    <a href="/adminarticle" type="button" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>


              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

    {{-- <script>
    $(document).ready(function() {
        var quill = new Quill('#isi_article', {
        theme: 'snow'
      });
    });
    </script> --}}

  </main><!-- End #main -->
@endsection