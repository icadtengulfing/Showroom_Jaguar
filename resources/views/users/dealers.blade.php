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

  <!-- Icons & Tailwind CSS (keep as you had it) -->
  @viteReactRefresh
  @vite(['resources/css/app.css','resources/js/app.jsx'])

  <style>
    /* Hide scrollbar for all elements */
    * { scrollbar-width: none; -ms-overflow-style: none; }
    *::-webkit-scrollbar { display: none; }
    body, html { scrollbar-width: none; -ms-overflow-style: none; scroll-behavior: smooth; }
    body::-webkit-scrollbar, html::-webkit-scrollbar { display: none; }
    .cloudimage-360 { width: 1000px !important; height: 500px !important; margin: 0 auto !important; overflow: hidden !important; }
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

  <!-- ================= DEALERS SECTION (non-Livewire) ================= -->
  <div>
    <section id="section-dealers" class="relative flex flex-col items-center justify-center w-screen min-h-screen overflow-hidden bg-black py-24 px-6">

      <!-- Search Form -->
      <form action="{{ route('dealers.index') }}" method="get" class="flex items-center gap-3 w-auto mb-8">   
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>  
            <input
              type="search"
              id="default-search"
              name="q"
              value="{{ old('q', $q ?? request('q')) }}"
              class="block w-[50rem] py-2 ps-10 text-sm text-white border border-gray-800 rounded-md bg-black focus:ring-blue-500 focus:border-blue-500" 
              placeholder="Search for JAGUAR partners..."
            />
        </div>
      </form>

      <!-- Dealers Card Grid -->
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
                  <span class="font-semibold text-white">Address:</span> {{ \Illuminate\Support\Str::limit($dealer->address, 60) }}
                </p>
                <p class="text-sm italic text-gray-400">
                  {{ $dealer->country }}
                </p>
              </div>

              <a href="{{ $dealer->maps_link ?? '#' }}" target="_blank" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center">
                Maps
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
              </a>
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

    </section>
  </div>

  <!-- ================= FOOTER ================= -->
  <footer class="bg-[#0C0C0C] text-white px-10 md:px-24 py-16 fade-section">
    <div class="flex flex-col md:flex-row gap-12">
      <div>
        <h3 class="text-lg font-semibold mb-2 josefin-font">Locations & Contacts</h3>
        <p class="text-gray-400 text-sm mb-4 josefin-font">Do you have any questions?</p>
        <a href="#section-contact" class="border border-gray-400 text-sm px-12 py-3 rounded-md hover:bg-white hover:text-black transition josefin-font">
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
  <script src="{{ asset('javascript/dealers.js') }}"></script>
  <script src="{{ asset('javascript/fade-scroll.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
