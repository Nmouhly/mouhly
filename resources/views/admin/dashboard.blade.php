<!doctype html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('dashassets/img/favicons/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('dashassets/css/phoenix.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset('dashassets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    <style>
      body {
        opacity: 0;
      }
    </style>
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0">
            <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                            <li>
                                <a href="index.html" class="align-items-center">
                                    <img src="{{ asset('dashassets/img/favicons/logo.png') }}" alt="Logo" style="height: 40px;">
                                </a>
                            </li>
                            <br>
                            <br>
                           
                            <li class="nav-item"><a class="nav-link active" href="/admin/user">
                                <div><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Utilisateur</span></div>
                            </a></li>
                            <li class="nav-item"><a class="nav-link active" href="/admin/news">
                                    <div><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">ACTUALITES</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link active" href="index.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">EQUIPES</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link active" href="/membre/list">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Personnel</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link active" href="index.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Publications</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link active" href="index.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Projets Industriels</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link active" href="index.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Informations</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link active" href="index.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Événements</span></div>
                                </a></li>
                        </ul>
                    </div>
                    <div class="navbar-vertical-footer">
                        <a class="btn btn-link border-0 fw-semi-bold d-flex ps-0" href="#!" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-light navbar-top navbar-expand">
                <div class="navbar-logo">
                    <button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="index.html">
                        <div class="d-flex align-items-center">
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="search-box d-none d-lg-block" style="width:25rem;">
                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                            <input class="form-control form-control-sm search-input search min-h-auto" type="search" placeholder="Search..." aria-label="Search">
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
                        <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span></a></li>
                        <li class="nav-item dropdown"><a class="nav-link notification-indicator notification-indicator-primary" id="navbarDropdownSettings" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="settings" style="height:20px;width:20px;"></span></a></li>
                        <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                                </svg></a></li>
                    </ul>
                </div>
            </nav>
            <div class="content">
                <!-- Your page content goes here -->
            </div>
        </div>
    </main>
    <script src="{{ asset('dashassets/js/phoenix.js') }}"></script>
    <script src="{{ asset('dashassets/js/ecommerce-dashboard.js') }}"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>
