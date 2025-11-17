<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact {{ $dealer->name }} - JAGUAR</title>

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

  <!-- ================= CONTACT SECTION ================= -->
  <section class="relative flex flex-col items-center justify-center w-screen min-h-screen overflow-hidden bg-black py-24 px-6">
    
    <div class="max-w-4xl w-full mt-20">
      <h2 class="text-4xl uppercase font-semibold tracking-[0.3em] text-center mb-8">
        Contact {{ $dealer->name }}
      </h2>

      @if(session('success'))
      <div class="bg-green-600 text-white px-6 py-4 rounded-md mb-6">
        {{ session('success') }}
      </div>
      @endif

      @if($errors->any())
      <div class="bg-red-600 text-white px-6 py-4 rounded-md mb-6">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <div class="bg-[#0C0C0C]/80 border border-gray-700 rounded-md p-10 shadow-lg">
        <form action="{{ route('services.sendContact', $dealer->id) }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
          @csrf

          <!-- Name -->
          <div>
            <label class="block mb-2 text-gray-400 josefin-font">Full Name</label>
            <input type="text" name="fullname" value="{{ old('fullname') }}" required
                   class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                          focus:outline-none focus:border-gray-400 josefin-font" />
          </div>

          <!-- Email -->
          <div>
            <label class="block mb-2 text-gray-400 josefin-font">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required
                   class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                          focus:outline-none focus:border-gray-400 josefin-font" />
          </div>

          <!-- Phone -->
          <div>
            <label class="block mb-2 text-gray-400 josefin-font">Phone</label>
            <input type="text" name="phone" value="{{ old('phone') }}" required
                   class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                          focus:outline-none focus:border-gray-400 josefin-font" />
          </div>

          <!-- Country -->
          <div>
            <label class="block mb-2 text-gray-400 josefin-font">Country</label>
            <input type="text" name="country" value="{{ old('country') }}" required
                   class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                          focus:outline-none focus:border-gray-400 josefin-font" />
          </div>

          <!-- Address -->
          <div class="md:col-span-2">
            <label class="block mb-2 text-gray-400 josefin-font">Address</label>
            <input type="text" name="address" value="{{ old('address') }}"
                   class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                          focus:outline-none focus:border-gray-400 josefin-font" />
          </div>

          <!-- Model -->
          <div>
            <label class="block mb-2 text-gray-400 josefin-font">Model (Optional)</label>
            <input type="text" name="model" value="{{ old('model') }}" placeholder="e.g., F-Pace"
                   class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                          focus:outline-none focus:border-gray-400 josefin-font" />
          </div>

          <!-- Message -->
          <div class="md:col-span-2">
            <label class="block mb-2 text-gray-400 josefin-font">Message</label>
            <textarea name="message" rows="4" required
                      class="w-full bg-black border border-gray-700 rounded-md px-4 py-2 text-gray-300
                             focus:outline-none focus:border-gray-400 josefin-font">{{ old('message') }}</textarea>
          </div>

          <!-- Buttons -->
          <div class="md:col-span-2 flex justify-center items-center gap-4 mt-6">
            <a href="{{ route('services.index') }}"
               class="px-8 py-3 border border-gray-400 rounded-full hover:bg-gray-800 hover:text-white
                      transition-all duration-300 josefin-font">
              Back
            </a>
            <button type="submit"
                    class="px-8 py-3 border border-gray-400 rounded-full hover:bg-white hover:text-black
                           transition-all duration-300 josefin-font">
              Send Message
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- ================= SCRIPTS ================= -->
  <script src="{{ asset('javascript/sidebar.js') }}"></script>
</body>
</html>