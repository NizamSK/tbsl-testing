<header class="py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-5 col-md-3">
                <a href="javascript:;">
                    @if(Route::currentRouteName()=='lysaght') 
                    <img src="{{ asset('website/assets/images/lysaght/logo.svg') }}" alt="Lysaght" class="img-fluid">
                    @elseif(Route::currentRouteName()=='durashine') 
                    <img src="{{ asset('website/assets/images/logo-durashine.png') }}" alt="Durashine" class="img-fluid">
                    @elseif(Route::currentRouteName()=='ezybuild') 
                    <img src="{{ asset('website/assets/images/logo-ezybuild.png') }}" alt="Ezybuild" class="img-fluid">
                    @endif
                </a>
            </div>
            <div class="col-7 col-md-9 text-end">
                <div class="d-flex align-items-center justify-content-end">
                    <div class="nav-trigger d-block d-md-none">☰</div>
                    <div class="navigation pe-md-3 pe-lg-4">
                        <div class="nav-inner">
                            <a href="#about" class="menu-link">About</a>
                            <a href="#products" class="menu-link">Products</a>
                            <!-- <a href="#projects" class="menu-link">Projects</a> -->
                            <a href="#case" class="menu-link">Case Studies</a>
                            <a href="#contact" class="menu-link special">Contact Now</a>
                        </div>
                    </div>
                    <img src="{{ asset('website/assets/images/logo.png') }}" alt="Tata Blue Steel" width="150" class="img-fluid ms-3 ms-lg-4 tbsl">
                </div>
            </div>
        </div>
    </div>
</header>
