<div class="">
    <div id="contact" class="w-full mt-2 mb-12 rounded-md max-w-[400px] md:max-w-[80%] mx-auto">
      <form class="w-full max-w-[400px] mx-auto md:max-w-[50%] lg:max-w-[40%] md:mx-0 py-2 rounded-lg" action="{{ route("email.send") }}" method="POST">
        @csrf
        <div class="mb-4 text-white font-semibold">
          <h1 class="text-4xl font-bold text-purple-700 pt-[60px]">Contact me</h1>
        </div>
        <div class="flex flex-col gap-2 mb-6">
          <label htmlFor="name" class="text-white text-sm font-semibold">Name</label>
          <input
            type="text"
            name="name"
            class="bg-slate-950 rounded-lg px-3 text-gray-200 text-sm font-semibold focus:outline-none border-2 focus:border-blue-700 py-2"
            placeholder="Name"
          />
        </div>
        @error("name")
            <div class="">
                <span class="text-red-500">{{ $message }}</span>
            </div>
        @enderror
        <div class="flex flex-col gap-2 mb-6">
          <label htmlFor="email" class="text-white text-sm font-semibold">E-mail</label>
          <input
            type="email"
            name="email"
            class="bg-slate-950 rounded-lg px-3 text-gray-200 text-sm font-semibold focus:outline-none border-2 focus:border-blue-700 py-2"
            placeholder="E-mail"
          />
        </div>
        @error("email")
            <div class="">
                <span class="text-red-500">{{ $message }}</span>
            </div>
        @enderror
        <div class="flex flex-col gap-2 mb-6">
          <label htmlFor="subject" class="text-white text-sm font-semibold">Subject</label>
          <input
            type="text"
            name="subject"
            class="bg-slate-950 rounded-lg px-3 text-gray-200 text-sm font-semibold focus:outline-none border-2 focus:border-blue-700 py-2"
            placeholder="Subject"
          />
        </div>
        @error("subject")
            <div class="">
                <span class="text-red-500">{{ $message }}</span>
            </div>
        @enderror
        <div class="flex flex-col gap-2 mb-6">
          <label htmlFor="message" class="text-white text-sm font-semibold">Message</label>
          <textarea
            name="message"
            placeholder="Text here!"
            class="bg-slate-950 h-[100px] rounded-lg px-3 text-gray-200 text-sm font-semibold focus:outline-none border-2 focus:border-blue-700 py-2"
          ></textarea>
        </div>
        @error("message")
            <div class="">
                <span class="text-red-500">{{ $message }}</span>
            </div>
        @enderror
        <div class="flex flex-col gap-2 mb-6">
          <button type="submit" class="bg-blue-600 py-2 px-5 text-sm text-white rounded font-light w-[100px] cursor-pointer hover:bg-blue-700 transition duration-150 ease-in-out active:bg-blue-800">
            Send
          </button>
        </div>
      </form>
      {{-- <p
      className={
          status === "Sending..." ? "text-white" :
          status === "Email was sent successfully!" ? "text-green-500" :
          "text-red-500"
      }>{status}</p> --}}
    </div>
  </div>
