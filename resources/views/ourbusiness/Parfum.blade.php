
@php
  $locale = app()->getLocale();
  if ($locale === 'ar') {
    $controller = \App\Http\Controllers\perusahaan_ar::class;
  } elseif ($locale === 'en') {
    $controller = \App\Http\Controllers\perusahaan_en::class;
  } else {
    $controller = \App\Http\Controllers\perusahaan_id::class;
  }
  $data = collect($controller::getData())->firstWhere('perusahaan', 'PT Saudagar Timur Internasional');
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
      /* Style untuk elemen yang dapat diklik */
      .clickable-item {
        transition: all 0.3s ease;
        cursor: pointer;
      }
      .clickable-item:hover {
        background-color: #fef3c7;
        transform: translateY(-2px);
      }
      /* Responsive fix for card shadow overlap */
      @media (max-width: 640px) {
        .logistik-card {
          flex-direction: column;
          align-items: flex-start;
          padding: 1rem 0.75rem;
          min-width: 0;
        }
        .logistik-card img {
          margin-bottom: 0.5rem;
        }
      }
      @media (max-width: 480px) {
        .logistik-info-section {
          padding-left: 0.5rem;
          padding-right: 0.5rem;
        }
        .logistik-info-box {
          min-width: 0;
        }
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
    <div class="logistik-banner relative w-full h-[220px] sm:h-[280px] md:h-[320px] overflow-hidden fade-section">
      <img src="{{ asset('images/pages/OurBusiness/Parfum_3.webp') }}" alt="Logistik" class="w-full h-full object-cover">
    </div>

    <!-- Card Logo & Nama Perusahaan di antara banner dan kanvas, pojok kiri -->
    <div class="relative z-20 max-w-7xl mx-auto px-2 sm:px-4 fade-section" style="margin-top: -40px;">
      <div class="logistik-card bg-white rounded-xl shadow-lg flex flex-col sm:flex-row items-start sm:items-center px-4 sm:px-8 py-3 sm:py-4 gap-2 sm:gap-4 min-w-0" style="width:fit-content;">
        <img src="/{{ $data['icon'] }}" alt="Logo {{ $data['perusahaan'] }}" class="h-12 sm:h-14 w-auto">
        <span class="font-bold text-lg sm:text-xl text-slate-800">{{ $data['perusahaan'] }}</span>
      </div>
    </div>

    <!-- Section Info Perusahaan (tanpa card, beda kelas) -->
    <section class="logistik-info-section max-w-7xl mx-auto mt-10 px-2 sm:px-4 fade-section">
      <div class="flex flex-col sm:flex-row flex-wrap gap-4 sm:gap-6 mb-8">
        <div class="logistik-info-box flex-1 min-w-0 fade-section">
          <div class="logistik-info-label bg-[#D89F30] text-white font-semibold rounded-t-lg py-2 text-center">Industri</div>
          <div class="logistik-info-value bg-white text-yellow-900 rounded-b-lg py-2 text-center">{{ $data['Industri'] }}</div>
        </div>
        <div class="logistik-info-box flex-[2] min-w-0 fade-section">
          <div class="logistik-info-label bg-[#D89F30] text-white font-semibold rounded-t-lg py-2 text-center">Alamat</div>
          <div class="logistik-info-value bg-white text-yellow-900 rounded-b-lg py-2 text-center">{{ $data['Alamat'] }}</div>
        </div>
        <div class="logistik-info-box flex-[2] min-w-0 fade-section">
          <div class="logistik-info-label bg-[#D89F30] text-white font-semibold rounded-t-lg py-2 text-center">Website</div>
          <div class="logistik-info-value bg-white text-yellow-900 rounded-b-lg py-2 text-center">
            <a href="https://joudahgroup.com/" target="_blank" class="underline text-yellow-900 break-all">https://joudahgroup.com/</a>
          </div>
        </div>
      </div>

      <div class="logistik-desc-section mb-8 fade-section">
        <h3 class="text-lg font-semibold text-slate-800 mb-2">Tentang Perusahaan</h3>
        <div class="text-slate-700 text-base leading-relaxed text-justify">
          {{ $data['DeskripsiPerusahaan'] }}
        </div>
      </div>

      <div class="logistik-contact-section fade-section">
        <h3 class="text-lg font-semibold text-slate-800 mb-2">Informasi Kontak</h3>
        <div class="text-slate-700 text-base leading-relaxed">
          <div><span class="font-semibold">Phone:</span> <a href="tel:+6287796715916" class="underline">+62 877-9671-5916</a></div>
          <div class="mt-2"><span class="font-semibold">Gmail:</span><br><a href="mailto:joudahgroup@gmail.com" class="underline">joudahgroup@gmail.com</a><br><a href="mailto:recruitment@joudahgroup.com" class="underline">recruitment@joudahgroup.com</a></div>
          <div class="mt-2"><span class="font-semibold">Sosial Media:</span><br>LinkedIn: <a href="https://www.linkedin.com/company/joudah-group/" target="_blank" class="underline">Joudah Group</a></div><br>
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