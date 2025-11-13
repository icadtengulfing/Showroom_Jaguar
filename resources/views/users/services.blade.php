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
  
  <section class="relative flex items-center justify-center w-screen h-[100dvh] bg-black overflow-hidden">
    <video autoplay muted loop playsinline
           class="absolute top-1/2 left-1/2 min-w-full min-h-full -translate-x-1/2 -translate-y-1/2 scale-[1.1] object-cover transition-transform duration-700 ease-out">
      <source src="./media/Jaguar TCS Racing   Gen3 Is HERE!.mp4" type="video/mp4" />
    </video>
    <div class="absolute inset-0 bg-black/30 z-10"></div>
    
  </section>
  <!-- ================= SERVICES SECTION ================= -->
  <section id="section-dealers"
  class="relative flex flex-col items-center justify-center w-screen min-h-screen overflow-hidden bg-black py-24 px-6 fade-section">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-6xl w-full text-right mt-[110px] mb-20">

      <!-- Left Column -->
      <div class="flex flex-col space-y-10">
        <div>
          <h2 class="text-3xl font-semibold mb-2 josefin-font">General Repair</h2>
          <p class="text-sm text-gray-400">
            Comprehensive repair services for engine, brakes, transmission, electrical, and air conditioning systems.
          </p>
        </div>

        <div class="mr-10">
          <h2 class="text-3xl font-semibold mb-2 josefin-font">Periodic Maintenance</h2>
          <p class="text-sm text-gray-400">
            Keep your Jaguar in top condition with regular oil changes, inspections, and part replacements according to the official schedule.
          </p>
        </div>

        <div>
          <h2 class="text-3xl font-semibold mb-2 josefin-font">Jaguar Express Service</h2>
          <p class="text-sm text-gray-400">
            Quick and efficient maintenance — get your car serviced in under an hour for light jobs like oil and filter changes.
          </p>
        </div>
      </div>

      <!-- Center Image -->
      <div class="flex justify-center items-center">
        <img src="./media/Car-Engine-Blueprint.png" alt="Engine" class="w-64 md:w-72 lg:w-80" />
      </div>

      <!-- Right Column -->
      <div class="flex flex-col space-y-10 text-left">
        <div>
          <h2 class="text-3xl font-semibold mb-2 josefin-font">Body & Paint</h2>
          <p class="text-sm text-gray-400">
            Professional body repair and painting with genuine materials, including insurance claim handling.
          </p>
        </div>

        <div class="ml-10 ">
          <h2 class="text-3xl font-semibold mb-2 josefin-font">Genuine Parts</h2>
          <p class="text-sm text-gray-400">
            We only use original Jaguar parts and offer a wide selection of official accessories to personalize your car.
          </p>
        </div>

        <div>
          <h2 class="text-3xl font-semibold mb-2 josefin-font">Emergency Assistance</h2>
          <p class="text-sm text-gray-400">
            24-hour towing, jump-start, or flat-tire help — anytime, anywhere.
          </p>
        </div>
      </div>
    </div>  

    
  <!-- ================= DEALERS SECTION ================= -->
  @livewire('services')

    <div class="max-w-4xl w-full bg-[#0C0C0C]/80 border border-gray-700 rounded-md p-10 shadow-lg">
      <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">

        <!-- Full Name -->
        <div>
          <label class="block mb-2 text-gray-400 josefin-font">First Name</label>
          <input type="text" name="fullname"
                 class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                        focus:outline-none focus:border-gray-400 josefin-font" />
        </div>

        <!-- Email -->
        <div>
          <label class="block mb-2 text-gray-400 josefin-font">Email</label>
          <input type="email" name="email"
                 class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                        focus:outline-none focus:border-gray-400 josefin-font" />
        </div>

        <!-- Phone -->
        <div>
          <label class="block mb-2 text-gray-400 josefin-font">Phone</label>
          <input type="text" name="phone"
                 class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                        focus:outline-none focus:border-gray-400 josefin-font" />
        </div>

        <!-- Country -->
        <div>
          <label class="block mb-2 text-gray-400 josefin-font">Country</label>
          <input type="text" name="country"
                 class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                        focus:outline-none focus:border-gray-400 josefin-font" />
        </div>

        <!-- Model -->
        <div>
          <label class="block mb-2 text-gray-400 josefin-font">Model</label>
          <input type="text" name="model"
                 class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                        focus:outline-none focus:border-gray-400 josefin-font" />
        </div>

        <!-- Message -->
        <div class="md:col-span-2">
          <label class="block mb-2 text-gray-400 josefin-font">Message</label>
          <textarea name="message" rows="4"
                    class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                           focus:outline-none focus:border-gray-400 josefin-font"></textarea>
        </div>

        <!-- Button -->
        <div class="md:col-span-2 flex justify-center items-center mt-6">
          <button type="submit"
                  class="px-8 py-3 border border-gray-400 rounded-full hover:bg-white hover:text-black
                         transition-all duration-300 josefin-font">
            Send
          </button>
        </div>
      </form>
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
