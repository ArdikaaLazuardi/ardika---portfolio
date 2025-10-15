<section id="about" class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center py-12" data-aos="fade-up">
  <div class="md:col-span-1 flex justify-center">
    <img src="/img/profile.jpg" alt="profile" class="rounded-2xl w-56 h-56 object-cover border-2 border-white/5 shadow-neon">
  </div>

  <div class="md:col-span-2">
    <h2 class="text-3xl font-semibold text-white">About Me</h2>
    <p class="mt-3 text-textmuted">{{ $about['bio'] }}</p>

    <div class="mt-4 flex flex-wrap gap-2">
      @foreach($about['skills'] as $skill)
        <span class="px-3 py-1 rounded-full text-sm border border-white/6 text-textmuted card">{{ $skill }}</span>
      @endforeach
    </div>
  </div>
</section>
