<!DOCTYPE html>
<html lang="id">
<head>
    @include('maxton.layouts.head')
</head>
<body>
    <div class="wrapper">
        <!-- Header -->
        @include('maxton.layouts.header')

        <!-- Main Content -->
        <main class="page-content">
            @yield('content')
        </main>

        <!-- Footer -->
        @include('maxton.layouts.footer')
    </div>

    <!-- Script JS -->
    @include('maxton.layouts.script')
</body>
</html>