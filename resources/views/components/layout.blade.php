<html>
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <nav>
            <!-- <a href="/example/laravel/public/home">Home</a>
            <a href="/example/laravel/public/about">About</a>
            <a href="/example/laravel/public/contact">Contact</a> -->
            <x-navlink href="/example/laravel/public/home">Home</x-navlink>
            <x-navlink href="/example/laravel/public/about" style="color: green;">About</x-navlink>
            <x-navlink href="/example/laravel/public/contact">Contact</x-navlink>
        </nav>
        <h1>
                {{ $heading }}
        </h1>
        <main>
            {{   $slot  }}
        </main>
        <!-- <?php echo $slot; ?> -->
    </body>
</html>
