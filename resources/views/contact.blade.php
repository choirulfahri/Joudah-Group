<!doctype html>
<html>
  <head>
  <title>{{ __("messages.contact.title") }}</title>
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
      <img src="{{ asset('images/pages/home/Banner1.webp') }}" alt="Banner Home" class="absolute inset-0 w-full h-full object-cover pointer-events-none rounded-none" style="z-index:0;">
      <div class="absolute inset-0 bg-black/40" style="z-index:1;"></div>
      <div class="relative z-10 w-full max-w-6xl mx-auto flex flex-col justify-end px-4 sm:px-8 md:px-12 pb-10 sm:pb-16 md:pb-20" style="min-height:40vh;">
        <div class="w-full">
          <h1 class="text-responsive-lg font-bold text-white drop-shadow-lg mb-2 sm:mb-0 uppercase leading-tight text-left">
            {{ __("messages.contact.hero_title") }}
          </h1>
          <p class="text-responsive-xl text-white/90 drop-shadow mb-4 max-w-8xl leading-relaxed text-left">
            {{ __("messages.contact.hero_subtitle") }}
          </p>
        </div>
      </div>
    </header>

    <!-- Maps & Contact -->
  <section class="relative flex w-full bg-white fade-section">
      <div class="max-w-7xl mx-auto px-2 sm:px-4 py-8 md:py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 items-start">
          <!-- Kolom Kiri: Peta -->
          <div>
            <div class="rounded-xl overflow-hidden border-2 border-[#D6A037] shadow-md">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5609.281897752474!2d106.75294943421505!3d-6.215997046698996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f70005d8f837%3A0xa31a3f22b7cfc895!2sJoudah%20Group!5e0!3m2!1sen!2sid!4v1756884655816!5m2!1sen!2sid"
                class="w-full min-h-[220px] sm:min-h-[300px] md:min-h-[415px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <!-- Kolom Kanan: Info Kontak -->
          <div class="flex flex-col gap-3 md:gap-6">
            <!-- Alamat -->
            <div class="clickable-item flex items-start gap-3 md:gap-4 border border-[#D6A037] rounded-lg p-3 md:p-5 bg-white shadow-sm" onclick="openMaps()">
              <span class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full aspect-square" style="background:#D6A037;">
                <img src="{{ asset('images/Icon/Location.svg') }}" alt="Alamat" class="w-5 h-6">
              </span>
              <div>
                <div class="font-bold text-base md:text-xl mb-1">{{ __("messages.contact.address_label") }}</div>
                <div class="text-gray-700 text-sm md:text-base text-justify">{{ __("messages.contact.address") }}</div>
              </div>
            </div>
            <!-- Telepon & Email -->
            <div class="clickable-item flex items-start gap-3 md:gap-4 border border-[#D6A037] rounded-lg p-3 md:p-5 bg-white shadow-sm" onclick="openWhatsApp()">
              <span class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full" style="background:#D6A037;">
                <img src="{{ asset('images/Icon/call.svg') }}" alt="Telepon" class="w-6 h-6">
              </span>
              <div>
                <div class="font-bold text-base md:text-xl mb-1">{{ __("messages.contact.phone_email_label") }}</div>
                <div class="text-gray-700 text-sm md:text-base">
                  <span id="phoneNumber">{{ __("messages.contact.phone") }}</span> - {{ __("messages.contact.phone_desc") }}<br>
                  <span id="emailAddress" onclick="openEmail(event)">{{ __("messages.contact.email") }}</span>
                </div>
              </div>
            </div>
            <!-- Jam Operasional -->
            <div class="flex items-start gap-3 md:gap-4 border border-[#D6A037] rounded-lg p-3 md:p-5 bg-white shadow-sm">
              <span class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full" style="background:#D6A037;">
                <img src="{{ asset('images/Icon/alarm.svg') }}" alt="Jam Operasional" class="w-6 h-6">
              </span>
              <div>
                <div class="font-bold text-base md:text-xl mb-1">{{ __("messages.contact.operational_label") }}</div>
                <div class="text-gray-700 text-sm md:text-base">{{ __("messages.contact.operational_time") }}</div>
              </div>
            </div>
          </div>
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

    <script>
      // Fungsi untuk membuka Google Maps
      function openMaps() {
        const address = "Joudah Group";
        const encodedAddress = encodeURIComponent(address);
        window.open(`https://www.google.com/maps/search/?api=1&query=${encodedAddress}`, '_blank');
      }

      // Fungsi untuk membuka WhatsApp
      function openWhatsApp() {
        const phoneNumber = "6287796715916"; // Nomor tanpa tanda '+' dan spasi/hyphen
        const message = "Halo, saya ingin informasi lebih lanjut tentang produk Joudah.";
        const encodedMessage = encodeURIComponent(message);
        window.open(`https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodedMessage}`, '_blank');
      }

      // Fungsi untuk membuka Email
      function openEmail(event) {
        event.stopPropagation(); // Mencegah event bubbling ke parent element
        const email = "info@joudah.com";
        const subject = "Informasi tentang Joudah";
        const body = "Saya ingin mengetahui lebih lanjut tentang produk dan layanan Joudah.";
        window.location.href = `mailto:${email}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
      }

      // Menambahkan event listener setelah halaman dimuat
      document.addEventListener('DOMContentLoaded', function() {
        // Memastikan email dapat diklik tanpa memicu WhatsApp
        const emailElement = document.getElementById('emailAddress');
        if (emailElement) {
          emailElement.addEventListener('click', openEmail);
        }
      });
    </script>
  </body>
</html>