<div class="w-full max-w-[80%] mx-auto flex flex-col justify-center items-center gap-6">
    <div id="project" class="flex flex-col justify-center items-center">
      <p class="text-4xl font-bold text-purple-700 pt-[60px] ">Portfolio</p>
      <p class="text-slate-400 text-sm font-bold">
        &lt;&gt;All projects&lt;/&gt;
      </p>

    </div>
    @if(count($projects) == 0)
        <div class="text-center pt-6 text-amber-300 font-semibold"><p>No projects available!</p></div>
    @else
        <div class="w-full  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 place-items-center px-4 rounded-lg">
            @foreach ($projects as $project)
                <div class="border-2 w-full h-[400px] p-3 rounded-lg hover:-translate-y-2 transition duration-500 ease-in-out hover:cursor-pointer " key={project.name}>
                    <div
                        class="w-full h-[70%] rounded-md"
                        style="background-image: url('{{ asset("storage/" . $project->imgUrl) }}');
                            background-size: cover;
                            background-position: top;
                            background-repeat: no-repeat;">
                    </div>
                    <div class="w-full h-[20%] pt-3">
                    <div class="w-full flex justify-between items-center">
                        <h1 class="text-xl text-blue-700 font-semibold"><a class="hover:underline" href="{{ asset("storage/" . $project->url) }}" target="_blank" style="{{ !$project->active ? 'pointer-events: none; opacity: 0.5;' : '' }}">{{ $project->name }}</a></h1>
                        <p class="text-xs text-blue-700 font-bold">{{ $project->tech }}</p>
                    </div>
                    <p class="text-sm font-light text-slate-200 pt-3"> {{ $project->description }} </p>
                    {{-- <button onClick={()=> setIsActive(!isActive)} className="text-blue-700 underline font-semibold text-sm">{isActive ? "See less" : "See more"}</button> --}}

                    </div>
                </div>
            @endforeach
        </div>

    @endif
  </div>
