<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
</head>
<body class="h-full overflow-hidden bg-no-repeat bg-gradient-to-t from-lb to-db text-cb font-roboto">
    
    <nav class="sticky top-0 z-10 w-full">
        <x-navbar/><!-- Sticky Navbar -->
    </nav>
    
    <div class="transition-all duration-500 relative lg:flex md:flex sm:flex  md:w-[23%] sm:w-[25%] hidden" id="sidebar">
        <aside class="absolute h-screen" >
            <x-sidebar/><!-- SIDEBAR -->
        </aside>
    </div>    
    <div class="flex h-screen"> <!--CONTENT CONTAINER-->
        <div id="content" class="h-screen overflow-y-auto transition-all duration-500 ml-[20%]">
            <main class="m-8">
                {{$slot}}  <!--CONTENT LOAD-->
            </main>
        </div>
    </div>
    
    @livewireScripts
</body>
</html>
