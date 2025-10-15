<!doctype html>
<html lang="en" class="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title','Portfolio')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>html, body { background: var(--bg); color: var(--muted); font-family: 'Poppins', sans-serif; }</style>
  <!-- AOS is initialized in app.js -->
</head>
<body class="bg-bgdark text-textmuted antialiased">
  @include('components.header')

  <main class="max-w-6xl mx-auto px-4 md:px-6 py-10">
    @if(session('success'))
      <div class="mb-6 p-4 rounded card text-sm text-textmuted border-l-4 border-highlight">
        {{ session('success') }}
      </div>
    @endif

    @yield('content')
  </main>

  @include('components.footer')

  <!-- AOS (if you prefer CDN fallback) -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>
</html>
