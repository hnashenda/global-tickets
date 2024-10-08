<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shortened URLs') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="272.085" height="26.7" viewBox="0 0 272.085 30" style="background-color: black;"> <defs> <clipPath id="clip-path_684"> <rect id="Rectangle_684" width="272.085" height="30" fill="none"></rect> </clipPath> </defs> <g clip-path="url(#clip-path_684)"> <path id="Path_213" d="M16.342,62.161l-.1-2.155a2.048,2.048,0,0,1-.344.769,2.931,2.931,0,0,1-.687.692,3.553,3.553,0,0,1-1.018.5,4.271,4.271,0,0,1-1.311.192H5.447a11.21,11.21,0,0,1-2.686-.267,3.3,3.3,0,0,1-1.667-.93,3.7,3.7,0,0,1-.853-1.743A12.824,12.824,0,0,1,0,56.484V50.323a12.392,12.392,0,0,1,.242-2.66,3.79,3.79,0,0,1,.853-1.757,3.42,3.42,0,0,1,1.667-.968,10.291,10.291,0,0,1,2.686-.293h8.885a4.779,4.779,0,0,1,1.68.268,4.65,4.65,0,0,1,1.222.662,3.806,3.806,0,0,1,.815.84,4.792,4.792,0,0,1,.458.8l-2.164,2.24a3.026,3.026,0,0,0-.738-.929,2.252,2.252,0,0,0-1.5-.42H5.472a2.228,2.228,0,0,0-1.629.457,2.6,2.6,0,0,0-.433,1.753v5.638A9.18,9.18,0,0,0,3.5,57.4a1.716,1.716,0,0,0,.331.825,1.116,1.116,0,0,0,.636.381,4.682,4.682,0,0,0,1.006.089H13.44a3.525,3.525,0,0,0,2.011-.417,1.434,1.434,0,0,0,.56-1.227V54.829H9.444V51.978h9.8V62.161Z" transform="translate(0.001 -36.21)" fill="#fff"></path> <path id="Path_214" d="M117.486,62.161V44.646H120.9V58.7h13.187v3.462Z" transform="translate(-95.287 -36.21)" fill="#fff"></path> <path id="Path_215" d="M389.853,62.161V44.646H403.8a10.553,10.553,0,0,1,2.317.217,3.473,3.473,0,0,1,1.527.726,2.831,2.831,0,0,1,.84,1.375,7.8,7.8,0,0,1,.254,2.164v1.095a2.569,2.569,0,0,1-2.317,2.876,3.34,3.34,0,0,1,1.935.917,3.126,3.126,0,0,1,.789,2.342V57.5a7.123,7.123,0,0,1-.305,2.253,3.1,3.1,0,0,1-.955,1.438,3.825,3.825,0,0,1-1.667.751,11.748,11.748,0,0,1-2.418.217Zm15.478-12.55a1.594,1.594,0,0,0-.344-1.171,1.694,1.694,0,0,0-1.186-.331H393.264V51.9h10.562a1.535,1.535,0,0,0,1.161-.369,1.833,1.833,0,0,0,.344-1.26Zm.407,6.837a1.957,1.957,0,0,0-.37-1.353,1.986,1.986,0,0,0-1.441-.392H393.264v4H403.8a2.342,2.342,0,0,0,1.543-.366,1.655,1.655,0,0,0,.4-1.253Z" transform="translate(-316.193 -36.21)" fill="#fff"></path> <path id="Path_216" d="M513.272,62.161l-2.189-4.073H500.518l-2.189,4.073h-3.92l9.6-17.515h3.59l9.6,17.515Zm-7.459-14.078-3.971,7.255h7.943Z" transform="translate(-400.992 -36.21)" fill="#fff"></path> <path id="Path_217" d="M624.56,62.161V44.646h3.411V58.7h13.187v3.462Z" transform="translate(-506.553 -36.21)" fill="#fff"></path> <path id="Path_218" d="M787.167,62.161V48.108h-6.389V44.646h16.191v3.462h-6.39V62.161Z" transform="translate(-633.254 -36.21)" fill="#fd0"></path> <path id="Path_219" d="M1254.018,62.161V48.108h-6.389V44.646h16.191v3.462h-6.39V62.161Z" transform="translate(-1011.897 -36.21)" fill="#fd0"></path> <rect id="Rectangle_681" width="3.412" height="17.515" transform="translate(165.929 8.436)" fill="#fd0"></rect> <path id="Path_220" d="M918.263,62.161a10.314,10.314,0,0,1-2.622-.28,3.52,3.52,0,0,1-1.668-.929,3.739,3.739,0,0,1-.891-1.744,11.721,11.721,0,0,1-.267-2.724V50.323a11.717,11.717,0,0,1,.267-2.724,3.834,3.834,0,0,1,.891-1.757,3.381,3.381,0,0,1,1.668-.929,10.783,10.783,0,0,1,2.622-.268h9.827a4.888,4.888,0,0,1,1.693.268,4.6,4.6,0,0,1,1.234.662,3.809,3.809,0,0,1,.815.84,4.76,4.76,0,0,1,.458.8l-2.189,2.24a2.6,2.6,0,0,0-.738-.929,2.314,2.314,0,0,0-1.5-.42h-9.572a2.161,2.161,0,0,0-1.6.483,2.513,2.513,0,0,0-.458,1.727v6.171a5.3,5.3,0,0,0,.076.966,1.573,1.573,0,0,0,.293.685,1.288,1.288,0,0,0,.624.419,3.374,3.374,0,0,0,1.069.14h9.7a2.254,2.254,0,0,0,1.5-.42,2.7,2.7,0,0,0,.713-.929l2.19,2.221a4.866,4.866,0,0,1-.458.808,3.79,3.79,0,0,1-.815.846,4.579,4.579,0,0,1-1.234.667,4.847,4.847,0,0,1-1.693.269Z" transform="translate(-740.344 -36.21)" fill="#fd0"></path> <path id="Path_221" d="M1045.8,62.161l-6.9-6.874-5.27,4.735v2.138h-3.462V44.646h3.462V55.695L1045.8,44.646h4.964l-9.5,8.5,9.445,9.012Z" transform="translate(-835.523 -36.21)" fill="#fd0"></path> <path id="Path_222" d="M1148.6,62.161V44.646h16.8v3.462H1152.01v3.87h13.008V54.8H1152.01v3.9H1165.4v3.462Z" transform="translate(-931.578 -36.21)" fill="#fd0"></path> <path id="Path_223" d="M1360.585,57.2a7.936,7.936,0,0,1-.306,2.368,3.407,3.407,0,0,1-.98,1.565,4.074,4.074,0,0,1-1.769.866,11.319,11.319,0,0,1-2.648.267h-12.372l.229-3.463h11.914a6.434,6.434,0,0,0,1.158-.088,1.563,1.563,0,0,0,.738-.317,1.248,1.248,0,0,0,.382-.594,3.163,3.163,0,0,0,.114-.923,1.92,1.92,0,0,0-.484-1.5,2.915,2.915,0,0,0-1.833-.417h-7.1a10.524,10.524,0,0,1-2.635-.279,4.059,4.059,0,0,1-1.705-.863,3.258,3.258,0,0,1-.93-1.473,6.967,6.967,0,0,1-.279-2.082v-.585a7.894,7.894,0,0,1,.279-2.235,3.2,3.2,0,0,1,.943-1.523,4.155,4.155,0,0,1,1.744-.863,10.919,10.919,0,0,1,2.686-.279H1360q-.1.885-.2,1.731t-.229,1.731h-11.838a2.512,2.512,0,0,0-1.718.433,2.006,2.006,0,0,0-.446,1.476,2.053,2.053,0,0,0,.446,1.489,2.459,2.459,0,0,0,1.718.445h7a12.035,12.035,0,0,1,2.75.268,4.462,4.462,0,0,1,1.807.827,3.159,3.159,0,0,1,.993,1.413,5.919,5.919,0,0,1,.306,2Z" transform="translate(-1088.5 -36.32)" fill="#fd0"></path> <path id="Path_224" d="M247.1,8.7a5.527,5.527,0,0,0-1.323-2.574A5.2,5.2,0,0,0,243.3,4.741a15.144,15.144,0,0,0-3.82-.411h-4.532V0h-4.462V4.33h-4.532a15.268,15.268,0,0,0-3.875.411,5.188,5.188,0,0,0-2.459,1.381,5.378,5.378,0,0,0-1.3,2.574,17.83,17.83,0,0,0-.372,3.955v9.029a17.821,17.821,0,0,0,.372,3.955,5.378,5.378,0,0,0,1.3,2.575,5.184,5.184,0,0,0,2.459,1.38,15.252,15.252,0,0,0,3.875.41h13.526a15.127,15.127,0,0,0,3.82-.41,5.2,5.2,0,0,0,2.478-1.38,5.527,5.527,0,0,0,1.323-2.575,17,17,0,0,0,.391-3.955V12.65A17.006,17.006,0,0,0,247.1,8.7m-4.608,12.992a3.741,3.741,0,0,1-.653,2.569,3.281,3.281,0,0,1-2.37.669H225.965a3.275,3.275,0,0,1-2.369-.669,3.736,3.736,0,0,1-.653-2.569V12.679a3.741,3.741,0,0,1,.672-2.587,3.224,3.224,0,0,1,2.35-.689h4.522V12.76h4.462V9.4h4.521a3.226,3.226,0,0,1,2.351.689,3.744,3.744,0,0,1,.671,2.587Z" transform="translate(-176.765 0.001)" fill="#fd0"></path> <rect id="Rectangle_682" width="4.541" height="4.723" transform="translate(53.722 14.862)" fill="#fd0"></rect> <rect id="Rectangle_683" width="9.1" height="3.462" transform="translate(136.514 15.462)" fill="#fff"></rect> </g> </svg>
                   {{ config('app.name', 'Shortened URLs') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
