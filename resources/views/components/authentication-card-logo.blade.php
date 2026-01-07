<div class="flex flex-col items-center gap-4">
  @php
    $logoPng = public_path('LOGO.png');
    $logoImage = public_path('images/LOGO.png');
  @endphp

  <!-- Logo Circle -->
  <div class="w-24 h-24 rounded-full bg-white flex items-center justify-center shadow-xl overflow-hidden p-2">
    @if (file_exists($logoPng))
      <img src="{{ asset('LOGO.png') }}" alt="Logo" class="w-full h-full object-contain rounded-full" />
    @elseif (file_exists($logoImage))
      <img src="{{ asset('images/LOGO.png') }}" alt="Logo" class="w-full h-full object-contain rounded-full" />
    @else
      <svg class="w-16 h-16" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#0D9488"/>
        <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#14B8A6"/>
      </svg>
    @endif
  </div>

  <!-- Company Name -->
  <h1 class="text-white text-2xl lg:text-3xl font-bold tracking-wide">
    DD Knalpot Racing
  </h1>

  <!-- Subtitle -->
  <p class="text-white/90 text-sm lg:text-base font-medium">
    Sistem Informasi Absensi
  </p>
</div>
