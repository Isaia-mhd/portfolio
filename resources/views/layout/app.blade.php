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
              <a href="/admin">
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
      <footer class="bg-slate-950 text-white py-10">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">


          <div class="flex flex-col space-y-4">
            <h2 class="text-3xl font-bold text-purple-500">Isaia Mohamed</h2>
            <p class="text-gray-400 text-sm">
              Passionate junior web developer based in Madagascar. Always learning, always building.
            </p>
          </div>


          <div>
            <h3 class="text-xl font-semibold text-purple-400 mb-4">Contact</h3>
            <ul class="space-y-2 text-sm text-gray-300">
              <li><strong>Phone:</strong> +261 32 90 707 29 / +261 38 15 956 69</li>
              <li><strong>Email:</strong> <a href="mailto:{{ $admin->email }}" class="text-blue-400 hover:underline">mohamedesaie21@gmail.com</a></li>
              <li><strong>WhatsApp:</strong> <a href="https://wa.me/261329070729" target="_blank" class="text-blue-400 hover:underline">+261 32 90 707 29</a></li>
            </ul>
          </div>


          <div>
            <h3 class="text-xl font-semibold text-purple-400 mb-4">Social Media</h3>
            <ul class="space-y-2 text-sm text-gray-300">
              <li><a href="https://github.com/Isaia-mhd" target="_blank" class="hover:text-white hover:underline">GitHub: Isaia-mhd</a></li>
              <li><a href="https://web.facebook.com/profile.php?id=100081652459212" target="_blank" class="hover:text-white hover:underline">Facebook: MUHHAMED RZ</a></li>
            </ul>
          </div>
        </div>


        <div class="mt-10 border-t border-gray-700 pt-6 text-center text-sm text-gray-400">
          &copy; <span id="year"></span> {{ $admin->fullName }}. All rights reserved.
        </div>

        <script>
          document.getElementById("year").textContent = new Date().getFullYear();
        </script>
      </footer>


</body>
</html>
