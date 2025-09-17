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
  <!-- Remixicon for Visi Misi icons -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <style>
      /* Visi Misi Section Styles */
      .vm-card {
        border-radius: 15px;
        transition: background 0.3s, box-shadow 0.3s;
        box-shadow: 0 2px 8px 0 rgba(0,0,0,0.04);
        cursor: pointer;
        border: none;
        min-height: 340px;
        height: 340px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
      }
      .vm-card.visi {
        background: #D89F30;
        color: #fff;
      }
      .vm-card.misi {
        background: #FFECA9;
        color: #B88A2B;
      }
      .vm-card.visi:hover,
      .vm-card.misi:hover {
        background: #fff;
        color: #D89F30;
        box-shadow: 0 4px 16px 0 rgba(216,159,48,0.10);
      }
      .vm-icon {
        font-size: 6rem;
        margin-bottom: 1.5rem;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: color 0.3s, font-size 0.3s, margin-bottom 0.3s, margin-top 0.3s;
      }
      .vm-icon.visi {
        color: #fff;
      }
      .vm-icon.misi {
        color: #D89F30;
      }
      .vm-icon-hover {
        color: #D89F30 !important;
        font-size: 2.5rem !important;
        margin-bottom: 0.5rem !important;
        margin-top: 1.2rem !important;
      }
      .vm-title {
        font-weight: bold;
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
        letter-spacing: 0.04em;
        text-align: center;
        text-transform: uppercase;
        transition: color 0.3s, font-size 0.3s, margin-bottom 0.3s, margin-top 0.3s;
      }
      .vm-title-hover {
        font-size: 1.1rem !important;
        margin-bottom: 0.2rem !important;
        margin-top: 0.2rem !important;
        color: #D89F30 !important;
        text-align: center;
      }
      .vm-card .vm-content {
        opacity: 0;
        max-height: 0;
        transition: opacity 0.3s, max-height 0.3s;
        pointer-events: none;
        position: absolute;
        left: 0; right: 0;
        top: 3.5rem;
        padding: 0 1.2rem 1.2rem 1.2rem;
        width: 100%;
        z-index: 2;
        display: flex;
        align-items: flex-start;
        justify-content: center;
      }
      .vm-card:hover .vm-content {
        opacity: 1;
        max-height: 400px;
        pointer-events: auto;
      }
      .vm-card .vm-desc {
        font-size: 1.05rem;
        text-align: justify;
        line-height: 1.7;
        color: inherit;
      }
      .vm-card .vm-list {
        list-style: disc inside;
        text-align: justify;
        margin: 0.5rem 0 0 0;
        padding: 0 0 0 1.2rem;
        color: inherit;
      }
      @media (max-width: 640px) {
        .vm-card {
          padding: 1.25rem 0.75rem;
          min-height: 220px;
          height: 220px;
        }
        .vm-card .vm-icon {
          font-size: 2.2rem;
        }
        .vm-card .vm-title {
          font-size: 1.2rem;
        }
      }
      @media (min-width: 641px) {
        .vm-card {
          padding: 2rem 1.5rem;
        }
      }
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
            Tentang Kami
          </h1>
          <p class="text-responsive-xl text-white/90 drop-shadow mb-4 max-w-8xl leading-relaxed text-left">
            Membangun ekosistem bisnis terintegrasi di bidang logistik, manufaktur, dan produk konsumen berbasis gaharu untuk pasar global.
          </p>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section class="relative w-full bg-white fade-section py-12 px-4 sm:px-8 max-w-6xl mx-auto">
      <div class="flex flex-col md:flex-row items-stretch gap-8 md:gap-12">
        <!-- Kolom Kiri: Grid 2x2 -->
        <div class="w-full md:w-auto flex-shrink-0 flex flex-col justify-center items-center">
          <div class="grid grid-cols-2 grid-rows-2 gap-2 md:gap-3 min-w-[260px] md:min-w-[320px] max-w-xs mx-auto">
            <!-- ABOUT US kiri atas -->
            <div class="col-span-1 row-span-1 flex items-center justify-center">
              <span class="text-[#D6A037] font-bold text-2xl md:text-3xl lg:text-4xl tracking-widest select-none text-center" style="letter-spacing:0.08em;">ABOUT<br>US</span>
            </div>
            <!-- Icon 1: PT JAWDA MITRA PRIMA kanan atas -->
            <div class="col-span-1 row-span-1 flex items-center justify-center">
              <div class="bg-[#D6A037] rounded-lg flex items-center justify-center w-28 h-28 md:w-36 md:h-36">
                <img src="{{ asset('images/Icon/PT JAWDA MITRA PRIMA.svg') }}" alt="PT JAWDA MITRA PRIMA" class="w-20 h-20 md:w-24 md:h-24 object-contain">
              </div>
            </div>
            <!-- Icon 2: PT SAUDAGAR TIMUR INTERNATIONAL kiri bawah -->
            <div class="col-span-1 row-span-1 flex items-center justify-center">
              <div class="bg-[#D6A037] rounded-lg flex items-center justify-center w-28 h-28 md:w-36 md:h-36">
                <img src="{{ asset('images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg') }}" alt="PT SAUDAGAR TIMUR INTERNATIONAL" class="w-20 h-20 md:w-24 md:h-24 object-contain">
              </div>
            </div>
            <!-- Icon 3: CV PANCORAN BUMI PERSADA kanan bawah -->
            <div class="col-span-1 row-span-1 flex items-center justify-center">
              <div class="bg-[#D6A037] rounded-lg flex items-center justify-center w-28 h-28 md:w-36 md:h-36">
                <img src="{{ asset('images/Icon/CV PANCORAN BUMI PERSADA.svg') }}" alt="CV PANCORAN BUMI PERSADA" class="w-20 h-20 md:w-24 md:h-24 object-contain">
              </div>
            </div>
          </div>
        </div>
        <!-- Kolom Kanan: Teks, tinggi minimal setara grid kiri (10 baris) -->
        <div class="flex-1 flex items-center">
          <div class="text-gray-600 text-base md:text-lg leading-relaxed w-full flex items-center" style="min-height:100%;">
            <p class="text-justify leading-8 md:leading-9 w-full">
              Sejak 2009, Joudah Group membangun bisnis terintegrasi yang mencakup logistik, manufaktur, dan produk konsumen berbasis gaharu. Dari pengangkutan bahan baku di berbagai wilayah Indonesia, pengolahan berstandar tinggi, hingga pengembangan produk premium. Berlandaskan komitmen pada keaslian, keberlanjutan, dan inovasi, Joudah Group memperkuat posisinya sebagai jembatan antara kekayaan alam nusantara dan kebutuhan dunia.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Rectangle Section -->
    <section class="relative w-full fade-section overflow-visible" style="background: linear-gradient(90deg, #D89F30 0%, #F4CE30 100%); min-height: 7rem;">
      <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between h-36 md:h-44 px-4 sm:px-8 relative">
        <!-- Teks Kiri -->
        <div class="flex-1 flex flex-col justify-center z-10">
          <h2 class="text-white font-bold text-lg md:text-2xl lg:text-3xl mb-2 md:mb-4 drop-shadow-lg">DARI TANAH, MELINTASI LAUT, MENJADI AROMA SURGAWI</h2>
          <p class="text-white text-base md:text-xl lg:text-2xl font-normal drop-shadow">Rantai Bisnis Gaharu dalam Satu Kendali</p>
        </div>
        <!-- Gambar Kanan -->
        <div class="absolute right-0 bottom-0 h-full flex items-end z-20 pointer-events-none select-none">
          <img src="{{ asset('images/pages/About Us/portrait_woman.webp') }}" alt="Portrait Woman" class="h-56 md:h-72 lg:h-80 object-contain object-bottom" style="max-width:420px; width:auto;" loading="lazy">
        </div>
      </div>
    </section>
    
    <!-- Section Visi Misi -->
    <section class="max-w-7xl mx-auto px-4 py-16 fade-section">
      <div class="w-full flex flex-col md:flex-row gap-8 md:gap-12 justify-center items-stretch">
        <!-- Visi Card -->
        <div class="vm-card visi flex-1 min-w-[260px] max-w-xl group" onmouseover="this.querySelector('.vm-icon').classList.add('vm-icon-hover');this.querySelector('.vm-title').classList.add('vm-title-hover');" onmouseout="this.querySelector('.vm-icon').classList.remove('vm-icon-hover');this.querySelector('.vm-title').classList.remove('vm-title-hover');">
          <div class="vm-icon visi"><i class="ri-focus-3-line"></i></div>
          <div class="vm-title">VISI</div>
          <div class="vm-content">
            <div class="vm-desc">
              Menjadi perusahaan terdepan di industri kayu gaharu global yang unggul dalam kualitas dan reputasi, serta berkontribusi positif bagi masyarakat dan lingkungan.
            </div>
          </div>
        </div>
        <!-- Misi Card -->
        <div class="vm-card misi flex-1 min-w-[260px] max-w-xl group" onmouseover="this.querySelector('.vm-icon').classList.add('vm-icon-hover');this.querySelector('.vm-title').classList.add('vm-title-hover');" onmouseout="this.querySelector('.vm-icon').classList.remove('vm-icon-hover');this.querySelector('.vm-title').classList.remove('vm-title-hover');">
          <div class="vm-icon misi"><i class="ri-global-line"></i></div>
          <div class="vm-title">MISI</div>
          <div class="vm-content">
            <ul class="vm-list">
              <li>Memproduksi dan memasarkan produk gaharu berkualitas tinggi</li>
              <li>Menjadi acuan industri gaharu nasional dan global</li>
              <li>Melakukan inovasi berkelanjutan berbasis teknologi</li>
              <li>Menjalin kemitraan strategis dengan pemangku kepentingan</li>
              <li>Menerapkan tata kelola yang baik dan berorientasi pada keberlanjutan</li>
              <li>Membangun budaya kerja yang positif dan profesional</li>
            </ul>
          </div>
        </div>
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