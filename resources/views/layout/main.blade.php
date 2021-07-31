<head>
{!! SEO::generate() !!}
@include('layout.head')
</head>

<header>
@include('layout.header')
</header>

<body class="bg-light">
@yield('content')
</body>

<footer>
@include('layout.footer')
</footer>