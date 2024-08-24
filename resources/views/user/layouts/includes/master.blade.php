@include('user.layouts.includes.header')

@yield('content')

@include('user.layouts.includes.footer')

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>