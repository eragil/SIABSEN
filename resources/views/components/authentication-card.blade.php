<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#9ACBD0] via-[#48A6A7] to-[#006A71] p-4">
  <div class="w-full max-w-6xl flex rounded-3xl overflow-hidden shadow-2xl">
    <!-- Left Side - Logo & Branding -->
    <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-[#9ACBD0] via-[#48A6A7] to-[#006A71] p-12 flex-col items-center justify-center relative overflow-hidden">
      <!-- Decorative circles -->
      <div class="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
      <div class="absolute bottom-20 right-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
      
      <div class="relative z-10 text-center">
        {{ $logo }}
      </div>
    </div>

    <!-- Right Side - Login Form -->
    <div class="w-full lg:w-1/2 bg-white p-8 lg:p-12">
      <div class="max-w-md mx-auto">
        <!-- Mobile Logo (shown only on small screens) -->
        <div class="lg:hidden mb-8 text-center">
          {{ $logo }}
        </div>

        <!-- Welcome Heading -->
        <div class="mb-8">
          <h2 class="text-3xl font-bold text-gray-800 mb-2">
            Selamat Datang
          </h2>
          <p class="text-gray-500 text-sm">
            Masuk ke akun Anda untuk melanjutkan
          </p>
        </div>

        <!-- Form Slot -->
        {{ $slot }}
      </div>
    </div>
  </div>
</div>
