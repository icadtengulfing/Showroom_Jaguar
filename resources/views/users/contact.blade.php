<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Official JAGUAR Website - Contact</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Josefin+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Icons & Tailwind CSS -->
  @viteReactRefresh
  @vite(['resources/css/app.css','resources/css/input.css', 'resources/js/app.jsx'])
  <style>
    * {
      scrollbar-width: none;
      -ms-overflow-style: none;
    }

    *::-webkit-scrollbar {
      display: none;
    }

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
  <!-- ================= CONTACT FORM SECTION ================= -->
  <section id="section-contact" class="relative flex flex-col items-center justify-center w-screen min-h-screen bg-black pt-32 pb-24 px-6">
    
    <!-- Section Title -->
    <div class="text-center mb-12">
      <h2 class="mt-5 mb-2 text-4xl uppercase font-semibold tracking-[0.3em]">Contact Our Dealer</h2>
      <p class="josefin-font text-gray-400 max-w-2xl mx-auto text-base">
        Fill out the form below and our team will get back to you as soon as possible.
      </p>
    </div>

    <!-- Contact Form -->
    <div class="max-w-4xl w-full bg-[#0C0C0C]/80 border border-gray-700 rounded-md p-10 shadow-lg">
      <form action="{{ route('contact.submit', $dealer->id) }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
        @csrf
        
        <!-- First Name -->
        <div>
          <label class="block mb-2 text-gray-400 josefin-font">First Name</label>
          <input type="text" name="fullname" required
                 class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                        focus:outline-none focus:border-gray-400 josefin-font" />
        </div>

        <!-- Email -->
        <div>
          <label class="block mb-2 text-gray-400 josefin-font">Email</label>
          <input type="email" name="email" required
                 class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                        focus:outline-none focus:border-gray-400 josefin-font" />
        </div>

        <!-- Phone -->
        <div>
          <label class="block mb-2 text-gray-400 josefin-font">Phone</label>
          <input type="text" name="phone" required
                 class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                        focus:outline-none focus:border-gray-400 josefin-font" />
        </div>

        <!-- Country -->
        <div>
          <label class="block mb-2 text-gray-400 josefin-font">Country</label>
          <input type="text" name="country" required
                 class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                        focus:outline-none focus:border-gray-400 josefin-font" />
        </div>

        <!-- Model -->
        <div>
          <label class="block mb-2 text-gray-400 josefin-font">Model</label>
          <select id="countries" class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300">
            <option selected>Choose a country</option>
            <option value="F-Pace">F-Pace</option>
            <option value="E-Pace">E-Pace</option>
            <option value="E-Type">E-Type</option>
            <option value="F-Type">F-Type</option>
            <option value="Type00">Type00</option>
            <option value="XK120">XK120</option>
            <option value="XK140">XK140</option>
            <option value="XK150">XK150</option>
            <option value="I-Pace">I-Pace</option>
          </select>
        </div>
        <!-- Message -->
        <div class="md:col-span-2">
          <label class="block mb-2 text-gray-400 josefin-font">Message</label>
          <textarea name="message" rows="4" required
                    class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                           focus:outline-none focus:border-gray-400 josefin-font"></textarea>
        </div>

        <!-- Button -->
        <div class="md:col-span-2 flex justify-center items-center mt-6">
          <button type="submit"
                  class="px-8 py-3 border border-gray-400 rounded-full hover:bg-white hover:text-black
                         transition-all duration-300 josefin-font">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- ================= FOOTER SECTION ================= -->
  <footer class="bg-[#0C0C0C] text-white px-10 md:px-24 py-16">
    <div class="flex flex-col md:flex-row gap-12">
      <!-- Locations & Contacts -->
      <div>
        <h3 class="text-lg font-semibold mb-2 josefin-font">Locations & Contacts</h3>
        <p class="text-gray-400 text-sm mb-4 josefin-font">Do you have any questions?</p>
        <a href="Dealers.html#section-contact"
           class="border border-gray-400 text-sm px-12 py-3 rounded-md hover:bg-white hover:text-black transition josefin-font inline-block">
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
  <script src="{{ asset('javascript/sidebar.js') }}"></script>
  <script src="{{ asset('javascript/models.js')  }}"></script>
  <script src="{{ asset('javascript/section-fade.js') }}"></script>
  <script src="{{ asset('javascript/dealers.js') }}"></script>
  <script src="{{ asset('javascript/fade-scroll.js') }}"></script> 
</body>
</html>