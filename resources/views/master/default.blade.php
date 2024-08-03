<head>
    @include('master.parts.head')
</head>

<body>
    <main class="w-full flex min-h-screen overflow-hidden">
        @yield('content')
    </main>
    @include('master.parts.foot')
</body>
