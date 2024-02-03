<!DOCTYPE html>
 <html {{--lang="{{ str_replace('_', '-', app()->getLocale()) }}" --}}>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')
    

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>

<body style="background-color: rgb(246, 246, 246)" >

    {{-- navbar --}}
    <header>
        <nav class="navbar navbar-expand-lg bg-white fixed-top" style="font-family: manrope; font-weight: 600;" >
             <div class="container pb-2 " {{--style="background-color: #FFF60F;" --}} >
    
                <div class=" col-lg-3 d-flex" {{--style="background-color: blue"--}}>
                    <a class="navbar-brand d-flex align-item-center" href="">
                        <img src="{{asset('assets/logo.png')}}" style="max-width:3.2rem; max-height: 3rem;" alt="">
                        {{-- <p class="pt-2  px-2" style="font-size: 1rem">Cuan Aggregators</p> --}}
                    </a>
                </div>
    
                <button class="navbar-toggler flex-row-reverse" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    {{-- <span class="navbar-toggler-icon"></span> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FFF60F" class="bi bi-list" viewBox="1 1 14 14" style="border-widht: 0; border-color: white">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg>
                </button>
    
                <div class="col-12 col-lg-9 " style=" font-size: 2vh">
                    <div class="collapse navbar-collapse flex-row-reverse gap-3" id="navbarNavDropdown">
                        <ul class="navbar-nav text-center ">
    
                            @if(Route::is('home')) 
                            <li class="nav-item mb-0">
                                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Beranda</a>
                                <hr style="margin-top: -1vh;" class="border border-warning border-2"/>
                            </li>
                            @else
                            <li class="nav-item mb-0">
                                <a class="nav-link" aria-current="page" href="{{route('home')}}">Beranda</a>
                            </li>
                            @endif
    
                            
                            @if(Route::is('simulasikpr')) 
                            <li class="nav-item mb-0">
                                <a class="nav-link active" aria-current="page" href="{{route('simulasikpr')}}">Simulasi Perhitungan KPR</a>
                                <hr style="margin-top: -1vh;"  class="border border-warning border-2"/>
                            </li>
                            @else
                            <li class="nav-item mb-0">
                                <a class="nav-link" aria-current="page" href="{{route('simulasikpr')}}">Simulasi Perhitungan KPR</a>
                            </li>
                            @endif
    
                            @if(Route::is('tentangkami')) 
                            <li class="nav-item mb-0">
                                <a class="nav-link active" aria-current="page" href="{{route('tentangkami')}}">Tentang Kami</a>
                                <hr style="margin-top: -1vh;"  class="border border-warning border-2"/>
                            </li>
                            @else
                            <li class="nav-item mb-0">
                                <a class="nav-link" aria-current="page" href="{{route('tentangkami')}}">Tentang Kami</a>
                            </li>
                            @endif
                            
                        </ul>
                    </div>
                </div>
    
            </div>
        </nav>
    </header>
    
    {{-- content --}}
    <div class="container-md" style="margin-top: 7rem">
        @yield('content')
    </div>

    {{-- footer --}}
    <footer class=" bg-secondary">
        <div class="mt-5 py-5 container">
            <div class=" text-white justify-content-md-evenly row">
                <div class="hubungi-kami col-12 col-md-6 col-lg-4 mb-3">
                    <h6>Hubungi Kami</h6>
                    <p>Sahid Sudirman Center 43E floor<br>Jl. Jend. Sudirman No.86<br>Jakarta Pusat<br>DKI Jakarta, Indonesia 10220</p>
                    <p>Telepon : +62 852-1084-5762<br>Email : aggregatorscuan@gmail.com<br>Jam Kerja: Senin-Jumat (09.00-17.00)</p>
                </div>
                <div class="tentang-kami col-12 col-md-6 col-lg-3 mb-3">
                    <h6>Tentang Kami</h6>
                    <a href="" class="text-white no-underline">Beranda</a><br>
                    <a href="" class="text-white no-underline">Tentang Kami</a><br>
                    <a href="" class="text-white no-underline">Simulasi Hitung KPR</a>
                </div>
                <div class="media-sosial col-12 col-md-6 col-lg-4">
                    <h6>Media Sosial</h6>

                    <p>2024 Cuan Aggregators</p>
                </div>
                <div class="logo col-12 col-md-6 col-lg-1 mb-5">
                    <img src="{{asset('assets/logo.png')}}" style="max-width:3.2rem; max-height: 3rem;" alt="">
                </div>
            </div>
        </div>
    </footer>

    {{-- script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
