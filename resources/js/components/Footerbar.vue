<template>
  <div class="bg-gray-800 font-ubuntu font-light mt-10">
    <div class="xl:flex justify-around text-GreenLizard p-10 space-y-9 xl:space-y-0">
      <div class="space-y-4">
        <div class="font-bold text-transparent text-4xl md:text-7xl bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen">SkyNet</div>
        <hr class="border-GreenLizard">
        <div class="max-w-md uppercase text-xs tracking-widest">Skynet is an internet service provider thriving to create powerful connection. Register here and be connected to the world.</div>
      </div>
      <div class="space-y-3">
        <div class="font-bold text-lg  uppercase">Contact us</div>
        <div class="flex flex-col xl:flex-row xl:space-x-3 space-y-3 xl:space-y-0">
          <div class="flex space-x-1"> 
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </span><span class="tracking-widest uppercase text-sm">5th floor, behind skylight hotel</span>
        </div>
        
        </div>
        <div class="flex xl:space-x-3">
          <div class="flex space-x-1"> 
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
            </svg>
          </span><span class="uppercase text-sm tracking-widest">Ethiopia</span>
        </div>
        <div class="flex space-x-1 items-center"> 
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
          </span><span class="tracking-widest text-sm">+25198765412</span>
        </div>
        </div>
        <div class="flex xl:space-x-3">
          <div class="flex space-x-1 items-center"> 
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
            </svg>
          </span><span class="tracking-widest text-sm">+25198765412</span>
        </div>  
        <div class="flex space-x-1 items-center"> 
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
          </span><span class="text-sm tracking-widest">info@skynet.com</span>
        </div>
        </div>
        
      </div>
      <div class="space-y-2">
        <div class="font-bold text-lg uppercase">Register now</div>
        <div class="max-w-md space-x-1 pb-4"><span>Not registered yet ?</span> <router-link to="/register" class=" uppercase text-sm tracking-widest text-GreenSheen">register here</router-link> </div>

        <router-link to="/services" class=" max-w-xs cursor-pointer">
          <div class="border border-transparent hover:border-current">
            <div class="px-9 font-light uppercase text-sm tracking-widest py-3 border border-GreenLizard justify-center flex transform transition duration-300 hover:-translate-y-1 hover:bg-GreenLizard hover:text-DarkLiver hover:-translate-x-1">Check out our services</div>
          </div>
        </router-link>
      </div>
    </div>
    <div class="flex flex-col space-y-1 justify-center items-center bg-gradient-to-b p-4 from-GreenLizard to-LightGreen h-16">
      <p class="font-ubuntu  text-sm text-DarkLiver font-bold">&copy; {{ new Date().getFullYear() }} &middot; Skynet - <span class="text-xs">All rights reserved.</span></p>
      <hr class="w-5 border-DarkLiver">
      <p class=" text-DarkLiver text-sm font-bold uppercase">Made with ❤️ in 🇪🇹</p>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>