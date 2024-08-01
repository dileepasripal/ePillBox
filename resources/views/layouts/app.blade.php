<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ePillBox') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <link rel='stylesheet' id='fl-builder-layout-770-css' href='footer.scss' media='all' />
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ePillBox') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                        {{ __('Profile') }}
                                    </a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="container">
        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
            
    <div class="fl-col-group fl-node-618a652f97e3c fl-col-group-equal-height fl-col-group-align-top fl-col-group-custom-width">
                <div class="fl-col fl-node-618a652f97e3f fl-col-small fl-col-small-full-width fl-col-small-custom-width">
        <div class="fl-col-content fl-node-content"><div class="fl-module fl-module-photo fl-node-618a6db8b3733">
        <div class="fl-module-content fl-node-content">
            <div class="fl-photo fl-photo-align-left" itemscope="" itemtype="https://schema.org/ImageObject">
        <div class="fl-photo-content fl-photo-img-png">
                    <a href="/" target="_self" itemprop="url">
                    <img loading="lazy" decoding="async" width="104" height="72" class="fl-photo-img wp-image-786" src="footer-logo.png" alt="ePillBox Logo" itemprop="image" title="ePillBox Logo">
                    </a>
                        </div>
        </div>
        </div>
    </div>
    </div>
    </div>
                <div class="fl-col fl-node-618a652f97e3e fl-col-small fl-col-small-full-width fl-col-small-custom-width">
        <div class="fl-col-content fl-node-content"><div class="fl-module fl-module-heading fl-node-618a6efa6afeb">
        <div class="fl-module-content fl-node-content">
            <h5 class="fl-heading">
            <span class="fl-heading-text">Company</span>
        </h5>
        </div>
    </div>
    <div class="fl-module fl-module-menu fl-node-618a6efc25aff">
        <div class="fl-module-content fl-node-content">
            <div class="fl-menu">
            <div class="fl-clear"></div>
        <nav aria-label="Menu" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement"><ul id="menu-footer-company-1" class="menu fl-menu-vertical fl-toggle-none"><li id="menu-item-1161" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/about-us">About Us</a></li><li id="menu-item-775" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/careers">Careers</a></li></ul></nav></div>
        </div>
    </div>
    </div>
    </div>
                <div class="fl-col fl-node-618a652f97e3d fl-col-small fl-col-small-full-width fl-col-small-custom-width">
        <div class="fl-col-content fl-node-content"><div class="fl-module fl-module-heading fl-node-619c66426d4c3">
        <div class="fl-module-content fl-node-content">
            <h5 class="fl-heading">
            <span class="fl-heading-text">Contact Us</span>
        </h5>
        </div>
    </div>
    <div class="fl-module fl-module-menu fl-node-618a6f097d730">
        <div class="fl-module-content fl-node-content">
            <div class="fl-menu">
            <div class="fl-clear"></div>
        <nav aria-label="Menu" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement"><ul id="menu-footer-contact-us-1" class="menu fl-menu-vertical fl-toggle-none"><li id="menu-item-777" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/contact-us/">Schedule a Demo</a></li><li id="menu-item-778" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/contact-us/">Partnership Opportunities</a></li><li id="menu-item-779" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/contact-us/">Media Inquiry</a></li><li id="menu-item-781" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/contact-us/">Support Question</a></li></ul></nav></div>
        </div>
    </div>
    </div>
    </div>
                <div class="fl-col fl-node-618a6789dcfe1 fl-col-small fl-col-small-full-width fl-col-small-custom-width">
        <div class="fl-col-content fl-node-content"><div class="fl-module fl-module-heading fl-node-618a6f07770da">
        <div class="fl-module-content fl-node-content">
            <h5 class="fl-heading">
            <span class="fl-heading-text">Download ePillBox</span>
        </h5>
        </div>
    </div>
    <div class="fl-module fl-module-rich-text fl-node-61af8f57aa70b footer--app-download">
        <div class="fl-module-content fl-node-content">
            <div class="fl-rich-text">
        <p><a href="" target="_blank" rel="noopener"><img loading="lazy" decoding="async" width="146" height="43" class="alignnone size-full wp-image-1122" src="" alt="Get it on Google Play"></a><br>
    <a href="" target="_blank" rel="noopener"><img loading="lazy" decoding="async" width="146" height="49" class="alignnone size-full wp-image-1121" src="" alt="Download on the App Store"></a></p>
    </div>
        </div>
    </div>
    </div>
    </div>
                <div class="fl-col fl-node-618a67a59a5f4 fl-col-small fl-col-small-full-width fl-col-small-custom-width footer--contact-info">
        <div class="fl-col-content fl-node-content"><div class="fl-module fl-module-rich-text fl-node-618a6ddd8559f">
        <div class="fl-module-content fl-node-content">
            <div class="fl-rich-text">
        <p><span class="location--city-state">Boston, MA</span></p>
    <p><span class="location--phone"><a href="tel:761234567">(076) 123-4567</a></span> <a style="color: #2ea5aa;" href="mailto:info@ePillBox.com">info@ePillBox.com</a></p>
    </div>
        </div>
    </div>
    </div>
    </div>
        </div>
            </div>
        </div>
    </div>
    <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-618a652f97e34 fl-row-default-height fl-row-align-center">
        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-full-width fl-node-content">
            
    <div class="fl-col-group fl-node-618a652f97e38">
                <div class="fl-col fl-node-618a652f97e39">
        <div class="fl-col-content fl-node-content"><div class="fl-module fl-module-rich-text fl-node-618a652f97e3a">
        <div class="fl-module-content fl-node-content">
            <div class="fl-rich-text">
        <p><span class="footer--copyright">© ePillBox. All Rights Reserved</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-and-conditions">Terms and Conditions</a></p>
    </div>
        </div>
    </div>
    </div>
    </div>
        </div>
            </div>
        </div>
    </div>
    </footer>
    </body>
</html>
