
<div class="w-full max-w-[80%] mx-auto flex flex-col justify-center items-center gap-6">
    <div class="flex flex-col justify-center items-center">
      <p class="text-4xl font-bold text-purple-700">Skills</p>
      <p class="text-slate-400 text-sm font-bold">
        &lt;&gt;Competences&lt;/&gt;
      </p>
    </div>

    <div class="w-full rounded-lg">
      <div class="bg-slate-900 w-full p-3 rounded-lg flex flex-col gap-10 justify-start items-center">
        <h1 class="text-center text-xl text-blue-500 font-bold">
          Web developpment
        </h1>
        <div class="w-full flex flex-col items-center gap-8 lg:flex-row justify-around lg:items-start">
          <ul class="w-full sm:w-[80%] ">
          <h2 class="text-center text-sm font-semibold">FRONT END</h2>
          @foreach ($languages as $language )
            @if($language->part == "Front-end")
                <li class="w-[50%] mx-auto py-1">

                    <div class="w-full bg-slate-950 h-[50px] !rounded-lg flex justify-between items-center px-3 cursor-pointer hover:bg-slate-900 transition duration-700 ease-in-out">
                        <h3 class="text-blue-500 font-semibold">{{ $language->name }}</h3>
                        <div class="w-[40px] h-[40px] ">
                            <img src="{{ asset('storage/' . $language->icon) }}" alt="Icon" class="rounded-4xl w-full h-full object-contain" />
                        </div>

                    </div>
                </li>
            @endif
          @endforeach

          </ul>
          <ul class="w-full sm:w-[80%] ">
          <h2 class="text-center text-sm font-semibold">BACK END</h2>
          @foreach ($languages as $language )
          @if($language->part == "Back-end")
              <li class="w-[50%] mx-auto py-1">

                  <div class="w-full bg-slate-950 h-[50px] !rounded-lg flex justify-between items-center px-3 cursor-pointer hover:bg-slate-900 transition duration-700 ease-in-out">
                    <h3 class="text-blue-500 font-semibold">{{ $language->name }}</h3>
                    <div class="w-[40px] h-[40px] ">
                        <img src="{{ asset('storage/' . $language->icon) }}" alt="Icon" class="rounded-4xl w-full h-full object-contain" />
                    </div>
                  </div>
              </li>
          @endif
        @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
