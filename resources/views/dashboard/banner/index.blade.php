@extends('dashboard.layouts.master')

@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Banner</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Banner</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body"><br>
                            <a href="/createbanner" class="btn btn-primary">Add Data Banner</a>
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
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Hyperlink</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banner as $ban)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td scope="row"><img src="image/banner/{{ $ban->gambar_banner }}"
                                                    alt="" class="img-fluid" width="250"></td>
                                            <td scope="row">{{ $ban->hyperlink->nama_hyperlink }}</td>
                                            <td>
                                                <a href="/edit{{ $ban->id }}banner" class="btn btn-warning">Edit</a>
                                                <a href="/delete{{ $ban->id }}banner" class="btn btn-danger">Delete</a>
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
