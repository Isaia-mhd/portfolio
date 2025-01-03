<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/app.css">
    <title> @yield("title") | {{config("app.name")}} </title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-slate-950">
    <header class="w-full h-[50px] mt-3 mb-12 ">
        <div class="w-full h-full bg-slate-900 max-w-[400px] mx-auto md:max-w-[80%] rounded-lg px-6">
            <ul class=" w-full h-full flex justify-between items-center gap-9">
                <div class="w-6 h-6"><a href="{{route("home")}}"><img src="icon.png" alt="logo"></a></div>
                <div class="flex items-center gap-3 md:gap-6 lg:gap-9">
                    <li class="text-white text-sm font-thin"><a href="{{route("home")}}">Home</a></li>
                    <li class="text-white text-sm font-thin"><a href="{{route("project")}}">Project</a></li>
                    <li class="text-white text-sm font-thin"><a href="{{route("about")}}">About</a></li>
                    <li class="text-white text-sm font-thin"><a href="{{route("contact")}}">Contact</a></li>
                </div>
            </ul>
        </div>
    </header>
    @yield("content")
</body>
</html>
