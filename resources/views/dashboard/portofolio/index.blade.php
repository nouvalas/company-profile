@extends('dashboard.layouts.master')

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Portofolio</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Portofolio</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body"><br>
              <a href="/createportofolio" class="btn btn-primary">Add Data Portofolio</a>
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
                    <th scope="col">Kategori</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($portofolio as $port)
                    <tr>
                      <td scope="row">{{ $loop->iteration }}</td>
                      <td scope="row">{{ $port->judul_portofolio }}</td>
                      <td scope="row">{{ $port->kategori->nama_kategori }}</td>
                      <td scope="row"><img src="assets/img/portofolio/{{ $port->gambar_portofolio }}" alt="" class="img-fluid" width="250" ></td>
                      <td>
                        <a href="/edit{{ $port->id }}portofolio" class="btn btn-warning">Edit</a>
                        <a href="/delete{{ $port->id }}portofolio" class="btn btn-danger">Delete</a>
                        {{-- <form action="/delete{{ $port->id }}portofolio" method="POST">
                          @csrf
                        </form> --}}
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