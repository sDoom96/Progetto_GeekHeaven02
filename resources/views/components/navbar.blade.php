<nav class="fixed-top navbar navbar-rounded navbar-expand-lg bg-body-tertiary">
    <div class=" container-fluid p-0">
        <a class=" px-5 navbar-brand" href="#"><img class="logo-custom" src="/media/images/logo 6.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" justify-content-center align-items-center collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pc</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true">Playstation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true">Xbox</a>
                </li>
            </ul>
            {{-- <a  href="{{route('game.create')}}"> --}}
                <button type="button" class="fs-2 search btn bg-o">
                    <div class=" d-flex justify-content-center align-items-center">
                        <i class="search-icon fa-2xs fa-solid fa-magnifying-glass" style="color: #f1faee;"></i>
                    </div>
                </button>
            {{-- </a> --}}
        </div>
    </div>
</nav>