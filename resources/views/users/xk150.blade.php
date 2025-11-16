<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Official JAGUAR Website - E-TYPE</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Josefin+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400&display=swap" rel="stylesheet" />
  
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

<body class="relative bg-black text-white font-[Josefin Sans] overflow-x-hidden">

  <!-- ================= HEADER ================= -->
  <header class="absolute top-0 left-0 z-30 flex w-full items-center justify-between px-8 py-6">
    <button id="menu-btn" class="text-lg tracking-wide hover:opacity-80 transition">☰</button>

    <a href=""
       class="cinzel-font text-xl font-semibold tracking-[0.4em] absolute left-1/2 -translate-x-1/2">
      JAGUAR
    </a>

    
  </header>
  
  <!-- Overlay -->
  <div id="overlay"
       class="fixed inset-0 hidden z-40 bg-black/40 backdrop-blur-sm transition-all duration-500">
  </div>

  <!-- ================= SIDEBAR ================= -->
  @include('components.sidebar-user')

    <!-- ================= HERO SECTION ================= -->
  <!-- ================= HERO SECTION ================= -->
  <section class="relative flex items-center justify-center w-screen h-[100dvh] bg-black overflow-hidden">
    <video autoplay muted loop playsinline class="absolute top-1/2 left-1/2 min-w-full min-h-full -translate-x-1/2 -translate-y-1/2 scale-[1.1] object-cover transition-transform duration-700 ease-out">
      <source src="./media/Jaguar XK150 Roadster - CforCar Biarritz.mp4" type="video/mp4" />
    </video>
    <div class="absolute inset-0 bg-black/30 z-10"></div>
    </section>

  <!-- ================= MODEL SHOWCASE ================= -->
   <section id="model-showcase"
   class="relative flex flex-col items-center justify-center w-screen min-h-screen overflow-hidden bg-cover bg-center py-20"
   style="background-image: url('./media/overlay.svg')">

<!-- Tabs Navbar -->
<div id="tabs-navbar"
 class="fixed top-0 left-0 w-full z-50 flex justify-center py-4 opacity-0 pointer-events-none transition-opacity duration-500">
<div class="flex items-center space-x-10 bg-white text-black border border-white rounded-md px-4 py-4 uppercase exo-font">
<a href="#model-showcase" class="text-xs hover:text-gray-600 transition">Models</a>
<a href="#section-specs" class="text-xs hover:text-gray-600 transition">Specifications</a>
<a href="#section-exterior" class="text-xs hover:text-gray-600 transition">Exterior</a>
<a href="#section-interior" class="text-xs hover:text-gray-600 transition">Interior</a>
</div>
</div>

<!-- Model 360° -->
<div class="fade-section w-full flex flex-col items-center">
<h2 class="text-3xl font-semibold uppercase tracking-[0.1em] text-white josefin-font text-center mb-8">
MODEL 360°
</h2>
<div class="cloudimage-360"
   data-folder="/images/xk120/"
   data-filename-x="{index}.png"
   data-amount-x="30"
   data-bottom-circle="false">
</div>
</div>
</section>

  <!-- ================= SPECIFICATION SECTION ================= -->
  <section id="section-specs"
           class="mt-10 fade-section relative flex flex-col justify-center items-center w-screen min-h-screen bg-black overflow-hidden py-24">
    <div class="relative z-10 flex flex-col w-full max-w-5xl border border-gray-700">

  <div class="absolute -top-12 z-20 bg-black px-3">
  <h2 class="text-3xl font-semibold uppercase tracking-[0.1em] text-white josefin-font">
    SPECIFICATIONS
  </h2>
</div>

<div class="mt-2"></div>
<div class="relative flex justify-center items-center h-40 border-b border-gray-700">
  <h4 class="absolute top-2 left-5 text-[0.6rem] text-gray-400 tracking-wider exo-font">Top Speed</h4>
  <h1 class="text-8xl font-light text-white josefin-font">
    <span>240</span><span class="text-4xl ml-2">mph</span>
  </h1>
</div>

<div class="relative flex justify-center items-center h-40 border-b border-gray-700">
  <h4 class="absolute top-2 left-5 text-[0.6rem] text-gray-400 tracking-wider exo-font">Engine</h4>
  <h1 class="text-8xl font-light text-white josefin-font">
    <span>3.8/4.2</span><span class="text-4xl ml-2">L</span>
  </h1>
</div>

<div class="relative flex justify-center items-center h-40 border-b border-gray-700">
  <h4 class="absolute top-2 left-5 text-[0.6rem] text-gray-400 tracking-wider exo-font">Power Output</h4>
  <h1 class="text-8xl font-light text-white josefin-font">
    <span>265</span><span class="text-4xl ml-2">hp @5400rpm</span>
  </h1>
</div>

<div class="relative flex justify-center items-center h-40">
  <h4 class="absolute top-2 left-5 text-[0.6rem] text-gray-400 tracking-wider exo-font">Acceleration</h4>
  <h1 class="text-8xl font-light text-white josefin-font">
    <span>0-100</span><span class="text-4xl ml-2">km/h</span>
  </h1>
</div>
</div>
</section>
  <!-- ================= EXTERIOR SECTION ================= -->
  <section id="section-exterior"
    class="fade-section relative flex flex-col items-center justify-center w-screen min-h-screen bg-black overflow-hidden">
    <h2 class="text-xl josefin-font uppercase tracking-[0.3em] text-gray-200 mb-6">Exterior</h2>

    <div class="relative w-full max-w-6xl flex items-center justify-center">
      <img src="./media/E-TYPE EXTERIOR 1.svg" alt="Front View"
           class="relative z-10 w-[550px] rounded-sm object-cover" />
      <img src="./media/E-TYPE EXTERIOR 2.svg" alt="Headlight"
           class="absolute z-20 w-[420px] right-[90px] bottom-[-60px] rounded-sm object-cover" />
      <img src="./media/E-TYPE EXTERIOR 3.svg" alt="Tail Light"
           class="absolute z-30 w-[420px] left-[100px] bottom-[-120px] rounded-sm object-cover" />
    </div>
  </section>

  <!-- ================= INTERIOR SECTION ================= -->
  <section id="section-interior"
    class="fade-section relative flex flex-col items-center justify-center w-screen min-h-screen bg-black overflow-hidden mb-30">
    <h2 class="text-xl josefin-font uppercase tracking-[0.3em] text-gray-200 mb-6">Interior</h2>

    <div class="relative w-full max-w-6xl flex items-center justify-center">
      <img src="./media/E-TYPE INTERIOR 1.svg" alt="Front View"
           class="relative z-10 w-[550px] rounded-sm object-cover" />
      <img src="./media/E-TYPE INTERIOR 2.svg" alt="Headlight"
           class="absolute z-20 w-[420px] right-[90px] bottom-[-60px] rounded-sm object-cover" />
      <img src="./media/E-TYPE INTERIOR 3.svg" alt="Tail Light"
           class="absolute z-30 w-[420px] left-[100px] bottom-[-120px] rounded-sm object-cover" />
    </div>
  </section>
  <!-- ================= FOOTER ================= -->
<footer class="bg-[#0C0C0C] text-white px-10 md:px-24 py-16 fade-section">
  <div class="flex flex-col md:flex-row gap-12">
    <div>
      <h3 class="text-lg font-semibold mb-2 josefin-font">Locations & Contacts</h3>
      <p class="text-gray-400 text-sm mb-4 josefin-font">Do you have any questions?</p>
      <a href="Dealers.html#section-contact" class="border border-gray-400 text-sm px-12 py-3 rounded-md hover:bg-white hover:text-black transition josefin-font">
        Get in touch
      </a>
    </div>

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
<script src="{{ asset('javascript/sidebar.js') }}"></script>
<script src="{{ asset('javascript/models.js') }}"></script>
<script src="{{ asset('javascript/section-fade.js') }}"></script>
<script src="{{ asset('javascript/dealers.js') }}"></script>
<script src="{{ asset('javascript/fade-scroll.js') }}"></script>
<script src="https://scaleflex.cloudimg.io/v7/plugins/js-cloudimage-360-view/latest/js-cloudimage-360-view.min.js?func=proxy"></script>
</body>
</html>