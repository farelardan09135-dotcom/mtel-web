<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Video</title>
</head>
<body class="min-h-screen flex flex-col">
    <x-background-blue></x-background-blue>
    <x-navbar active="vidio"></x-navbar>
    <x-page-header title="VIDEO" />

    <P class="text-white text-sm text-center">Halaman ini berisi tentang video pembelajaran</P>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6 mb-10 mt-4">
        <div class="w-full">
            <video controls class="rounded-lg shadow-lg w-full">
                <source src="/videos/LMS.mp4" type="video/mp4">
                    Browser kamu tidak mendukung video.
                </video>
            <p class="text-white text-center mt-2 text-sm">LMS</p>
        </div>

        <div class="w-full">
            <video controls class="rounded-lg shadow-lg w-full">
                <source src="/videos/lsm-animation.mp4" type="video/mp4">
                  Browser kamu tidak mendukung video.
            </video>
            <p class="text-white text-center mt-2 text-sm">LMS Animation</p>
        </div>

        <div class="w-full">
            <video controls class="rounded-lg shadow-lg w-full">
                <source src="/videos/msTower.mp4" type="video/mp4">
                    Browser kamu tidak mendukung video.
            </video>
        <p class="text-white text-center mt-2 text-sm">MsTower</p>
        </div>
    </div> 
</body>
</html>