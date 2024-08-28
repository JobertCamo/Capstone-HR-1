<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
</head>
<body class="bg-gradient-to-t from-[#235789] to-[#161925] text-white bg-no-repeat h-full overflow-hidden font-roboto-slab">
    <nav class="sticky top-0 z-10 w-full"><!-- Sticky Navbar -->
        <x-navbar/>
    </nav>

    <aside class="md:absolute lg:absolute min-w-[200px] h-full bg-[#0F0F0F] bg-opacity-[65%] transition-transform duration-500
    lg:w-[15%] lg:flex md:flex hidden" id="sidebar"> <!-- SIDEBAR -->
          <x-sidebar/>
      </aside>

      <div id="content" class="ml-[15%] transition-all duration-500"> <!-- Main Content -->
          <main class="m-8">
              {{$slot}}
          </main>
      </div>
 


    @livewireScripts
</body>
</html>
