<!doctype html>
<html>
  <head>
  <title>{{ __('messages.our_business') }} | Joudah Group</title>
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
      /* Responsive font for hero banner, fix agar tidak kepotong saat zoom, mengikuti home.blade.php */
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
      /* Pastikan font banner muncul */
      .text-responsive-lg, .text-responsive-xl, h1, h2, h3, h4, h5, h6 {
        font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
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
    </style>
  </head>

  <body>
    @include('partials.navbar')
    <!-- Hero Section -->
  <header class="hero-gradient min-h-screen w-full flex items-end relative fade-section">
      <img src="{{ asset('images/pages/OurBusiness/Banner.webp') }}" alt="Banner Home" class="absolute inset-0 w-full h-full object-cover pointer-events-none rounded-none" style="z-index:0;">
      <div class="absolute inset-0 bg-black/40" style="z-index:1;"></div>
  <div class="relative z-10 w-full max-w-6xl mx-auto flex flex-col justify-end px-4 sm:px-8 md:px-12 pb-10 sm:pb-16 md:pb-20 fade-section" style="min-height:40vh;">
        <div class="w-full">
          <h1 class="text-responsive-lg font-bold text-white drop-shadow-lg mb-2 sm:mb-4 uppercase leading-tight text-left">
            {{ __('messages.ourbusiness.hero_title') }}
          </h1>
          <p class="text-responsive-xl text-white/90 drop-shadow mb-4 max-w-8xl leading-relaxed text-left">
            {{ __('messages.ourbusiness.hero_subtitle') }}
          </p>
        </div>
      </div>
    </header>
    <!-- Our Business Section -->
  <section id="our-business" class="w-full bg-white py-8 sm:py-12 md:py-16 px-4 sm:px-6 fade-section" x-data="{ tab: 'gaharu' }">
      <div class="max-w-7xl mx-auto">
  <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-3 sm:mb-4 fade-section">{{ __('messages.our_business') }}</h2>
        <p class="mb-10 sm:mb-14 text-gray-700 text-sm sm:text-base lg:text-lg leading-relaxed max-w-none text-justify">
          {{ __('messages.ourbusiness.intro') }}
        </p>
      </section>
  <!-- Business Diagram Section -->
  <section id="business-diagram" class="w-full mb-20 sm:mb-28 mt-8 sm:mt-12 md:mt-20 fade-section">
    <div class="w-full flex flex-col items-center">
      <!-- Timeline Line (Desktop Only) -->
  <div class="hidden md:flex w-full h-6 items-center justify-center relative mb-16">
        <div class="absolute left-0 right-0 top-1/2 transform -translate-y-1/2 h-6 flex items-center z-0">
          <div class="w-full h-4 rounded-full bg-gradient-to-r from-[#F9D976] via-[#F9D976] to-[#D89F30] opacity-90"></div>
        </div>
        <!-- Circles are above the line (Desktop) -->
        <div class="w-full grid grid-cols-3 gap-12 items-start relative z-10 px-8">
          <!-- 1 -->
          <a href="{{ url('ourbusiness/gaharu') }}" class="business-diagram-item business-diagram-jmp flex flex-col items-center transition-transform duration-300 hover:scale-105 cursor-pointer">
            <div class="mb-4">
              <div class="business-diagram-bubble bg-[#D89F30] text-white px-5 py-2 rounded-t-lg rounded-b-[0.5rem] font-semibold text-base shadow-lg relative text-center">
                PT Jawda Mitra Prima
                <div class="absolute left-1/2 -bottom-3 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-[#D89F30]"></div>
              </div>
            </div>
            <div class="business-diagram-circle w-32 h-32 rounded-full bg-[#D89F30] flex items-center justify-center shadow-lg border-4 border-white mb-4">
              <img src="{{ asset('images/Icon/PT JAWDA MITRA PRIMA.svg') }}" alt="PT Jawda Mitra Prima" class="w-20 h-20 object-contain">
            </div>
            <div class="business-diagram-caption text-center text-gray-700 text-sm max-w-[220px]">
              {{ __('messages.ourbusiness.diagram_gaharu') }}
            </div>
          </a>
          <!-- 2 -->
          <a href="{{ url('ourbusiness/logistik') }}" class="business-diagram-item business-diagram-pbp flex flex-col items-center transition-transform duration-300 hover:scale-105 cursor-pointer">
            <div class="mb-4">
              <div class="business-diagram-bubble bg-[#D89F30] text-white px-5 py-2 rounded-t-lg rounded-b-[0.5rem] font-semibold text-base shadow-lg relative text-center">
                CV Pancoran Bumi Persada
                <div class="absolute left-1/2 -bottom-3 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-[#D89F30]"></div>
              </div>
            </div>
            <div class="business-diagram-circle w-32 h-32 rounded-full bg-[#D89F30] flex items-center justify-center shadow-lg border-4 border-white mb-4">
              <img src="{{ asset('images/Icon/CV PANCORAN BUMI PERSADA.svg') }}" alt="CV Pancoran Bumi Persada" class="w-20 h-20 object-contain">
            </div>
            <div class="business-diagram-caption text-center text-gray-700 text-sm max-w-[220px]">
              {{ __('messages.ourbusiness.diagram_logistik') }}
            </div>
          </a>
          <!-- 3 -->
          <a href="{{ url('ourbusiness/parfum') }}" class="business-diagram-item business-diagram-sti flex flex-col items-center transition-transform duration-300 hover:scale-105 cursor-pointer">
            <div class="mb-4">
              <div class="business-diagram-bubble bg-[#D89F30] text-white px-5 py-2 rounded-t-lg rounded-b-[0.5rem] font-semibold text-base shadow-lg relative text-center">
                PT Saudagar Timur International
                <div class="absolute left-1/2 -bottom-3 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-[#D89F30]"></div>
              </div>
            </div>
            <div class="business-diagram-circle w-32 h-32 rounded-full bg-[#D89F30] flex items-center justify-center shadow-lg border-4 border-white mb-4">
              <img src="{{ asset('images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg') }}" alt="PT Saudagar Timur International" class="w-20 h-20 object-contain">
            </div>
            <div class="business-diagram-caption text-center text-gray-700 text-sm max-w-[220px]">
              {{ __('messages.ourbusiness.diagram_parfum') }}
            </div>
          </a>
        </div>
      </div>
      <!-- Mobile Vertical Layout -->
  <div class="flex md:hidden w-full flex-col items-center gap-10">
        <!-- 1 -->
  <a href="{{ url('ourbusiness/gaharu') }}" class="business-diagram-item business-diagram-jmp flex flex-col items-center w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
          <div class="mb-4">
            <div class="business-diagram-bubble bg-[#D89F30] text-white px-5 py-2 rounded-t-lg rounded-b-[0.5rem] font-semibold text-base shadow-lg relative text-center">
              PT Jawda Mitra Prima
              <div class="absolute left-1/2 -bottom-3 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-[#D89F30]"></div>
            </div>
          </div>
          <div class="business-diagram-circle w-32 h-32 rounded-full bg-[#D89F30] flex items-center justify-center shadow-lg border-4 border-white mb-4">
            <img src="{{ asset('images/Icon/PT JAWDA MITRA PRIMA.svg') }}" alt="PT Jawda Mitra Prima" class="w-20 h-20 object-contain">
          </div>
          <div class="business-diagram-caption text-center text-gray-700 text-sm max-w-[220px]">
            {{ __('messages.ourbusiness.diagram_gaharu') }}
          </div>
  </a>
        <!-- 2 -->
  <a href="{{ url('ourbusiness/logistik') }}" class="business-diagram-item business-diagram-pbp flex flex-col items-center w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
          <div class="mb-4">
            <div class="business-diagram-bubble bg-[#D89F30] text-white px-5 py-2 rounded-t-lg rounded-b-[0.5rem] font-semibold text-base shadow-lg relative text-center">
              CV Pancoran Bumi Persada
              <div class="absolute left-1/2 -bottom-3 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-[#D89F30]"></div>
            </div>
          </div>
          <div class="business-diagram-circle w-32 h-32 rounded-full bg-[#D89F30] flex items-center justify-center shadow-lg border-4 border-white mb-4">
            <img src="{{ asset('images/Icon/CV PANCORAN BUMI PERSADA.svg') }}" alt="CV Pancoran Bumi Persada" class="w-20 h-20 object-contain">
          </div>
          <div class="business-diagram-caption text-center text-gray-700 text-sm max-w-[220px]">
            {{ __('messages.ourbusiness.diagram_logistik') }}
          </div>
  </a>
        <!-- 3 -->
  <a href="{{ url('ourbusiness/parfum') }}" class="business-diagram-item business-diagram-sti flex flex-col items-center w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
          <div class="mb-4">
            <div class="business-diagram-bubble bg-[#D89F30] text-white px-5 py-2 rounded-t-lg rounded-b-[0.5rem] font-semibold text-base shadow-lg relative text-center">
              PT Saudagar Timur International
              <div class="absolute left-1/2 -bottom-3 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-[#D89F30]"></div>
            </div>
          </div>
          <div class="business-diagram-circle w-32 h-32 rounded-full bg-[#D89F30] flex items-center justify-center shadow-lg border-4 border-white mb-4">
            <img src="{{ asset('images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg') }}" alt="PT Saudagar Timur International" class="w-20 h-20 object-contain">
          </div>
          <div class="business-diagram-caption text-center text-gray-700 text-sm max-w-[220px]">
            {{ __('messages.ourbusiness.diagram_parfum') }}
          </div>
  </a>
      </div>
    </div>
  </section>

    <section class="py-8 sm:py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto" x-data="{ tab: 'gaharu' }">
        <!-- Tab Navigation -->
        <div class="flex flex-col sm:flex-row gap-2 sm:gap-6 mb-8 sm:mb-12 overflow-x-auto">
            <button 
                @click="tab = 'gaharu'" 
                :class="tab === 'gaharu' ? 'font-bold text-[#D89F30] border-b-2 border-[#D89F30]' : 'text-gray-700 hover:text-[#D89F30]'" 
                class="px-3 sm:px-4 py-2 focus:outline-none transition-colors duration-300 text-sm sm:text-base whitespace-nowrap text-left sm:text-center"
            >
                {{ __('messages.ourbusiness.tab_gaharu') }}
            </button>
            <button 
                @click="tab = 'logistik'" 
                :class="tab === 'logistik' ? 'font-bold text-[#D89F30] border-b-2 border-[#D89F30]' : 'text-gray-700 hover:text-[#D89F30]'" 
                class="px-3 sm:px-4 py-2 focus:outline-none transition-colors duration-300 text-sm sm:text-base whitespace-nowrap text-left sm:text-center"
            >
                {{ __('messages.ourbusiness.tab_logistik') }}
            </button>
            <button 
                @click="tab = 'parfum'" 
                :class="tab === 'parfum' ? 'font-bold text-[#D89F30] border-b-2 border-[#D89F30]' : 'text-gray-700 hover:text-[#D89F30]'" 
                class="px-3 sm:px-4 py-2 focus:outline-none transition-colors duration-300 text-sm sm:text-base whitespace-nowrap text-left sm:text-center"
            >
                {{ __('messages.ourbusiness.tab_parfum') }}
            </button>
        </div>
        
        <!-- Tab Content -->
        <div class="min-h-[300px] transition-all duration-500">
            <!-- Gaharu Tab -->
            <div 
                x-show="tab === 'gaharu'" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-4"
                class="text-gray-800 fade-section"
            >
                <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4 text-[#D89F30]">PT Jawda Mitra Prima</h3>
        <p class="text-justify mb-4 sm:mb-6 text-sm sm:text-base lg:text-lg leading-relaxed">
          {{ __('messages.ourbusiness.tab_gaharu_desc') }}
        </p>
                <div class="flex justify-center">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 w-full max-w-8xl">
                        <img src="{{ asset('images/pages/OurBusiness/Gaharu_1.webp') }}" alt="Parfum 1" class="h-48 sm:h-64 md:h-80 w-full object-cover rounded-lg shadow-md">
                        <img src="{{ asset('images/pages/OurBusiness/Gaharu_2.webp') }}" alt="Parfum 2" class="h-48 sm:h-64 md:h-80 w-full object-cover rounded-lg shadow-md">
                        <img src="{{ asset('images/pages/OurBusiness/Gaharu_3.webp') }}" alt="Parfum 3" class="h-48 sm:h-64 md:h-80 w-full object-cover rounded-lg shadow-md sm:col-span-2 lg:col-span-1">
                    </div>
                </div>
            </div>
            
            <!-- Logistik Tab -->
            <div 
                x-show="tab === 'logistik'" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-4"
                class="text-gray-800 fade-section"
            >
                <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4 text-[#D89F30]">CV Pancoran Bumi Persada</h3>
        <p class="text-justify mb-4 sm:mb-6 text-sm sm:text-base lg:text-lg leading-relaxed">
          {{ __('messages.ourbusiness.tab_logistik_desc') }}
        </p>
                <div class="flex justify-center">
                    <img src="{{ asset('images/pages/OurBusiness/Logistik.webp') }}" alt="Three business professionals standing together in a modern office environment, dressed in formal attire and smiling confidently. The background features large windows with natural light and a cityscape view, conveying a professional and optimistic atmosphere. No visible text in the image." class="h-48 sm:h-64 md:h-80 w-full max-w-8xl object-cover rounded-lg shadow-md">
                </div>
            </div>
            
            <!-- Parfum Tab -->
            <div 
                x-show="tab === 'parfum'" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-4"
                class="text-gray-800 fade-section"
            >
                <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4 text-[#D89F30]">PT Saudagar Timur Internasional</h3>
        <p class="text-justify mb-4 sm:mb-6 text-sm sm:text-base lg:text-lg leading-relaxed">
          {{ __('messages.ourbusiness.tab_parfum_desc') }}
        </p>
                <div class="flex justify-center">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 w-full max-w-8xl">
                        <img src="{{ asset('images/pages/OurBusiness/Parfum_1.webp') }}" alt="Parfum 1" class="h-48 sm:h-64 md:h-80 w-full object-cover rounded-lg shadow-md">
                        <img src="{{ asset('images/pages/OurBusiness/Parfum_2.webp') }}" alt="Parfum 2" class="h-48 sm:h-64 md:h-80 w-full object-cover rounded-lg shadow-md">
                        <img src="{{ asset('images/pages/OurBusiness/Parfum_3.webp') }}" alt="Parfum 3" class="h-48 sm:h-64 md:h-80 w-full object-cover rounded-lg shadow-md sm:col-span-2 lg:col-span-1">
                    </div>
                </div>
            </div>
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
  </body>
</html>