<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 1. Head Component -->
    @include('landing.layouts.head')
</head>

<body>

    <!-- 2. Header / Menubar Component -->
    <header>
        @include('landing.layouts.header')
    </header>

    <!-- 3. Main Content Component -->
    <main>
        @yield('content')
    </main>

    <!-- 4. Footer Component -->
    <footer>
        @include('landing.layouts.footer')
    </footer>

    <!-- 5. Scripts Component -->
    @include('landing.layouts.script')

</body>

</html>