<!-- Todo App Homepagina — Tailwind CSS v4
     Bestand: Todo-app-homepage-tailwind-v4.html
     Bevat alleen HTML + kleine CSS overrides (in <style>)
-->

<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Todo — Home</title>
  <!-- Tailwind CDN (gebruik je lokale build / PostCSS in productie).
       Specificeer hier v4 als je een specifieke CDN wilt gebruiken in je projectomgeving.
  -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* Kleine, niet-Tailwind overrides voor fijne details */
    :root { --accent: themeColorAccident; }
    .todo-item { transition: background-color .15s ease, transform .12s ease; }
    .todo-item:hover { transform: translateY(-2px); }
    /* Simpele placeholder styling voor empty state */
    .empty-illustration { opacity: .85; }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900 antialiased">
  <!-- Header -->
  <header class="bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center gap-3">
          <div class="rounded-md bg-indigo-600 text-white p-2 font-semibold">Todo<span class="text-indigo-100">App</span></div>
          <h1 class="text-lg font-semibold">Mijn taken</h1>
        </div>
        <nav class="hidden sm:flex items-center gap-4 text-sm text-slate-600">
          <a href="#" class="hover:text-slate-900">Overzicht</a>
          <a href="#" class="hover:text-slate-900">Projecten</a>
          <a href="#" class="hover:text-slate-900">Instellingen</a>
          <button class="ml-4 px-3 py-1 rounded-lg bg-indigo-50 text-indigo-700 text-sm">Inloggen</button>
        </nav>
      </div>
    </div>
  </header>

  {{$slot}}

    <footer class="border-t border-slate-100 mt-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6 text-sm text-slate-500 text-center">
      &copy; "Todo App" — Gemaakt met Tailwind CSS
    </div>
  </footer>

</body>
</html>