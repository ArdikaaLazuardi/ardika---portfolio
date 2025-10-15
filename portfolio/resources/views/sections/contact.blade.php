<section id="contact" class="py-12" data-aos="fade-up">
  <h3 class="text-2xl font-semibold text-white mb-6">Contact</h3>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="card p-6 rounded-xl">
      <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <label class="block text-sm mb-2">Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="w-full p-3 rounded bg-transparent border border-white/6">
        @error('name') <div class="text-xs text-red-400 mt-1">{{ $message }}</div> @enderror

        <label class="block text-sm mt-4 mb-2">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full p-3 rounded bg-transparent border border-white/6">
        @error('email') <div class="text-xs text-red-400 mt-1">{{ $message }}</div> @enderror

        <label class="block text-sm mt-4 mb-2">Message</label>
        <textarea name="message" rows="6" class="w-full p-3 rounded bg-transparent border border-white/6">{{ old('message') }}</textarea>
        @error('message') <div class="text-xs text-red-400 mt-1">{{ $message }}</div> @enderror

        <button type="submit" class="mt-4 px-5 py-2 rounded-md bg-highlight text-black font-medium">Send</button>
      </form>
    </div>

    <div class="p-6">
      <h4 class="text-white font-semibold">Social</h4>
      <div class="mt-3 flex gap-3">
        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-white/6 hover:shadow-neon transition-shadow">
          <img src="/img/github-icon.svg" alt="GitHub" class="w-5 h-5">
        </a>
        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-white/6 hover:shadow-neon">
          <img src="/img/linkedin-icon.svg" alt="LinkedIn" class="w-5 h-5">
        </a>
        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-white/6 hover:shadow-neon">
          <img src="/img/instagram-icon.svg" alt="Instagram" class="w-5 h-5">
        </a>
      </div>
    </div>
  </div>
</section>
