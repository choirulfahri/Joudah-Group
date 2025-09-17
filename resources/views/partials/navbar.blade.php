@php
  if (!isset($locale)) {
    $locale = app()->getLocale();
  }
@endphp
<nav class="bg-white shadow-md px-4 md:px-16 py-3 sticky top-0 z-30" x-data="{ open: false }">
  <style>
    .nav-anim-link {
      position: relative;
      overflow: hidden;
    }
    .nav-anim-link::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0%;
      height: 3px;
      background: #D6A037;
      transition: width 0.3s cubic-bezier(.4,0,.2,1);
    }
    .nav-anim-link:hover::after {
      width: 100%;
    }
    .nav-anim-link.active::after {
      width: 100%;
    }
  </style>
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    <!-- Logo kiri -->
    <div class="flex items-center">
      <a href="/">
        <img src="{{ asset('images/Icon/JoudahGroup_Logo1.svg') }}" alt="Joudah Group Logo" class="h-8">
      </a>
    </div>
    <!-- Menu tengah desktop -->
  <ul class="hidden md:flex gap-8 text-lg font-semibold" x-data="{ openDropdown: false }">
      <li>
        <a href="/?lang={{ app()->getLocale() }}"
           class="nav-anim-link px-1 pb-2 transition-all {{ request()->is('/') ? 'text-[#D6A037] font-bold active' : 'text-gray-400 font-normal hover:text-[#D6A037]' }}">
          {{ __('messages.home') }}
        </a>
      </li>
      <li>
        <a href="/about"
           class="nav-anim-link px-1 pb-2 transition-all {{ request()->is('about') ? 'text-[#D6A037] font-bold active' : 'text-gray-400 font-normal hover:text-[#D6A037]' }}">
            {{ __('messages.about') }}
        </a>
      </li> 
      <li class="relative group">
        <button type="button"
          class="nav-anim-link px-1 pb-2 transition-all flex items-center gap-1 focus:outline-none bg-transparent border-0 cursor-pointer {{ (request()->is('ourbusiness') || request()->is('ourbusiness/*') || request()->is('detail_lowongan')) ? 'text-[#D6A037] font-bold active' : 'text-gray-400 font-normal hover:text-[#D6A037]' }}"
          @click="openDropdown = !openDropdown"
          aria-haspopup="true" aria-expanded="false"
        >
            {{ __('messages.our_business') }}
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
        </button>
        <div x-show="openDropdown" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute left-0 mt-2 w-80 bg-white border border-gray-200 rounded shadow-lg z-20 py-2" @click.away="openDropdown = false">
          <a href="/ourbusiness/gaharu?lang={{ app()->getLocale() }}" class="flex items-center gap-3 px-4 py-2 hover:bg-[#F9E7C2] hover:text-[#D6A037] {{ request()->is('ourbusiness/gaharu') ? 'font-bold text-[#D6A037]' : 'text-gray-700' }}">
            <img src="{{ asset('images/Icon/PT JAWDA MITRA PRIMA.svg') }}" alt="PT Jawda Mitra Prima" class="w-8 h-8 object-contain">
            <div>
              <div class="font-semibold">PT Jawda Mitra Prima</div>
              <div class="text-xs text-gray-500">{{ __('messages.ourbusiness.tab_gaharu') }}</div>
            </div>
          </a>
          <a href="/ourbusiness/logistik?lang={{ app()->getLocale() }}" class="flex items-center gap-3 px-4 py-2 hover:bg-[#F9E7C2] hover:text-[#D6A037] {{ request()->is('ourbusiness/logistik') ? 'font-bold text-[#D6A037]' : 'text-gray-700' }}">
            <img src="{{ asset('images/Icon/CV PANCORAN BUMI PERSADA.svg') }}" alt="CV Pancoran Bumi Persada" class="w-8 h-8 object-contain">
            <div>
              <div class="font-semibold">CV Pancoran Bumi Persada</div>
              <div class="text-xs text-gray-500">{{ __('messages.ourbusiness.tab_logistik') }}</div>
            </div>
          </a>
          <a href="/ourbusiness/parfum?lang={{ app()->getLocale() }}" class="flex items-center gap-3 px-4 py-2 hover:bg-[#F9E7C2] hover:text-[#D6A037] {{ request()->is('ourbusiness/parfum') ? 'font-bold text-[#D6A037]' : 'text-gray-700' }}">
            <img src="{{ asset('images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg') }}" alt="PT Saudagar Timur Internasional" class="w-8 h-8 object-contain">
            <div>
              <div class="font-semibold">PT Saudagar Timur Internasional</div>
              <div class="text-xs text-gray-500">{{ __('messages.ourbusiness.tab_parfum') }}</div>
            </div>
          </a>
        </div>
      </li>
      {{-- <li>
        <a href="#investors"
           class="nav-anim-link px-1 pb-2 transition-all {{ request()->is('investors') ? 'text-[#D6A037] font-bold active' : 'text-gray-400 font-normal hover:text-[#D6A037]' }}">
          Investors
        </a>
      </li> --}}
      <li>
  <a href="/news?lang={{ app()->getLocale() }}"
     class="nav-anim-link px-1 pb-2 transition-all {{ (request()->is('news') || request()->is('detail_berita')) ? 'text-[#D6A037] font-bold active' : 'text-gray-400 font-normal hover:text-[#D6A037]' }}">
          {{ __('messages.news_event') }}
        </a>
      </li>
      @if(request()->is('detail_berita'))
      <li class="hidden">
        <a href="/detail_berita?lang={{ app()->getLocale() }}" class="nav-anim-link"></a>
      </li>
      @endif
      <li>
        @if(request()->is('detail_lowongan'))
          <a href="/detail_lowongan?lang={{ app()->getLocale() }}"
             class="nav-anim-link px-1 pb-2 transition-all text-[#D6A037] font-bold active">
              {{ __('messages.career') }}
          </a>
        @else
          <a href="/career?lang={{ app()->getLocale() }}"
             class="nav-anim-link px-1 pb-2 transition-all {{ (request()->is('career')) ? 'text-[#D6A037] font-bold active' : 'text-gray-400 font-normal hover:text-[#D6A037]' }}">
              {{ __('messages.career') }}
          </a>
        @endif
      </li>
      <li>
  <a href="/contact?lang={{ app()->getLocale() }}"
     class="nav-anim-link px-1 pb-2 transition-all {{ request()->is('contact') ? 'text-[#D6A037] font-bold active' : 'text-gray-400 font-normal hover:text-[#D6A037]' }}">
          {{ __('messages.contact') }}
        </a>
      </li>
    </ul>
    <!-- Sisi kanan: Button Login & Hamburger -->
    <div class="flex justify-end items-center gap-2">
      <!-- Language Switcher: icon bendera Indonesia, Inggris, Arab -->
      <div class="flex items-center gap-2">
        <a href="{{ url()->current() }}?lang=id" class="focus:outline-none" title="Bahasa Indonesia">
          <img src="{{ asset('images/Icon/flag-id.svg') }}" alt="ID" class="w-7 h-7 rounded-full border border-gray-200 object-cover @if($locale == 'id') ring-2 ring-[#D6A037] @endif">
        </a>
        <a href="{{ url()->current() }}?lang=en" class="focus:outline-none" title="English">
          <img src="{{ asset('images/Icon/flag-en.svg') }}" alt="EN" class="w-7 h-7 rounded-full border border-gray-200 object-cover @if($locale == 'en') ring-2 ring-[#D6A037] @endif">
        </a>
        <a href="{{ url()->current() }}?lang=ar" class="focus:outline-none" title="العربية">
          <img src="{{ asset('images/Icon/flag-ar.svg') }}" alt="AR" class="w-7 h-7 rounded-full border border-gray-200 object-cover @if($locale == 'ar') ring-2 ring-[#D6A037] @endif">
        </a>
      </div>
      <!-- Hamburger -->
      <button class="md:hidden flex items-center p-2" @click="open = !open" aria-label="Open Menu">
        <svg class="w-7 h-7 text-[#D6A037]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>
  <!-- Mobile Menu -->
  <div class="md:hidden" x-show="open" @click.away="open = false" x-transition>
    <ul class="flex flex-col gap-2 py-2 px-4 bg-white shadow-lg rounded-b">
      <li>
  <a href="/?lang={{ app()->getLocale() }}" class="block py-2 px-2 rounded {{ request()->is('/') ? 'text-[#D6A037] font-bold border-b-4 border-[#D6A037]' : 'text-gray-400 font-normal hover:text-[#D6A037]' }}">{{ __('messages.home') }}</a>
      </li>
      <li>
        <a href="/about" class="block py-2 px-2 rounded {{ request()->is('about') ? 'text-[#D6A037] font-bold border-b-4 border-[#D6A037]' : 'text-gray-400 font-normal hover:text-[#D6A037]' }}">{{ __('messages.about') }}</a>
      </li>
      <li x-data="{ openDropdownMobile: false }" class="relative">
        <div class="flex w-full">
          <button type="button" class="flex-1 block py-2 px-2 rounded text-gray-400 font-normal hover:text-[#D6A037] bg-transparent border-0 text-left {{ (request()->is('ourbusiness') || request()->is('ourbusiness/*') || request()->is('detail_lowongan')) ? 'font-bold text-[#D6A037]' : '' }}" @click="openDropdownMobile = !openDropdownMobile" aria-haspopup="true" aria-expanded="false">{{ __('messages.our_business') }}</button>
          <button type="button" class="flex items-center px-2 bg-transparent border-0" @click="openDropdownMobile = !openDropdownMobile" aria-label="Dropdown Our Business">
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
          </button>
        </div>
        <div x-show="openDropdownMobile" x-transition class="pl-2">
          <a href="/ourbusiness/gaharu?lang={{ app()->getLocale() }}" class="flex items-center gap-3 py-2 px-2 rounded hover:bg-[#F9E7C2] hover:text-[#D6A037] {{ request()->is('ourbusiness/gaharu') ? 'font-bold text-[#D6A037]' : 'text-gray-700' }}">
            <img src="{{ asset('images/Icon/PT JAWDA MITRA PRIMA.svg') }}" alt="PT Jawda Mitra Prima" class="w-8 h-8 object-contain">
            <div>
              <div class="font-semibold">PT Jawda Mitra Prima</div>
                <div class="text-xs text-gray-500">{{ __('messages.ourbusiness.tab_gaharu') }}</div>
            </div>
          </a>
          <a href="/ourbusiness/logistik?lang={{ app()->getLocale() }}" class="flex items-center gap-3 py-2 px-2 rounded hover:bg-[#F9E7C2] hover:text-[#D6A037] {{ request()->is('ourbusiness/logistik') ? 'font-bold text-[#D6A037]' : 'text-gray-700' }}">
            <img src="{{ asset('images/Icon/CV PANCORAN BUMI PERSADA.svg') }}" alt="CV Pancoran Bumi Persada" class="w-8 h-8 object-contain">
            <div>
              <div class="font-semibold">CV Pancoran Bumi Persada</div>
                <div class="text-xs text-gray-500">{{ __('messages.ourbusiness.tab_logistik') }}</div>
            </div>
          </a>
          <a href="/ourbusiness/parfum?lang={{ app()->getLocale() }}" class="flex items-center gap-3 py-2 px-2 rounded hover:bg-[#F9E7C2] hover:text-[#D6A037] {{ request()->is('ourbusiness/parfum') ? 'font-bold text-[#D6A037]' : 'text-gray-700' }}">
            <img src="{{ asset('images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg') }}" alt="PT Saudagar Timur Internasional" class="w-8 h-8 object-contain">
            <div>
              <div class="font-semibold">PT Saudagar Timur Internasional</div>
                <div class="text-xs text-gray-500">{{ __('messages.ourbusiness.tab_parfum') }}</div>
            </div>
          </a>
        </div>
      </li>
      <li>
  <a href="/news?lang={{ app()->getLocale() }}" class="block py-2 px-2 rounded text-gray-400 font-normal hover:text-[#D6A037]">{{ __('messages.news_event') }}</a>
      </li>
    <li>
      @if(request()->is('detail_lowongan'))
        <a href="/detail_lowongan?lang={{ app()->getLocale() }}" class="block py-2 px-2 rounded text-[#D6A037] font-bold border-b-4 border-[#D6A037]">{{ __('messages.career') }}</a>
      @else
        <a href="/career?lang={{ app()->getLocale() }}" class="block py-2 px-2 rounded {{ (request()->is('career')) ? 'text-[#D6A037] font-bold border-b-4 border-[#D6A037]' : 'text-gray-400 font-normal hover:text-[#D6A037]' }}">{{ __('messages.career') }}</a>
      @endif
    </li>
      <li>
  <a href="/contact?lang={{ app()->getLocale() }}" class="block py-2 px-2 rounded {{ request()->is('contact') ? 'text-[#D6A037] font-bold border-b-4 border-[#D6A037]' : 'text-gray-400 font-normal hover:text-[#D6A037]' }}">{{ __('messages.contact') }}</a>
      </li>
      <li>
        <a href="/login" class="block py-2 px-2 rounded bg-[#ffffff] text-white font-semibold mt-2">Login</a>
      </li>
    </ul>
  </div>
</nav>