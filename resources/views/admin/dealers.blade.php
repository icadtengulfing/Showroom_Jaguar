<!doctype html>
<html lang="en" class="dark">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - User Management</title>

    <!-- Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Website jaguar icon -->
    <link rel="shortcut icon" href="{{ asset('images/all-logo/jaguar-icon-title.png')}}" type="image/x-icon" />

    <!-- Load Vite -->
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

        <style>
            /* Container utama dengan flexbox */
        .main-container {
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar tetap di kiri */
        .sidebar-fixed {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: 16rem; /* 64 = 16rem */
            z-index: 40;
            overflow-y: auto;
        }
        
        /* Konten utama diposisikan dengan margin untuk sidebar */
        .main-content {
            margin-left: 16rem;
            flex: 1;
            min-height: 100vh;
        }
        </style>
</head>

<body class="font-[inter] bg-white dark:bg dark:bg-[var(--bg-primary5)]">
    
<!-- Sidebar -->
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="default-sidebar" class="sidebar-fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
   <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Admin Panel</span>
      <ul class="space-y-2 font-medium mt-3">
         <li>
            <a href="dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="dealers" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Dealers</span>
            </a>
         </li>
         <li>
            {{-- <form action="{{ route('logout') }}" method="POST"> --}}
                @csrf
                <button type="submit" class="flex items-center w-full p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap text-left">Log Out</span>
                </button>
            </form>
         </li>
      </ul>
   </div>   
</aside>
<!-- Content -->
<div class="main-content dark:bg dark:bg-[var(--bg-primary1)]">
    
  <!-- Success Message (pindahkan ke luar modal) -->
  @if(session('message'))
      <div class="p-4 mb-4 mx-5 text-sm text-green-800 bg-green-100 rounded-lg dark:bg-green-900 dark:text-green-200">
          {{ session('message') }}
      </div>
  @endif

  <div class="flex items-center p-5 gap-3">
      <!-- Search Form -->
      <form action="{{ route('dealers.index') }}" method="GET" class="flex items-center gap-3 w-auto">   
          <div class="relative">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  </svg>
              </div>
              <input type="search" name="q" value="{{ $q ?? '' }}"
                  class="block w-[28rem] p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-[var(--bg-primary)] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                  placeholder="Search Dealers..."
              />
          </div>
      </form>

      <!-- Create Dealer Button -->
      <div class="flex justify-center m-5">
          <button data-modal-target="createModal" data-modal-toggle="createModal" 
              class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" 
              type="button">
              Create Dealer
          </button>
      </div>
  </div>

  <!-- CREATE MODAL -->
  <div id="createModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
      <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
          <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
              <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Create Dealer</h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createModal">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>

              <form action="{{ route('dealers.store') }}" method="POST">
                  @csrf
                  <div class="grid gap-4 mb-4 sm:grid-cols-2">
                      <div>
                          <label for="create_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dealer Name</label>
                          <input type="text" name="name" id="create_name" value="{{ old('name') }}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="Dealer name">
                          @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div>
                          <label for="create_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                          <input type="email" name="email" id="create_email" value="{{ old('email') }}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="example@email.com">
                          @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div class="sm:col-span-2">
                          <label for="create_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                          <input type="text" name="phone" id="create_phone" value="{{ old('phone') }}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="+62...">
                          @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div class="sm:col-span-2">
                          <label for="create_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                          <textarea name="address" id="create_address" rows="3"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="Full address">{{ old('address') }}</textarea>
                          @error('address') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div>
                          <label for="create_country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                          <input type="text" name="country" id="create_country" value="{{ old('country') }}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="Country">
                          @error('country') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                      </div>
                      <div>
                        <label for="create_maps" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maps</label>
                        <input type="text" name="maps_link" id="create_maps" value="{{ old('maps_link') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Link Maps">
                        @error('maps_link') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
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

  <!-- EDIT MODAL (1 untuk semua dealer) -->
  <div id="editModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
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

           <form id="editForm" method="POST">
               @csrf
               <div class="grid gap-4 mb-4 sm:grid-cols-2">
                   <div>
                       <label for="edit_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dealer Name</label>
                       <input type="text" name="name" id="edit_name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                           placeholder="Dealer name">
                       @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                   </div>
                   <div>
                       <label for="edit_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                       <input type="email" name="email" id="edit_email"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                           placeholder="example@email.com">
                       @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                   </div>
                   <div class="sm:col-span-2">
                       <label for="edit_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                       <input type="text" name="phone" id="edit_phone"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                           placeholder="+62...">
                       @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                   </div>
                   <div class="sm:col-span-2">
                       <label for="edit_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                       <textarea name="address" id="edit_address" rows="3"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                           placeholder="Full address"></textarea>
                       @error('address') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                   </div>
                   <div>
                       <label for="edit_country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                       <input type="text" name="country" id="edit_country"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                           placeholder="Country">
                       @error('country') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                   </div>
                   <div>
                       <label for="edit_maps" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maps Link</label>
                       <input type="text" name="maps_link" id="edit_maps"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                           placeholder="https://maps.google.com/...">
                       @error('maps_link') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
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

<!-- DELETE MODAL -->
<div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
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
               <form id="deleteForm" method="POST">
                   @csrf
                   <button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                       Yes, I'm sure
                   </button>
               </form>
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
                          <button data-edit-id="{{ $dealer->id }}" 
                                  data-edit-name="{{ $dealer->name }}"
                                  data-edit-email="{{ $dealer->email }}"
                                  data-edit-phone="{{ $dealer->phone }}"
                                  data-edit-address="{{ $dealer->address }}"
                                  data-edit-country="{{ $dealer->country }}"
                                  data-modal-target="editModal" 
                                  data-modal-toggle="editModal" 
                                  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                              Edit
                          </button>
                      </td>
                      <td class="px-6 py-4 text-right">
                          <button data-delete-id="{{ $dealer->id }}"
                                  data-modal-target="deleteModal" 
                                  data-modal-toggle="deleteModal" 
                                  class="font-medium text-red-600 dark:text-red-500 hover:underline">
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
      <div class="mt-5 mb-5 flex justify-start">
         {{-- Panggil custom view 'pagination/flowbite-custom' --}}
         {{ $dealers->links('components.pagination-flowbite') }}
     </div>
 </div>

</div>

    <!-- Flowbite Script -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    
    <script>
      // Handle Edit Button Click
      document.querySelectorAll('[data-edit-id]').forEach(btn => {
          btn.addEventListener('click', function() {
              const id = this.dataset.editId;
              const name = this.dataset.editName;
              const email = this.dataset.editEmail;
              const phone = this.dataset.editPhone;
              const address = this.dataset.editAddress;
              const country = this.dataset.editCountry;
              const maps = this.dataset.editMaps;
              
              document.getElementById('edit_name').value = name;
              document.getElementById('edit_email').value = email;
              document.getElementById('edit_phone').value = phone;
              document.getElementById('edit_address').value = address;
              document.getElementById('edit_country').value = country;
              document.getElementById('edit_maps').value = maps || '';
              document.getElementById('editForm').action = `/admin/dealers/${id}/update`;
          });
      });
      
      // Handle Delete Button Click
      document.querySelectorAll('[data-delete-id]').forEach(btn => {
          btn.addEventListener('click', function() {
              const id = this.dataset.deleteId;
              document.getElementById('deleteForm').action = `/admin/dealers/${id}/delete`;
          });
      });
      </script>
    
</body>
</html>