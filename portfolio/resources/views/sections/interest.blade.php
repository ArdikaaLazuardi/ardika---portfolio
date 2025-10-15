<section id="interests" class="py-10" data-aos="fade-up">
  <h3 class="text-2xl font-semibold text-white mb-6">Interests</h3>
  <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
    @foreach($interests as $it)
      <div class="card p-4 rounded-xl flex flex-col items-center justify-center hover:scale-105 transition-transform">
        <div class="w-12 h-12 rounded-full flex items-center justify-center border border-white/6 mb-3">
          <!-- simple icon; you can replace with lucide or heroicons -->
          <span class="text-sm text-white/70">★</span>
        </div>
        <div class="text-sm text-white/80">{{ $it['label'] }}</div>
      </div>
    @endforeach
  </div>
</section>
