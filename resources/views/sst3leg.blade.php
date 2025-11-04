<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Tower SST 3 Leg</title>
</head>
<body class="min-h-screen flex flex-col">

    <x-background-blue />
    <x-navbar active="tower"></x-navbar>
    <x-page-header title="SST 3 LEG" />

    <main class="flex flex-col items-start justify-center mt-2 w-full max-w-6xl mx-auto px-4">
        <div class="w-full space-y-6">
            @foreach ($towers as $tower)
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition border border-gray-200 p-4 space-y-3">

                <!-- GRID 3 KOLOM -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start">

                    <!-- 🧱 KOLOM KIRI: GAMBAR + NAMA + VARIANT -->
                    <div class="flex flex-col items-center justify-center space-y-3">
                        <!--Image Tower-->
                        <div class="w-full bg-transparent rounded-lg overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('image/3leg42b.png') }}" 
                            alt="{{ $tower['name'] }}" 
                            class="object-contain max-h-72 w-auto">
                        </div>
                        <!-- Nama Tower -->
                        <h2 class="text-lg font-bold text-gray-800 text-center">
                        {{ $tower['name'] }}
                        </h2>
                        <!-- Kode Varian (di bawah nama) -->
                        @foreach ($tower['heights'] ?? [] as $height)
                        @foreach ($height['variants'] ?? [] as $variant)
                            <p class="text-sm text-indigo-600 font-semibold">
                            Kode Varian: {{ $variant['variant_code'] }}
                            </p>
                        @endforeach
                        @endforeach
                    </div>

                     <!-- 🧱 KOLOM TENGAH: ANTENNA, CRITERIA, SEISMIC -->
                    <div class="space-y-3 text-sm">
                        <div>
                            <h4 class="font-semibold text-indigo-600 mb-1">Antenna Load:</h4>
                            <ul class="list-disc list-inside text-gray-600 text-xs">
                                @foreach ($tower['heights'][0]['variants'][0]['antenna_load'] ?? [] as $load)
                                <li>{{ $load }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-semibold text-indigo-600 mb-1">Design Criteria:</h4>
                            <ul class="list-disc list-inside text-gray-600 text-xs">
                                @foreach ($tower['heights'][0]['variants'][0]['design_criteria'] ?? [] as $criteria)
                                <li>{{ $criteria }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-semibold text-indigo-600 mb-1">Design Seismic:</h4>
                            <ul class="list-disc list-inside text-gray-600 text-xs">
                                @foreach ($tower['heights'][0]['variants'][0]['design_seismic'] ?? [] as $seismic)
                                <li>{{ $seismic }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- 🧱 KOLOM KANAN: CAPACITY & MATERIAL -->
                    <div class="space-y-3 text-sm">
                        <div>
                            <h4 class="font-semibold text-indigo-600 mb-1">Design Capacity:</h4>
                            <ul class="list-disc list-inside text-gray-600 text-xs">
                                @foreach ($tower['heights'][0]['variants'][0]['design_capacity'] ?? [] as $cap)
                                <li>{{ $cap }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-semibold text-indigo-600 mb-1">Design Material:</h4>
                            <ul class="list-disc list-inside text-gray-600 text-xs">
                                @foreach ($tower['heights'][0]['variants'][0]['design_material'] ?? [] as $mat)
                                <li>{{ $mat }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- 🧾 FILE PDF VIEW & DOWNLOAD -->
                        <div class="mt-4 space-y-2">
                            <h4 class="font-semibold text-indigo-600 mb-1">Dokumen PDF:</h4>

                            <!-- Tombol Lihat PDF -->
                            <a 
                                href="{{ asset('pdf/sst3leg42-b.pdf') }}" 
                                target="_blank" 
                                class="inline-block bg-indigo-600 text-white text-xs px-3 py-2 rounded-lg shadow hover:bg-indigo-700 transition"
                            >
                                🔍 Lihat PDF
                            </a>

                            <!-- Tombol Download PDF -->
                            <a 
                                href="{{ asset('pdf/sst3leg42-b.pdf') }}" 
                                download 
                                class="inline-block bg-gray-300 text-gray-800 text-xs px-3 py-2 rounded-lg shadow hover:bg-gray-400 transition"
                            >
                                ⬇️ Unduh PDF
                            </a>
                        </div>
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>
