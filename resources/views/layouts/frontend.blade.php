<!DOCTYPE html>
<html lang="en">

<style>
    /* Add your existing styles here */

    /* Mobile Menu Styles */
    .mobile-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.9);
        border-bottom: 1px solid #ccc;
        padding: 10px;
        flex-direction: row;
        gap: 10px;
    }

    @media (max-width: 767px) {
        .mobile-menu {
            display: none;
        }

        .mobile-menu.active {
            display: flex;
        }

        .md\\:hidden {
            display: none;
        }
    }
</style>

<head>
    @include('includes.meta')
    <title>@yield('title')</title>
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body style="font-family: 'Poppins', sans-serif;">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')


    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    <script>
        document.getElementById('mobileMenuButton').addEventListener('click', function() {
            var mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.style.display = (mobileMenu.style.display === 'flex' || mobileMenu.style.display === '') ?
                'none' : 'flex';
        });
    </script>
</body>

</html>
