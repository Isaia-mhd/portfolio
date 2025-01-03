@extends("layouts.layout")
@section("title")
    Home
@endsection

@section("content")
    <div class="w-full h-[300px] mt-2 mb-2 rounded-md max-w-[400px] md:max-w-[80%] mx-auto">
        <div class="w-full max-w-[400px] mx-auto md:max-w-[80%] md:mx-0 md:w-[50%] h-full bg-slate-950 py-2 px-5 rounded-lg">
            <h1 class="text-white text-2xl">Hey, I am ANDONIAINA Isaia Mohamed</h1>
            <p class="text-white text-sm mt-6">I’m a passionate Laravel developer with expertise in PHP, MySQL, and building scalable web applications and APIs. I focus on writing clean, maintainable code and leveraging Laravel’s powerful tools like Eloquent ORM, Blade, and Artisan.</p>
            <p class="text-white text-sm mt-6">I enjoy collaborating with teams to deliver high-quality solutions and staying updated with the latest web development trends.</p>
            <div class="w-full mt-6">
                <a href="{{route("project")}}" class="py-2 px-7 bg-gradient-to-tl from-blue-800 to-purple-800 rounded-sm text-sm text-white hover:bg-blue-900 transition duration-150 ease-in-out">Projects</a>
            </div>
        </div>
    </div>
@endsection
