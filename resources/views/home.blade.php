
<!doctype html>
<html>
  <head>
  <title>{{ __('messages.home_title') }}</title>
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
      /* Prevent banner text from being cut off on zoom */
      .text-responsive-lg, .text-responsive-xl {
        word-break: break-word;
        overflow-wrap: break-word;
        max-width: 100vw;
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
    </style>
  </head>

  <body>
    @include('partials.navbar')
    <!-- Hero Section -->
    <header class="hero-gradient min-h-screen w-full flex items-end relative">
      <img src="{{ asset('images/pages/home/Banner1.webp') }}" alt="Banner Home" class="absolute inset-0 w-full h-full object-cover pointer-events-none rounded-none fade-section" style="z-index:0;">
      <div class="absolute inset-0 bg-black/40" style="z-index:1;"></div>
      <div class="relative z-10 w-full max-w-6xl mx-auto flex flex-col justify-end px-4 sm:px-8 md:px-12 pb-10 sm:pb-16 md:pb-20 fade-section" style="min-height:40vh;">
        <div class="w-full">
          <h1 class="text-responsive-lg font-bold text-white drop-shadow-lg mb-2 sm:mb-4 uppercase leading-tight text-left">
            {{ __('messages.hero_headline') }}
          </h1>
          <p class="text-responsive-xl text-white/90 drop-shadow mb-4 max-w-8xl leading-relaxed text-left">
            {{ __('messages.hero_subtitle') }}
          </p>
        </div>
      </div>
    </header>

    <!-- Company Overview Section -->
    <section class="relative flex w-full bg-white fade-section">
      <div class="absolute inset-z" style="z-index:1;"></div>
      <div class="relative z-10 flex flex-col lg:flex-row w-full max-w-7xl mx-auto py-8 sm:py-12 md:py-16 px-4 sm:px-6 gap-6 sm:gap-8">
        <!-- Column 1: Card Gambar -->
        <div class="flex-1 flex items-center justify-center mb-6 lg:mb-0">
          <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full max-w-sm sm:max-w-md lg:max-w-lg aspect-square flex items-center justify-center">
            <img src="{{ asset('images/pages/home/Card.webp') }}" alt="Card Image" class="object-cover w-full h-full">
          </div>
        </div>
        
        <!-- Column 2: Title dan Paragraf -->
        <div class="flex-1 flex flex-col justify-center">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4 sm:mb-6 text-[#D89F30] drop-shadow-lg uppercase">
            {{ __('messages.company_title') }}
          </h2>
          <p class="text-base sm:text-lg lg:text-xl text-[#696969] drop-shadow text-justify mb-6 sm:mb-8 lg:mb-10 leading-relaxed">
            {{ __('messages.company_desc') }}
          </p>
          
          <!-- Stat Cards -->
          <div class="w-full">
            <div class="stat-grid grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 bg-[#D89F30] rounded-xl py-4 sm:py-6 px-3 sm:px-4 shadow-lg">
              <!-- Card 1 -->
              <div class="stat-card flex flex-col items-center text-white p-2 sm:p-3">
                <span class="material-symbols-outlined stat-icon mb-2" style="font-size:2rem;">
                  captive_portal
                </span>
                <div class="stat-number text-xl sm:text-2xl font-bold">3</div>
                <div class="stat-label text-xs sm:text-sm text-center">{{ __('messages.stat_company') }}</div>
              </div>
              
              <!-- Card 2 -->
              <div class="stat-card flex flex-col items-center text-white p-2 sm:p-3">
                <span class="material-symbols-outlined stat-icon mb-2" style="font-size:2rem;">
                  business_center
                </span>
                <div class="stat-number text-xl sm:text-2xl font-bold">20</div>
                <div class="stat-label text-xs sm:text-sm text-center">{{ __('messages.stat_year') }}</div>
              </div>
              
              <!-- Card 3 -->
              <div class="stat-card flex flex-col items-center text-white p-2 sm:p-3">
                <span class="material-symbols-outlined stat-icon mb-2" style="font-size:2rem;">
                  star
                </span>
                <div class="stat-number text-xl sm:text-2xl font-bold">4.8</div>
                <div class="stat-label text-xs sm:text-sm text-center">{{ __('messages.stat_rating') }}</div>
              </div>
              
              <!-- Card 4 -->
              <div class="stat-card flex flex-col items-center text-white p-2 sm:p-3">
                <span class="material-symbols-outlined stat-icon mb-2" style="font-size:2rem;">
                  workspace_premium
                </span>
                <div class="stat-number text-xl sm:text-2xl font-bold">10000+</div>
                <div class="stat-label text-xs sm:text-sm text-center">{{ __('messages.stat_client') }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Poster Section -->
    <section class="flex flex-col sm:flex-row w-full bg-white/80 fade-section">
      <!-- Poster 1 -->
  <a href="{{ url('/ourbusiness/gaharu') }}" class="group relative flex-1 h-[36rem] sm:h-[36rem] md:h-[40rem] lg:h-[44rem] cursor-pointer block">
  <img src="{{ asset('images/pages/home/Poster1.webp') }}" alt="{{ __('messages.poster1_alt') }}" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">
  <img src="{{ asset('images/pages/home/Hover_Poster1.webp') }}" alt="Hover {{ __('messages.poster1_alt') }}" class="w-full h-full object-cover absolute top-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
  </a>
      
      <!-- Poster 2 -->
  <a href="https://joudahstore.com/" target="_blank" rel="noopener" class="group relative flex-1 h-[36rem] sm:h-[36rem] md:h-[40rem] lg:h-[44rem] cursor-pointer block">
  <img src="{{ asset('images/pages/home/Poster2.webp') }}" alt="{{ __('messages.poster2_alt') }}" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">
  <img src="{{ asset('images/pages/home/Hover_Poster2.webp') }}" alt="Hover {{ __('messages.poster2_alt') }}" class="w-full h-full object-cover absolute top-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
  </a>
      
      <!-- Poster 3 -->
  <a href="{{ url('/ourbusiness/parfum') }}" class="group relative flex-1 h-[36rem] sm:h-[36rem] md:h-[40rem] lg:h-[44rem] cursor-pointer block">
  <img src="{{ asset('images/pages/home/Poster3.webp') }}" alt="{{ __('messages.poster3_alt') }}" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">
  <img src="{{ asset('images/pages/home/Hover_Poster3.webp') }}" alt="Hover {{ __('messages.poster3_alt') }}" class="w-full h-full object-cover absolute top-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
  </a>
    </section>
    
    <!-- Section Update Berita -->
    <section class="max-w-7xl mx-auto px-4 py-16 fade-section">
      <div class="flex items-center justify-between mb-1 fade-section">
        <div>
          <h2 class="text-2xl md:text-3xl font-bold">{{ __('messages.news_update') }}</h2>
          <p class="text-gray-700 mb-6">{{ __('messages.news_subtitle') }}</p>
        </div>
        <div class="gap-2 z-20 hidden sm:flex">
          <button id="kegiatan-prev" class="px-3 py-2 rounded bg-[#D6A037] text-white font-bold shadow-md hover:scale-105 transition-transform">&larr;</button>
          <button id="kegiatan-next" class="px-3 py-2 rounded bg-[#D6A037] text-white font-bold shadow-md hover:scale-105 transition-transform">&rarr;</button>
        </div>
      </div>
      <div class="relative">
        <div class="flex justify-end items-center mb-2">
          <div id="berita-pagination" class="text-sm text-gray-500"></div>
        </div>
        <div id="berita-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6"></div>
        <!-- Hidden berita data for JS -->
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
      <script id="berita-data" type="application/json">
        {!! json_encode($beritaData, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
        </script>
      </div>
    </section>


    @include('partials.footer')
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

        // Berita
        const data = JSON.parse(document.getElementById('berita-data').textContent);
        renderBeritaCards('berita-list', data, 1, 6);
      });
    </script>
  </body>
</html>