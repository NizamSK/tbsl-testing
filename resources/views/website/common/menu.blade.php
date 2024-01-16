<header class="py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8 col-md-4 col-lg-3">
                <a href="javascript:;">
                    @if(Route::currentRouteName()=='lysaght') 
                    <img src="{{ asset('website/assets/images/logo.png') }}" alt="Lysaght" class="img-fluid">
                    @elseif(Route::currentRouteName()=='durashine') 
                    <img src="{{ asset('website/assets/images/logo-durashine.png') }}" alt="Durashine" class="img-fluid">
                    @elseif(Route::currentRouteName()=='ezybuild') 
                    <img src="{{ asset('website/assets/images/logo-ezybuild.png') }}" alt="Ezybuild" class="img-fluid">
                    @endif
                </a>
            </div>
            <div class="col-4 col-md-8 col-lg-9 text-end">
                <div class="nav-trigger d-block d-md-none">☰</div>
                <div class="navigation">
                    <div class="nav-inner">
                        <a href="#about" class="menu-link">About</a>
                        <a href="#products" class="menu-link">Products</a>
                        <!-- <a href="#projects" class="menu-link">Projects</a> -->
                        <a href="#case" class="menu-link">Case Studies</a>
                        <a href="#contact" class="menu-link special">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
