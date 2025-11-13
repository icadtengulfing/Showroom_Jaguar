<!-- ================= SIDEBAR ================= -->
<aside id="sidebar"
class="fixed z-40 flex w-[65vw] h-screen
       -translate-x-full bg-gray-900 text-gray-300
       transition-transform duration-500 ease-in-out
       shadow-[8px_0_20px_rgba(0,0,0,0.6)]
       backdrop-blur-md rounded-r-[5px] overflow-hidden">

<!-- Left Panel -->
<div class="w-[40%] flex flex-col justify-between p-8 bg-[var(--txt-primary)] rounded-l-xl">
<div> <!-- WRAPPER ATAS -->
  <button id="close-btn" class="mb-6 text-sm hover:opacity-70 self-start">✕</button>

  <nav class="space-y-8 text-sm tracking-widest font-light">
    <div>
      <p class="text-white mb-3 text-xs font-semibold">EXPLORE OUR VEHICLES</p>
      <ul class="space-y-2">
        <li><a href="{{ ('/modern') }}" class="menu-item hover:text-white transition text-base">Modern Type</a></li>
        <li><a href="{{ ('/classical') }}" class="menu-item hover:text-white transition text-base">Classical Type</a></li>
      </ul>
    </div>

    <div>
      <p class="text-white mb-3 text-xs font-semibold">FIND OUR DEALERS</p>
      <a href="{{ ('/dealers') }}" class="menu-item hover:text-white transition text-base">Locate Dealers</a>
    </div>

    <div>
      <p class="text-white mb-3 text-xs font-semibold">EXPERIENCE OUR SERVICES</p>
      <a href="{{ ('/services') }}" class="menu-item hover:text-white transition text-base">Customer Service</a>
    </div>

    <div>
      <p class="text-white mb-3 text-xs font-semibold">YOUR ACCOUNT</p>
      <a href="{{ ('/account') }}" class="menu-item hover:text-white transition text-base">Profile & Settings</a>
    </div>
  </nav>
</div>

<div class="flex justify-between items-center text-white text-lg px-4"> <!-- SOCIAL ICONS -->
  <i class="fa-brands fa-instagram hover:text-gray-400 cursor-pointer transition"></i>
  <i class="fa-brands fa-facebook-f hover:text-gray-400 cursor-pointer transition"></i>
  <i class="fa-brands fa-x hover:text-gray-400 cursor-pointer transition"></i>
  <i class="fa-brands fa-youtube hover:text-gray-400 cursor-pointer transition"></i>
  <i class="fa-brands fa-linkedin-in hover:text-gray-400 cursor-pointer transition"></i>
</div>
</div>

  <!-- Right Panel -->
  <div class="w-[90%] flex flex-col gap-4 p-10 bg-[var(--txt-primary)] overflow-y-auto items-center justify-start">
    <!-- Modern Type -->
    <div
      class="relative w-full bg-black rounded-[5px] flex items-center justify-center overflow-hidden cursor-pointer"
      onclick="window.location.href='{{ ('/modern') }}'">
      <img src="{{ asset('media/Modern-Type-model-Sidebar.svg')  }}" alt="Modern Type"
           class="w-full h-auto object-cover" style="max-height: 420px;" />
      <div class="absolute bottom-3 left-4 cinzel-font text-white text-base font-light tracking-wider">
        MODERN TYPE
      </div>
    </div>

    <!-- Classical Type -->
    <div
      class="relative w-full bg-black rounded-[5px] flex items-center justify-center overflow-hidden cursor-pointer"
      onclick="window.location.href='{{ ('/classical') }}'">
      <img src="{{ asset('media/Classical-Type-model-sidebar.svg')  }}" alt="Classical Type"
           class="w-full h-auto object-cover" style="max-height: 420px;" />
      <div class="absolute bottom-3 left-4 cinzel-font text-white text-base font-light tracking-wider">
        CLASSICAL TYPE
      </div>
    </div>
  </div>
</aside>