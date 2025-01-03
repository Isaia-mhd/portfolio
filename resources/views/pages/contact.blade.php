@extends("layouts.layout")
@section("title")
    Contact me
@endsection
@section("content")
    <div class="w-full h-[300px] mt-2 mb-2 rounded-md max-w-[400px] md:max-w-[80%] mx-auto">
        <form action="" method="POST" class="w-full max-w-[400px] mx-auto md:max-w-[50%] lg:max-w-[40%] md:mx-0 py-2 rounded-lg">
            @csrf
            <div class="mb-4 text-white font-semibold">
                <h1 class="text-2xl ">Contact</h1>
            </div>
            <div class="flex flex-col gap-2 mb-6">
                <label for="name" class="text-white text-sm font-semibold">Name</label>
                <input
                type="text"
                name="name"
                id="name"
                class="rounded px-3 text-slate-700 text-sm font-semibold outline-none focus:border border-blue-400 border-shadow " placeholder="Name">
            </div>
            <div class="flex flex-col gap-2 mb-6">
                <label for="email" class="text-white text-sm font-semibold">E-mail</label>
                <input
                type="email"
                name="email"
                id="email"
                class="rounded px-3 text-slate-700 text-sm font-semibold outline-none focus:border border-blue-400 border-shadow " placeholder="Name">
            </div>
            <div class="flex flex-col gap-2 mb-6">
                <label for="name" class="text-white text-sm font-semibold">Message</label>
                <textarea
                type="text"
                name="name"
                id="name"
                placeholder="Text here!"
                class="h-[100px] rounded px-3 text-slate-700 text-sm font-semibold outline-none focus:border border-blue-400 border-shadow " placeholder="Name"></textarea>
            </div>
            <div class="flex flex-col gap-2 mb-6">
                <button type="submit" class="bg-blue-600 py-2 px-5 text-sm text-white rounded font-light w-[100px] hover:bg-blue-700 transition duration-150 ease-in-out active:bg-blue-800">Send</button>
            </div>
        </form>
    </div>
@endsection
