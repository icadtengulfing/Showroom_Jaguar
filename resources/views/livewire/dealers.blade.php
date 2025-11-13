<div>
  <!-- Success Message (pindahkan ke luar modal) -->
  @if(session()->has('message'))
      <div class="p-4 mb-4 mx-5 text-sm text-green-800 bg-green-100 rounded-lg dark:bg-green-900 dark:text-green-200">
          {{ session('message') }}
      </div>
  @endif

  <div class="flex items-center p-5 gap-3">
      <!-- Search Form -->
      <form wire:submit.prevent class="flex items-center gap-3 w-auto">   
          <div class="relative">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  </svg>
              </div>
              <input type="search" id="default-search" 
                  wire:model.live="keyword"
                  class="block w-[28rem] p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-[var(--bg-primary)] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                  placeholder="Search Dealers..." wire:model="keyword"
              />
          </div>
      </form>

      <!-- Create Dealer Button -->
      <div class="flex justify-center m-5">
          <button wire:click="resetForm" data-modal-target="createModal" data-modal-toggle="createModal" 
              class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" 
              type="button">
              Create Dealer
          </button>
      </div>
  </div>

  <!-- CREATE MODAL -->
  <div id="createModal" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
      <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
          <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
              <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Create Dealer</h3>
                  <button type="button" wire:click="resetForm" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createModal">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>

              <form wire:submit.prevent="store">
                  <div class="grid gap-4 mb-4 sm:grid-cols-2">
                      <div>
                          <label for="create_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dealer Name</label>
                          <input type="text" wire:model="name" id="create_name"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="Dealer name">
                          @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div>
                          <label for="create_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                          <input type="email" wire:model="email" id="create_email"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="example@email.com">
                          @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div class="sm:col-span-2">
                          <label for="create_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                          <input type="text" wire:model="phone" id="create_phone"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="+62...">
                          @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div class="sm:col-span-2">
                          <label for="create_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                          <textarea wire:model="address" id="create_address" rows="3"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="Full address"></textarea>
                          @error('address') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div>
                          <label for="create_country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                          <input type="text" wire:model="country" id="create_country"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="Country">
                          @error('country') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                  </div>
                  <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                      <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                      </svg>
                      Add new dealer
                  </button>
              </form>
          </div>
      </div>
  </div>

  <!-- Edit Modal -->
  <div id="editModal" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
      <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
          <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
              <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Dealer</h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editModal">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>

              <form wire:submit.prevent="update">
                  <div class="grid gap-4 mb-4 sm:grid-cols-2">
                      <div>
                          <label for="edit_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dealer Name</label>
                          <input type="text" wire:model="name" id="edit_name"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="Dealer name">
                          @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div>
                          <label for="edit_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                          <input type="email" wire:model="email" id="edit_email"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="example@email.com">
                          @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div class="sm:col-span-2">
                          <label for="edit_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                          <input type="text" wire:model="phone" id="edit_phone"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="+62...">
                          @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div class="sm:col-span-2">
                          <label for="edit_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                          <textarea wire:model="address" id="edit_address" rows="3"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="Full address"></textarea>
                          @error('address') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div>
                          <label for="edit_country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                          <input type="text" wire:model="country" id="edit_country"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="Country">
                          @error('country') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                  </div>
                  <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                      <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                      </svg>
                      Update Dealer
                  </button>
              </form>
          </div>
      </div>
  </div>

  <!-- Delete Confirmation Modal -->
  <div id="deleteModal" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
      <div class="relative p-4 w-full max-w-md h-full md:h-auto">
          <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
              <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
              
              <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
              </svg>
              
              <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this dealer?</p>
              
              <div class="flex justify-center items-center space-x-4">
                  <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                      No, cancel
                  </button>
                  <button wire:click="delete" type="button" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                      Yes, I'm sure
                  </button>
              </div>
          </div>
      </div>
  </div>

  <!-- Dealers Table -->
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg ms-5 me-5">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3">Name</th>
                  <th scope="col" class="px-6 py-3">Email</th>
                  <th scope="col" class="px-6 py-3">Phone</th>
                  <th scope="col" class="px-6 py-3">Address</th>
                  <th scope="col" class="px-6 py-3">Country</th>
                  <th scope="col" class="px-6 py-3"><span class="sr-only">Edit</span></th>
                  <th scope="col" class="px-6 py-3"><span class="sr-only">Delete</span></th>
              </tr>
          </thead>
          <tbody>
              @forelse($dealers as $dealer)
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          {{ $dealer->name }}
                      </th>
                      <td class="px-6 py-4">{{ $dealer->email }}</td>
                      <td class="px-6 py-4">{{ $dealer->phone }}</td>
                      <td class="px-6 py-4">{{ Str::limit($dealer->address, 30) }}</td>
                      <td class="px-6 py-4">{{ $dealer->country }}</td>
                      <td class="px-6 py-4 text-right">
                          <button wire:click="edit({{ $dealer->id }})" data-modal-target="editModal" data-modal-toggle="editModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                              Edit
                          </button>
                      </td>
                      <td class="px-6 py-4 text-right">
                          <button wire:click="delete_confirm({{ $dealer->id }})" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                              Delete
                          </button>
                      </td>
                  </tr>
              @empty
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <td colspan="7" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                          No dealers found
                      </td>
                  </tr>
              @endforelse
          </tbody>   
      </table>
      
      <!-- Pagination -->
      <nav class="mt-5" aria-label="Page navigation example">
          <ul class="inline-flex -space-x-px text-sm">
              {{-- Previous Button --}}
              <li>
                  @if ($dealers->onFirstPage())
                      <span class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                          Previous
                      </span>
                  @else
                      <button wire:click="previousPage" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                          Previous
                      </button>
                  @endif
              </li>
      
              {{-- Page Numbers --}}
              @foreach ($dealers->getUrlRange(1, $dealers->lastPage()) as $page => $url)
                  <li>
                      @if ($page == $dealers->currentPage())
                          <span aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                              {{ $page }}
                          </span>
                      @else
                          <button wire:click="gotoPage({{ $page }})" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                              {{ $page }}
                          </button>
                      @endif
                  </li>
              @endforeach
      
              {{-- Next Button --}}
              <li>
                  @if ($dealers->hasMorePages())
                      <button wire:click="nextPage" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                          Next
                      </button>
                  @else
                      <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                          Next
                      </span>
                  @endif
              </li>
          </ul>
      </nav>
  </div>

  @script
  <script>
      // Listen untuk event close-modal dari Livewire
      $wire.on('close-modal', () => {
          // Tutup modal menggunakan Flowbite
          const modal = FlowbiteInstances.getInstance('Modal', 'createModal');
          if (modal) {
              modal.hide();
          }
          
          // Hapus hash dari URL
          if (window.location.hash) {
              history.replaceState(null, null, ' ');
          }
      });
      // Open Edit Modal
      $wire.on('open-edit-modal', () => {
          const modal = FlowbiteInstances.getInstance('Modal', 'editModal');
          if (modal) {
              modal.show();
          }
      });
      // Close Edit Modal
      $wire.on('close-edit-modal', () => {
          const modal = FlowbiteInstances.getInstance('Modal', 'editModal');
          if (modal) {
              modal.hide();
          }
          if (window.location.hash) {
              history.replaceState(null, null, ' ');
          }
      });
      $wire.on('open-delete-modal', () => {
          const modal = FlowbiteInstances.getInstance('Modal', 'deleteModal');
          if (modal) {
              modal.show();
          }
      });
      // Close Edit Modal
      $wire.on('close-delete-modal', () => {
          const modal = FlowbiteInstances.getInstance('Modal', 'deleteModal');
          if (modal) {
              modal.hide();
          }
          if (window.location.hash) {
              history.replaceState(null, null, ' ');
          }
      });
  </script>
  @endscript
</div>