<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

        <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
  rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
<script src="https://cdn.tailwindcss.com/3.3.0"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


     


        <link rel="stylesheet" href="{{asset('/css/addDev.css')}}">
     
 
    </head>
    <body class="antialiased">
       
        

        
      <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
         <span class="sr-only">Open sidebar</span>
         <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
         <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
         </svg>
      </button>
      
      <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
         <div class="menuStyle h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
          
               <li>
                  <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img class="menuIcon" src="{{asset('img/menu/add.png')}}" alt="">
                     <span class="flex-1 ms-3 whitespace-nowrap">Add Dev</span>
     
                  </a>
               </li>
               <li>
                  <a href="/frontend" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img class="menuIcon" src="{{asset('img/menu/frontend.png')}}" alt="">
                     <span class="flex-1 ms-3 whitespace-nowrap">Frontend</span>
                    
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img class="menuIcon" src="{{asset('img/menu/backend.png')}}" alt="">
                     <span class="flex-1 ms-3 whitespace-nowrap">Backend</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img class="menuIcon" src="{{asset('img/menu/fullstack.png')}}" alt="">
                     <span class="flex-1 ms-3 whitespace-nowrap">FullStack</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img class="menuIcon" src="{{asset('img/menu/datascience.png')}}" alt="">
                     <span class="flex-1 ms-3 whitespace-nowrap">Data Science</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img class="menuIcon" src="{{asset('img/menu/delete.png')}}" alt="">
                     <span class="flex-1 ms-3 whitespace-nowrap">Delete Dev</span>
                  </a>
               </li>
            </ul>
         </div>
      </aside>
         
         <div class="containerContent p-4 sm:ml-64">

            <form action="/" method="POST" class="w-full md:w-1/2 border border-red-500 p-6 bg-gray-900" enctype="multipart/form-data" >
               @csrf
               <h2 class="text-2xl pb-3 font-semibold">
                Add Dev
               </h2>
               <div>
                   <div class="flex flex-col mb-3">
                   <label for="name">Name</label>
                   <input 
                       type="text" id="name" name="name" 
                       class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500"
                       autocomplete="off" required
                   >
                   </div>

                   <div class="flex flex-col mb-3">
                     <label for="lastName">Last Name</label>
                     <input 
                         type="text" id="lastName" name="lastName" 
                         class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500"
                         autocomplete="off" required
                     >
                     </div>

                     <div class="flex flex-col mb-3">
                        <label for="email">Email</label>
                        <input 
                            type="text" id="email" name="email" 
                            class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500"
                            autocomplete="off" required
                        >
                        </div>

                        <div class="flex flex-col mb-3">
                           <label for="email">Add Dev Photo</label>
                           <input 
                               type="file" id="photo" name="photo" 
                               class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500"
                               autocomplete="off" required
                           >
                           </div>


                     <div class="flex flex-col mb-3">
                        <label for="devExpertise">Dev Expertise</label>
                        <select
                            id="devExpertise" name="devExpertise" required
                            class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500">
                            <option selected>Choose Dev's Expertise</option>
                            <option value="front_end">Front-end</option>
                            <option value="back_end">Back-end</option>
                            <option value="Dev_ops">DevOps</option>
                            <option value="data_science">Data Science</option>
                     </select>
            
               </div>
               <div class="w-full pt-3">
                   <button type="submit" name="submit" class="w-full bg-gray-900 border border-red-500 px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-red-500 hover:text-white text-xl cursor-pointer">
                   Send
                   </button>
               </div>
               </form>
           
         </div>
         


    </body>
</html>
