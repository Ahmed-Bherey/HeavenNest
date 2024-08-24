@include('admin.layouts.includes.header')

@include('admin.layouts.includes.navbar')

@include('admin.layouts.includes.sidebar')
<div class="content-wrapper">
        @yield('content')
</div>

@include('admin.layouts.includes.footer')
