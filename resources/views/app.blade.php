<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>Bersandar ID - Teman Kapanpun Kamu Butuh</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Bersandar ID - Teman Kapanpun Kamu Butuh">
    <meta name="description"
        content="Platform yang menghubungkanmu dengan Buddy terbaik. Butuh teman untuk mengobrol santai, keliling kota, atau sekadar nongkrong bareng?">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Bersandar ID - Teman Ngobrol Kapanpun Kamu Butuh">
    <meta property="og:description"
        content="Platform yang menghubungkanmu dengan Buddy terbaik. Butuh teman untuk mengobrol santai, keliling kota, atau sekadar nongkrong bareng?">
    <meta property="og:image" content="{{ asset('logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="Bersandar ID - Teman Kapanpun Kamu Butuh">
    <meta property="twitter:description"
        content="Platform yang menghubungkanmu dengan Buddy terbaik. Butuh teman untuk mengobrol santai, keliling kota, atau sekadar nongkrong bareng?">
    <meta property="twitter:image" content="{{ asset('logo.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/logo/logo-3.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
