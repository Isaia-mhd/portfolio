
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
            {{-- {frontSkills.map((skill) => (
              <li class="w-[50%] mx-auto pb-4" key={skill.tech}>
                <p class="flex justify-between w-full text-xs font-light">
                  <span> {skill.tech} </span> {skill.level}
                </p>
                <div class="w-full bg-slate-100 h-2 !rounded-md">
                  <div
                    class={`!bg-blue-700 h-full`}
                    style={{ width: `${skill.level}` }}
                  ></div>
                </div>
              </li>
            ))} --}}
          </ul>
          <ul class="w-full sm:w-[80%] ">
          <h2 class="text-center text-sm font-semibold">BACK END</h2>
            {{-- {backSkills.map((skill) => (
              <li class="w-[50%] mx-auto pb-4" key={skill.tech}>
                <p class="flex justify-between w-full text-xs font-light">
                  <span> {skill.tech} </span> {skill.level}
                </p>
                <div class="w-full bg-slate-100 h-2 !rounded-md">
                  <div
                    class={`!bg-blue-700 h-full`}
                    style={{ width: `${skill.level}` }}
                  ></div>
                </div>
              </li>
            ))} --}}
          </ul>
        </div>
      </div>
    </div>
  </div>
