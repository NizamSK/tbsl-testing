@include('admin.common.header')

@if(Route::currentRouteName() != 'login')
    @include('admin.common.topbar')
    @include('admin.common.navbar')
@endif

@yield('content')

@include('admin.common.footer')

@yield('customjs')
@yield('graph')
@yield('3dpiechart')
@yield('donutchart')
@yield('piechart')
