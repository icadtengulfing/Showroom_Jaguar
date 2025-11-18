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

<body class="relative text-white bg-black">

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
  <section class="relative flex items-center justify-center w-screen h-[100dvh] bg-black overflow-hidden">
    <video autoplay muted loop playsinline
           class="absolute top-1/2 left-1/2 min-w-full min-h-full -translate-x-1/2 -translate-y-1/2
                  scale-[1.1] object-cover transition-transform duration-700 ease-out">
      <source src="./media/Jaguar-TCS-Racing-It's-Time-To-Reimagine-Racing.mp4" type="video/mp4" />
    </video>

    <div class="absolute inset-0 bg-black/30 z-10"></div>
  </section>

  <!-- ================= VEHICLES SECTION ================= -->
  <section class="fade-section flex flex-col w-full min-h-screen bg-black text-left px-8 md:px-16">
    <h2 class="mt-24 mb-16  text-4xl uppercase font-semibold tracking-[0.3em]">
      Explore Our Vehicles
    </h2>

    <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-12 w-full">
      <a href="modern" class="relative overflow-hidden">
        <img src="./media/modern-type2.svg"
             alt="Modern Type"
             class="w-full h-[90vh] object-cover rounded-md" />
      </a>

      <a href="classical" class="relative overflow-hidden">
        <img src="./media/classical-type2.svg"
             alt="Classical Type"
             class="w-full h-[90vh] object-cover rounded-md" />
      </a>
    </div>
  </section>

  <!-- ================= FUTURE VISION SECTION ================= -->
  <section class="fade-section relative flex flex-col justify-center w-full min-h-screen overflow-hidden bg-cover bg-center py-35 px-16"
           style="background-image: url('./media/overlay.svg');">

    <h2 class="text-4xl uppercase font-semibold tracking-[0.3em] mb-6">Future Vision</h2>

    <p class="text-[15px] text-gray-400 mb-25 w-320">
      The Type 00 concept is the bold and iconic signal of a new era for Jaguar.
      Pronounced “Type Zero Zero,” it embodies the brand’s creative philosophy
      of Exuberant Modernism — combining fearless design with future-facing luxury.
    </p>

    <div
    class="cloudimage-360"
    data-folder="/images/type00/"
    data-filename-x="Untitled-{index}.png"
    data-amount-x="31"
    data-bottom-circle="false"
  ></div>

    <a href="TYPE00.html"
       class="mt-5 flex items-center gap-2 text-md tracking-widest josefin-font hover:opacity-80 transition">
      Discover More
      <svg xmlns="http://www.w3.org/2000/svg"
           fill="none" viewBox="0 0 24 24"
           stroke-width="1.5" stroke="currentColor"
           class="w-4 h-4">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M17.25 8.25L21 12l-3.75 3.75M21 12H3" />
      </svg>
    </a>
  </section>

  <!-- ================= FOOTER SECTION ================= -->
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
        <p class="text-gray-400 text-sm mb-6 josefin font">Visit us via social media.</p>
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
