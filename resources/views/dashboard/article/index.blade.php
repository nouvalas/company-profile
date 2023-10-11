@extends('dashboard.layouts.master')

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Article</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Article</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body"><br>
              <a href="/createarticle" class="btn btn-primary">Add Data Article</a>
              <br><br>
              @if ($message = Session::get('message'))
                <div class="alert alert-success">
                  <strong>Berhasil</strong>
                  <p>{{ $message }}</p>
                </div>       
              @endif
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi Artikel</th>
                    <th scope="col">Cover</th>
                    {{-- <th scope="col">Gambar</th> --}}
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($article as $art)
                    <tr>
                      <td scope="row">{{ $loop->iteration }}</td>
                      <td scope="row">{{ $art->judul_article }}</td>
                      <td scope="row">{!! substr($art->isi_article, 0, 50) !!}...</td>
                      <td scope="row"><img src="assets/img/article/{{ $art->cover_article }}" alt="" class="img-fluid" width="250" ></td>
                      {{-- <td scope="row"><img src="assets/img/article/{{ $art->gambar_article }}" alt="" class="img-fluid" width="250" ></td> --}}
                      <td>
                        <a href="/edit{{ $art->id }}article" class="btn btn-warning">Edit</a>
                        <a href="/delete{{ $art->id }}article" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                        
                    @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection