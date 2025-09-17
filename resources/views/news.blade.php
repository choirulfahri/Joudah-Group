<!doctype html>
<html>
  <head>
  <title>{{ __("messages.news.title") }}</title>
    <link rel="icon" href="{{ asset('images/Icon/JoudahGroup_Logo1.svg') }}" type="image/x-icon">      
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Menambahkan Alpine.js untuk fungsi tab -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <style>
      .hero-gradient {
        background: linear-gradient(135deg, #1f2937, #374151);
      }
      
      /* Custom responsive utilities */
      @media (max-width: 640px) {
        .text-responsive-lg {
          font-size: 1.5rem;
          line-height: 2rem;
        }
        .text-responsive-xl {
          font-size: 1.125rem;
          line-height: 1.75rem;
        }
      }
      
      @media (min-width: 641px) and (max-width: 768px) {
        .text-responsive-lg {
          font-size: 2rem;
          line-height: 2.5rem;
        }
        .text-responsive-xl {
          font-size: 1.25rem;
          line-height: 1.875rem;
        }
      }
      
      @media (min-width: 769px) {
        .text-responsive-lg {
          font-size: 3rem;
          line-height: 1;
        }
        .text-responsive-xl {
          font-size: 1.5rem;
          line-height: 2rem;
        }
      }
      
      /* Fix for stat cards on very small screens */
      @media (max-width: 480px) {
        .stat-grid {
          grid-template-columns: repeat(2, 1fr);
          gap: 0.75rem;
        }
        .stat-card {
          padding: 0.75rem 0.5rem;
        }
        .stat-icon {
          font-size: 1.75rem !important;
        }
        .stat-number {
          font-size: 1.25rem;
        }
        .stat-label {
          font-size: 0.75rem;
        }
      }

      /* Style untuk elemen yang dapat diklik */
      .clickable-item {
        transition: all 0.3s ease;
        cursor: pointer;
      }
      .clickable-item:hover {
        background-color: #fef3c7;
        transform: translateY(-2px);
      }

      /* Animasi fade-in (rise up) dan fade-out (fade) */
      .fade-section {
        opacity: 0;
        transform: translateY(60px);
        transition: opacity 0.8s cubic-bezier(0.4,0,0.2,1), transform 0.8s cubic-bezier(0.4,0,0.2,1);
        will-change: opacity, transform;
      }
      .fade-section.visible {
        opacity: 1;
        transform: translateY(0);
        transition: opacity 0.8s cubic-bezier(0.4,0,0.2,1), transform 0.8s cubic-bezier(0.4,0,0.2,1);
      }
      /* .fading-out tidak dipakai lagi agar tidak menghilang saat scroll ke atas */

      /* Pastikan font banner muncul */
      .text-responsive-lg, .text-responsive-xl, h1, h2, h3, h4, h5, h6 {
        font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
      }
    </style>
  </head>

  <body>
    @include('partials.navbar')
    <!-- Hero Section -->
  <header class="hero-gradient min-h-screen w-full flex items-end relative fade-section">
      <img src="{{ asset('images/pages/News/muslim_women_traveling_paris_together_1_.webp') }}" alt="Banner Home" class="absolute inset-0 w-full h-full object-cover pointer-events-none rounded-none" style="z-index:0;">
      <div class="absolute inset-0 bg-black/40" style="z-index:1;"></div>
      <div class="relative z-10 w-full max-w-6xl mx-auto flex flex-col justify-end px-4 sm:px-8 md:px-12 pb-10 sm:pb-16 md:pb-20" style="min-height:40vh;">
        <div class="w-full">
          <h1 class="text-responsive-lg font-bold text-white drop-shadow-lg mb-2 sm:mb-4 uppercase leading-tight text-left">
            {{ __("messages.news.hero_title") }}
          </h1>
          <p class="text-responsive-xl text-white/90 drop-shadow mb-4 max-w-8xl leading-relaxed text-left">
            {{ __("messages.news.hero_subtitle") }}
          </p>
        </div>
      </div>
    </header>
 
  <!-- FITUR TAB, JUDUL, DESKRIPSI, DAN DROPDOWN -->
  <div class="w-full bg-[#FFF8ED] border-b border-[#E5E5E5] flex flex-row items-center px-4 md:px-12 pt-4 pb-0 fade-section">
  <button id="tab-berita" class="px-4 py-2 font-semibold text-[#222] border-b-4 border-[#D6A037] bg-transparent focus:outline-none mr-2">{{ __("messages.news.tab") }}</button>
  </div>

  <div class="max-w-7xl mx-auto px-4 md:px-12 mt-6 fade-section">
  <h1 class="text-3xl font-bold mb-2">{{ __("messages.news.heading") }}</h1>
  <p class="text-gray-700 mb-6 max-w-2xl">{{ __("messages.news.desc") }}</p>
    <div class="flex flex-col sm:flex-row gap-4 mb-6 max-w-xs">
      <select id="dropdown-bulan" class="border border-gray-300 rounded px-3 py-2 w-full">
        <option value="">{{ __("messages.news.dropdown_month") }}</option>
      </select>
      <select id="dropdown-tahun" class="border border-gray-300 rounded px-3 py-2 w-full">
        <option value="">{{ __("messages.news.dropdown_year") }}</option>
      </select>
    </div>
  </div>

  <!-- Container untuk card berita -->
  <div class="max-w-7xl mx-auto flex flex-col items-center px-4 md:px-12 fade-section">
  <div id="berita-list" class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mx-auto fade-section"></div>
  </div>

  <!-- Pastikan berita.js sudah di-include -->
  <script src="{{ asset('js/berita.js') }}"></script>
  <script>
    // Animasi scroll muncul/hilang
    document.addEventListener('DOMContentLoaded', function() {
      // Fade in/out on every scroll in/out
      const fadeSections = document.querySelectorAll('.fade-section');

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          } else {
            entry.target.classList.remove('visible');
          }
        });
      }, {
        threshold: 0.15
      });

      fadeSections.forEach(section => {
        observer.observe(section);
      });
    });
    // Inject data dari backend ke window.beritaData agar filter JS selalu dapat data
    @php
        $locale = app()->getLocale();
        if ($locale === 'ar') {
          $beritaData = \App\Http\Controllers\Berita_ar::getData();
        } elseif ($locale === 'en') {
          $beritaData = \App\Http\Controllers\Berita_en::getData();
        } else {
          $beritaData = \App\Http\Controllers\Berita_id::getData();
        }
    @endphp
    window.beritaData = @json($beritaData);
  // Helper untuk nama bulan, ambil dari messages.php agar bisa multi-bahasa
  const namaBulan = @json(__("messages.news.months"));

    let beritaData = window.beritaData || [];

    function populateDropdowns() {
      const bulanSet = new Set();
      const tahunSet = new Set();
      beritaData.forEach(b => {
        const bulanVal = b.Bulan !== undefined ? b.Bulan : b.bulan;
        const tahunVal = b.Tahun !== undefined ? b.Tahun : b.tahun;
        if (bulanVal) bulanSet.add(parseInt(bulanVal, 10));
        if (tahunVal) tahunSet.add(tahunVal);
      });
      const bulanArr = Array.from(bulanSet).sort((a,b)=>a-b);
      const tahunArr = Array.from(tahunSet).sort((a,b)=>b-a);
      const bulanDropdown = document.getElementById('dropdown-bulan');
      const tahunDropdown = document.getElementById('dropdown-tahun');
      if (bulanArr.length === 0) {
        bulanDropdown.innerHTML = `<option value="">${@json(__("messages.news.dropdown_month"))}</option>` + Array.from({length:12}, (_,i) => `<option value="${(i+1).toString().padStart(2,'0')}">${namaBulan[i+1]}</option>`).join('');
      } else {
        bulanDropdown.innerHTML = `<option value="">${@json(__("messages.news.dropdown_month"))}</option>` + bulanArr.map(b => `<option value="${b.toString().padStart(2,'0')}">${namaBulan[b]}</option>`).join('');
      }
      if (tahunArr.length === 0) {
        const now = new Date();
        const thisYear = now.getFullYear();
        tahunDropdown.innerHTML = `<option value="">${@json(__("messages.news.dropdown_year"))}</option>` + [0,1,2].map(i => `<option value="${thisYear-i}">${thisYear-i}</option>`).join('');
      } else {
        tahunDropdown.innerHTML = `<option value="">${@json(__("messages.news.dropdown_year"))}</option>` + tahunArr.map(t => `<option value="${t}">${t}</option>`).join('');
      }
    }

    function filterBerita(bulan, tahun) {
      return beritaData.filter(b => {
        let bulanVal = b.Bulan !== undefined ? b.Bulan : b.bulan;
        let tahunVal = b.Tahun !== undefined ? b.Tahun : b.tahun;
        bulanVal = bulanVal !== undefined ? bulanVal.toString().padStart(2, '0') : '';
        tahunVal = tahunVal !== undefined ? tahunVal.toString() : '';
        let match = true;
        if (bulan) match = match && bulanVal === bulan;
        if (tahun) match = match && tahunVal === tahun;
        return match;
      });
    }

    function showBerita(bulan, tahun) {
      const filtered = filterBerita(bulan, tahun);
      const container = document.getElementById('berita-list');
      container.innerHTML = '';
      document.getElementById('tidak-ada-berita')?.remove();
      if (filtered.length > 0) {
        renderBeritaCards('berita-list', filtered);
      } else {
        const warning = document.createElement('div');
        warning.id = 'tidak-ada-berita';
        warning.className = 'w-full text-center text-red-600 font-semibold py-8';
  warning.innerText = "{{ __("messages.news.no_news") }}";
        container.parentNode.appendChild(warning);
      }
    }

    document.addEventListener('DOMContentLoaded', function() {
      populateDropdowns();
      showBerita('', '');
      document.getElementById('dropdown-bulan').addEventListener('change', function() {
        const bulan = this.value;
        const tahun = document.getElementById('dropdown-tahun').value;
        showBerita(bulan, tahun);
      });
      document.getElementById('dropdown-tahun').addEventListener('change', function() {
        const tahun = this.value;
        const bulan = document.getElementById('dropdown-bulan').value;
        showBerita(bulan, tahun);
      });
    });
  </script>
    @include('partials.footer')
  </body>
</html>