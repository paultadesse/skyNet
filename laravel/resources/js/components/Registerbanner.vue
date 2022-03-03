<template>
	<router-link to="/register" class="fixed cursor-pointer z-10 flex items-center justify-center top-1/2 bg-gradient-to-t from-GreenLizard to-LightGreen h-40 w-10 opacity-70 hover:w-16 hover:opacity-100 hover:animate-pulse">
        <div class="transform -rotate-90 flex items-center space-x-1 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
            <div class="tracking-wider text-sm uppercase" >
                Register
            </div>
        </div>
      </router-link> 
</template>

<script>
export default {

  name: 'Registerbanner',

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>