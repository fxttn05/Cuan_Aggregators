@extends('layouts.navbar')

@section('title')
    <title>Cuan Aggregators | Tentang Kami</title>
@endsection

@section('content')
{{-- section 1 --}}
<div class="col-12 row gap-5 mb-5">
    <h1>Tentang Kami</h1>
    <div class="col-12 col-lg">
        <p class="">Dengan menggunakan jasa kami, para nasabah telah berhasil membeli rumah pertama maupun kedua mereka dengan penawaran harga dan suku bunga terbaik KPR bank rekanan kami. Begitupun untuk nasabah yang melakukan penghematan cicilan KPR dengan melakukan Take Over KPR tentunya dengan suku bunga terbaik dari bank rekanan kami.<br><br>Oleh karena itu, dengan data kolektif, Mortgage Master telah membantu nasabah dalam menghemat KPR maupun cicilan KPR dengan Take Over KPR senilai lebih dari ratusan miliar.<br><br>Bersama kami, bukan hanya hemat dari segi biaya melainkan hemat waktu karena Anda tidak perlu mendatangi beberapa bank karena kita memiliki berbagai produk dan pilihan bank yang tentunya sesuai dengan kebutuhan Anda.</p>
    </div>
    <div class="col-12 col-lg">
        <img src="{{asset('assets/tentang-kami.png')}}" style="width: 30rem" alt="" class="rounded-4 ms-lg-5">
    </div>
</div>

{{-- section 2 --}}
<div class="col-12" style="margin-top: 5rem">
    <h1 class="text-center">Visi & Misi</h1>
    <div class="justify-content-center row gap-5 mt-4">
        <div class="col-5 bg-warning p-4 rounded text-center bg-opacity-50">
            <h2 class="mb-5">visi</h2>
            <p>Membangun bisnis dengan prinsip kekeluargaan dan membantu calon nasabah sehingga dapat mengambil keputusan yang tepat dalam hal finansial.</p>
        </div>

        <div class="col-5 bg-warning p-4 rounded text-center bg-opacity-50">
            <h2 class="mb-5">Misi</h2>
            <p>1. Menjadi bisnis paling terpercaya untuk membantu nasabah dalam membantu mengambil keputusan finansial.<br>2. Membuat proses pinjaman menjadi lebih sederhana.</p>
        </div>
    </div>
</div>
@endsection