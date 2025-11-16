<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Official JAGUAR Website</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Josefin+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  {{-- Fonts Awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Icons & Tailwind CSS -->
  @viteReactRefresh
  @vite(['resources/css/app.css','resources/js/app.jsx'])
  <style>
    /* Hide scrollbar for all elements */
* {
  scrollbar-width: none; /* Firefox */
  -ms-overflow-style: none; /* IE and Edge */
}

*::-webkit-scrollbar {
  display: none; /* Chrome, Safari, Opera */
}

/* Or specifically for body and html */
body, html {
  scrollbar-width: none;
  -ms-overflow-style: none;
  scroll-behavior: smooth;
}

body::-webkit-scrollbar,
html::-webkit-scrollbar {
  display: none;
}
.cloudimage-360 {
  width: 1000px !important;
  height: 500px !important;
  margin: 0 auto !important;
  overflow: hidden !important;
}
  </style>
</head>

<body class="relative text-white bg-black font-[Josefin Sans] overflow-x-hidden">

  <!-- ================= HEADER ================= -->
  <header class="absolute top-0 left-0 z-30 flex w-full items-center justify-between px-8 py-6 bg-transparent">
    <button id="menu-btn" class="text-lg tracking-wide hover:opacity-80 transition">☰</button>

    <a href="/" class="cinzel-font text-xl font-semibold tracking-[0.4em] absolute left-1/2 -translate-x-1/2">
      JAGUAR
    </a>

    
  </header>

  <!-- Overlay -->
  <div id="overlay" class="fixed inset-0 hidden z-30 bg-black/40 backdrop-blur-sm transition-all duration-500"></div>

  <!-- ================= SIDEBAR ================= -->
  @include('components.sidebar-user')
  <!-- ================= MAIN VEHICLE CARDS ================= -->
  <section class="pt-24 fade-section relative z-20 flex flex-col items-center justify-center w-screen min-h-screen bg-black px-8 md:px-16 py-50">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 max-w-6xl w-full">

      <!-- Card 1 -->
      <a href="E-TYPE.html" class="relative overflow-hidden rounded-md group">
        <img src="./media/jaguarE-type.svg" alt="E-TYPE" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
          <h3 class="absolute top-6 left-1/2 -translate-x-1/2 text-3xl font-bold tracking-[0.2em] uppercase text-center cinzel-font">
            E-TYPE
          </h3>
          <div class="flex items-center justify-between">
            <p class="text-sm josefin-font text-gray-300">Nissan’s SUV masters every terrain while keeping you comfortable</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor"
                 class="w-6 h-6 text-gray-200 group-hover:translate-x-1 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.25 8.25L21 12l-3.75 3.75M21 12H3" />
            </svg>
          </div>
        </div>
      </a>

      <!-- Card 2 -->
      <a href="XK120.html" class="relative overflow-hidden rounded-md group">
        <img src="./media/XK120.svg" alt="XK120" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
          <h3 class="absolute top-6 left-1/2 -translate-x-1/2 text-3xl font-bold tracking-[0.2em] uppercase text-center cinzel-font">XK120</h3>
          <div class="flex items-center justify-between">
            <p class="text-sm josefin-font text-gray-300">Perfect blend of elegance and performance in this sleek sedan</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor"
                 class="w-6 h-6 text-gray-200 group-hover:translate-x-1 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.25 8.25L21 12l-3.75 3.75M21 12H3" />
            </svg>
          </div>
        </div>
      </a>

      <!-- Card 3 -->
      <a href="XK140.html" class="relative overflow-hidden rounded-md group">
        <img src="./media/XK140.svg" alt="XK140" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
          <h3 class="absolute top-6 left-1/2 -translate-x-1/2 text-3xl font-bold tracking-[0.2em] uppercase text-center cinzel-font">XK140</h3>
          <div class="flex items-center justify-between">
            <p class="text-sm josefin-font text-gray-300">Space, comfort, and versatility in this family-friendly MPV.</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor"
                 class="w-6 h-6 text-gray-200 group-hover:translate-x-1 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.25 8.25L21 12l-3.75 3.75M21 12H3" />
            </svg>
          </div>
        </div>
      </a>

      <!-- Card 4 -->
      <a href="XK150.html" class="relative overflow-hidden rounded-md group">
        <img src="./media/XK150.svg" alt="XK150" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
          <h3 class="absolute top-6 left-1/2 -translate-x-1/2 text-3xl font-bold tracking-[0.2em] uppercase text-center cinzel-font">XK150</h3>
          <div class="flex items-center justify-between">
            <p class="text-sm josefin-font text-gray-300">Conquers tough roads and heavy loads effortlessly</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor"
                 class="w-6 h-6 text-gray-200 group-hover:translate-x-1 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.25 8.25L21 12l-3.75 3.75M21 12H3" />
            </svg>
          </div>
        </div>
      </a>
    </div>
  </section>

  <!-- ================= FOOTER SECTION ================= -->
  <footer class="bg-[#0C0C0C] text-white px-10 md:px-24 py-16 fade-section">
    <div class="flex flex-col md:flex-row gap-12">
      <!-- Locations & Contacts -->
      <div>
        <h3 class="text-lg font-semibold mb-2 josefin-font">Locations & Contacts</h3>
        <p class="text-gray-400 text-sm mb-4 josefin-font">Do you have any questions?</p>
        <a href="Dealers.html#section-contact"
           class="border border-gray-400 text-sm px-12 py-3 rounded-md hover:bg-white hover:text-black transition josefin-font">
          Get in touch
        </a>
      </div>

      <!-- Social Media -->
      <div>
        <h3 class="text-lg font-semibold mb-2 josefin-font">Social Media</h3>
        <p class="text-gray-400 text-sm mb-6 josefin-font">Visit us via social media.</p>
        <div class="flex items-center gap-8 text-xl">
          <a href="#" class="hover:text-gray-400"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="hover:text-gray-400"><i class="fab fa-instagram"></i></a>
          <a href="#" class="hover:text-gray-400"><i class="fab fa-youtube"></i></a>
          <a href="#" class="hover:text-gray-400"><i class="fab fa-x-twitter"></i></a>
          <a href="#" class="hover:text-gray-400"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>

    <!-- Divider -->
    <div class="border-t border-gray-700 my-10"></div>

    <!-- Company Links -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-4 text-sm text-gray-400">
      <a href="Modern-Vehicles.html" class="hover:text-white transition josefin-font">Modern Type</a>
      <a href="Classical-Vehicles.html" class="hover:text-white transition josefin-font">Classical Type</a>
      <a href="Dealers.html" class="hover:text-white transition josefin-font">Find Our Dealers</a>
      <a href="Services.html" class="hover:text-white transition josefin-font">Services</a>
    </div>
  </footer>

  <!-- SCRIPTS -->
  <script src="./javascript/sidebar.js"></script>
  <script src="./javascript/models.js"></script>
  <script src="./javascript/section-fade.js"></script>
  <script src="./javascript/dealers.js"></script>
</body>
</html>
