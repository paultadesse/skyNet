<template>
  <div :class="lightMode ? '' : 'dark'">
    <div
      class="
        relative
        flex flex-col
        justify-center
        items-center
        pb-20
        dark:bg-gray-900
      "
    >
      <div class="absolute rounded-full opacity-5 h-96 w-96 bg-blue-700"></div>
      <div class="absolute rounded-full opacity-5 h-80 w-80 bg-blue-700"></div>
      <div class="absolute rounded-full opacity-5 h-64 w-64 bg-blue-700"></div>
      <div class="absolute rounded-full opacity-5 h-48 w-48 bg-blue-700"></div>

      <div class="text-center">
        <h1
          class="
            text-2xl
            md:text-7xl
            pt-20
            md:pt-36
            font-bold font-poppins
            text-blue-900
            dark:text-blue-100
          "
        >
          Dependable, Fast Internet Connection.
        </h1>
      </div>
      <div
        class="
          max-w-sm
          md:max-w-xl
          text-sm
          md:text-base
          text-center
          pt-7
          text-gray-700
          dark:text-blue-200
          font-poppins
        "
      >
        <p class="text-sm md:text-lg uppercase tracking-wide">
          With a local maintenance and support staff that you can rely on !
        </p>
      </div>
      <div
        class="w-10 border-b-2 border-blue-900 dark:border-blue-400 pt-12"
      ></div>
      <div class="pt-10 font-poppins text-blue-900 dark:text-blue-400">
        <p
          class="
            text-xl
            md:text-2xl
            uppercase
            font-bold
            text-center
            tracking-wider
          "
        >
          High Speed Internet For Addis Ababa
        </p>
      </div>
      <div class="max-w-xl text-center pt-10 text-gray-500 tracking-wide">
        Skynet provides reliable, scaleable, convenient Internet. A great choice
        for enterprise and the public sector, businesses of all sizes, or just
        skyping with your grandkids or streaming videos and gaming, Skynet
        delivers.
      </div>
    </div>

    <!-- services -->
    <div class="font-poppins dark:bg-gray-900">
      <div
        class="
          flex flex-col
          md:flex-row
          space-y-7
          md:space-y-0
          justify-center
          items-center
          md:justify-evenly
          flex-wrap
        "
      >
        <!-- Residential -->
        <div
          class="
            flex flex-col
            justify-center
            items-center
            text-center
            max-w-sm
            bg-white
            dark:bg-blue-400
            dark:bg-opacity-10
            dark:border-blue-400
            dark:text-blue-400
            border-blue-900
            p-12
            shadow-xl
            rounded-sm
          "
        >
          <p>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-12 w-12 dark:text-blue-100 text-blue-900"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
              />
            </svg>
          </p>

          <p
            class="font-bold text-xl pt-2 pb-2 text-blue-900 dark:text-blue-300"
          >
            Residential
          </p>
          <div
            class="w-5 border-b-2 border-blue-900 dark:border-blue-200"
          ></div>

          <p
            class="text-sm text-gray-500 dark:text-blue-300 pt-2 tracking-wide"
          >
            We provide a dependable, fast Internet connection with a local
            maintenance and support staff that you can rely on. For Residential
            Customer.
          </p>
        </div>

        <!-- commercial -->
        <div
          class="
            flex flex-col
            justify-center
            items-center
            text-center
            max-w-sm
            bg-white
            dark:bg-blue-400
            dark:bg-opacity-10
            dark:border-blue-400
            dark:text-blue-400
            border-blue-900
            p-12
            shadow-xl
            rounded-sm
          "
        >
          <p>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-12 w-12 dark:text-blue-100 text-blue-900"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
              />
            </svg>
          </p>

          <p
            class="font-bold text-xl pt-2 pb-2 text-blue-900 dark:text-blue-300"
          >
            Commercial
          </p>
          <div
            class="w-5 border-b-2 border-blue-900 dark:border-blue-200"
          ></div>

          <p
            class="text-sm text-gray-500 dark:text-blue-300 pt-2 tracking-wide"
          >
            We provide a site survey and guaranteed solutions with same-day
            service turnaround and fast, local tech support.
          </p>
        </div>
        <div
          class="
            flex flex-col
            justify-center
            items-center
            text-center
            max-w-sm
            bg-white
            dark:bg-blue-400
            dark:bg-opacity-10
            dark:border-blue-400
            dark:text-blue-400
            border-blue-900
            p-12
            shadow-xl
            rounded-sm
          "
        >
          <p>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-12 w-12 dark:text-blue-100 text-blue-900"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
              />
            </svg>
          </p>

          <p
            class="font-bold text-xl pt-2 pb-2 text-blue-900 dark:text-blue-300"
          >
            Enterprise
          </p>
          <div
            class="w-5 border-b-2 border-blue-900 dark:border-blue-200"
          ></div>

          <p
            class="text-sm text-gray-500 dark:text-blue-300 pt-2 tracking-wide"
          >
            We provide redundancy solutions and advanced, microwave fixed
            wireless techology for the fastest, lowest latency signal available.
          </p>
        </div>
      </div>
    </div>

    <!-- planning -->
    <div class="flex flex-col justify-center items-center dark:bg-gray-900">
      <div
        class="w-10 border-b-2 border-blue-900 dark:border-blue-400 pt-12"
      ></div>
      <div class="pt-10 font-poppins text-blue-900 dark:text-blue-400">
        <!-- <button class="bg-blue-900 px-12 py-2 rounded-lg ring-2 ring-offset-1 uppercase">
          services
        </button> -->
        <p class="text-2xl md:text-3xl font-semibold uppercase">
          Right plan for you.!
        </p>
      </div>
      <div
        class="w-32 border-b-2 border-blue-900 dark:border-blue-400 pt-10"
      ></div>
    </div>

    <!-- cards -->

    <div
      class="
        flex flex-col
        md:flex-row
        space-y-9
        md:space-y-0
        items-center
        justify-center
        py-20
        font-poppins
        dark:bg-gray-900
      "
    >
      <div
        class="
          bg-gray-100
          dark:text-blue-300 dark:bg-blue-400 dark:bg-opacity-10
          py-20
          px-7
          text-black
          rounded-lg
          shadow-2xl
        "
      >
        <div class="divide-y divide-gray-200 dark:divide-blue-400">
          <div class="text-center text-lg font-semibold pb-4">Residential</div>

          <div class="text-center max-w-xs py-4">
            Lorem ipsum dolor sit amet consequuntur, quod doloremque dicta
            provident odit! Placeat voluptas error magnam.
          </div>
        </div>

        <div class="text-center pt-7">
          <span class="text-6xl font-bold dark:text-blue-100">2700</span>
          <span class="text-sm items-baseline">Birr</span>
        </div>

        <div class="pt-8 space-y-2 flex flex-col items-center">
          <div class="flex space-x-2 items-center" v-for="i in 4" :key="i">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                clip-rule="evenodd"
              />
            </svg>
            <span>server maintenance</span>
          </div>
        </div>

        <div class="text-center pt-10">
          <button
            class="
              px-8
              py-2
              text-blue-700
              rounded
              font-semibold
              ring ring-blue-700
              dark:text-blue-300 dark:ring-blue-300
              bg-white
              dark:bg-transparent
              uppercase
            "
          >
            I'm interested
          </button>
        </div>
      </div>
      <div
        class="
          bg-blue-900
          dark:bg-blue-400 dark:bg-opacity-10
          py-24
          px-7
          text-white
          dark:text-blue-300
          rounded-lg
          shadow-2xl
        "
      >
        <div class="flex justify-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-16 w-16 pb-2 dark:text-blue-100"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
            />
          </svg>
        </div>
        <div class="divide-y dark:divide-blue-400">
          <div class="text-center text-lg font-semibold pb-4">Enterprise</div>

          <div class="text-center max-w-xs py-4">
            Lorem ipsum dolor sit amet consequuntur, quod doloremque dicta
            provident odit! Placeat voluptas error magnam.
          </div>
        </div>
        <div class="text-center pt-7">
          <span class="text-6xl font-bold dark:text-blue-100">3700</span>
          <span class="text-sm items-baseline">Birr</span>
        </div>

        <div class="pt-8 space-y-2 flex flex-col items-center">
          <div class="flex space-x-2 items-center" v-for="i in 4" :key="i">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                clip-rule="evenodd"
              />
            </svg>
            <span>server maintenance</span>
          </div>
        </div>

        <div class="text-center pt-10">
          <button
            class="
              px-8
              py-2
              text-white
              rounded
              ring ring-white
              dark:text-blue-300 dark:ring-blue-300
              uppercase
              font-semibold
            "
          >
            I'm interested
          </button>
        </div>
      </div>
      <div
        class="
          bg-gray-100
          py-20
          px-7
          dark:text-blue-300
          text-black
          rounded-lg
          shadow-2xl
          dark:bg-blue-400 dark:border dark:bg-opacity-10
        "
      >
        <div class="divide-y divide-gray-200 dark:divide-blue-400">
          <div class="text-center text-lg font-semibold pb-4">Commercial</div>

          <div class="text-center max-w-xs py-4">
            Lorem ipsum dolor sit amet consequuntur, quod doloremque dicta
            provident odit! Placeat voluptas error magnam.
          </div>
        </div>
        <div class="text-center pt-7">
          <span class="text-6xl font-bold dark:text-blue-100">1700</span>
          <span class="text-sm items-baseline">Birr</span>
        </div>

        <div class="pt-8 space-y-2 flex flex-col items-center">
          <div class="flex space-x-2 items-center" v-for="i in 4" :key="i">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                clip-rule="evenodd"
              />
            </svg>
            <span>server maintenance</span>
          </div>
        </div>

        <div class="text-center pt-10">
          <button
            class="
              px-8
              py-2
              text-blue-700
              rounded
              ring ring-blue-700
              dark:text-blue-300 dark:ring-blue-300
              bg-white
              dark:bg-transparent
              uppercase
              font-semibold
            "
          >
            I'm interested
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from "../components/Navbar.vue";
export default {
  components: {
    Navbar,
  },
  data() {
    return {
      lightMode: true,
    };
  },
};
</script>

<style>
</style>