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


     


        <link rel="stylesheet" href="{{asset('/css/backend.css')}}">
      
    
 
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
             <a href="/backend" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img class="menuIcon" src="{{asset('img/menu/backend.png')}}" alt="">
                <span class="flex-1 ms-3 whitespace-nowrap">Backend</span>
             </a>
          </li>
          <li>
             <a href="/fullstack" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img class="menuIcon" src="{{asset('img/menu/fullstack.png')}}" alt="">
                <span class="flex-1 ms-3 whitespace-nowrap">FullStack</span>
             </a>
          </li>
          <li>
             <a href="/datascience" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img class="menuIcon" src="{{asset('img/menu/datascience.png')}}" alt="">
                <span class="flex-1 ms-3 whitespace-nowrap">Data Science</span>
             </a>
          </li>
          <li>
             <a href="/deletedev" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img class="menuIcon" src="{{asset('img/menu/delete.png')}}" alt="">
                <span class="flex-1 ms-3 whitespace-nowrap">Delete Dev</span>
             </a>
          </li>
       </ul>
    </div>
 </aside>

 <script>

let defaultTransform = 0;
function goNext() {
    defaultTransform = defaultTransform - 398;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);


 </script>

 <div class="containerContent p-4 sm:ml-64">
    
    <section class="w-full containerDevs w-full md:w-1/2 border border-red-500 p-6 bg-gray-900">

        <h2 class="text-2xl pb-3 font-semibold">
       Back-end <img style="display: inline"  class="menuIconTitle" src="{{asset('img/menu/backend.png')}}" alt="">
        </h2>

  <!-- Component: Carousel with controls inside -->
<div class="relative w-full glide-01">
    <!-- Slides -->
    <div class="overflow-hidden" data-glide-el="track">
        <ul class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
            
      
            @foreach($devsFullstack as $key => $dataFullstack)
   
            <li style="position: relative;"><img src="{{asset('/uploads/' . $dataFullstack->devPhoto)}}" class="imgStyle w-full max-w-full max-h-full m-auto" />
              
                    <h3 class="devName">{{$dataFullstack->devName . " " . $dataFullstack->devLastName}}</h3>

               
               
            
            
            </li>
        
            @endforeach
 
            {{-- <li style="position:relative"><img class="imgStyle" src="{{asset('/uploads/' . $devs[1]->devPhoto)}}"  class="w-full max-w-full max-h-full m-auto" />
            
                <h3 class="devName">{{$devs[0]->devName . " " . $devs[0]->devLastName}}</h3>

            </li>
            <li><img src="https://Tailwindmix.b-cdn.net/carousel/carousel-image-03.jpg" class="w-full max-w-full max-h-full m-auto" /></li>
            <li><img src="https://Tailwindmix.b-cdn.net/carousel/carousel-image-04.jpg" class="w-full max-w-full max-h-full m-auto" /></li>
            <li><img src="https://Tailwindmix.b-cdn.net/carousel/carousel-image-05.jpg" class="w-full max-w-full max-h-full m-auto" /></li> --}}
        </ul>
    </div>
    <!-- Controls -->
    <div class="absolute left-0 flex items-center justify-between w-full h-0 px-4 top-1/2 " data-glide-el="controls">
        <button class="buttonSlideStyle inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir="<" aria-label="prev slide">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <title>prev slide</title>
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
            </svg>
        </button>
        <button class="buttonSlideStyle inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir=">" aria-label="next slide">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <title>next slide</title>
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </button>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

<script>
    var glide01 = new Glide('.glide-01', {
        type: 'carousel',
        focusAt: 'center',
        perView: 3,
        autoplay: 3000,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1024: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });

    glide01.mount();
</script>
  
    
    
    </section>


 </div>

 </html>
 
    </body>