<template>
  <div class="flex justify-center font-ubuntu pt-10">
    <div class="flex flex-col md:flex-row text-GreenLizard space-x-10">
      <div class="flex flex-col space-y-7 text-4xl pt-10 md:pt-20 font-semibold max-w-md">
        <h1 class="text-5xl p-2 xl:p-0 text-transparent bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen">Get In Touch</h1>
        <p class="text-sm font-light p-7 xl:p-0">
          Skynet is an internet service provider thriving to create powerful connection. 
        </p>
        <div class="shadow-lg pt-7">
          <div class="flex justify-around items-center space-x-3">
            <h1 class=" text-2xl">We accept comments</h1>
            <div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                />
              </svg>
            </div>
          </div>
          <div class="flex flex-row p-10 text-GreenLizard ">
            <div class="mb-3 xl:w-96">
    <!-- <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-GreenSheen"
      >leave your comment </label
    > -->
    <textarea
      class="
        form-control
        block
        w-full
        px-3
        text-base
        font-normal
        text-GreenLizard
        bg-gray-800 bg-clip-padding
        border border-solid border-GreenLizard
        rounded
        transition
        ease-in-out
        m-0
        focus:text-LightGreen focus:bg-gray-800 focus:border-LightGreen focus:outline-none
      "
      id="exampleFormControlTextarea1"
      rows="5"
      placeholder="start typing..."
    ></textarea>
    <div class="pt-4">
      <button class="block float-right bg-GreenLizard text-sm py-2 px-4 text-DarkLiver rounded-sm">send</button>
    </div>
  </div>                        
          </div>
        </div>
      </div>
      <div class="flex pt-7 text-GreenLizard ">
        
        <div class="shadow-lg flex flex-col xl:flex-row p-10 xl:p-12 justify-center items-center bg-gradient-to-l from-LightGreen to-GreenLizard">
          <h1 class="text-DarkLiver text-xl font-semibold xl:mr-7 uppercase">Contact Information</h1>
          <div class="flex flex-col p-10 text-DarkLiver space-y-7 xl:border-l xl:border-DarkLiver">
            <div class="flex space-x-3 items-center ">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                />
              </svg>
              <div>
                <p class="text-lg">Find us at the office</p>
                <p class="text-sm">Bole &middot; Addis Ababa, Ethiopia</p>
              </div>
            </div>
            <div class="flex space-x-3 items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                />
              </svg>
              <div>
                <p class="text-lg">Give us a ring</p>
                <p class="text-sm">+25198765412</p>
              </div>
            </div>
            <div class="flex space-x-3 items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                />
              </svg>
              <div>
                <p class="text-lg">Email</p>
                <p class="text-sm">info@skynet.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>