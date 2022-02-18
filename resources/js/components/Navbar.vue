<template>
    <div>
        <div
            class="
                flex
                md:flex-row
                items-center
                justify-around
            "
        >
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11 text-LightGreen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                </svg>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen font-ubuntu text-4xl font-bold"> Skynet</span>
            </div>
            <div
                class="
                    hidden
                    lg:flex
                    items-center
                    uppercase
                    text-GreenLizard
                    dark:text-blue-100
                    text-sm
                "
            >
                <router-link to="/" class="p-7">Home</router-link>
                <router-link to="/services" class="p-7">Services</router-link>
                <router-link to="/about" class="p-7 text-center"
                    >About Us</router-link
                >
                <router-link to="/contact" class="p-7 text-center"
                    >Contact</router-link
                >
                <!-- <div class="ml-7 cursor-pointer" v-on:click="lightMode = !lightMode">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            :class="
              lightMode ? 'h-6 w-6 text-blue-900' : 'h-6 w-6 text-blue-400'
            "
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              v-show="!lightMode"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
            />

            <path
              v-show="lightMode"
              fill="currentColor"
              d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
            />
          </svg>
        </div> -->
            </div>
            <!-- menu icon that pops-up on small devices. -->
            <div class="lg:hidden flex relative">
                <button
                    v-if="showDropDown"
                    @click="showDropDown = false"
                    tabindex="-1"
                    class="
                        fixed
                        inset-0
                        bg-black
                        opacity-10
                        z-10
                        h-full
                        w-full
                        cursor-default
                    "
                ></button>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 text-GreenLizard"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    @click="showDropDown = !showDropDown"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h7"
                    />
                </svg>
                <div
                    v-show="showDropDown"
                    class="absolute top-10 right-0 bg-gray-900 p-2 z-10"
                >
                    <div
                        class="
                            flex flex-col
                            items-start
                            uppercase
                            text-GreenLizard
                            text-sm
                            space-y-8
                            px-12
                        "
                    >
                        <router-link to="/" class="">Home</router-link>
                        <router-link to="/services" class="p-1"
                            >Services</router-link
                        >
                        <router-link to="/about" class="text-center"
                            >About Us</router-link
                        >
                        <router-link to="/contact" class="p-1 text-center"
                            >Contact</router-link
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            lightMode: true,
            showDropDown: false,
        };
    },

    created() {
        const handleEscape = (e) => {
            if (e.key === "Esc" || e.key === "Escape") {
                this.showDropDown = false;
            }
        };

        document.addEventListener("keydown", handleEscape);

        this.$once("hook:beforeDestroyed", () => {
            document.removeEventListener("keydown", handleEscape);
        });
    },
};
</script>

<style></style>
