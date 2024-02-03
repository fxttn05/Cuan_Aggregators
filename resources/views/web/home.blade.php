@extends('layouts.navbar')

@section('title')
    <title>Cuan Aggregators | Home</title>
@endsection

@section('content')

{{-- section 1 --}}
<div class="col-12 d-lg-flex justify-content-md-between" style="margin-bottom: 4rem">

    <div class="col-12 col-lg-6  justify-content-center mb-5" style="font-family: poppins">
        <h1 style="font-size: 3.2rem; font-weight: bold" class="mb-4">Penuhi Kebutuhan Finansial Anda Bersama Kami</h1>
        <p style="font-size: 1vmax;">Cuan Aggregators by Loan Adviser kami siap membantu memenuhi kebutuhan finansial Anda dalam bentuk kredit, modal usaha, deposito, investasi, hingga take over. Konsultasikan dengan kami untuk mendapatkan pelayanan terbaik</p>
        <a target=”_blank” class="btn btn-primary" href="https://api.whatsapp.com/send?text=Hai%2C+Saya+tertarik+dengan+promo+KPR+di+banner+ini.&phone=6285210845762">Pelajari Lebih Lanjut</a>
    </div>

    <div class="col-12 col-lg-5">
        <img class="mx-auto px-1"src="{{asset('assets/Home.png')}}" alt="" style="border-radius: 45% 45% 45% 0; width: 50ch;" >
    </div>

</div>

{{-- <div class="container container-product">
    <div class="card card-product">
        <div class="grid justify-content-center product-desktop">
            <div class="g-col-2">
                <a href="https://www.loanmarket.co.id/product/kpr-multiguna?product=kpr-primary" id="product-kpr-primary" class="text-center">
                    <div class="card boxproduct">
                        <img src="assets/img/icon/icon-kredit-rumah.png" class="card-img-top text-center" alt="...">
                        <h5 class="card-title card-title-sm t-1">KPR dan Multiguna</h5>
                    </div>
                </a>
            </div>
            <div class="g-col-2">
                <a href="https://www.loanmarket.co.id/product/take-over?product=take-over" id="product-teake-over" class="text=center">
                    <div class="card boxproduct  ">
                        <img src="assets/img/icon/icon-take-over.png" alt="...">
                        <h5 class="card-title card-title-sm t-1">Take Over <br>dan Bridging Loan</h5>
                    </div>
                </a>
            </div>
            <div class="g-col-2">
                <a href="https://www.loanmarket.co.id/product/refinancing?product=refinancing-kendaraan-bermotor" id="product-refinancing" class="text=center">
                    <div class="card boxproduct  ">
                        <img src="assets/img/icon/icon-gadai.png" alt="...">
                        <h5 class="card-title card-title-sm t-1">Refinancing</h5>
                    </div>
                </a>
            </div>
            <div class="g-col-2">
                <a href="https://www.loanmarket.co.id/product/kredit-modal-usaha?product=kredit-modal-kerja" id="product-kredit-modal" class="text=center">
                    <div class="card boxproduct  ">
                        <img src="assets/img/icon/icon-modal-usaha.png" alt="...">
                        <h5 class="card-title card-title-sm t-1">Kredit Modal Usaha<br> dan Investasi</h5>
                    </div>
                </a>
            </div>
            <div class="g-col-2">
                <a href="https://www.loanmarket.co.id/product/deposito?product=deposito-berjangka" id="product-deposito" class="text=center">
                    <div class="card boxproduct  ">
                        <img src="assets/img/icon/icon-deposito.png" alt="...">
                        <h5 class="card-title card-title-sm t-1">Deposito</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="grid justify-content-center product-mobile carousel slide" id="product-mobile">
            <div class="carousel-inner container pt-2" style="height: 120px">
                <div class="carousel-item active" style="height: 120px">
                    <div class="row" style="margin-left: 0; margin-right: 0">
                        <div class="col-6 pr-2">
                            <a href="https://www.loanmarket.co.id/product/kpr-multiguna?product=kpr-primary" id="product-kpr-primary" class="text-center">
                                <div class="card boxproduct float-right">
                                    <img src="assets/img/icon/icon-kredit-rumah.png" class="card-img-top text-center" alt="...">
                                    <h5 class="card-title card-title-sm t-1">KPR dan Multiguna</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 pr-2">
                            <a href="https://www.loanmarket.co.id/product/take-over?product=take-over" id="product-teake-over" class="text=center">
                                <div class="card boxproduct float-left">
                                    <img src="assets/img/icon/icon-take-over.png" alt="...">
                                    <h5 class="card-title card-title-sm t-1">Take Over <br>dan Bridging Loan</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 120px">
                    <div class="row" style="margin-left: 0; margin-right: 0">
                        <div class="col-6 pl-2">
                            <a href="https://www.loanmarket.co.id/product/refinancing?product=refinancing-kendaraan-bermotor" id="product-refinancing" class="text=center">
                                <div class="card boxproduct float-right">
                                    <img src="assets/img/icon/icon-gadai.png" alt="...">
                                    <h5 class="card-title card-title-sm t-1">Refinancing</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 pr-2">
                            <a href="https://www.loanmarket.co.id/product/kredit-modal-usaha?product=kredit-modal-kerja" id="product-kredit-modal" class="text=center">
                                <div class="card boxproduct float-left">
                                    <img src="assets/img/icon/icon-modal-usaha.png" alt="...">
                                    <h5 class="card-title card-title-sm t-1">Kredit Modal Usaha<br> dan Investasi</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 120px">
                    <div class="row" style="margin-left: 0; margin-right: 0">
                        <div class="col-6 pl-2">
                            <a href="https://www.loanmarket.co.id/product/deposito?product=deposito-berjangka" id="product-deposito" class="text=center">
                                <div class="card boxproduct float-right">
                                    <img src="assets/img/icon/icon-deposito.png" alt="...">
                                    <h5 class="card-title card-title-sm t-1">Deposito</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev pt-2" href="#product-mobile" role="button" data-slide="prev" style="height: 100px">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next pt-2" href="#product-mobile" role="button" data-slide="next" style="height: 100px">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
    </div>
</div> --}}



{{-- section 2 --}}

<div class="col-12">
    <h1 >test test</h1>
</div>

{{-- section 3 --}}

<div class="col-12" style="margin-top: 8rem">

    <div class="row justify-content-around">
        <div class=" col-12 text-center mb-4" style="font-family: poppins">
            <h2 style=" font-weight: bold">Cara Mengajukan KPR di Cuan Aggregators</h2>
        </div>
        <div class="col-6 col-lg-3 text-center" >
            <img src="{{asset('assets/Step.png')}}" class="card-img-center p-1 rounded-4 img-fluid mb-3" alt="Memilih Produk" >
            <div class="card-body">
                <h6>Memilih Produk</h6>
                <p class="card-text">Pilih salah satu produk finansial yang Anda inginkan disini</p>
            </div>
        </div>
        <div class=" col-6 col-lg-3 text-center" >
            <img src="{{asset('assets/Step2.png')}}" class="card-img-center p-1 rounded-4 img-fluid mb-3" alt="Konsultasi Dengan Kami photo" >
            <div class="card-body">
                <h6>Konsultasi Dengan Kami</h6>
                <p class="card-text">Anda akan dihubungi oleh Loan Adviser kami untuk berkonsultasi mengenai langkah kedepannya</p>
            </div>
        </div>
        <div class=" col-6 col-lg-3 text-center" >
            <img src="{{asset('assets/Step3.png')}}" class="card-img-center p-1 rounded-4 img-fluid mb-3" alt="Mengisi Data photo" >
            <div class="card-body">
                <h6>Mengisi Data</h6>
                <p class="card-text">SLengkapi data dan dokumen pendukung yang diperlukan sesuai arahan Loan Adviser kami</p>
            </div>
        </div>
        <div class=" col-6 col-lg-3 text-center" >
            <img src="{{asset('assets/Step4.png')}}" class="card-img-center p-1 rounded-4 img-fluid mb-3" alt="Track Progress photo" >
            <div class="card-body">
                <h6>Track Progress</h6>
                <p class="card-text">Jika sudah lengkap, Anda tinggal menunggu permintaan Anda disetujui dan siap digunakan</p>
            </div>
        </div>
    </div>
</div>
@endsection