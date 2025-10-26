<html class="h-full bg-gray-100">
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="h-full bg-red-200">
        @props([
            'type' => 'a',
            'active' => false,
            'href' => null
        ])

        <!-- @if ($type === 'a')
        <a {{ $attributes->merge(['href' => $href, 'class' => $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white']) }}>
            {{ $slot }}
        </a>
        @else
        <button {{ $attributes->merge(['class' => $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white']) }}>
            {{ $slot }}
        </button>
        @endif -->

        <!-- Component Usage -->
        <nav>
            <x-navlink href="/home" :active="request()->is('home')">
                Home
            </x-navlink>
            <x-navlink href="/about" :active="request()->is('about')">
                About
            </x-navlink>
            <x-navlink type="button" href="/contact" :active="request()->is('contact')">
                Contact
            </x-navlink>  
            <x-navlink href="/jobs" :active="request()->is('jobs')">
                Job
            </x-navlink> 
            <x-navlink href="/tags" :active="request()->is('tags')">
                Tag
            </x-navlink> 
            <x-navlink href="/employers" :active="request()->is('employers')">
                Employer
            </x-navlink> 
            
        </nav>
        
        <h1>{{ $heading }}</h1>
        
        <main>
            {{ $slot }}
        </main>
    </body>
</html>