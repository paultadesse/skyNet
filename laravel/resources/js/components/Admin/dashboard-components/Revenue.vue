<template>
	<div class="mt-4">
      <div class="bg-gradient-to-r from-GreenLizard to-LightGreen py-10 space-y-4 p-4 shadow-xl"> 
        <div class="flex justify-between">
          <div class="text-gray-900 tracking-wider uppercase">Revenue</div>
          <div class="bg-gray-800 p-3 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-GreenLizard" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
            </svg>
          </div>
        </div>
        
        <div class="flex justify-around text-GreenLizard text-center bg-gray-800 max-w-7xl mx-auto py-7">
          <div class="space-y-2">
            <div class="tracking-wider">Current Week</div>
            <div class="text-3xl font-light">$12,000</div>
          </div>
          <div class="space-y-2">
            <div class="tracking-wider">Previous Week</div>
            <div class="text-3xl font-light">$67,450</div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {

  name: 'Revenue',

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>