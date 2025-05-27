@if (session()->has("error"))
<div id="error-alert" class="bg-slate-800 border border-red-400 text-red-500 relative w-full mt-2 py-2 px-3 rounded-md max-w-[400px] md:max-w-[80%] mx-auto">
    <p class="text-white">{{ session("error") }}</p>
    <button onclick="document.getElementById('error-alert').remove()" class="absolute top-2 right-4 cursor-pointer text-red-500 font-bold text-xl leading-none focus:outline-none">
        &times;
    </button>
</div>
@endif
