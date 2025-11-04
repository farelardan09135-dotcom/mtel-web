@props(['active' => ''])

<nav class="fixed top-0 left-0 w-full bg-[#87CEEB]/80 backdrop-blur-md flex items-center justify-between px-6 py-3 shadow-md z-50 transition-all duration-300">
    <div class="text-red-500 font-bold text-2xl tracking-wide">Mitratel</div>
    
    <div class="flex items-center gap-8 text-sm font-medium">
        @if ($active !== 'tower')
            <a href="{{ url('/tower') }}" class="text-white hover:text-blue-500 transition">Tower</a>
        @endif

        @if ($active !== 'power')
            <a href="{{ url('/power') }}" class="text-white hover:text-blue-500 transition">Power</a>
        @endif

        @if ($active !== 'vidio')
            <a href="{{ url('/vidio') }}" class="text-white hover:text-blue-500 transition">Video</a>
        @endif
    </div>

    <a 
    href="{{ url('/')}}" 
    class="px-4 py-1 bg-white text-gray-700 rounded-md hover:text-blue-500 text-sm transition">
     Kembali
    </a>

</nav>
