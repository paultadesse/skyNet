<template>
	<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
            <div style="height: 40rem" class="overflow-hidden shadow-md sm:rounded-lg overflow-y-scroll">
                <table class="min-w-full">
                    <thead class="sticky top-0 bg-gradient-to-r from-GreenLizard to-LightGreen">
                        <tr>
                        	<th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                #
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                phone number
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                email
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                service type
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                desired speed
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                site location
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                other
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                registration date
                            </th>
                            <th scope="col" class="relative py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                            <th scope="col" class="relative py-3 px-6">
                                <span class="sr-only">Delete</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Product 1 -->
                        <tr v-for="(user, index) in registrations" class="bg-gray-900 border-b border-gray-700">
                        	<td class="py-4 px-6 text-sm font-medium text-white whitespace-nowrap dark:text-white">
                                {{ ++index }}
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-GreenSheen whitespace-nowrap dark:text-white">
                                {{ user.name }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ user.phone_number }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ user.email }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ user.service_type }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ user.desired_speed }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ user.site_location ? user.site_location : '-' }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ user.site_location_not_listed ? user.site_location_not_listed : '-' }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ moment(user.created_at).format("MMM Do y") }}
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <button class="block uppercase text-xs tracking-wider bg-GreenLizard px-2 py-1 rounded">edit</button>
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <button class="block uppercase text-white tracking-wider text-xs bg-red-500 px-2 py-1 rounded">delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {

  name: 'RegistrationList',

  props:{
 	registrations:{
 		type: Array
 	},
  },

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>