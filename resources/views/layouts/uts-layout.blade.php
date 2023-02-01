
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'ProjectUASFirmansyah') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <!-- Header Start -->
   <header class=" w-full h-[559px] bg-slate-600 bg-opacity-30">
      <img src="img/bg.png" alt="" class="absolute -z-10 w-full h-[559px] object-cover object-center">
      <div class=" px-2 py-3  md:px-10 sm:px-5 md:py-6 md:flex flex justify-between lg:px-20">
        <h1 class="font-bold md:text-2xl sm:text-base"> <span class="text-[#8992FA]">Naik</span><span class="text-white">.Kapal</span></h1>
        <nav>
          <ul class="gap-8 xl:ml-44 md:flex md:items-center z-[0] md:z-auto md:static absolute bg-gray-500 md:bg-transparent w-full h-[80%] left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="text-white my-6 md:my-0 "><a href="">Home</a></li>
            <li class="text-[#F4F4F4] my-6 md:my-0"><a href="" class="text-slate-300 hover:text-white">Destination</a></li>
            <li class="text-[#F4F4F4] my-6 md:my-0"><a href="" class="text-slate-300 hover:text-white">Choose Class</a></li>
            <li class="text-[#F4F4F4] my-6 md:my-0"><a href="" class="text-slate-300 hover:text-white">Manage</a></li>
            <li class="text-[#F4F4F4] my-6 md:my-0"><a href="" class="text-slate-300 hover:text-white">About Us</a></li> 
          </ul>
        </nav>
        <div class="hidden md:flex lg:mr-10 sm:mr-0 lg:ml-10 md:ml-2">
          <button type="button" class=" text-white relative -top-1 md:mr-8 " >Login</button>
          <button type="button"class="relative -top-1 bg-[#8992FA] text-white font-bold py-1 px-2 md:py-2 lg:py-2 lg:px-10 hover:bg-slate-600">Sign Up</button>
        </div>
        <span class="text-4xl cursor-pointer mx-2 md:hidden block">
          <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
      </div>
      <div class="py-20 px-2">
        <h1 class="text-white px-6 text-3xl py-5 font-semibold tracking-wide md:text-5xl md:px-20 md:py-5">Ayo Bergabung dengan Kita
         </h1>
         <p class="text-[#D8D8D8] pb-20 px-6 md:px-20 md:pb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in purus <br>eget tellus aliquam egestas.</p>
         <button  type="button" class=" bg-[#8992FA] mx-6  text-white font-bold py-2 px-10 md:py-2 md:px-10 md:mx-20 hover:bg-slate-600 ">Sign Up</button>
        
      </div>

    </header>
    <!-- Header end -->

  

    {{ $slot }}
    <!-- Galeri End -->

      <!-- Section 5 -->

      <section class="w-full h-[500px] md:h-[340px] lg:h-[340px] bg-[#0B0F18]">
      <img src="img/Ellipse 31.png" alt="" class="absolute w-9 md:w-24 left-0 ">
        <div class="flex pt-5 lg:pt-10 md:pt-10">
          <div class="ml-10 md:ml-28">
            <h1 class="font-bold md:text-2xl sm:text-base pb-3 md:pb-6"> <span class="text-[#8992FA]">Naik</span><span class="text-white">.Kapal</span></h1>
            <p class="text-xs text-[#969696] lg:text-sm pb-5 md:pb-20">Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit. Morbi pretium facilisis <br>mollis. Donec nec auctor tortor. In varius<br> ipsum sit amet elit congue, mattis <br>bibendum nibh feugiat.</p>
            <h5 class="text-xs text-white md:text-sm font-bold">©Naik.kapal All Rights Reserved</h5>
            
          </div>
          <div class="lg:flex">
            <img src="img/Vector 2.png" alt="" class="absolute left-80 md:left-0 md:mt-0 md:ml-[350px] lg:left-96 lg:ml-5 lg:mt-0 xl:left-[480px]">
          </div>
          <div class="absolute flex md:left-[330px] xl:left-[540px] lg:left-[400px] lg:right-96 lg:flex">
            <div class="lg:ml-16 xl:ml-1 ml-8 mt-48 md:mt-0 xl:mt-2 xl:mr-5">
              <h1 class=" text-1xl font-bold text-white">About</h1>
              <p class="text-xs pt-4 text-[#D8D8D8]"><a href="">Progress</a></p>
              <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">Comment</a></p>
            </div>
           
            <div class="lg:ml-16 ml-6 mt-48 md:mt-0  xl:mt-2 xl:mr-3">
              <h1 class=" text-1xl font-bold text-white">Destination</h1>
              <p class="text-xs pt-4 text-[#D8D8D8]"><a href="">Waters</a></p>
              <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">Mainland</a></p>
            </div>
            <div class=" lg:ml-16 ml-6 mt-48 md:mt-0 xl:mt-2  ">
              <h1 class=" text-1xl font-bold text-white">Choose Class</h1>
              <p class="text-xs pt-4 text-[#D8D8D8]"><a href="">Economy</a></p>
              <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">Executive</a></p>
              <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">VVIP</a></p>
            </div>
            <div class="absolute  w-32  lg:ml-16 ml-8 mt-80 md:mt-0  md:left-[300px] lg:left-[406px] xl:mt-2 xl:left-[400px]  ">
              <h1 class=" text-1xl font-bold text-white">Contact Us</h1>
              <p class="text-xs pt-4 text-[#D8D8D8]"><a href="">Contact Us</a></p>
              <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">Privacy Policy</a></p>
              <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">Log In</a></p>
            </div>
            
          </div>
          <div class="absolute flex ml-[200px] md:ml-[600px] xl:ml-[1100px] lg:ml-[800px] gap-4">
            <a href=""><img src="img/fb.png" alt="" class="  pt-[430px] md:pt-[250px] lg:pt-64"></a>
            <a href=""><img src="img/tw.png" alt="" class="  pt-[430px] md:pt-[250px] lg:pt-64"></a>
            <a href=""><img src="img/ig.png" alt="" class="  pt-[430px] md:pt-[250px] lg:pt-64"></a>
            <a href=""><img src="img/yt.png" alt="" class="  pt-[430px] md:pt-[250px] lg:pt-64"></a>

          </div>
          <img src="img/Ellipse 32.png" alt="" class="absolute w-12 md:w-28 right-0 md:pt-52 pt-[430px]">
        </div>
        <div class="absolute mt-40 md:mt-16 lg:mt-9">
          <img src="img/Frame 12.png" alt="" class=" h-3 md:h-3 mt-[153px] lg:mt-0 md:mt-0  xl:mt-0">
        </div>
     </section>
  </body>
</html>