<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>Application Form</title>
</head>
<body class="h-full bg-no-repeat overflow-scrol bg-no-repea bg-gradient-to-t from-db to-lb text-cb font-roboto ">
    <nav>
        <x-usercomponent.usernav/>
    </nav>
    <div class="w-full h-[250px]"><!--HEAD SEARCH-->
        <x-usercomponent.headsearch/>
    </div>
    <main class="w-full h-screen ">
        <x-usercomponent.posting/>
    </main>
</body>
</html>