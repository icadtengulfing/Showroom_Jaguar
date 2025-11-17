<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Official JAGUAR Website - Services</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Josefin+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  @vite(['resources/css/app.css','resources/js/app.jsx'])
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
  <h2 class="mt-5 mb-2 text-4xl uppercase font-semibold tracking-[0.3em]">
    Find a dealer
  </h2>

  <!-- Search Form -->
  <form action="{{ route('services.index') }}" method="GET" class="flex items-center gap-3 w-auto mb-8">   
    <div class="relative">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
      </div>  
      <input type="search" name="keyword" value="{{ $keyword ?? '' }}"
          class="block w-[50rem] py-2 ps-10 text-sm text-white border border-gray-800 rounded-md bg-black focus:ring-blue-500 focus:border-blue-500" 
          placeholder="Search JAGUAR near you..."
      />
    </div>
  </form>

  <!-- Dealers Card Grid -->
  @if($keyword)
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-5 w-full max-w-7xl">
    @forelse($dealers as $dealer)
    <div class="max-w-sm bg-black border border-gray-800 rounded-lg shadow-sm">
      <!-- Image -->
      <a href="#">
        <img class="rounded-t-lg w-full h-48 object-cover" 
            src="{{ $dealer->image ? asset($dealer->image) : asset('images/defaults/default-dealer.jpg') }}" 
            alt="{{ $dealer->name }}" />
      </a>
      
      <!-- Content -->
      <div class="p-5">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
            {{ $dealer->name }}
          </h5>
        </a>
        
        <div class="mb-3 space-y-1">
          <p class="text-sm text-gray-200">
            <span class="font-semibold text-white">Email:</span> {{ $dealer->email }}
          </p>
          <p class="text-sm text-gray-200">
            <span class="font-semibold text-white">Phone:</span> {{ $dealer->phone }}
          </p>
          <p class="text-sm text-gray-200">
            <span class="font-semibold text-white">Address:</span> {{ Str::limit($dealer->address, 60) }}
          </p>
          <p class="text-sm italic text-gray-400">
            {{ $dealer->country }}
          </p>
          <p class="text-sm italic text-gray-200">
            Contact your Dealer for the service below
          </p>
        </div>
        <div class="gaps-2 space-between">
          <a href="{{ $dealer->maps_link }}" target="_blank" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
              <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
            </svg>
          </a>
          <a href="{{ route('services.contact', $dealer->id) }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
            font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center 
            dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-white">
              <path d="M2 3.5A1.5 1.5 0 013.5 2h2.25a1.5 1.5 0 011.48 1.22l.5 2.5a1.5 1.5 0 01-.38 1.28l-1.1 1.1a11.05 11.05 0 005.3 5.3l1.1-1.1a1.5 1.5 0 011.28-.38l2.5.5A1.5 1.5 0 0118 14.25v2.25A1.5 1.5 0 0116.5 18h-1A13.5 13.5 0 012 4.5v-1z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    @empty
      <div class="col-span-full text-center text-gray-500 dark:text-gray-400 py-12">
        No dealers found
      </div>
    @endforelse
  </div>

  <!-- Pagination -->
  <div class="mt-8">
    {{ $dealers->links() }}
  </div>
  @endif

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