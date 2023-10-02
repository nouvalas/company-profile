@extends('layouts.master')

@section('container')

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
      </div>

      <div class="faq-list" data-aos="fade-up">
        <ul>
          <li>
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa saja layanan yang ditawarkan Line Studio? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
              <p>
                Line Studio dapat membantu kamu merancang dan membangun interior mulai dari flooring, wall treatment, furniture, dll. Selain itu kami juga dapat membantu dalam konstruksi arsitektur. kamu bisa konsultasi terlebih dahulu tanpa ada biaya apapun dan berkonsultasi dengan ahlinya langsung. Yuk konsultasi sekarang!.
              </p>
            </div>
          </li>

          <li>
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa keunggulan Line Studio?  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
             <ul>
                <li class="list2"><i class="ri-check-line"></i>Kemiripan desain 3D > 90%</li>
                <li class="list2"><i class="ri-check-line"></i>Bebas revisi desain tanpa batas</li>
                <li class="list2"><i class="ri-check-line"></i>Material dan aksesoris sangat beragam</li>
                <li class="list2"><i class="ri-check-line"></i>Selalu memberi solusi untuk interior kamu</li>
                <li class="list2"><i class="ri-check-line"></i>Kualitas bersaing</li>
                <li class="list2"><i class="ri-check-line"></i>Selalu memberikan hasil yang terbaik pada setiap project </li>
            </ul>
            </div>
          </li>

          <li>
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Apakah saya bisa bebas custom interior seperti yang saya mau?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Bisa dong, kamu boleh beri referensi kepada desainer, lalu desainer akan memberikan desain terbaik sesuai dengan referensi kamu, namun tetap dengan sentuhan taste desain standar Line Studio
              </p>
            </div>
          </li>

          <li>
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Apakah saya bisa custom furniture satuan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Line Studio hanya menerima project interior dengan minimal 1 ruangan
              </p>
            </div>
          </li>

          <li>
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Apakah Line Studio menerima project di luar Kota Bandung? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Iya, Line Studio menerima project dari seluruh Indonesia.
              </p>
            </div>
          </li>

          <li>
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Berapa biaya yang diperlukan untuk membuat interior di Line Studio? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Biaya yang diperlukan menyesuaikan dengan desain dan material yang digunakan. untuk selengkapnya kamu bisa berkonsultasi terlebih dahulu dengan tim kami melalui whatsapp
              </p>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section><!-- End F.A.Q Section -->


@endsection