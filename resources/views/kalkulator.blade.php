@extends('layouts.master')

@section('container')

    {{-- <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Estimasi Harga</h2>
            <p>Hitung Estimasi Interior Anda</p>
        </div>

        <div class="row mt-5">

            <div class="col-lg-12 mt-5 mt-lg-0">

                <form action="/hasilkalkulator" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-5 form-group">
                          <select name="material" class="form-select" aria-label="Default select example">
                            <option selected>----Pilih Material----</option>
                            <option value="bb_hpl">BLOCKBOARD MELAMIN FINISHING HPL</option>
                            <option value="bb_duco">BLOCKBOARD MELAMIN FINISHING DUCO</option>
                            <option value="fl_hpl">FINISHING LUAR DALAM FULL HPL</option>
                            <option value="fl_duco">FINISHING LUAR DALAM FULL DUCO</option>
                          </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <input type="number" name="panjang" class="form-control"
                                placeholder="Panjang">
                        </div>
                        <div class="col-md-2 form-group mt-3 mt-md-0">
                            <input type="number" class="form-control" name="tinggi" value="{{ old('tinggi') }}"
                                placeholder="Tinggi">
                        </div>
                        <div class="col-md-2 form-group mt-3 mt-md-0">
                            <input disabled type="number" class="form-control" name="tinggi"
                                placeholder="Hasil" value="{{ session('message') }}">
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </div>
                </form>
                
            </div>

        </div>

    </div>
</section><!-- End Kalkulator Section --> --}}

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
                                <input type="text" name="panjang" class="form-control" id="panjang"
                                    placeholder="Panjang(cm)" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" name="tinggi" class="form-control" id="tinggi"
                                    placeholder="Tinggi(cm)" required>
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
                            <input type="text" name="hasil" class="form-control" id="hasil" placeholder="Hasil"
                                disabled readonly>
                        </div><br>
                        <div class="text-center"><button id="submit" type="submit">Hitung</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->


@section('script')
    <script>
        $(document).ready(function() {
            $("#submit").click(function() {

                var inputPanjang = $("#panjang").val();
                var inputTinggi = $("#tinggi").val();

                if (inputPanjang.length > 1) {
                    var panjangFloat = parseFloat(inputPanjang) / 100;
                    var fixpjg = $("#panjang").val(panjangFloat.toFixed(2));

                }
                if (inputTinggi.length > 1) {
                    var tinggiFloat = parseFloat(inputTinggi) / 100;
                    var fixtinggi = $("#tinggi").val(tinggiFloat.toFixed(2));
                }
                // console.log(typeof(fixtinggi));
                // var fixmaterial = $("#material").val(material);
                var panjangInt = parseInt(panjangFloat);
                var tinggiInt = parseInt(tinggiFloat);

                hasil.value = panjangInt * material.value * tinggiInt;
                hasil.value = ("Rp ") + hasil.value

                // tambahkan koma setiap 3 angka
                var formatedNumber = hasil.value.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                hasil.value = formatedNumber

            });

        });







        // const panjang = document.getElementById('panjang')
        // const tinggi = document.getElementById('tinggi')
        // const material = document.getElementById('material')
        // const hasil = document.getElementById('hasil')
        // const submit = document.getElementById('submit')



        // submit.addEventListener('click', function(){


        //     hasil.value = panjang.value * material.value * tinggi.value
        //     hasil.value = ("Rp ")+hasil.value

        //     // tambahkan koma setiap 3 angka
        //     var formatedNumber = hasil.value.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        //     hasil.value = formatedNumber
        // })

        // const inputField = document.querySelector('input')

        // inputField.onkeyup = function(){
        // var removeChar = this.value.replace(/[^0-9\.]/g, '') // remove alphabets
        // var removeDot = removeChar.replace(/\./g, '') // remove dot
        // this.value = removeDot
        // var formatedNumber = this.value.replace(/\B(?=(\d{3})+(?!\d))/g, ',')

        // this.value = formatedNumber
        // }    
    </script>
@endsection

@endsection
