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
    <nav class="navbar navbar-expand-md bg-white" style="font-family: manrope; font-weight: 600" >
         <div class="container pb-2 " {{--style="background-color: #FFF60F;" --}} >

            <div class=" col-lg-3 d-flex" {{--style="background-color: blue"--}}>
                <a class="navbar-brand d-flex align-item-center" href="">
                    <img src="{{asset('assets/logo.png')}}" style="width:3.2rem; height: 3rem;" alt="">
                    <p class="pt-2  px-2 fs-6">Cuan Aggregators</p>
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
                            <hr style="margin-top: -0.5vh; size: 40px">
                        </li>
                        @else
                        <li class="nav-item mb-0">
                            <a class="nav-link" aria-current="page" href="{{route('home')}}">Beranda</a>
                        </li>
                        @endif

                        
                        @if(Route::is('simulasikpr')) 
                        <li class="nav-item mb-0">
                            <a class="nav-link active" aria-current="page" href="{{route('simulasikpr')}}">Simulasi Perhitungan KPR</a>
                            <hr style="margin-top: -0.5vh; size: 40px">
                        </li>
                        @else
                        <li class="nav-item mb-0">
                            <a class="nav-link" aria-current="page" href="{{route('simulasikpr')}}">Simulasi Perhitungan KPR</a>
                        </li>
                        @endif

                        @if(Route::is('tentangkami')) 
                        <li class="nav-item mb-0">
                            <a class="nav-link active" aria-current="page" href="{{route('tentangkami')}}">Tentang Kami</a>
                            <hr style="margin-top: -0.5vh; size: 40px">
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
    
    {{-- content --}}
    <div class="container mt-5">
        @yield('content')
    </div>

    {{-- script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>