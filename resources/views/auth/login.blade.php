<x-guest-layout>
  <x-authentication-card>
    <x-slot name="logo">
      <x-authentication-card-logo />
    </x-slot>

    <x-validation-errors class="mb-4" />

    @session('status')
      <div class="mb-4 rounded-lg bg-[#9ACBD0]/20 border border-[#9ACBD0] px-4 py-3 text-sm font-medium text-[#006A71]">
        {{ $value }}
      </div>
    @endsession

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
      @csrf

      <!-- Email Input -->
      <div class="space-y-2">
        <x-label for="email" value="EMAIL" class="text-gray-700 text-xs font-semibold uppercase tracking-wide" />
        <x-input id="email" 
          class="block w-full rounded-xl bg-blue-50/50 border-[#48A6A7] text-gray-900 placeholder-gray-400 transition-all duration-200 focus:bg-white focus:border-[#006A71] focus:ring-2 focus:ring-[#48A6A7]/20 px-4 py-3 text-sm" 
          type="text" 
          name="email" 
          :value="old('email')" 
          required
          autofocus 
          autocomplete="username" 
          placeholder="kevin@adm.com" />
      </div>

      <!-- Password Input -->
      <div class="space-y-2">
        <x-label for="password" value="PASSWORD" class="text-gray-700 text-xs font-semibold uppercase tracking-wide" />
        <div class="relative">
          <x-input id="password" 
            class="block w-full rounded-xl bg-blue-50/30 border-[#48A6A7] text-gray-900 placeholder-gray-400 transition-all duration-200 focus:bg-white focus:border-[#006A71] focus:ring-2 focus:ring-[#48A6A7]/20 px-4 py-3 text-sm pr-12" 
            type="password" 
            name="password" 
            required
            autocomplete="current-password" 
            placeholder="••••••••" />
          <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Remember Me & Forgot Password -->
      <div class="flex items-center justify-between pt-1">
        <label for="remember_me" class="flex items-center group cursor-pointer">
          <x-checkbox id="remember_me" name="remember" class="rounded border-gray-300 text-[#006A71] focus:ring-[#48A6A7]" />
          <span class="ms-2 text-sm text-gray-700">Ingat saya</span>
        </label>

        @if (Route::has('password.request'))
          <a class="text-sm text-[#006A71] hover:text-[#48A6A7] font-medium transition-colors"
            href="{{ route('password.request') }}">
            Lupa password?
          </a>
        @endif
      </div>

      <!-- Submit Button -->
      <div class="pt-2">
        <x-button class="w-full justify-center rounded-xl bg-gradient-to-r from-[#48A6A7] to-[#006A71] py-3.5 text-sm font-bold uppercase tracking-wider shadow-lg shadow-[#48A6A7]/30 transition-all duration-300 hover:from-[#3d8f90] hover:to-[#005a60] hover:shadow-xl hover:shadow-[#48A6A7]/40 hover:-translate-y-0.5 active:translate-y-0">
          MASUK
        </x-button>
      </div>

      <!-- Registration Link -->
      <div class="text-center pt-2">
        <p class="text-sm text-gray-500">
          Belum punya akun? <a href="{{ route('register') }}" class="text-[#006A71] hover:text-[#48A6A7] font-medium">Hubungi admin untuk mendaftar.</a>
        </p>
      </div>
    </form>
  </x-authentication-card>
</x-guest-layout>
