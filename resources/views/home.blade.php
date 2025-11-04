<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home Page</title>
</head>

<body class="relative min-h-screen flex flex-col items-center justify-center text-white overflow-hidden">

    <x-background-blue />

    <div class="relative z-10 w-full">
        <x-navbar />

        <div class="w-full max-w-5xl mx-auto px-4 sm:px-6 md:px-10">
            <!-- JUDUL -->
            <div class="text-center mt-16 sm:mt-20">
                <h1 class="font-['Bricolage_Grotesque'] text-3xl sm:text-4xl md:text-5xl font-bold text-white py-2 inline-block border-b border-gray-400">
                    TouchMe
                </h1>
                <p class="font-['Inter'] text-base sm:text-lg md:text-xl text-white mt-3 px-4">
                    Website ini berisi tentang standar operasional prosedur Mitratel
                </p>
            </div>

            <!-- MENU CARD -->
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 place-items-center">
                
                <!-- TOWER -->
                <a href="/tower"  
                class="w-44 h-44 sm:w-52 sm:h-52 md:w-60 md:h-60 bg-cover bg-center rounded-2xl flex items-center justify-center 
                        font-bold text-white shadow-lg hover:scale-105 hover:brightness-90 hover:text-black transition-transform duration-300"
                style="background-image: url({{ asset('image/bg-tower.jpg') }});">
                    TOWER
                </a>

                <!-- POWER -->
                <a href="#"  
                class="w-44 h-44 sm:w-52 sm:h-52 md:w-60 md:h-60 bg-cover bg-center rounded-2xl flex items-center justify-center 
                        font-bold text-white shadow-lg hover:scale-105 hover:brightness-90 hover:text-black transition-transform duration-300"
                style="background-image:url({{ asset('image/bg-power.jpg') }});">
                    POWER            
                </a>

                <!-- SOP -->
                <a href="#"  
                class="w-44 h-44 sm:w-52 sm:h-52 md:w-60 md:h-60 bg-blue-300 bg-cover bg-center rounded-2xl flex items-center justify-center 
                        font-bold text-white shadow-lg hover:scale-105 hover:brightness-90 hover:text-black transition-transform duration-300">
                    VIDEO
                </a>   
            </div>
        </div>
    </div>

</body>
</html>
