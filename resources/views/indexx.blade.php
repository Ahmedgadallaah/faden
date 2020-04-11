
@include('layouts.nav')

@yield('content')
@include('layouts.footer')


<?php 
    $setting=\App\Setting::first();
    ?>
    