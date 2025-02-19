<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product Management System</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen flex flex-col">
  <!-- Header / Navigation -->
  <header class="bg-gray-800 shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">
        <a href="{{ url('/') }}" class="hover:text-blue-400">Product Management</a>
      </h1>
      <nav>
        <ul class="flex space-x-6">
          <li><a href="{{ route('products.index') }}" class="hover:text-blue-400">Products</a></li>
          <li><a href="{{ route('categories.index') }}" class="hover:text-blue-400">Categories</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto px-4 flex-grow py-8">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800">
    <div class="container mx-auto px-4 py-4 text-center text-gray-400 text-sm">
      &copy; {{ date('Y') }} Product Management. All rights reserved.
    </div>
  </footer>
</body>
</html>
