<template>
	<div class="bg-gray-900 w-64 h-screen flex flex-col justify-between px-7 overflow-y-scrol overflow-x-hidden">
		<div>
			<div class="flex flex-col pt-10 mx-auto text-GreenLizard text-3xl font-extrabold uppercase text-center">
				<span class="tracking-wider">skynet</span> <span class="text-lg">admin</span></div>
			<div class="pt-10 text-sm font-bold text-LightGreen">NAVIGATION</div>
			<div class="pt-5 ">
				<div class="flex space-x-4 text-gray-400 ">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
					</svg>
					<div class="flex justify-between w-full">
						<span class="text-sm">
							Dashboard
						</span>
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	  							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							</svg>
						</span>
					</div>
				</div>
				<div class="ml-9 pt-4 space-y-4 text-sm">
					<div class="text-gray-400">Analytics</div>
					<div><router-link to="/admin-dashboard" class="text-gray-400">Status</router-link></div>
				</div>
			</div>
			
			<div class="text-sm font-bold text-gray-400 pt-7 uppercase">settings</div>

			<div class="pt-5 ">
				<div class="flex space-x-4 text-gray-400 ">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
					</svg>
					<div class="flex justify-between w-full">
						<span class="text-sm">
							Web
						</span>
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	  							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							</svg>
						</span>
					</div>
				</div>
				<div class="ml-9 pt-4 space-y-4 text-sm">
					<div class="text-gray-400">users</div>
					<div class="text-gray-400">Registrations</div>
					<div><router-link to="/service-types" class="text-gray-400">Service Types</router-link></div>
					<div><router-link to="/site-locations" class="text-gray-400">Site Location</router-link></div>
					<div><router-link to="/speeds" class="text-gray-400">Speed</router-link></div>
				</div>
			</div>
		
		</div>
		<div class="py-7 space-x-4 flex">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
			<div class="text-gray-400">
				About
			</div>
		</div>
	</div>
</template>

<script>
export default {

  name: 'SideBar',

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>