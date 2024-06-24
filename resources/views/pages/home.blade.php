@php
    $locale = session()->get('locale');
@endphp
<x-master-layout>
    <div class="content">
        <section class="banner-pages homepage">
            <div class="text">
                <h3>
                    @if ($locale === 'en')
                    {{__('index.text_banner_1')}} <b> {{__('index.text_banner_2')}} </b> {{__('index.text_banner_3')}}
                    @else
                    {{__('index.text_banner_1')}} <b> {{__('index.text_banner_2')}}
                        </b> {{__('index.text_banner_3')}}
                    @endif
                </h3>
                <a href="https://api.whatsapp.com/send/?phone=6285212500030" class="btn btn-whatsapp fs-14"><i class="mdi mdi-whatsapp fs-18 me-2"></i> {{__('index.text_banner_button')}} </a>
            </div>
        </section>

        <section class="service">
            <div class="container">
                <h3 class="title-section"> {{__('index.section_2.txt_header')}} </h3>
                <div class="text-center">
                    <img src="assets/img/img-title-fever.png" class="img-title-fever" alt="">
                </div>
                <div class="row g-3">
                    <div class="col-6 col-md-4">
                        <div class="box-service">
                            <img src="assets/img/fever/img-fever01.svg" alt="">
                            <span class="title-service"> {{__('index.section_2.txt_1')}} </span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="box-service">
                            <img src="assets/img/fever/img-fever02.svg" alt="">
                            <span class="title-service"> {{__('index.section_2.txt_2')}} </span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="box-service">
                            <img src="assets/img/fever/img-fever03.svg" alt="">
                            <span class="title-service"> {{__('index.section_2.txt_3')}} </span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="box-service">
                            <img src="assets/img/fever/img-fever04.svg" alt="">
                            <span class="title-service"> {{__('index.section_2.txt_4')}} </span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="box-service">
                            <img src="assets/img/fever/img-fever05.svg" alt="">
                            <span class="title-service"> {{__('index.section_2.txt_5')}} </span>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="box-service">
                            <img src="assets/img/fever/img-fever06.svg" alt="">
                            <span class="title-service"> {{__('index.section_2.txt_6')}} </span>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="intensive">
            <div class="top">
                <div class="container">
                    <div class="title-section behind">
                        <span> {{__('index.section_3.harga')}} </span>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="container">
                    <div class="text-center">
                        @if ($locale === 'en')
                            <img src="assets/img/img-price.svg" class="img-price" alt="">
                        @elseif ($locale === NULL)
                            <img src="assets/img/img-price.svg" class="img-price" alt="">
                        @else
                            <img src="assets/img/img-price-indo.svg" class="img-price" alt="">

                        @endif
                    </div>
                    <div class="text-center">
                        <h3 class="intensive-title">{{__('index.section_3.txt_1')}}</h3>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="items-intensive">
                                <img src="assets/img/icon-intensive/img-iconintensive01.svg" class="icon" alt="">
                                <div class="text">
                                    <h6>{{__('index.section_3.part_1.text_1')}}</h6>
                                    <span>
                                        {{__('index.section_3.part_1.text_2')}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="items-intensive">
                                <img src="assets/img/icon-intensive/img-iconintensive02.svg" class="icon" alt="">
                                <div class="text">
                                    <h6>{{__('index.section_3.part_2.text_1')}}</h6>
                                    <span>
                                        {{__('index.section_3.part_2.text_2')}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="items-intensive">
                                <img src="assets/img/icon-intensive/img-iconintensive03.svg" class="icon" alt="">
                                <div class="text">
                                    <h6>{{__('index.section_3.part_3.text_1')}}</h6>
                                    <span>
                                        {{__('index.section_3.part_3.text_2')}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="items-intensive">
                                <img src="assets/img/icon-intensive/img-iconintensive04.svg" class="icon" alt="">
                                <div class="text">
                                    <h6>{{__('index.section_3.part_4.text_1')}}</h6>
                                    <span>
                                        {{__('index.section_3.part_4.text_2')}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-tc">
                        <h5>{{__('index.section_3.tac.header')}}</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        <b> {{__('index.section_3.tac.point_1_1')}} </b> {{__('index.section_3.tac.point_1_2')}}
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        <b> {{__('index.section_3.tac.point_2_1')}} </b> {{__('index.section_3.tac.point_2_2')}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="doctor">
            <div class="container">
                <h3 class="title-section"> {{__('index.section_4.txt_header_1')}} </h3>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-8">
                        <div class="row g-3 g-md-5 justify-content-center">
                            {{-- <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/dr-dewi-f.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>dr. Dewi Fransiska, Sp.B</h5>
                                        <p class="fw-semibold">Surgeon</p>
                                        <span>STR: 3121101422105406</span>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/dr-dwi-s.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>dr. Dwi Suryaning Ayu Aprilizia, Sp.A</h5>
                                        <p class="fw-semibold">Pediatrician</p>
                                        <span>STR: 3321201323154360</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/dr-ayu-a.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>dr. Ayu A. Istiana</h5>
                                        <p class="fw-semibold">Aesthetic Doctor</p>
                                        <span>STR: 3121100220145699</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/dr-ernita-r.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>dr. Ernita Rosyanti Dewi</h5>
                                        <p class="fw-semibold">General Practitioner</p>
                                        <span>STR: 3121100220145544</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/dr-irvan-r.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>dr. Irvan Rizki Fitri</h5>
                                        <p class="fw-semibold">General Practitioner</p>
                                        <span>STR: 3111100321119174</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/dr-melchisedek-a.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>dr. Melchisedek A.V.P Marbun</h5>
                                        <p class="fw-semibold">General Practitioner</p>
                                        <span>STR: 3111100220155405</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="doctor nurse">
            <div class="container">
                <h3 class="title-section"> {{__('index.section_4.txt_header_2')}} </h3>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-8">
                        <div class="row g-3 g-md-4 justify-content-center">
                            <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/nurse-siti.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>Siti Rahma Derlauw</h5>
                                        <span>STR: 3101522234737239</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/nurse-loisa.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>Loisa Lakamai</h5>
                                        <span>STR: 1701721213519681</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/nurse-syarah.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>Syarah Azzarah</h5>
                                        <span>STR: 2601521224246624 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/nurse-marsiani.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>Marsiani Talo</h5>
                                        <span>STR: 190172122-4444051</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/nurse-irfan.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>Irfan Mustofa</h5>
                                        <span>STR: 1401511224517960</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="items-doctor">
                                    <div class="img-doctor">
                                        <img src="assets/img/doctor/nurse-dimas.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>Dimas Catur Nugroho</h5>
                                        <span>STR: ED00000360053713</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="partner">
            <div class="container">
                <div class="title-section text-dark">
                    {{__('index.section_5.header')}}
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row g-3 g-md-5 align-items-center justify-content-center">
                            <div class="col-6 col-md-4">
                                <img src="assets/img/partner/parahita.png" class="w-100" alt="">
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="assets/img/partner/umedikal.png" class="w-100" alt="">
                            </div>
                            {{-- <div class="col-6 col-md-4">
                                <img src="assets/img/partner/prodia.png" class="w-100" alt="">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="question">
            <div class="container">
                <h4>
                    {{__('index.section_6.txt_header')}}
                </h4>
                <p>
                    {{__('index.section_6.text_1')}}
                </p>
                <a href="https://api.whatsapp.com/send/?phone=6285212500030" class="btn btn-whatsapp"><i class="mdi mdi-whatsapp fs-18 me-2"></i>
                    {{__('index.section_6.text_button')}}</a>
            </div>
        </section>

        <section class="testimonial">
            <div class="container">
                <div class="title-section text-dark">
                    {{__('index.section_7.text_header')}}
                </div>
                <div class="swiper swiper-article mt-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card-slide-testimoni">
                                <div class="top">
                                    <p class="say">
                                        "{{__('index.section_7.testi_1')}}"
                                    </p>
                                </div>
                                <div class="name">
                                    <img src="assets/img/avatar/img-user01.png" alt="">
                                    <div class="rate d-flex g-2">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                    </div>
                                    <h6>Sarah K.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-slide-testimoni">
                                <div class="top">
                                    <p class="say">
                                        "{{__('index.section_7.testi_2')}}"
                                    </p>
                                </div>
                                <div class="name">
                                    <img src="assets/img/avatar/img-user02.png" alt="">
                                    <div class="rate d-flex g-2">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                    </div>
                                    <h6>Jane D.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-slide-testimoni">
                                <div class="top">
                                    <p class="say">
                                        "{{__('index.section_7.testi_3')}}"
                                    </p>
                                </div>
                                <div class="name">
                                    <img src="assets/img/avatar/img-user03.png" alt="">
                                    <div class="rate d-flex g-2">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                    </div>
                                    <h6>Mark T.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-master-layout>
