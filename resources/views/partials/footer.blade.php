<footer class="bg-[#D6A037] px-4 md:px-16 py-8 text-white">
  <div class="max-w-7xl mx-auto">
    <!-- Baris 1: Menu kiri, sosmed kanan -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
      <nav class="w-full flex flex-col md:flex-row md:flex-wrap gap-2 md:gap-10 text-lg md:text-2xl mb-4 md:mb-0 relative" x-data="{ openFooterDropdown: false }">
        <div class="flex flex-col md:flex-row w-full md:w-auto gap-2 md:gap-10">
          <a href="/" class="hover:underline py-1 px-2 rounded transition-colors">Home</a>
          <!-- Our Business Dropdown -->
          <div class="relative w-full md:w-auto" :class="{'mb-2': openFooterDropdown}">
            <button type="button" class="hover:underline flex items-center gap-1 focus:outline-none w-full md:w-auto py-1 px-2 rounded transition-colors justify-between md:justify-start" @click="openFooterDropdown = !openFooterDropdown">
              Our Business
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
            </button>
            <div x-show="openFooterDropdown" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="md:absolute left-0 mt-2 w-full md:w-80 bg-white border border-gray-200 rounded shadow-lg z-20 py-2 text-base text-gray-800 flex flex-col" @click.away="openFooterDropdown = false">
              <a href="/ourbusiness/gaharu" class="flex items-center gap-3 px-4 py-3 hover:bg-[#F9E7C2] hover:text-[#D6A037] border-b border-gray-100 last:border-b-0" @click="openFooterDropdown = false">
                <img src="{{ asset('images/Icon/PT JAWDA MITRA PRIMA.svg') }}" alt="PT Jawda Mitra Prima" class="w-8 h-8 object-contain">
                <div>
                  <div class="font-semibold">PT Jawda Mitra Prima</div>
                  <div class="text-xs text-gray-500">Gaharu</div>
                </div>
              </a>
              <a href="/ourbusiness/logistik" class="flex items-center gap-3 px-4 py-3 hover:bg-[#F9E7C2] hover:text-[#D6A037] border-b border-gray-100 last:border-b-0" @click="openFooterDropdown = false">
                <img src="{{ asset('images/Icon/CV PANCORAN BUMI PERSADA.svg') }}" alt="CV Pancoran Bumi Persada" class="w-8 h-8 object-contain">
                <div>
                  <div class="font-semibold">CV Pancoran Bumi Persada</div>
                  <div class="text-xs text-gray-500">Logistik</div>
                </div>
              </a>
              <a href="/ourbusiness/parfum" class="flex items-center gap-3 px-4 py-3 hover:bg-[#F9E7C2] hover:text-[#D6A037]" @click="openFooterDropdown = false">
                <img src="{{ asset('images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg') }}" alt="PT Saudagar Timur Internasional" class="w-8 h-8 object-contain">
                <div>
                  <div class="font-semibold">PT Saudagar Timur Internasional</div>
                  <div class="text-xs text-gray-500">Parfum & Aromaterapi</div>
                </div>
              </a>
            </div>
          </div>
          <a href="/news" class="hover:underline py-1 px-2 rounded transition-colors">News & Event</a>
          <a href="/career" class="hover:underline py-1 px-2 rounded transition-colors">Career</a>
          <a href="/contact" class="hover:underline py-1 px-2 rounded transition-colors">Contact</a>
        </div>
      </nav>
      <div class="flex gap-4">
        <a href="https://www.facebook.com/share/1EcGPAYcWL/" class="" aria-label="Facebook">
          <img src="{{ asset('images/Icon/Facebook.svg') }}" alt="Facebook" class="w-8 h-8">
        </a>
        <a href="https://www.instagram.com/joudah_official?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="" aria-label="Instagram">
          <img src="{{ asset('images/Icon/Instagram.svg') }}" alt="Instagram" class="w-8 h-8">
        </a>
        <a href="#" class="" aria-label="X">
          <img src="{{ asset('images/Icon/x.svg') }}" alt="X" class="w-8 h-8">
        </a>
        <a href="https://www.linkedin.com/company/joudah-group/about/" class="" aria-label="LinkedIn">
          <img src="{{ asset('images/Icon/linkedin.svg') }}" alt="LinkedIn" class="w-8 h-8">
        </a>
        <a href="https://wa.me/6287796715916" class="" aria-label="WhatsApp">
          <img src="{{ asset('images/Icon/whatsapp.svg') }}" alt="WhatsApp" class="w-8 h-8">
        </a>
      </div>
    </div>
    <!-- Garis putih -->
    <hr class="my-6 border-white/80">
    <!-- Baris 2: Alamat kiri, logo kanan -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
      <div class="text-base md:text-lg font-normal">
        Jl. Joglo Raya No. 67, RT. 004/RW. 003, Kelurahan Joglo, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11640, Indonesia<br>
        Phone: +62 877-9671-5916<br>
        Gmail: joudahgroup@gmail.com
      </div>
      <div class="flex items-center justify-center md:justify-end w-full md:w-auto mt-4 md:mt-0">
        <img src="{{ asset('images/Icon/Joudah_white.svg') }}" alt="Joudah Group Logo" class="h-16 md:h-20 w-auto">
      </div>
    </div>
  </div>
</footer>