<section id="projects" class="py-10" data-aos="fade-up">
  <h3 class="text-2xl font-semibold text-white mb-6">Projects</h3>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($projects as $p)
      <div class="card p-4 rounded-2xl neon-hover transition-transform">
        <img src="{{ $p['thumbnail'] ?? '/img/project-placeholder.png' }}" alt="{{ $p['title'] }}" class="rounded-lg w-full h-40 object-cover">
        <h4 class="mt-3 text-white font-semibold">{{ $p['title'] }}</h4>
        <p class="text-sm mt-2 text-textmuted">{{ $p['description'] }}</p>

        <div class="mt-3 flex flex-wrap gap-2">
          @foreach($p['tech'] as $t)
            <span class="text-xs px-2 py-1 rounded-md border border-white/6">{{ $t }}</span>
          @endforeach
        </div>

        <div class="mt-4 flex justify-between items-center">
          <a href="{{ $p['url'] ?? route('project.detail', $p['slug']) }}"
             target="_blank"
             class="px-3 py-2 rounded-md text-sm bg-white/5 hover:bg-white/8"
          >View Detail</a>
          <span class="text-xs text-white/60">More →</span>
        </div>
      </div>
    @endforeach
  </div>
</section>
