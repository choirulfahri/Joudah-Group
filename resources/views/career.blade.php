<!doctype html>
<html>
  <head>
  <title>{{ __('messages.home_title') }}</title>
    <link rel="icon" href="{{ asset('images/Icon/JoudahGroup_Logo1.svg') }}" type="image/x-icon">    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
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
      <img src="{{ asset('images/pages/Career/Banner.webp') }}" alt="Banner Home" class="absolute inset-0 w-full h-full object-cover pointer-events-none rounded-none fade-section" style="z-index:0;">
      <div class="absolute inset-0 bg-black/40" style="z-index:1;"></div>
      <div class="relative z-10 w-full max-w-6xl mx-auto flex flex-col justify-end px-4 sm:px-8 md:px-12 pb-10 sm:pb-16 md:pb-20 fade-section" style="min-height:40vh;">
        <div class="w-full">
          <h1 class="text-responsive-lg font-bold text-white drop-shadow-lg mb-2 sm:mb-4 uppercase leading-tight text-left">
            {{ __('messages.career.hero_title') }}
          </h1>
          <p class="text-responsive-xl text-white/90 drop-shadow mb-4 max-w-8xl leading-relaxed text-left">
            {{ __('messages.hero_subtitle') }}
          </p>
        </div>
      </div>
    </header>
    <section class="relative flex w-full bg-white fade-section">
      <div class="absolute inset-z" style="z-index:1;"></div>
      <div class="relative z-10 flex flex-col lg:flex-row-reverse w-full max-w-7xl mx-auto py-8 sm:py-12 md:py-16 px-4 sm:px-6 gap-6 sm:gap-8">
        <!-- Column 1: Card Gambar (kanan) -->
        <div class="flex-1 flex items-center justify-center mb-6 lg:mb-0">
          <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full max-w-sm sm:max-w-md lg:max-w-lg aspect-[4/3] flex items-center justify-center">
            <img src="{{ asset('images/pages/Career/Card.webp') }}" alt="Card Image" class="object-cover w-full h-full">
          </div>
        </div>
        <!-- Column 2: Title dan Paragraf (kiri) -->
        <div class="flex-1 flex flex-col justify-center">
          {{ __("messages.career.section1_title") }}
          </h2>
          {{ __("messages.career.section1_desc") }}
            <span class="text-lg sm:text-xl font-bold text-[#D89F30] mb-4 block">
              {{ __("messages.career.section1_highlight") }}
            </span>
            </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="relative flex w-full bg-white fade-section">
      <div class="absolute inset-z" style="z-index:1;"></div>
      <div class="relative z-10 flex flex-col lg:flex-row w-full max-w-7xl mx-auto py-8 sm:py-12 md:py-16 px-4 sm:px-6 gap-6 sm:gap-8">      
        <!-- Key Benefits Cards -->
        <div class="flex-1 flex flex-col justify-center">
          <!-- Key Benefits Cards -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Card 1 (Key Benefits) -->
            <div class="rounded-lg p-4 md:p-6 fade-in text-center sm:text-left flex flex-col items-center sm:items-start justify-center h-full">
              <h2 class="uppercase text-3xl md:text-5xl font-semibold mb-2 bg-gradient-to-r from-[#D89F30] to-[#FAE392] bg-clip-text text-transparent fade-section">
                {{ __("messages.career.benefit_title") }}
              </h2>
              <h3 class="uppercase text-2xl md:text-4xl font-bold text-[#D89F30] leading-snug fade-section">
                {{ __("messages.career.benefit_subtitle") }}<br />
              </h3>
            </div>

            <!-- Card 2 -->
            <div class="border border-gray-200 rounded-lg p-4 md:p-6 fade-section" style="transition-delay: 0.1s ">
              <div class="text-[#D89F30] text-4xl md:text-6xl mb-2">
                <i class="ri-calendar-event-fill"></i>
              </div>
              <h4 class="text-lg md:text-xl font-semibold mb-2" style="color: #D89F30;">{{ __("messages.career.benefit1_title") }}</h4>
              <p class="text-gray-700 text-justify text-base md:text-lg">
                {{ __("messages.career.benefit1_desc") }}
              </p>
            </div>

            <!-- Card 3 -->
            <div class="border border-gray-200 rounded-lg p-4 md:p-6 fade-section" style="transition-delay: 0.2s">
              <div class="text-[#D89F30] text-4xl md:text-6xl mb-2">
                <i class="ri-slideshow-fill"></i>
              </div>
              <h4 class="text-lg md:text-xl font-semibold mb-2" style="color: #D89F30;">{{ __("messages.career.benefit2_title") }}</h4>
              <p class="text-gray-700 text-justify text-base md:text-lg">
                {{ __("messages.career.benefit2_desc") }}
              </p>
            </div>

            <!-- Card 4 -->
            <div class="border border-gray-200 rounded-lg p-4 md:p-6 fade-section" style="transition-delay: 0.3s">
              <div class="text-[#D89F30] text-4xl md:text-6xl mb-2">
                <i class="ri-collage-fill"></i>
              </div>
              <h4 class="text-lg md:text-xl font-semibold mb-2" style="color: #D89F30;">{{ __("messages.career.benefit3_title") }}</h4>
              <p class="text-gray-700 text-justify text-base md:text-lg">
                {{ __("messages.career.benefit3_desc") }}
              </p>
            </div>

            <!-- Card 5 -->
            <div class="border border-gray-200 rounded-lg p-4 md:p-6 fade-section" style="transition-delay: 0.4s">
              <div class="text-[#D89F30] text-4xl md:text-6xl mb-2">
                <i class="ri-folder-user-fill"></i>
              </div>
              <h4 class="text-lg md:text-xl font-semibold mb-2" style="color: #D89F30;">{{ __("messages.career.benefit4_title") }}</h4>
              <p class="text-gray-700 text-justify text-base md:text-lg">
                {{ __("messages.career.benefit4_desc") }}
              </p>
            </div>

            <!-- Card 6 -->
            <div class="border border-gray-200 rounded-lg p-4 md:p-6 fade-section" style="transition-delay: 0.5s">
              <div class="text-[#D89F30] text-4xl md:text-6xl mb-2">
                <i class="ri-vip-crown-fill"></i>
              </div>
              <h4 class="text-lg md:text-xl font-semibold mb-2" style="color: #D89F30;">{{ __("messages.career.benefit5_title") }}</h4>
              <p class="text-gray-700 text-justify text-base md:text-lg">
                {{ __("messages.career.benefit5_desc") }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Poster Section -->
  <section class="bg-[#d39c34] py-16 px-4 sm:px-8 md:px-12">
        <div class="flex flex-col items-center mb-10">
            <span class="block w-[120px] h-1 bg-white rounded-full mb-2 fade-section"></span>
            <h2 class="text-center text-white font-bold text-2xl md:text-3xl fade-section">{{ __("messages.career.group_title") }}</h2>
        </div>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col items-center px-4 pt-4 pb-6 fade-section" style="width: 320px; margin: 0 auto;">
                <img src="{{ asset('images/pages/Career/Logistik.webp') }}" alt="Logistics" class="w-full h-48 object-cover rounded-xl mb-4">
        <div class="bg-yellow-500 text-white font-bold text-xs rounded-lg px-4 py-2 mb-2 w-full text-center">{{ __("messages.career.group1_title") }}</div>
        <div class="bg-white rounded-lg p-3 text-gray-700 text-sm text-justify">
          {{ __("messages.career.group1_desc") }}
        </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col items-center px-4 pt-4 pb-6 fade-section" style="width: 320px; margin: 0 auto;">
                <img src="{{ asset('images/pages/Career/Manufacturing.webp') }}" alt="Manufacturing" class="w-full h-48 object-cover rounded-xl mb-4">
           <div class="bg-yellow-500 text-white font-bold text-xs rounded-lg px-4 py-2 mb-2 w-full text-center">{{ __("messages.career.group2_title") }}</div>
           <div class="bg-white rounded-lg p-3 text-gray-700 text-sm text-justify">
             {{ __("messages.career.group2_desc") }}
           </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col items-center px-4 pt-4 pb-6 fade-section" style="width: 320px; margin: 0 auto;">
                <img src="{{ asset('images/pages/Career/Card.webp') }}" alt="Consumer Products" class="w-full h-48 object-cover rounded-xl mb-4">
        <div class="bg-yellow-500 text-white font-bold text-xs rounded-lg px-4 py-2 mb-2 w-full text-center">{{ __("messages.career.group3_title") }}</div>
        <div class="bg-white rounded-lg p-3 text-gray-700 text-sm text-justify">
          {{ __("messages.career.group3_desc") }}
        </div>
            </div>
        </div>
        <!-- Lowongan Section -->
  <div class="max-w-6xl mx-auto mt-10 sm:mt-16 px-0 fade-section">
          <h2 class="text-white font-bold text-2xl sm:text-3xl mb-2 text-left">{{ __("messages.career.vacancy_title") }}</h2>
          <span class="block w-[120px] sm:w-[200px] h-0.5 bg-white rounded-full mb-2"></span>
          <p class="text-white text-sm sm:text-base md:text-lg text-justify">
            {{ __("messages.career.vacancy_desc") }}
          </p>
        </div>
  </section>



      <!-- Section Update Lowongan -->
    <section class="max-w-7xl mx-auto px-4 py-16 fade-section">
  <div class="flex flex-col sm:flex-row items-center justify-center sm:justify-between mb-2">
    <h2 class="text-yellow-400 font-bold text-2xl text-center w-full sm:w-auto">{{ __("messages.career.vacancy_available") }}</h2>
    <div class="gap-2 z-20 flex ml-auto mt-2 sm:mt-0">
      <button id="lowongan-prev-btn" class="px-3 py-2 rounded bg-[#D6A037] text-white font-bold shadow-md hover:scale-105 transition-transform hidden sm:inline-block" aria-label="Sebelumnya">&larr;</button>
      <button id="lowongan-next-btn" class="px-3 py-2 rounded bg-[#D6A037] text-white font-bold shadow-md hover:scale-105 transition-transform hidden sm:inline-block" aria-label="Berikutnya">&rarr;</button>
    </div>
  </div>
  <span class="block w-[220px] h-1 bg-yellow-400 rounded-full mb-6"></span>
  <div class="relative">
    <div class="overflow-x-auto scrollbar-hide" style="-webkit-overflow-scrolling: touch;">
      <div id="lowongan-list-update" class="flex gap-6 slider-anim"></div>
    </div>
    <div class="flex justify-end mt-2">
      <div id="lowongan-pagination-update" class="text-sm text-gray-500"></div>
    </div>
        <!-- Hidden lowongan data for JS -->
        <script type="application/json" id="lowongan-data-update">
          @php
            $locale = app()->getLocale();
            if ($locale === 'ar') {
              $dataLowonganUpdate = \App\Http\Controllers\Lowongan_ar::getData();
            } elseif ($locale === 'en') {
              $dataLowonganUpdate = \App\Http\Controllers\Lowongan_en::getData();
            } else {
              $dataLowonganUpdate = \App\Http\Controllers\Lowongan_id::getData();
            }
          @endphp
          {!! json_encode(array_reverse($dataLowonganUpdate)) !!}
        </script>
    <script src="{{ asset('js/lowongan.js') }}"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const dataUpdate = JSON.parse(document.getElementById('lowongan-data-update').textContent);
        let currentPage = 1;
        const perPage = 3;
        const containerId = 'lowongan-list-update';
        const paginationId = 'lowongan-pagination-update';
        const prevBtn = document.getElementById('lowongan-prev-btn');
        const nextBtn = document.getElementById('lowongan-next-btn');
        const slider = document.getElementById(containerId);
        let isMobile = window.innerWidth < 640;

        // Animasi slider: geser ke kiri/kanan saat swipe
        function animateSlider(direction) {
          if (!isMobile) return;
          const sliderEl = document.getElementById(containerId);
          if (!sliderEl) return;
          sliderEl.style.transition = 'transform 0.35s cubic-bezier(0.4,0,0.2,1)';
          sliderEl.style.transform = `translateX(${direction === 'left' ? '-100vw' : '100vw'})`;
          setTimeout(() => {
            sliderEl.style.transition = '';
            sliderEl.style.transform = 'translateX(0)';
          }, 350);
        }

        function updateSlider(page, swipeDir = null) {
          if (isMobile && swipeDir) animateSlider(swipeDir);
          setTimeout(() => {
            renderLowonganCards(containerId, dataUpdate, page, perPage);
            currentPage = page;
            // Scroll slider to start (for mobile)
            const slider = document.getElementById(containerId);
            if (slider) slider.scrollTo({ left: 0, behavior: 'smooth' });
          }, isMobile && swipeDir ? 180 : 0);
        }

        // Initial render
        updateSlider(currentPage);

        // Pagination event (delegated in lowongan.js)
        document.getElementById(paginationId).addEventListener('click', function(e) {
          if (e.target.tagName === 'BUTTON' && e.target.dataset.page) {
            updateSlider(Number(e.target.dataset.page));
          }
        });

        // Slider navigation (desktop only)
        if (!isMobile) {
          prevBtn.addEventListener('click', function() {
            if (currentPage > 1) updateSlider(currentPage - 1);
          });
          nextBtn.addEventListener('click', function() {
            const totalPages = Math.ceil(dataUpdate.length / perPage);
            if (currentPage < totalPages) updateSlider(currentPage + 1);
          });
        }

        // Mobile: enable swipe/slide gesture with animation
        if (isMobile) {
          let startX = null;
          const slider = document.getElementById(containerId);
          slider.addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
          });
          slider.addEventListener('touchend', function(e) {
            if (startX === null) return;
            const endX = e.changedTouches[0].clientX;
            const diff = endX - startX;
            if (Math.abs(diff) > 40) {
              const totalPages = Math.ceil(dataUpdate.length / 1);
              if (diff < 0 && currentPage < totalPages) {
                updateSlider(currentPage + 1, 'left');
              } else if (diff > 0 && currentPage > 1) {
                updateSlider(currentPage - 1, 'right');
              }
            }
            startX = null;
          });
        }
      });
    </script>
    <style>
      /* Hide scrollbar for horizontal scroll */
      .scrollbar-hide::-webkit-scrollbar { display: none; }
      .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
      /* Animasi slider mobile */
      @media (max-width: 640px) {
        .slider-anim {
          will-change: transform;
        }
      }
    </style>
    <style>
      /* Hide scrollbar for horizontal scroll */
      .scrollbar-hide::-webkit-scrollbar { display: none; }
      .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
      </div>
    </section>

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
    </script>
    @include('partials.footer')
  </body>
</html>