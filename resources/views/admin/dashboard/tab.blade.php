<ul class="nav nav-tabs mb-3">
    <li class="nav-item">
        <a href="{{ route('admin.home') }}" class="nav-link @php if(Route::currentRouteName() == 'admin.home') echo 'active';  @endphp">
            <i class="mdi mdi-home-variant d-lg-none d-block"></i>
            <span class="d-none d-lg-block">All Jobs</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.reports') }}"  class="nav-link @php if(Route::currentRouteName() == 'admin.reports') echo 'active';  @endphp">
            <i class="mdi mdi-account-circle d-lg-none d-block"></i>
            <span class="d-none d-lg-block">Infographics</span>
        </a>
    </li>
</ul>
