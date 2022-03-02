<template>
	<div class="font-ubuntu">
		<div class="p-10 space-y-9"> 
			<h1 class="text-GreenLizard text-3xl uppercase tracking-widest">Site Locations</h1>
			<div class="flex">
				<button @click="showForm = !showForm" class="bg-GreenLizard flex items-center space-x-2 px-4 py-2 rounded">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	  					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					 <span class="uppercase text-xs tracking-wider">site location </span>
				</button>	
			</div>

			<div v-if="showForm">
				<form @submit.prevent="createSiteLocation">
					<div class="flex items-center space-x-4">
						<BaseInput lable="Name" v-model="siteLocation.name" type="text" v-on="$listeners" placeholder="eg. 4 Kilo" />

						<div class="border border-GreenLizard mt-5">
						<button type="submit" :disabled="$v.$anyError" class="block bg-GreenLizard w-full px-2 py-2 uppercase text-sm tracking-widest transform transition duration-300 hover:-translate-y-1 hover:bg-GreenLizard hover:text-DarkLiver hover:-translate-x-1">Add</button>
						</div>
					</div>
					<template v-if="$v.siteLocation.name.$error">
						<div class="flex items-center space-x-1">
					  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>								
								<div>
									<p class="text-red-500 text-sm" v-if="!$v.siteLocation.name.required">site name is required</p>
								</div>
			  			</div>
						
					</template>
				</form>
			</div>

			<!-- Table list of service types  -->
			<SiteLocationList :sites="siteLocations" />
		</div>
	</div>
</template>

<script>
import RegistrationService from '../../../services/RegistrationService.js';
import BaseInput from '../../BaseInput';
import { required } from 'vuelidate/lib/validators';
import SiteLocationList from './SiteLocationList';
import { mapState } from 'vuex';

export default {

  name: 'SiteLocations',

  components:{
  	BaseInput,
  	SiteLocationList
  },

  data () {
    return {
    	showForm: false,
    	siteLocation: this.createFreshSiteLocationObject(),
    }
  },

  created() {
  	this.$store.dispatch('SiteLocation/fetchSiteLocations');
  },

  computed:{
  	...mapState('SiteLocation', ['siteLocations'])
  },

  validations: {
  	siteLocation: {
  		name: { required }
  	}
  },

  methods:{
  	createSiteLocation() {
  		this.$v.$touch();

  		if (!this.$v.$invalid) {

  			this.$store.dispatch('SiteLocation/createSiteLocation', this.siteLocation).then(() => {
	  				this.$swal.fire({
					  position: 'center',
					  icon: 'success',
					  title: "<p style='color:#B5F44A' >" +'Your New Site Has Been Added ' +"</p>",
					  showConfirmButton: false,
					  background: '#111',
					  timer: 3500
						})
		  				this.siteLocation = this.createFreshSiteLocationObject();
		  				this.$v.$reset()
		  			}).catch(() => {
  			this.$swal.fire({
				  position: 'center',
				  icon: 'error',
				  title: "<p style='color:red' >" +'Some error occured please try again.' +"</p>",
				  showConfirmButton: true,
				  confirmButtonColor: 'red',
				  background: '#111',
				})
  		})
  		// 	RegistrationService.postSiteLocation(this.siteLocation)
  		// 	.then((response) => { 
  		// 		this.$swal.fire({
				//   position: 'center',
				//   icon: 'success',
				//   title: "<p style='color:#B5F44A' >" +'Your New Site Has Been Added ' +"</p>",
				//   showConfirmButton: false,
				//   background: '#111',
				//   timer: 3500
				// })
				//   this.siteLocations.push(response.data)
  		// 		this.siteLocation = this.createFreshSiteLocationObject();
  		// 		this.$v.$reset()
  		// 	})
  		// 	.catch((error) => {
  		// 		this.$swal.fire({
				//   position: 'center',
				//   icon: 'error',
				//   title: "<p style='color:red' >" +'Some error occured please try again.' +"</p>",
				//   showConfirmButton: true,
				//   confirmButtonColor: 'red',
				//   background: '#111',
				// })
  		// 		this.siteLocation = this.createFreshSiteLocationObject();
  		// 	})
  		}
  	},
  	createFreshSiteLocationObject() {
  		return {
  			name: "",
  		};
  	}
  }
}
</script>

<style lang="css" scoped>
</style>