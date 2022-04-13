<template>
	<div class="font-ubuntu">
		<div class="p-10 space-y-9"> 
			<h1 class="text-GreenLizard text-3xl uppercase tracking-widest">Speeds</h1>
			<div class="flex">
				<button @click="showForm = !showForm" class="bg-GreenLizard flex items-center space-x-2 px-4 py-2 rounded">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	  					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					 <span class="uppercase text-xs tracking-wider">speed </span>
				</button>	
			</div>

			<div v-if="showForm">
				<form @submit.prevent="createSpeed">
					<div class="flex space-x-4">
						<div class="max-w-xs items-center space-x-4">
						<BaseInput lable="speed" v-model="speed.speed" type="text" v-on="$listeners" placeholder="eg. 10 mbps" />

						
					<template v-if="$v.speed.speed.$error">
						<div class="flex items-center space-x-1">
					  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>								
								<div>
									<p class="text-red-500 text-sm" v-if="!$v.speed.speed.required">speed is required</p>
								</div>
			  			</div>
					</template>
					</div>

					<div class="max-w-xs items-center space-x-4">
						<BaseInput lable="Birr" v-model="speed.birr" type="text" v-on="$listeners" placeholder="eg. 1000" />

						
					<template v-if="$v.speed.birr.$error">
						<div class="flex items-center space-x-1">
					  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>								
								<div>
									<p class="text-red-500 text-sm" v-if="!$v.speed.birr.required">Birr is required</p>
									<p class="text-red-500 text-sm" v-if="!$v.speed.birr.numeric">Alphabets are not allowed.</p>
								</div>
			  			</div>
					</template>
					</div>

					<div class="relative w-64  mt-1 mb-10 w-full">
					  	<div class="absolute">
					  		<label class="block opacity-80 tracking-widest uppercase text-xs font-medium text-GreenLizard">service type</label>
						  <multiselect v-model="speed.service_type" 
								@blur="$v.speed.service_type.$touch()" style="max-height: 10rem;" 
								class="w-64 overflow-y-auto  border cursor-pointer pl-2 py-2 text-white bg-gray-800 rounded border-opacity-50 border-GreenLizard focus:text-LightGreen focus:bg-gray-800 focus:border-LightGreen focus:outline-none"  track-by="name" label="name" placeholder=" select one" 
								:options="serviceTypes"
								@input="setServiceTypeId"
								:searchable="false"
								:allow-empty="false">
						    <template slot="singleLabel" slot-scope="{ option }"><span class="text-sm space-y-3 ml-2 uppercase" >{{ option.name }}</span></template>
						  </multiselect>
						  <template class="" v-if="$v.speed.service_type.$error">
						  	<div class="flex items-center space-x-1">
						  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>
										<p class="text-red-500 text-sm" v-if="!$v.speed.service_type.required">service type is required</p>
						  	</div>
							</template>
					  	</div>
					  </div>
					</div>
					  <div class="border flex-none border-GreenLizard mt-5 max-w-xs">
						<button type="submit" :disabled="$v.$anyError" class="block bg-GreenLizard w-full px-2 py-2 uppercase text-sm tracking-widest transform transition duration-300 hover:-translate-y-1 hover:bg-GreenLizard hover:text-DarkLiver hover:-translate-x-1">Add</button>
						</div>
				</form>
			</div>

			<!-- Table list of service types  -->
			<SpeedList :speeds="speeds" />
		</div>
	</div>
</template>

<script>
import Multiselect from 'vue-multiselect'

import RegistrationService from '../../../services/RegistrationService.js';
import BaseInput from '../../BaseInput';
import { required, numeric } from 'vuelidate/lib/validators';
import SpeedList from './SpeedList';
import { mapState	 } from 'vuex';


export default {

  name: 'Speeds',

  components:{
  	BaseInput,
  	SpeedList,
  	Multiselect
  },

  data () {
    return {
    	showForm: false,
    	serviceTypeId:'',
    	speed: this.createFreshSpeedObject(),
    }
  },

  created() {

  	this.$store.dispatch('ServiceType/fetchServiceTypes');
  	this.$store.dispatch('Speed/fetchSpeeds');

  },

  computed: {
  	...mapState('ServiceType', ['serviceTypes']),
  	...mapState('Speed', ['speeds']),
  },

  validations: {
  	speed: {
  		speed: { required },
  		birr: { required, numeric },
  		service_type: { required }
  	}
  },

  methods:{
  	setServiceTypeId(){
  		this.serviceTypeId = this.speed.service_type.id;
  	},
  	createSpeed() {
  		this.$v.$touch();

  		if (!this.$v.$invalid) {
  			this.speed.service_type = this.serviceTypeId;
  			this.$store.dispatch('Speed/createSpeed', this.speed)
  			.then(() => { 
  				this.$swal.fire({
				  position: 'center',
				  icon: 'success',
				  title: "<p style='color:#B5F44A' >" +'Your New Speed Has Been Added ' +"</p>",
				  showConfirmButton: false,
				  background: '#111',
				  timer: 3500
				})
  				this.speed = this.createFreshSpeedObject();
  				this.$v.$reset()
  			})
  			.catch(() => {
  				this.$swal.fire({
				  position: 'center',
				  icon: 'error',
				  title: "<p style='color:red' >" +'Some error occured please try again.' +"</p>",
				  showConfirmButton: true,
				  confirmButtonColor: 'red',
				  background: '#111',
				})
  				this.speed = this.createFreshSpeedObject();
  			})
  		}
  	},
  	createFreshSpeedObject() {
  		return {
  			speed: "",
  			birr: "",
  			service_type: ""
  		};
  	}
  }
}
</script>

<style lang="css" scoped>
</style>