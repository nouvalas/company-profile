@extends('dashboard.layouts.master')
@section('container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data Portofolio</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item"><a href="/adminportofolio">Portofolio</a></li>
          <li class="breadcrumb-item active">Edit Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Edit Data Portofolio</h5>

              <!-- General Form Elements -->
              <form action="/update{{ $portofolio->id }}portofolio" method="POST">
                @csrf
                {{-- @method('PUT') --}}
                <div class="row mb-3">
                  <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul_portofolio" value="{{ old ('judul_portofolio',$portofolio->judul_portofolio) }}">
        
                    @error('judul_portofolio')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="kategori_id">
                      <option disabled value="">- Pilih Kategori -</option>
                      @foreach ($kategori as $kat)                  
                        <option value="{{ $kat->id }}" {{ old('kategori_id', $portofolio->kategori_id) == $kat->id ? 'selected' : null }}>{{ $kat->nama_kategori }}</option>
                      @endforeach
                    </select>

                    @error('kategori_id')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                    <img src="assets/img/portofolio/{{ $portofolio->gambar_portofolio }}" alt="img_fluid">
                </div>
                <div class="row mb-3">
                  <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="gambar_portofolio" value="{{ old('gambar_portofolio', $portofolio->gambar_portofolio) }}">

                    @error('gambar_portofolio')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
                  <div class="col-sm-10">
                    <a href="/adminportofolio" type="button" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </div>


              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection