<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Tailwind Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <!-- Header -->
  <header class="bg-blue-600 text-white p-4 shadow">
    <h1 class="text-2xl font-bold">My Simple Page</h1>
  </header>

  <!-- Main Content -->
  <main class="p-6">
    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md">
        <h2 class="text-gray-500">Card One</h2>
        <p class="text-xl font-bold text-gray-800">Content 1</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md">
        <h2 class="text-gray-500">Card Two</h2>
        <p class="text-xl font-bold text-gray-800">Content 2</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md">
        <h2 class="text-gray-500">Card Three</h2>
        <p class="text-xl font-bold text-gray-800">Content 3</p>
      </div>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow p-6">
      <h2 class="text-lg font-semibold text-gray-800 mb-4">Simple Table</h2>
      <table class="w-full table-auto border-collapse">
        <thead>
          <tr class="bg-gray-200">
            <th class="px-4 py-2 border">ID</th>
            <th class="px-4 py-2 border">Name</th>
            <th class="px-4 py-2 border">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">1</td>
            <td class="px-4 py-2 border">Alice</td>
            <td class="px-4 py-2 border">Active</td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">2</td>
            <td class="px-4 py-2 border">Bob</td>
            <td class="px-4 py-2 border">Inactive</td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">3</td>
            <td class="px-4 py-2 border">Charlie</td>
            <td class="px-4 py-2 border">Active</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white text-center p-4 mt-6">
    © 2025 My Tailwind Page
  </footer>

</body>
</html>
