<div>
  <section id="section-dealers"
  class="relative flex flex-col items-center justify-center w-screen min-h-screen overflow-hidden bg-black py-24 px-6 ">

  <h2 class="mt-5 mb-2 text-4xl uppercase font-semibold tracking-[0.3em]">
    Find a dealer
  </h2>

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
              placeholder="Search JAGUAR near you..." wire:model="keyword"
          />
      </div>
    </form>

    <!-- Dealers Card Grid - Only show when keyword is not empty -->
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
                <a href="{{ url('/services/' . $dealer->id . '/contact') }}"
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
    @else
    @endif
  </section>

  @script
      <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  @endscript
</div>