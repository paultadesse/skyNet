<template>
	<div class="w-1/3 mx-auto h-full">
		<div class="flex justify-center border border-opacity-50 border-GreenLizard rounded-md bg-gray-900 h-1/2">
        	
        	<div class="space-y-4 space-x-9 w-full">
        		<div class="w-full flex text-white justify-end p-4">
        			<svg xmlns="http://www.w3.org/2000/svg" @click="closeEditForm" class="h-7 w-7 cursor-pointer text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
        		</div>
        		<div>
        			<h2 class="text-GreenLizard text-2xl font-semibold">Editing Site Location</h2>
        		</div>
        		<hr class="border-GreenSheen opacity-25">
				<form @submit.prevent="editSite">
					<div class="flex flex-col items-start  ">
						<BaseInput lable="Name" v-model="site.name" type="text" v-on="$listeners"  />

						<template v-if="$v.site.name.$error">
							<div class="flex items-center ">
						  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>								
								<div>
									<p class="text-red-500 text-sm" v-if="!$v.site.name.required">site name is required</p>
								</div>
				  			</div>						
						</template>

						<div class="border border-GreenLizard mt-5">
						<button type="submit" :disabled="$v.$anyError" class="block bg-GreenLizard w-full px-2 py-2 uppercase text-sm tracking-widest transform transition duration-300 hover:-translate-y-1 hover:bg-GreenLizard hover:text-DarkLiver hover:-translate-x-1">Edit</button>
						</div>
					</div>
					
				</form>
			</div>

        </div>
	</div>
</template>

<script>
import BaseInput from '../../BaseInput';
import { required } from 'vuelidate/lib/validators';

export default {

  name: 'Edit',

  components:{
  	BaseInput
  },

  props:{
 	site: {
 		type: Object
 	},
 	// method: { type: Function },
  },

  data () {
    return {

    }
  },

  mounted() {
  	
  },

  validations: {
  	site: {
  		name: { required }
  	}
  },

  methods: {

    editSite () {
      this.$v.$touch();
    },

    closeEditForm() {
    	this.$emit('close-modal');
    } 
  }

}
</script>

<style lang="css" scoped>
</style>