<div class="containerHeader">
    <div class="searchBarHearder bg-success-subtle">
        <div class="headerchild container-fluid d-flex flex-row align-items-center ">
            <div class="navbarTop">
                <x-navbar></x-navbar>
            </div>
            <div class="Logo m-3">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/images/logobaitussalam.png') }}" alt="BaitussalamLogo" width="120"
                        height="96">
                </a>
            </div>
            {{-- <div class="input-group mx-auto w-50" id="searchBarDesktop">
                <x-SearchBar></x-SearchBar>
            </div> --}}
            <div class="ms-auto">
                <x-signIn></x-signIn>
            </div>
            {{-- <div class="fotoProfileContainer ms-auto">
                <a href="">
                    <img class="rounded-circle m-3" src="{{ asset('assets/images/fotoProfile.jpg') }}" alt="fotoProfile" width="50"
                        height="50">
                </a>
            </div> --}}
        </div>
    </div>
    <div class="navbar1">
        <x-navbar></x-navbar>
    </div>

</div>
