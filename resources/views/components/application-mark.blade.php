@php
  $logoPng = public_path('LOGO.png');
  $logoImage = public_path('images/LOGO.png');
@endphp

<div class="flex items-center gap-2">
  @if (file_exists($logoPng))
    <img src="{{ asset('LOGO.png') }}" alt="SIHADIR" class="h-10 w-10 rounded-full object-cover" />
  @elseif (file_exists($logoImage))
    <img src="{{ asset('images/LOGO.png') }}" alt="SIHADIR" class="h-10 w-10 rounded-full object-cover" />
  @else
    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 rounded-full" {{ $attributes }}>
      <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"/>
      <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"/>
    </svg>
  @endif
  <span class="text-base font-bold text-gray-800 dark:text-white">SIHADIR</span>
</div>
