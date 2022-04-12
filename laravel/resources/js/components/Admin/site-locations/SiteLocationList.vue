<template>
	<div class="relative flex flex-col">
    
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
                                Created at
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                updated at
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
                        <tr v-for="(site, index) in sites" class="bg-gray-900 border-b border-gray-700">
                        	<td class="py-4 px-6 text-sm font-medium text-white whitespace-nowrap dark:text-white">
                                {{ ++index }}
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-GreenSheen whitespace-nowrap dark:text-white">
                                {{ site.name }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ moment(site.created_at).format("MMM Do y") }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ moment(site.updated_at).format("MMM Do y") }}
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <button class="block uppercase text-xs tracking-wider bg-GreenLizard px-2 py-1 rounded"
                                @click="edit(site)"
                                 >edit</button>
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <button disabled class="block uppercase cursor-not-allowed text-white tracking-wider text-xs bg-red-500 px-2 py-1 rounded">delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- show edit component -->
    <div v-if="showEditForm" class="absolute w-full h-full bg-black bg-opacity-50">
        <Edit :site="site" @close-modal="closeModal"/>
    </div>
</div>
</template>

<script>
import Edit from './Edit';

export default {

  name: 'SiteLocationList',

  components: {
    Edit
  },

  props:{
 	sites:{
 		type: Array
 	},
  },

  data () {
    return {
        site: {},
        showEditForm: false
    }
  },

  methods: {

    edit (site) {
        this.site = site;
        this.toggleEditForm();
    },

    closeModal(event) {
        // called from child
        this.toggleEditForm();
    },

    toggleEditForm(){
        this.showEditForm = !this.showEditForm;
    }


  }
}
</script>

<style lang="css" scoped>
</style>