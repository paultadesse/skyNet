<template>
	<div class="relative flex flex-col">
        
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
            <div style="height: 30rem" class="overflow-hidden shadow-md sm:rounded-lg overflow-y-scroll">
                <table class="min-w-full">
                    <thead class="sticky top-0 bg-gradient-to-r from-GreenLizard to-LightGreen">
                        <tr>
                        	<th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                #
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                speed
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                Birr
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                Service type
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
                        <tr v-for="(speed, index) in speeds" class="bg-gray-900 border-b border-gray-700">
                        	<td class="py-4 px-6 text-sm font-medium text-white whitespace-nowrap dark:text-white">
                                {{ ++index }}
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-GreenSheen whitespace-nowrap dark:text-white">
                                {{ speed.speed }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ speed.birr }}
                            </td>
                            <td class="py-4 px-6 text-sm text-GreenSheen whitespace-nowrap">
                                {{ speed.service_type.name }}
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <button class="block uppercase text-xs tracking-wider bg-GreenLizard px-2 py-1 rounded"
                                @click="edit(speed)"
                                >edit</button>
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <button class="block uppercase cursor-not-allowed text-white tracking-wider text-xs bg-red-500 px-2 py-1 rounded">delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- show edit component -->
    <div v-if="showEditForm" class="absolute w-full h-full bg-black bg-opacity-50">
        <Edit :speed="speed" @close-modal="closeModal"/>
    </div>
</div>
</template>

<script>
import Edit from './Edit';

export default {

  name: 'SpeedList',

  components: {
    Edit
  },

  props:{
 	speeds:{
 		type: Array
 	},
  },

  data () {
    return {
        speed: {},
        showEditForm: false
    }
  },

  methods: {

    edit(speed) {
        this.speed = speed;
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