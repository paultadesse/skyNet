<template>
	<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
            <div style="height: 40rem" class="overflow-hidden shadow-md sm:rounded-lg overflow-y-scroll">
                <table class="min-w-full">
                    <thead class="bg-gradient-to-r from-GreenLizard to-LightGreen">
                        <tr>
                        	<th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                #
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                Created at
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                updated at
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                speeds
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
                        <tr v-for="(service, index) in services" class="bg-gray-900 border-b border-GreenSheen">
                        	<td class="py-4 px-6 text-sm font-medium text-GreenSheen whitespace-nowrap dark:text-white">
                                {{ ++index }}
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-GreenSheen whitespace-nowrap dark:text-white">
                                {{ service.name }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ service.created_at }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ service.updated_at }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ service.speeds.length }}
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <a href="#" class="text-red-600 dark:text-red-500 hover:underline">Delete</a>
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

  name: 'ServiceList',

  props:{
 	services:{
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