<!DOCTYPE html>
<html lang="en" class="dark">
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
  @vite(['resources/css/app.css','resources/css/input.css', 'resources/js/app.jsx'])
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

    <!-- ================= FOOTER ================= -->
    <footer class="bg-[#0C0C0C] text-white px-10 md:px-24 py-16 fade-section">
      <div class="flex flex-col md:flex-row gap-12">
  
        <!-- Locations & Contacts -->
        <div>
          <h3 class="text-lg font-semibold mb-2 josefin-font">Locations & Contacts</h3>
          <p class="text-gray-400 text-sm mb-4 josefin-font">Do you have any questions?</p>
          <a href="#section-contact"
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
  
      <div class="border-t border-gray-700 my-10"></div>
  
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-4 text-sm text-gray-400">
        <a href="Modern-Vehicles.html" class="hover:text-white transition josefin-font">Modern Type</a>
        <a href="Classical-Vehicles.html" class="hover:text-white transition josefin-font">Classical Type</a>
        <a href="Dealers.html" class="hover:text-white transition josefin-font">Find Our Dealers</a>
        <a href="Services.html" class="hover:text-white transition josefin-font">Services</a>
      </div>
    </footer>
  
    <!-- ================= SCRIPTS ================= -->
    <script src="./javascript/sidebar.js"></script>
    <script src="./javascript/models.js"></script>
    <script src="./javascript/section-fade.js"></script>
    <script src="./javascript/dealers.js"></script>
    <script src="./javascript/fade-scroll.js"></script>
  </body>
  </html>