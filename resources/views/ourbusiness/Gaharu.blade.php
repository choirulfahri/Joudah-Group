
@php
  $locale = app()->getLocale();
  if ($locale === 'ar') {
    $controller = \App\Http\Controllers\perusahaan_ar::class;
  } elseif ($locale === 'en') {
    $controller = \App\Http\Controllers\perusahaan_en::class;
  } else {
    $controller = \App\Http\Controllers\perusahaan_id::class;
  }
  $data = collect($controller::getData())->firstWhere('perusahaan', 'PT Jawda Mitra Prima');
@endphp

<!doctype html>
<html>
  <head>
    <title>CV Pancoran Bumi Persada | Joudah Group  </title>
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


    <!-- Banner Section -->
    <div class="logistik-banner relative w-full h-[220px] sm:h-[320px] overflow-hidden fade-section">
      <img src="{{ asset('images/pages/OurBusiness/Gaharu_1.webp') }}" alt="Logistik" class="w-full h-full object-cover">
    </div>

    <!-- Card Logo & Nama Perusahaan di antara banner dan kanvas, pojok kiri, responsif -->
    <div class="relative z-20 max-w-7xl mx-auto px-4 fade-section" style="margin-top: -40px;">
      <div class="logistik-card bg-white rounded-xl shadow-lg flex items-center px-4 sm:px-8 py-3 sm:py-4 gap-2 sm:gap-4 min-w-[180px] sm:min-w-[320px] w-fit">
        <img src="/{{ $data['icon'] }}" alt="Logo {{ $data['perusahaan'] }}" class="h-10 sm:h-14 w-auto">
        <span class="font-bold text-base sm:text-xl text-slate-800">{{ $data['perusahaan'] }}</span>
      </div>
    </div>

    <!-- Section Info Perusahaan (tanpa card, beda kelas, responsif) -->
    <section class="logistik-info-section max-w-7xl mx-auto mt-8 sm:mt-12 px-4 fade-section">
      <div class="flex flex-col sm:flex-row flex-wrap gap-4 sm:gap-6 mb-8">
        <div class="logistik-info-box flex-1 min-w-[140px] fade-section">
          <div class="logistik-info-label bg-[#D89F30] text-white font-semibold rounded-t-lg py-2 text-center text-sm sm:text-base">Industri</div>
          <div class="logistik-info-value bg-white text-yellow-900 rounded-b-lg py-2 text-center text-sm sm:text-base">{{ $data['Industri'] }}</div>
        </div>
        <div class="logistik-info-box flex-[2] min-w-[180px] sm:min-w-[220px] fade-section">
          <div class="logistik-info-label bg-[#D89F30] text-white font-semibold rounded-t-lg py-2 text-center text-sm sm:text-base">Alamat</div>
          <div class="logistik-info-value bg-white text-yellow-900 rounded-b-lg py-2 text-center text-sm sm:text-base">{{ $data['Alamat'] }}</div>
        </div>
        <div class="logistik-info-box flex-[2] min-w-[140px] sm:min-w-[180px] fade-section">
          <div class="logistik-info-label bg-[#D89F30] text-white font-semibold rounded-t-lg py-2 text-center text-sm sm:text-base">Website</div>
          <div class="logistik-info-value bg-white text-yellow-900 rounded-b-lg py-2 text-center text-sm sm:text-base">
            <a href="https://joudahgroup.com/" target="_blank" class="underline text-yellow-900 break-all">https://joudahgroup.com/</a>
          </div>
        </div>
      </div>

      <div class="logistik-desc-section mb-8 fade-section">
        <h3 class="text-base sm:text-lg font-semibold text-slate-800 mb-2">Tentang Perusahaan</h3>
        <div class="text-slate-700 text-sm sm:text-base leading-relaxed text-justify">
          {{ $data['DeskripsiPerusahaan'] }}
        </div>
      </div>

      <div class="logistik-contact-section fade-section">
        <h3 class="text-base sm:text-lg font-semibold text-slate-800 mb-2">Informasi Kontak</h3>
        <div class="text-slate-700 text-sm sm:text-base leading-relaxed">
          <div>Phone: +62 877-9671-5916</div>
          <div class="mt-1">Gmail:<br>joudahgroup@gmail.com<br>recruitment@joudahgroup.com</div>
          <div class="mt-1">Sosial Media:<br>LinkedIn: Joudah Group</div><br>
        </div>
      </div>
    </section>

    @include('partials.footer')

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