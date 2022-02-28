<template>
	<div class="flex justify-between px-10 py-7 bg-gradient-to-l from-GreenLizard to-LightGreen">
		<div class="flex items-center">
			
		<div class="flex   items-center justify-center">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
  				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
			</svg>
			<input  class="w-full text-white bg-gray-800 rounded border-opacity-50 border-GreenLizard focus:text-LightGreen focus:bg-gray-800 focus:border-LightGreen focus:outline-none" type="text" placeholder="search..." name=""> 
		</div>
		<div class="px-1">
			<button class="block bg-gray-800 px-4 py-2.5 text-LightGreen rounded text-sm">
				Search
			</button>
		</div>

		</div>
		<div class="flex space-x-10 justify-center items-center">
			<div class="flex items-center space-x-2 cursor-pointer">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
				</svg> <span class="font-light text-sm">Settings</span>
			</div>
			<div class="flex items-center space-x-2 cursor-pointer">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
 					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
				</svg> <span class="font-light text-sm">Language</span>
			</div>
			<div class="flex items-center space-x-2 cursor-pointer">
				<div class="relative">
					<div class="absolute left-4 h-2 w-2 rounded-full bg-red-500"></div>
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
					</svg>
				</div>
				<span class="font-light text-sm">Notification</span>
			</div>
			<div>
				<div class="flex items-center space-x-2 cursor-pointer">
					<div class="h-10 w-10 bg-gray-800 rounded-full border border-4 border-black"></div> 
					<div> 
						<div>
							Brook Tadesse
						</div>
						<div class="text-xs font-light">SUPER-ADMIN</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {

  name: 'AdminNavBar',

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>		