<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Tower</title>
</head>

<body class="min-h-screen flex flex-col" x-data>

  <x-background-blue />

  <x-navbar active="tower"></x-navbar>

  <!-- ✅ MAIN MENU DROPDOWN -->
 <main class="flex flex-col md:flex-row items-start justify-center gap-10 mt-24 w-full max-w-5xl mx-auto px-4">

  <!-- KIRI: TEKS -->
  <div class="flex-1 text-justify px-3">
    <h2 class="text-4xl font-bold text-white mb-4 font-['Inter']">Tower</h2>
    <p class="text-white text-base leading-relaxed">
      Halaman ini memuat berbagai kategori tower lengkap dengan standar operasional (SOP) dan penjelasan teknis yang mendukung pemahaman terhadap spesifikasi, fungsi, serta penerapan masing-masing jenis tower.
    </p>
  </div>

  <!-- KANAN: DROPDOWN -->
  <div x-data="dropdownMenu" class="flex-1 max-w-sm mx-auto space-y-4">
    <template x-for="menu in menus" :key="menu.id">
      <div class="w-full">
        <!-- Tombol utama -->
        <button
          @click="toggle(menu.id)"
          class="block w-full text-left bg-gray-100 text-gray-800 font-semibold p-3 rounded-lg shadow hover:bg-gray-200 transition"
          x-text="menu.label"
        ></button>

        <!-- Submenu -->
        <div
          x-show="openIndex === menu.id"
          x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 -translate-y-2"
          x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-in duration-200"
          x-transition:leave-start="opacity-100 translate-y-0"
          x-transition:leave-end="opacity-0 -translate-y-2"
          class="bg-gray-200 text-gray-800 rounded-lg mt-2 p-2"
        >
          <ul>
            <template x-for="item in menu.items" :key="item.label">
              <li>
                <a 
                  :href="item.href" 
                  x-text="item.label"
                  class="block px-4 py-2 rounded hover:bg-gray-300 transition"
                ></a>
              </li>
            </template>
          </ul>
        </div>
      </div>
    </template>
  </div>

</main>


</body>
</html>
