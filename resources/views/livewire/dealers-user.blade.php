<div>
  <section id="section-dealers"
  class="relative flex flex-col items-center justify-center w-screen min-h-screen overflow-hidden bg-black py-24 px-6">

    <!-- Search Form -->
    <form wire:submit.prevent class="flex items-center gap-3 w-auto mb-8">   
      <div class="relative">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
          </div>  
          <input type="search" id="default-search" 
              wire:model.live="keyword"
              class="block w-[50rem] py-2 ps-10 text-sm text-white border border-gray-800 rounded-md bg-black focus:ring-blue-500 focus:border-blue-500" 
              placeholder="Search for JAGUAR partners..." wire:model="keyword"
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
                <span class="font-semibold text-white">Address:</span> {{ Str::limit($dealer->address, 60) }}
              </p>
              <p class="text-sm italic text-gray-400">
                {{ $dealer->country }}
              </p>
            </div>
            
            <a href="{{ $dealer->maps_link }}" target="_blank" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
  </section>
  @script
  <script>
  </script>
  @endscript
</div>