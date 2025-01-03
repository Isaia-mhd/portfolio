@extends("layouts.layout")
@section("title")
    Home
@endsection

@section("content")
    <div class="w-full h-[300px] mt-2 mb-2 rounded-md max-w-[400px] md:max-w-[80%] mx-auto">
        <div class="w-full max-w-[400px] mx-auto md:max-w-[80%] md:mx-0 md:w-[50%] h-full bg-slate-950 py-2 px-5 rounded-lg">
            <h1 class="text-white text-2xl">Hey, I am ANDONIAINA Isaia Mohamed</h1>
            <p class="text-white text-sm mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur saepe libero quam harum! Ex, inventore animi? Et deleniti ipsa earum id labore sit veritatis assumenda, sint ut necessitatibus possimus distinctio!</p>
            <div class="w-full mt-6">
                <a href="{{route("project")}}" class="py-2 px-7 bg-gradient-to-tl from-blue-800 to-purple-800 rounded-sm text-sm text-white hover:bg-blue-900 transition duration-150 ease-in-out">Projects</a>
            </div>
        </div>
    </div>
@endsection
