<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.home') }}">
                            <i class="mdi mdi-view-dashboard mr-2"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-google-pages mr-2"></i>Campaigns<div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                            <a href="{{ route('admin.lysaght') }}" class="dropdown-item">Lysaght</a>
                            <a href="{{ route('admin.durashine') }}" class="dropdown-item">Durashine</a>
                        </div>
                    </li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-google-pages mr-2"></i>Pages <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Auth Pages <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="auth-login.html" class="dropdown-item">Login</a>
                                    <a href="auth-register.html" class="dropdown-item">Register</a>
                                    <a href="auth-recoverpw.html" class="dropdown-item">Recover Password</a>
                                    <a href="auth-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                    <a href="auth-404.html" class="dropdown-item">Error 404</a>
                                    <a href="auth-500.html" class="dropdown-item">Error 500</a>
                                </div>
                            </div>
                            <a href="pages-invoice.html" class="dropdown-item">Invoice</a>
                            <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                            <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                            <a href="pages-faqs.html" class="dropdown-item">FAQs</a>
                            <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                        </div>
                    </li> --}}



                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-share-variant mr-2"></i>More <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <a href="calendar.html" class="dropdown-item">Calendar</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tables" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tables <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                    <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                    <a href="tables-datatables.html" class="dropdown-item">Data Tables</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Icons <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="icons-feather.html" class="dropdown-item">Feather Icons</a>
                                    <a href="icons-materialdesign.html" class="dropdown-item">Material Design</a>
                                    <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                    <a href="icons-fontawesome.html" class="dropdown-item">Font awesome</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Maps <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                    <a href="maps-google.html" class="dropdown-item">Google Maps</a>
                                    <a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
                                </div>
                            </div>
                        </div>
                    </li> --}}

                </ul>
            </div>
        </nav>
    </div>
</div>
