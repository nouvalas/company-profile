@extends('dashboard.layouts.master')
@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Data Banner</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/adminbanner">Banner</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Tambah Data Banner</h5>

                            <!-- General Form Elements -->
                            <form action="/storebanner" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="gambar_banner"
                                            value="{{ old('gambar_banner') }}">

                                        @error('gambar_banner')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Hyperlink</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="hyperlink_id">
                                            <option value="">- Pilih Hyperlink -</option>
                                            @foreach ($hyperlink as $hyp)
                                                <option value="{{ $hyp->id }}"
                                                    {{ old('hyperlink_id') == $hyp->id ? 'selected' : null }}>
                                                    {{ $hyp->nama_hyperlink }}</option>
                                            @endforeach
                                        </select>

                                        @error('hyperlink_id')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-10">
                                    <a href="/adminbanner" type="button" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>


                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
