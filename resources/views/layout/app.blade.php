<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Isaia | {{ config("app.name") }}</title>
</head>
<body class="bg-slate-950">
    {{-- HEADER --}}
    <header class="w-full h-[50px] sticky top-0 z-50 mb-12 flex justify-center items-center ">
        <div class="w-full h-[100%] bg-slate-900 max-w-[400px] mx-auto md:max-w-[80%] rounded-full px-6">
          <ul class=" w-full h-full flex justify-between items-center gap-9">
            <div class="w-6 h-6">
              <a href="/">
                <Image
                  src="/icon/icon.png"
                  alt="Icon"
                  width={500}
                  height={300}
                />
              </a>
            </div>
            <div class="flex justify-center items-center gap-3 md:gap-6 lg:gap-9">
              <li class="text-blue-700 text-sm md:text-sm font-semibold">
                <a
                  class=" inline-block px-1 py-1 text-blue-700 border-2 border-transparent rounded-md hover:border-blue-500 hover:bg-none hover:text-blue-500 transition duration-1000"
                  href="/"
                >
                  Home
                </a>
              </li>
              <li class="text-blue-700 text-sm md:text-sm font-semibold">
                <a
                  class=" inline-block px-1 py-1 text-blue-700 border-2 border-transparent rounded-md hover:border-blue-500 hover:bg-none hover:text-blue-500 transition duration-1000"
                  href="#project"
                >
                  Portfolio
                </a>
              </li>
              <li class="text-blue-700 text-sm md:text-sm font-semibold">
                <a
                  class=" inline-block px-1 py-1 text-blue-700 border-2 border-transparent rounded-md hover:border-blue-500 hover:bg-none hover:text-blue-500 transition duration-1000"
                  href="#about"
                >
                  About
                </a>
              </li>
              <li class="text-blue-700 text-sm md:text-sm font-semibold">
                <a
                  class=" inline-block px-1 py-1 text-blue-700 border-2 border-transparent rounded-md hover:border-blue-500 hover:bg-none hover:text-blue-500 transition duration-1000"
                  href="#contact"
                >
                  Contact
                </a>
              </li>
            </div>
          </ul>
        </div>
      </header>

      {{-- CONTENT --}}
      @yield("body")

      {{-- FOOTER --}}
      <footer>
        <div class="w-full max-w-[400px] md:max-w-[80%] mx-auto py-4 flex flex-col justify-center items-center">
            <div class="w-full">
                <h1 class="text-2xl text-purple-700 font-semibold">Link</h1>
                <ul class="text-sm space-y-3">

                    <li class="">Phone: +261 32 90 707 29 / +261 38 15 956 69</li>
                    <li class="">E-mail: <a class="text-blue-500 underline" href="mailto:mohamedesaie21@gmail.com" target="_blank">mohamedesaie21@gmail.com</a></li>
                    <li class="">Whatsapp: <a class="text-blue-500 underline" href="https://wa.me/261329070729" target="_blank">+261 32 90 707 29</a></li>
                    <li class="">Git hub: <a class="text-blue-500 underline" href="https://github.com/Isaia-mhd" target="_blank">Isaia-mhd</a></li>
                    <li class="">Facebook: <a class="text-blue-500 underline" href="https://web.facebook.com/profile.php?id=100081652459212" target="_blank">MUHHAMED RZ</a></li>

                </ul>

            </div>

            <p class="text-sm text-gray-600">copyright <span>&copy;</span> {new Date().getFullYear()} - Isaia Mohamed </p>
        </div>
      </footer>

</body>
</html>
