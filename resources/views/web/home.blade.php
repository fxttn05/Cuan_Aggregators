@extends('layouts.navbar')

@section('title')
    <title>Cuan Aggregators | Home</title>
@endsection

@section('content')

    {{-- section 1 --}}
<div class="col-12 d-flex  justify-content-between">


    <div class="col-6" style="font-family: poppins">
        <h1 style="font-size: 3.2vmax; font-weight: bold" class="mb-4">Penuhi Kebutuhan Finansial Anda Bersama Kami</h1>
        <p style="font-size: 1vmax;">Cuan Aggregators by Loan Adviser kami siap membantu memenuhi kebutuhan finansial Anda dalam bentuk kredit, modal usaha, deposito, investasi, hingga take over. Konsultasikan dengan kami untuk mendapatkan pelayanan terbaik</p>
        <a target=”_blank” class="btn btn-primary" href="https://api.whatsapp.com/send?text=Hai%2C+Saya+tertarik+dengan+promo+KPR+di+banner+ini.&phone=6285210845762">Pelajari Lebih Lanjut</a>
    </div>

    <div class="col-5 ">
        <img class="mx-auto px-1"src="{{asset('assets/Home.png')}}" alt="" style="border-radius: 40% 0 40% 0; width: 35vw" >
    </div>

</div>
@endsection