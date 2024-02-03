@extends('layouts.navbar')

@section('title')
    <title>Cuan Aggregators | Tentang Kami</title>
@endsection

@section('content')
{{-- section 1 --}}
<div class="col-12 row gap-5">
    <h1>Tentang Kami</h1>
    <div class="col-12 col-lg">
        <p class="">Dengan menggunakan jasa kami, para nasabah telah berhasil membeli rumah pertama maupun kedua mereka dengan penawaran harga dan suku bunga terbaik KPR bank rekanan kami. Begitupun untuk nasabah yang melakukan penghematan cicilan KPR dengan melakukan Take Over KPR tentunya dengan suku bunga terbaik dari bank rekanan kami.<br><br>Oleh karena itu, dengan data kolektif, Mortgage Master telah membantu nasabah dalam menghemat KPR maupun cicilan KPR dengan Take Over KPR senilai lebih dari ratusan miliar.<br><br>Bersama kami, bukan hanya hemat dari segi biaya melainkan hemat waktu karena Anda tidak perlu mendatangi beberapa bank karena kita memiliki berbagai produk dan pilihan bank yang tentunya sesuai dengan kebutuhan Anda.</p>
    </div>
    <div class="col-12 col-lg">
        <img src="{{asset('assets/tentang-kami.png')}}" style="width: 30rem" alt="" class="rounded-4 ms-lg-5">
    </div>
</div>

@endsection