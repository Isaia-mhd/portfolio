<div id="about" class="w-full max-w-[80%] mx-auto flex flex-col justify-center items-center gap-6 mb-16">

    <div class="w-full flex flex-col justify-center items-center  lg:flex-row lg:justify-between lg:items-start lg:gap-10">
      <div class="w-[250px] h-[300px] lg:w-[480px] lg:h-[350px] rounded-md">
        <img
          src="/images/piic.jpg"
          alt="my_pic"
          class="w-full h-full rounded-3xl"
          width={500}
          height={300}
        />
      </div>


      {{-- ABOUT ME TEXT --}}
      <div class="w-full pt-[30px] lg:pt-0 text-center lg:text-start ">
      <p class="text-4xl font-bold text-purple-700">About me</p>
      <p class="text-slate-400 text-sm font-bold mb-3">
        &lt;&gt;Introduction&lt;/&gt;
      </p>
        <p class="text-slate-300 text-sm">
           {{ $admin->about }}
        </p>

        {{-- BOUTTON of Resume and CONTACT --}}
        <div class="w-full h-[50px] mx-auto flex justify-center lg:justify-start gap-4 mb-12 mt-6">
          <a
            href="#contact"
            class="text-xs lg:text-md font-semibold py-4 px-2 lg:px-7 border-2 border-transparent !bg-gradient-to-tl !from-blue-800 !to-purple-800 !rounded-full text-md text-white hover:bg-blue-900 transition duration-150 ease-in-out"
          >
            Contact me
          </a>
          <a
            href="{{ asset("storage/" . $admin->resume) }}"
            download
            class="text-xs lg:text-md font-semibold py-4 px-2 lg:px-7 bg-none border-2 border-blue-500 !rounded-full text-md text-white hover:border-purple-900 transition duration-500 ease-in-out"
          >
            Download my resume
          </a>
        </div>
      </div>
    </div>
  </div>
