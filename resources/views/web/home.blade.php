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
        <img class="px-auto"src="{{asset('assets/Home.png')}}" alt="" style="border-radius: 45% 45% 45% 0; width: 50ch;" >
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

<div class="col-12 ps-auto pe-auto d-flex justify-content-evenly" style="font-family: poppins; font-size: 1px">
    <div class=" col-10 rounded shadow p-4" style="background-color: #FFF60F; ">
        <div class=" d-flex flex-wrap gap-2 gap-4" style="margin-top:-3.5rem">

            <div class="col bg-white rounded-1 shadow pt-4 px-3">
                <div class="d-flex justify-content-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                        <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z"/>
                        <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z"/>
                    </svg>
                </div>
                <p class="text-center">Kpr dan Multiguna</p>
            </div>

            <div class="col bg-white rounded-1 shadow pt-4 px-3">
                <div class="d-flex justify-content-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                        <path d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207"/>
                        <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                      </svg>
                </div>
                <p class="text-center">Take Over dan Bridging Loan</p>
            </div>

            <div class="col bg-white rounded-1 shadow pt-4 px-3">
                <div class="d-flex justify-content-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                        <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                    </svg>
                </div>
                <p class="text-center">Refinancing</p>
            </div>

            <div class="col bg-white rounded-1 shadow pt-4 px-3">
                <div class="d-flex justify-content-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
                      </svg>
                </div>
                <p class="text-center">Kredit Modal Usaha dan Investasi</p>
            </div>

            <div class="col bg-white rounded-1 shadow pt-4 px-3">
                <div class="d-flex justify-content-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z"/>
                      </svg>
                </div>
                <p class="text-center">Deposito</p>
            </div>

        </div>
    </div>

</div>

{{-- section 3 --}}

<div class="col-12" style="margin-top: 4rem">

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