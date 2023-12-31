{{-- <nav class="fixed-top navbar" >
    <div class="container">
        <div class="row">
            <div class="d-flex col-12 justify-center align-items-center">
                <ul class="navbar-nav" >
                    <li class="nav-item">Recensioni</li>
                    <li class="nav-item">Esports</li>
                    <li class="nav-item">Articoli</li>
                </ul>
            </div>
        </div>
    </div>
</nav> --}}
<nav class="fixed-top navbar navbar-rounded navbar-expand-lg bg-body-tertiary">
    <div class=" container-fluid p-0">
        <a class=" px-5 navbar-brand" href="{{route('home')}}"><img class="logo-custom" src="/media/images/icon/logo 6.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" justify-content-center align-items-center collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> --}}
                <li class="nav-item p-3">
                    <a class="nav-link p-2" href="#"><img class="me-1 icon-custom" src="/media/images/icon/icons8-pc-64.png" alt="">Pc</a>
                </li>

                <li class="nav-item p-3">
                    <a class="nav-link p-2" href="#"><img class=" me-2 icon-custom" src="/media/images/icon/icons8-playstation-50.png" alt="">Playstation</a>
                </li>
                <li class="nav-item p-3">
                    <a class="nav-link p-2" href="#"><img class="me-2 icon-custom" src="/media/images/icon/icons8-xbox-50.png" alt="">Xbox</a>
                </li>
                <li class="nav-item p-3">
                    <a class="nav-link p-2" href="#"><img class="me-2 icon-custom" src="/media/images/icon/icons8-nintendo-switch-logo-50.png" alt="">Nintendo</a>
                </li>
            </ul>
            <a class=" p-3" href="{{route('game.index')}}">
                <img class="me-2 icon-custom" src="/media/images/icon/icons8-list-48.png" alt="">
            </a>
            <a class=" p-3" href="{{route('game.create')}}">
                <img class="me-2 icon-custom" src="/media/images/icon/icons8-add-48.png" alt="">
            </a>

                <button type="button" class="fs-2 search btn bg-o">
                    <div class=" d-flex justify-content-center align-items-center">
                        <i class="search-icon fa-2xs fa-solid fa-magnifying-glass" style="color: #f1faee;"></i>
                    </div>
                </button>

            </div>
        </div>
    </nav>