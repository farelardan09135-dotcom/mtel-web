<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Power</title>
</head>
<body class="min-h-screen flex flex-col" x-data>

  <x-background-blue />
  <x-navbar active="power"></x-navbar>

  <main class="flex flex-col md:flex-row items-start justify-center gap-10 mt-24 w-full max-w-5xl mx-auto px-4">

    <div class="flex-1 text-justify px-3">
        <h2 class="text-4xl font-bold text-white mb-4 font-['Inter']">Power</h2>
        <p class="text-white text-base leading-relaxed">
        Halaman ini memuat berbagai SOP tentang 
        <span class="text-black font-bold">Power</span> 
        </p>
    </div>
    
</body>
</html>